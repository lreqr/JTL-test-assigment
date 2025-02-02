<?php

declare(strict_types=1);

namespace Plugin\landswitcher\Models;

use Exception;
use JTL\Model\DataAttribute;
use JTL\Model\DataModel;
use JTL\Shop;
use Plugin\landswitcher\LandswitcherHelper;
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
final class ModelLandswitcher extends DataModel
{
    /**
     * @inheritdoc
     */
    public function getTableName(): string
    {
        return 'landswitcher_tland';
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
            $id->getInputConfig()->setHidden(true);
            $attributes['url'] = DataAttribute::create('url', 'varchar', null, false);
            $attributes['cISO'] = DataAttribute::create('cISO', 'varchar', null, false);
            $arrayCountries = LandswitcherHelper::objectToArray(
                Shop::Container()->getDB()->selectArray('tland', [], [])
            );

            $arrayCountriesFiltered = array_column(
                LandswitcherHelper::filterArray($arrayCountries, 'cISO'),
                'cISO'
            );
            $arrayCountriesFiltered = array_combine($arrayCountriesFiltered, $arrayCountriesFiltered);
            $attributes['cISO']->getInputConfig()->setInputType('selectbox');
            $attributes['cISO']->getInputConfig()->setAllowedValues($arrayCountriesFiltered);
            $attributes['id']  = $id;
        }
        return $attributes;
    }


}
