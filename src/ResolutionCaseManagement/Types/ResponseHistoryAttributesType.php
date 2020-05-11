<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\ResolutionCaseManagement\Types;

/**
 *
 * @property \Enbit\eBaySDK\ResolutionCaseManagement\Types\AppealRef $appealRef
 * @property \Enbit\eBaySDK\ResolutionCaseManagement\Types\MoneyMovementRef $moneyMovementRef
 * @property string $onholdReason
 * @property \Enbit\eBaySDK\ResolutionCaseManagement\Types\OnHoldReasonDetailType $onholdReasonDetail
 */
class ResponseHistoryAttributesType extends \Enbit\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'appealRef' => [
            'type' => 'Enbit\eBaySDK\ResolutionCaseManagement\Types\AppealRef',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'appealRef'
        ],
        'moneyMovementRef' => [
            'type' => 'Enbit\eBaySDK\ResolutionCaseManagement\Types\MoneyMovementRef',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'moneyMovementRef'
        ],
        'onholdReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'onholdReason'
        ],
        'onholdReasonDetail' => [
            'type' => 'Enbit\eBaySDK\ResolutionCaseManagement\Types\OnHoldReasonDetailType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'onholdReasonDetail'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/resolution/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
