<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\PostOrder\Types;

/**
 *
 * @property string $buyerFinalAcceptResolution
 * @property string $buyerInitExpectResolution
 * @property \Enbit\eBaySDK\PostOrder\Types\DateTime $creationDate
 * @property \Enbit\eBaySDK\PostOrder\Types\DateTime $escalationDate
 * @property \Enbit\eBaySDK\PostOrder\Types\DateTime $expirationDate
 * @property \Enbit\eBaySDK\PostOrder\Types\DateTime $lastBuyerRespDate
 * @property \Enbit\eBaySDK\PostOrder\Types\DateTime $lastSellerRespDate
 * @property boolean $paypalPaid
 * @property \Enbit\eBaySDK\PostOrder\Types\RefundAmounts $refundAmounts
 * @property \Enbit\eBaySDK\PostOrder\Types\DateTime $refundDeadlineDate
 * @property \Enbit\eBaySDK\PostOrder\Types\RefundType $refundType
 */
class CaseDetails extends \Enbit\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'buyerFinalAcceptResolution' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerFinalAcceptResolution'
        ],
        'buyerInitExpectResolution' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerInitExpectResolution'
        ],
        'creationDate' => [
            'type' => 'Enbit\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creationDate'
        ],
        'escalationDate' => [
            'type' => 'Enbit\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'escalationDate'
        ],
        'expirationDate' => [
            'type' => 'Enbit\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'expirationDate'
        ],
        'lastBuyerRespDate' => [
            'type' => 'Enbit\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lastBuyerRespDate'
        ],
        'lastSellerRespDate' => [
            'type' => 'Enbit\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lastSellerRespDate'
        ],
        'paypalPaid' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paypalPaid'
        ],
        'refundAmounts' => [
            'type' => 'Enbit\eBaySDK\PostOrder\Types\RefundAmounts',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundAmounts'
        ],
        'refundDeadlineDate' => [
            'type' => 'Enbit\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundDeadlineDate'
        ],
        'refundType' => [
            'type' => 'Enbit\eBaySDK\PostOrder\Types\RefundType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundType'
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
