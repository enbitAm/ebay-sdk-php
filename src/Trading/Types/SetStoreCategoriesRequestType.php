<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Trading\Types;

/**
 *
 * @property \Enbit\eBaySDK\Trading\Enums\StoreCategoryUpdateActionCodeType $Action
 * @property integer $ItemDestinationCategoryID
 * @property integer $DestinationParentCategoryID
 * @property \Enbit\eBaySDK\Trading\Types\StoreCustomCategoryArrayType $StoreCategories
 */
class SetStoreCategoriesRequestType extends \Enbit\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Action' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Action'
        ],
        'ItemDestinationCategoryID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemDestinationCategoryID'
        ],
        'DestinationParentCategoryID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DestinationParentCategoryID'
        ],
        'StoreCategories' => [
            'type' => 'Enbit\eBaySDK\Trading\Types\StoreCustomCategoryArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StoreCategories'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'SetStoreCategoriesRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
