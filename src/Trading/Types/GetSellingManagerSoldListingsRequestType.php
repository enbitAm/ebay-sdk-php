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
 * @property \Enbit\eBaySDK\Trading\Types\SellingManagerSearchType $Search
 * @property integer $StoreCategoryID
 * @property \Enbit\eBaySDK\Trading\Enums\SellingManagerSoldListingsPropertyTypeCodeType[] $Filter
 * @property boolean $Archived
 * @property \Enbit\eBaySDK\Trading\Enums\SellingManagerSoldListingsSortTypeCodeType $Sort
 * @property \Enbit\eBaySDK\Trading\Enums\SortOrderCodeType $SortOrder
 * @property \Enbit\eBaySDK\Trading\Types\PaginationType $Pagination
 * @property \Enbit\eBaySDK\Trading\Types\TimeRangeType $SaleDateRange
 */
class GetSellingManagerSoldListingsRequestType extends \Enbit\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Search' => [
            'type' => 'Enbit\eBaySDK\Trading\Types\SellingManagerSearchType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Search'
        ],
        'StoreCategoryID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StoreCategoryID'
        ],
        'Filter' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'Filter'
        ],
        'Archived' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Archived'
        ],
        'Sort' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Sort'
        ],
        'SortOrder' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SortOrder'
        ],
        'Pagination' => [
            'type' => 'Enbit\eBaySDK\Trading\Types\PaginationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Pagination'
        ],
        'SaleDateRange' => [
            'type' => 'Enbit\eBaySDK\Trading\Types\TimeRangeType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SaleDateRange'
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
            self::$requestXmlRootElementNames[__CLASS__] = 'GetSellingManagerSoldListingsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
