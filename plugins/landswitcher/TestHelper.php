<?php

declare(strict_types=1);

namespace Plugin\jtl_test;

use JTL\Cache\JTLCacheInterface;
use JTL\DB\DbInterface;
use JTL\Helpers\Form;
use JTL\Plugin\PluginInterface;
use JTL\Shop;
use JTL\Smarty\JTLSmarty;
use stdClass;

/**
 * Class TestHelper
 * @package Plugin\jtl_test
 */
class TestHelper
{
    /**
     * TestHelper constructor.
     * @param PluginInterface   $plugin
     * @param DbInterface       $db
     * @param JTLCacheInterface $cache
     */
    public function __construct(
        private readonly PluginInterface $plugin,
        private readonly DbInterface $db,
        private readonly JTLCacheInterface $cache
    ) {
    }

    /**
     * calculate PI and cache the result
     *
     * @param int $accuracy
     * @return float
     */
    public function calculatePi(int $accuracy = 10000000): float
    {
        // a unique cache ID for just this cache entry
        $cacheID = 'jtl_test_pi_' . $accuracy;
        $cached  = false;
        $group   = $this->plugin->getCache()->getGroup();
        // check if cache is available and if the result is already cached
        if (($pi = $this->cache->get($cacheID)) === false) {
            // not cached, so do the calculation
            $pi    = 4;
            $top   = 4;
            $bot   = 3;
            $minus = true;

            for ($i = 0; $i < $accuracy; $i++) {
                $pi  += ($minus ? -($top / $bot) : ($top / $bot));
                $bot += 2;

                $minus = !$minus;
            }
            $this->cache->set($cacheID, $pi, [\CACHING_GROUP_PLUGIN, $group]);
        } else {
            // we have a cache-hit
            $cached = true;
        }
        if ($this->plugin->getConfig()->getValue('jtl_test_debug') === 'Y') {
            Shop::dbg($cached, false, 'Cached?');
        }

        return $pi;
    }

    /**
     * fetch, render and insert template into DOM
     * @param JTLSmarty $smarty
     * @return $this
     */
    public function insertStuff(JTLSmarty $smarty): self
    {
        // assign the calculated value of PI for smarty
        $dbRes    = $this->getSomethingFromDB();
        $someText = null;
        $file     = $this->plugin->getPaths()->getFrontendPath() . 'template/frontend_test.tpl';
        if (isset($dbRes->text)) {
            $someText = $dbRes->text;
        }
        $config = $this->plugin->getConfig();
        $smarty->assign('some_text', $someText)
            ->assign(
                'lang_var_1',
                \vsprintf(
                    $this->plugin->getLocalization()->getTranslation('xmlp_lang_var_1'),
                    [$this->calculatePi(), $this->plugin->getMeta()->getVersion()]
                )
            )
            ->assign('exampleConfigVars', $this->plugin->getConfig()->getOptions());
        // get user options for inserting the template
        $function = $config->getValue('jtl_test_pqfunction');
        $selector = $config->getValue('jtl_test_pqselector');
        // render template and call pq
        \pq($selector)->$function($smarty->fetch($file));

        // make this method chainable
        return $this;
    }

    /**
     * get a db row via NiceDB instance
     *
     * @return stdClass
     */
    public function getSomethingFromDB(): stdClass
    {
        return $this->db->selectSingleRow('jtl_test_foo', 'foo', 22);
    }

    /**
     * insert a new row into our custom DB table
     *
     * @param int $random
     * @return int
     */
    public function insertSomeThingIntoDB(int $random): int
    {
        $newObject = (object)[
            'foo'  => $random,
            'bar'  => 2,
            'text' => 'Hello World!'
        ];

        return $this->db->insert('jtl_test_foo', $newObject);
    }

    /**
     * modify a string with configured text
     *
     * @param string $text
     * @return string
     */
    public function modify(string $text): string
    {
        $modification = $this->plugin->getConfig()->getValue('modification_text');

        return $text . ((\is_string($modification) && \strlen($modification) > 0)
                ? (' ' . $modification)
                : '');
    }

    /**
     * @param array $post
     * @return bool
     */
    public function savePostToDB(array $post): bool
    {
        $validToken = Form::validateToken();
        if (!$validToken || empty($post['jtl-text']) || !isset($post['jtl-number'], $post['jtl-number-two'])) {
            return false;
        }
        $data = (object)[
            'foo'  => (int)$post['jtl-number'],
            'bar'  => (int)$post['jtl-number-two'],
            'text' => $post['jtl-text']
        ];

        return $this->db->insert('jtl_test_foo', $data) > 0;
    }
}
