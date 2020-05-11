<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\BusinessPoliciesManagement\Types;

/**
 *
 * @property integer $maxDelivery
 * @property integer $minDelivery
 * @property \DateTime $maxDeliveryDate
 * @property \DateTime $minDeliveryDate
 * @property integer $minConfidence
 * @property integer $maxConfidence
 * @property string $estimateTreatment
 * @property integer $maxActualDelivery
 * @property integer $minActualDelivery
 */
class DeliveryEstimate extends \Enbit\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'maxDelivery' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'maxDelivery'
        ],
        'minDelivery' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'minDelivery'
        ],
        'maxDeliveryDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'maxDeliveryDate'
        ],
        'minDeliveryDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'minDeliveryDate'
        ],
        'minConfidence' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'minConfidence'
        ],
        'maxConfidence' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'maxConfidence'
        ],
        'estimateTreatment' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'estimateTreatment'
        ],
        'maxActualDelivery' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'maxActualDelivery'
        ],
        'minActualDelivery' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'minActualDelivery'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/selling/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
