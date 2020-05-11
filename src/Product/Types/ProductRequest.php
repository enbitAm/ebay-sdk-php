<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Product\Types;

/**
 *
 * @property string $invocationId
 * @property string $categoryId
 * @property string $keywords
 * @property \Enbit\eBaySDK\Product\Types\PropertyValue[] $propertyFilter
 * @property \Enbit\eBaySDK\Product\Types\SortOrder $sortOrder
 * @property string[] $dataset
 * @property string[] $datasetPropertyName
 * @property \Enbit\eBaySDK\Product\Types\PaginationInput $paginationInput
 * @property \Enbit\eBaySDK\Product\Types\ProductStatus $productStatusFilter
 */
class ProductRequest extends \Enbit\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'invocationId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'invocationId'
        ],
        'categoryId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'categoryId'
        ],
        'keywords' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'keywords'
        ],
        'propertyFilter' => [
            'type' => 'Enbit\eBaySDK\Product\Types\PropertyValue',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'propertyFilter'
        ],
        'sortOrder' => [
            'type' => 'Enbit\eBaySDK\Product\Types\SortOrder',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sortOrder'
        ],
        'dataset' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'dataset'
        ],
        'datasetPropertyName' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'datasetPropertyName'
        ],
        'paginationInput' => [
            'type' => 'Enbit\eBaySDK\Product\Types\PaginationInput',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paginationInput'
        ],
        'productStatusFilter' => [
            'type' => 'Enbit\eBaySDK\Product\Types\ProductStatus',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'productStatusFilter'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/marketplacecatalog/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
