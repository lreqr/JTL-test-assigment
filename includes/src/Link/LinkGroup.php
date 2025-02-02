<?php declare(strict_types=1);

namespace JTL\Link;

use Illuminate\Support\Collection;
use JTL\DB\DbInterface;
use JTL\MagicCompatibilityTrait;
use JTL\Shop;

/**
 * Class LinkGroup
 * @package JTL\Link
 */
final class LinkGroup implements LinkGroupInterface
{
    use MagicCompatibilityTrait;

    /**
     * @var array
     */
    public static array $mapping = [
        'cLocalizedName' => 'Name',
        'Links'          => 'Links'
    ];

    /**
     * @var array
     */
    private array $names = [];

    /**
     * @var string
     */
    private $groupName;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $template;

    /**
     * @var bool
     */
    private bool $isSpecial = true;

    /**
     * @var bool
     */
    private bool $isSystem = true;

    /**
     * @var array
     */
    private array $languageID = [];

    /**
     * @var array
     */
    private array $languageCode = [];

    /**
     * @var Collection
     */
    private Collection $links;

    /**
     * LinkGroup constructor.
     * @param DbInterface|null $db
     */
    public function __construct(private ?DbInterface $db = null)
    {
        $this->db    = $this->db ?? Shop::Container()->getDB();
        $this->links = new Collection();
    }

    /**
     * @inheritdoc
     */
    public function load(int $id): LinkGroupInterface
    {
        $this->id       = $id;
        $groupLanguages = $this->db->getObjects(
            'SELECT g.*, l.cName AS localizedName, l.cISOSprache, g.cTemplatename AS template,
                g.cName AS groupName, lang.kSprache 
                FROM tlinkgruppe AS g 
                JOIN tlinkgruppesprache AS l
                    ON g.kLinkgruppe = l.kLinkgruppe
                JOIN tsprache AS lang
                    ON lang.cISO = l.cISOSprache
                WHERE g.kLinkgruppe = :lgid',
            ['lgid' => $this->id]
        );
        if (\count($groupLanguages) === 0) {
            return $this;
        }

        return $this->map($groupLanguages);
    }

    /**
     * @inheritdoc
     */
    public function map(array $groupLanguages): LinkGroupInterface
    {
        foreach ($groupLanguages as $groupLanguage) {
            $this->isSystem              = (int)($groupLanguage->bIsSystem ?? 0) === 1;
            $langID                      = (int)$groupLanguage->kSprache;
            $this->languageID[]          = $langID;
            $this->names[$langID]        = $groupLanguage->localizedName;
            $this->languageCode[$langID] = $groupLanguage->cISOSprache;
            $this->template              = $groupLanguage->template;
            $this->groupName             = $groupLanguage->groupName;
        }
        $this->links = (new LinkList($this->db))->createLinks($this->db->getInts(
            'SELECT kLink
                FROM tlink
                JOIN tlinkgroupassociations a 
                    ON tlink.kLink = a.linkID
                WHERE a.linkGroupID = :lgid
                ORDER BY tlink.nSort, tlink.cName',
            'kLink',
            ['lgid' => $this->id]
        ));
        \executeHook(\HOOK_LINKGROUP_MAPPED, ['group' => $this]);

        return $this;
    }

    /**
     * @return string
     */
    public function getGroupName(): string
    {
        return $this->groupName;
    }

    /**
     * @param string $groupName
     */
    public function setGroupName(string $groupName): void
    {
        $this->groupName = $groupName;
    }

    /**
     * @inheritdoc
     */
    public function getName(int $idx = null): string
    {
        return $this->names[$idx ?? Shop::getLanguageID()] ?? '';
    }

    /**
     * @inheritdoc
     */
    public function getNames(): array
    {
        return $this->names;
    }

    /**
     * @inheritdoc
     */
    public function setNames(array $names): void
    {
        $this->names = $names;
    }

    /**
     * @inheritdoc
     */
    public function getID(): int
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function setID(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @inheritdoc
     */
    public function getLinks(): Collection
    {
        return $this->links;
    }

    /**
     * @inheritdoc
     */
    public function setLinks(Collection $links): void
    {
        $this->links = $links;
    }

    /**
     * @inheritdoc
     */
    public function getTemplate(): string
    {
        return $this->template;
    }

    /**
     * @inheritdoc
     */
    public function setTemplate(string $template): void
    {
        $this->template = $template;
    }

    /**
     * @inheritdoc
     */
    public function filterLinks(callable $func): Collection
    {
        $this->links = $this->links->filter($func);

        return $this->links;
    }

    /**
     * @inheritdoc
     */
    public function getLanguageID(): array
    {
        return $this->languageID;
    }

    /**
     * @inheritdoc
     */
    public function setLanguageID(array $languageID): void
    {
        $this->languageID = $languageID;
    }

    /**
     * @inheritdoc
     */
    public function getLanguageCode(): array
    {
        return $this->languageCode;
    }

    /**
     * @inheritdoc
     */
    public function setLanguageCode(array $languageCode): void
    {
        $this->languageCode = $languageCode;
    }

    /**
     * @inheritdoc
     */
    public function isSpecial(): bool
    {
        return $this->isSpecial;
    }

    /**
     * @inheritdoc
     */
    public function setIsSpecial(bool $isSpecial): void
    {
        $this->isSpecial = $isSpecial;
    }

    /**
     * @return bool
     */
    public function isSystem(): bool
    {
        return $this->isSystem;
    }

    /**
     * @param bool $isSystem
     */
    public function setIsSystem(bool $isSystem): void
    {
        $this->isSystem = $isSystem;
    }

    /**
     * @param int $langID
     * @return bool
     */
    public function isAvailableInLanguage(int $langID): bool
    {
        return \in_array($langID, $this->languageID, true);
    }

    /**
     * @return array
     */
    public function __debugInfo()
    {
        $res       = \get_object_vars($this);
        $res['db'] = '*truncated*';

        return $res;
    }
}
