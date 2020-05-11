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
 * @property \Enbit\eBaySDK\Trading\Types\RefundDetailsType[] $Refund
 * @property \Enbit\eBaySDK\Trading\Types\ReturnsWithinDetailsType[] $ReturnsWithin
 * @property \Enbit\eBaySDK\Trading\Types\ReturnsAcceptedDetailsType[] $ReturnsAccepted
 * @property boolean $Description
 * @property \Enbit\eBaySDK\Trading\Types\WarrantyOfferedDetailsType[] $WarrantyOffered
 * @property \Enbit\eBaySDK\Trading\Types\WarrantyTypeDetailsType[] $WarrantyType
 * @property \Enbit\eBaySDK\Trading\Types\WarrantyDurationDetailsType[] $WarrantyDuration
 * @property boolean $EAN
 * @property \Enbit\eBaySDK\Trading\Types\ShippingCostPaidByDetailsType[] $ShippingCostPaidBy
 * @property \Enbit\eBaySDK\Trading\Types\RestockingFeeValueDetailsType[] $RestockingFeeValue
 * @property string $DetailVersion
 * @property \DateTime $UpdateTime
 */
class ReturnPolicyDetailsType extends \Enbit\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Refund' => [
            'type' => 'Enbit\eBaySDK\Trading\Types\RefundDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'Refund'
        ],
        'ReturnsWithin' => [
            'type' => 'Enbit\eBaySDK\Trading\Types\ReturnsWithinDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ReturnsWithin'
        ],
        'ReturnsAccepted' => [
            'type' => 'Enbit\eBaySDK\Trading\Types\ReturnsAcceptedDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ReturnsAccepted'
        ],
        'Description' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Description'
        ],
        'WarrantyOffered' => [
            'type' => 'Enbit\eBaySDK\Trading\Types\WarrantyOfferedDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'WarrantyOffered'
        ],
        'WarrantyType' => [
            'type' => 'Enbit\eBaySDK\Trading\Types\WarrantyTypeDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'WarrantyType'
        ],
        'WarrantyDuration' => [
            'type' => 'Enbit\eBaySDK\Trading\Types\WarrantyDurationDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'WarrantyDuration'
        ],
        'EAN' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EAN'
        ],
        'ShippingCostPaidBy' => [
            'type' => 'Enbit\eBaySDK\Trading\Types\ShippingCostPaidByDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShippingCostPaidBy'
        ],
        'RestockingFeeValue' => [
            'type' => 'Enbit\eBaySDK\Trading\Types\RestockingFeeValueDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'RestockingFeeValue'
        ],
        'DetailVersion' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DetailVersion'
        ],
        'UpdateTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UpdateTime'
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
