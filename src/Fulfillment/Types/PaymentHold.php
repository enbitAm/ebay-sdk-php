<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Fulfillment\Types;

/**
 *
 * @property string $expectedReleaseDate
 * @property \Enbit\eBaySDK\Fulfillment\Types\Amount $holdAmount
 * @property string $holdReason
 * @property string $holdState
 * @property string $releaseDate
 * @property \Enbit\eBaySDK\Fulfillment\Types\SellerActionsToRelease[] $sellerActionsToRelease
 */
class PaymentHold extends \Enbit\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'expectedReleaseDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'expectedReleaseDate'
        ],
        'holdAmount' => [
            'type' => 'Enbit\eBaySDK\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'holdAmount'
        ],
        'holdReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'holdReason'
        ],
        'holdState' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'holdState'
        ],
        'releaseDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'releaseDate'
        ],
        'sellerActionsToRelease' => [
            'type' => 'Enbit\eBaySDK\Fulfillment\Types\SellerActionsToRelease',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'sellerActionsToRelease'
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
