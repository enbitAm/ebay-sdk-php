<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Compliance\Services;

class ComplianceService extends \Enbit\eBaySDK\Compliance\Services\ComplianceBaseService
{
    const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'GetListingViolationsSummary' => [
            'method' => 'GET',
            'resource' => 'listing_violation_summary',
            'responseClass' => '\Enbit\eBaySDK\Compliance\Types\GetListingViolationsSummaryRestResponse',
            'params' => [
                'compliance_type' => [
                    'valid' => ['string']
                ]
            ]
        ],
        'GetListingViolations' => [
            'method' => 'GET',
            'resource' => 'listing_violation',
            'responseClass' => '\Enbit\eBaySDK\Compliance\Types\GetListingViolationsRestResponse',
            'params' => [
                'limit' => [
                    'valid' => ['integer']
                ],
                'listing_id' => [
                    'valid' => ['string']
                ],
                'offset' => [
                    'valid' => ['integer']
                ],
                'compliance_type' => [
                    'valid' => ['string']
                ]
            ]
        ]
    ];

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \Enbit\eBaySDK\Compliance\Types\GetListingViolationsSummaryRestRequest $request
     * @return \Enbit\eBaySDK\Compliance\Types\GetListingViolationsSummaryRestResponse
     */
    public function getListingViolationsSummary(\Enbit\eBaySDK\Compliance\Types\GetListingViolationsSummaryRestRequest $request)
    {
        return $this->getListingViolationsSummaryAsync($request)->wait();
    }

    /**
     * @param \Enbit\eBaySDK\Compliance\Types\GetListingViolationsSummaryRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getListingViolationsSummaryAsync(\Enbit\eBaySDK\Compliance\Types\GetListingViolationsSummaryRestRequest $request)
    {
        return $this->callOperationAsync('GetListingViolationsSummary', $request);
    }

    /**
     * @param \Enbit\eBaySDK\Compliance\Types\GetListingViolationsRestRequest $request
     * @return \Enbit\eBaySDK\Compliance\Types\GetListingViolationsRestResponse
     */
    public function getListingViolations(\Enbit\eBaySDK\Compliance\Types\GetListingViolationsRestRequest $request)
    {
        return $this->getListingViolationsAsync($request)->wait();
    }

    /**
     * @param \Enbit\eBaySDK\Compliance\Types\GetListingViolationsRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getListingViolationsAsync(\Enbit\eBaySDK\Compliance\Types\GetListingViolationsRestRequest $request)
    {
        return $this->callOperationAsync('GetListingViolations', $request);
    }
}
