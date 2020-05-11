<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Inventory\Types;

/**
 *
 * @property \Enbit\eBaySDK\Inventory\Types\Location $location
 * @property string $locationAdditionalInformation
 * @property string $locationInstructions
 * @property \Enbit\eBaySDK\Inventory\Enums\StoreTypeEnum[] $locationTypes
 * @property string $locationWebUrl
 * @property string $merchantLocationKey
 * @property \Enbit\eBaySDK\Inventory\Enums\StatusEnum $merchantLocationStatus
 * @property string $name
 * @property \Enbit\eBaySDK\Inventory\Types\OperatingHours[] $operatingHours
 * @property string $phone
 * @property \Enbit\eBaySDK\Inventory\Types\SpecialHours[] $specialHours
 */
class InventoryLocationResponse extends \Enbit\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'location' => [
            'type' => 'Enbit\eBaySDK\Inventory\Types\Location',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'location'
        ],
        'locationAdditionalInformation' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'locationAdditionalInformation'
        ],
        'locationInstructions' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'locationInstructions'
        ],
        'locationTypes' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'locationTypes'
        ],
        'locationWebUrl' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'locationWebUrl'
        ],
        'merchantLocationKey' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'merchantLocationKey'
        ],
        'merchantLocationStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'merchantLocationStatus'
        ],
        'name' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'name'
        ],
        'operatingHours' => [
            'type' => 'Enbit\eBaySDK\Inventory\Types\OperatingHours',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'operatingHours'
        ],
        'phone' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'phone'
        ],
        'specialHours' => [
            'type' => 'Enbit\eBaySDK\Inventory\Types\SpecialHours',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'specialHours'
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

        $this->setValues(__CLASS__, $childValues);
    }
}
