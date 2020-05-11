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
 * @property \Enbit\eBaySDK\Trading\Enums\StoreCustomListingHeaderDisplayCodeType $DisplayType
 * @property boolean $Logo
 * @property boolean $SearchBox
 * @property \Enbit\eBaySDK\Trading\Types\StoreCustomListingHeaderLinkType[] $LinkToInclude
 * @property boolean $AddToFavoriteStores
 * @property boolean $SignUpForStoreNewsletter
 */
class StoreCustomListingHeaderType extends \Enbit\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'DisplayType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DisplayType'
        ],
        'Logo' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Logo'
        ],
        'SearchBox' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SearchBox'
        ],
        'LinkToInclude' => [
            'type' => 'Enbit\eBaySDK\Trading\Types\StoreCustomListingHeaderLinkType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'LinkToInclude'
        ],
        'AddToFavoriteStores' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AddToFavoriteStores'
        ],
        'SignUpForStoreNewsletter' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SignUpForStoreNewsletter'
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

        $this->setValues(__CLASS__, $childValues);
    }
}
