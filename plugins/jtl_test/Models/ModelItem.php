<?php

declare(strict_types=1);

namespace Plugin\jtl_test\Models;

use Exception;
use JTL\Model\DataAttribute;
use JTL\Model\DataModel;

/**
 * Class ModelItem
 * This class is generated by shopcli model:create
 *
 * @package Plugin\jtl_test
 * @property int    $id
 * @method int getId()
 * @method void setId(int $value)
 * @property string $slug
 * @method string getSlug()
 * @method void setSlug(string $slug)
 * @property string $description
 * @method string getDescription()
 * @method void setDescription(string $description)
 * @property string $name
 * @method string getName()
 * @method void setName(string $name)
 */
final class ModelItem extends DataModel
{
    /**
     * @inheritdoc
     */
    public function getTableName(): string
    {
        return 'jtl_test_items';
    }

    /**
     * Setting of keyname is not supported!
     * Call will always throw an Exception with code ERR_DATABASE!
     * @inheritdoc
     */
    public function setKeyName($keyName): void
    {
        throw new Exception(__METHOD__ . ': setting of keyname is not supported', self::ERR_DATABASE);
    }

    /**
     * @return DataAttribute[]
     * @see IDataModel::getAttributes()
     *
     */
    public function getAttributes(): array
    {
        static $attributes = null;
        if ($attributes === null) {
            $attributes = [];
            $id         = DataAttribute::create('id', 'int', null, false, true);
            $id->getInputConfig()->setModifyable(false);
            $attributes['slug']        = DataAttribute::create('slug', 'varchar', null, false);
            $attributes['description'] = DataAttribute::create('description', 'varchar', null, false);
            $attributes['name']        = DataAttribute::create('name', 'varchar', null, false);
            $url                       = DataAttribute::create('url', 'varchar', null, false, false, null, null, true);
            $url->getInputConfig()->setHidden(true);
            $attributes['id']  = $id;
            $attributes['url'] = $url;
        }

        return $attributes;
    }
}
