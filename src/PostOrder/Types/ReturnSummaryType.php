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
 * @property \Enbit\eBaySDK\PostOrder\Types\AvailableOptionType[] $buyerAvailableOptions
 * @property string $buyerLoginName
 * @property \Enbit\eBaySDK\PostOrder\Types\ReturnResponseDueType $buyerResponseDue
 * @property \Enbit\eBaySDK\PostOrder\Types\TotalRefundAmountType $buyerTotalRefund
 * @property \Enbit\eBaySDK\PostOrder\Types\ReturnCreationInfoType $creationInfo
 * @property \Enbit\eBaySDK\PostOrder\Enums\ReturnTypeEnum $currentType
 * @property \Enbit\eBaySDK\PostOrder\Enums\DispositionRuleTemplateTypeEnum[] $dispositionRuleTriggered
 * @property \Enbit\eBaySDK\PostOrder\Types\EscalationInfoType $escalationInfo
 * @property string $returnId
 * @property \Enbit\eBaySDK\PostOrder\Types\ReturnPolicyType $returnPolicy
 * @property \Enbit\eBaySDK\PostOrder\Types\AvailableOptionType[] $sellerAvailableOptions
 * @property string $sellerLoginName
 * @property \Enbit\eBaySDK\PostOrder\Types\ReturnResponseDueType $sellerResponseDue
 * @property \Enbit\eBaySDK\PostOrder\Types\TotalRefundAmountType $sellerTotalRefund
 * @property string $state
 * @property string $status
 */
class ReturnSummaryType extends \Enbit\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'buyerAvailableOptions' => [
            'type' => 'Enbit\eBaySDK\PostOrder\Types\AvailableOptionType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'buyerAvailableOptions'
        ],
        'buyerLoginName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerLoginName'
        ],
        'buyerResponseDue' => [
            'type' => 'Enbit\eBaySDK\PostOrder\Types\ReturnResponseDueType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerResponseDue'
        ],
        'buyerTotalRefund' => [
            'type' => 'Enbit\eBaySDK\PostOrder\Types\TotalRefundAmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerTotalRefund'
        ],
        'creationInfo' => [
            'type' => 'Enbit\eBaySDK\PostOrder\Types\ReturnCreationInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creationInfo'
        ],
        'currentType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'currentType'
        ],
        'dispositionRuleTriggered' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'dispositionRuleTriggered'
        ],
        'escalationInfo' => [
            'type' => 'Enbit\eBaySDK\PostOrder\Types\EscalationInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'escalationInfo'
        ],
        'returnId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnId'
        ],
        'returnPolicy' => [
            'type' => 'Enbit\eBaySDK\PostOrder\Types\ReturnPolicyType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnPolicy'
        ],
        'sellerAvailableOptions' => [
            'type' => 'Enbit\eBaySDK\PostOrder\Types\AvailableOptionType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'sellerAvailableOptions'
        ],
        'sellerLoginName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerLoginName'
        ],
        'sellerResponseDue' => [
            'type' => 'Enbit\eBaySDK\PostOrder\Types\ReturnResponseDueType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerResponseDue'
        ],
        'sellerTotalRefund' => [
            'type' => 'Enbit\eBaySDK\PostOrder\Types\TotalRefundAmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerTotalRefund'
        ],
        'state' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'state'
        ],
        'status' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'status'
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
