<?php

declare(strict_types=1);

namespace Plugin\jtl_test\Models;

use Exception;
use JTL\Model\DataAttribute;
use JTL\Model\DataModel;

/**
 * Class ModelBar
 * This class is generated by shopcli model:create
 *
 * @package Plugin\jtl_test
 * @property int $id
 * @method int getID()
 * @method void setID(int $value)
 * @property int $foo
 * @method int getFoo()
 * @method void setFoo(int $value)
 * @property int $bar
 * @method int getBar()
 * @method void setBar(int $value)
 */
final class ModelBar extends DataModel
{
    /**
     * @inheritdoc
     */
    public function getTableName(): string
    {
        return 'jtl_test_foo';
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
            $attributes        = [];
            $attributes['ID']  = DataAttribute::create('id', 'int', null, false, true);
            $attributes['foo'] = DataAttribute::create('foo', 'int', null, false);
            $attributes['bar'] = DataAttribute::create('bar', 'int', null, false);
        }

        return $attributes;
    }
}
