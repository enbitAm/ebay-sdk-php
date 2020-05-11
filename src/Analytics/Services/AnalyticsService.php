<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Analytics\Services;

class AnalyticsService extends \Enbit\eBaySDK\Analytics\Services\AnalyticsBaseService
{
    const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'GetASpecificSellerProfile' => [
            'method' => 'GET',
            'resource' => 'seller_standards_profile/{program}/{cycle}',
            'responseClass' => '\Enbit\eBaySDK\Analytics\Types\GetASpecificSellerProfileRestResponse',
            'params' => [
                'cycle' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'program' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetAllSellerProfiles' => [
            'method' => 'GET',
            'resource' => 'seller_standards_profile',
            'responseClass' => '\Enbit\eBaySDK\Analytics\Types\GetAllSellerProfilesRestResponse',
            'params' => [
            ]
        ],
        'GetTrafficReport' => [
            'method' => 'GET',
            'resource' => 'traffic_report',
            'responseClass' => '\Enbit\eBaySDK\Analytics\Types\GetTrafficReportRestResponse',
            'params' => [
                'dimension' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'filter' => [
                    'valid' => ['string']
                ],
                'metric' => [
                    'valid' => ['string'],
                    'required' => true
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
     * @param \Enbit\eBaySDK\Analytics\Types\GetASpecificSellerProfileRestRequest $request
     * @return \Enbit\eBaySDK\Analytics\Types\GetASpecificSellerProfileRestResponse
     */
    public function getASpecificSellerProfile(\Enbit\eBaySDK\Analytics\Types\GetASpecificSellerProfileRestRequest $request)
    {
        return $this->getASpecificSellerProfileAsync($request)->wait();
    }

    /**
     * @param \Enbit\eBaySDK\Analytics\Types\GetASpecificSellerProfileRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getASpecificSellerProfileAsync(\Enbit\eBaySDK\Analytics\Types\GetASpecificSellerProfileRestRequest $request)
    {
        return $this->callOperationAsync('GetASpecificSellerProfile', $request);
    }

    /**
     * @return \Enbit\eBaySDK\Analytics\Types\GetAllSellerProfilesRestResponse
     */
    public function getAllSellerProfiles()
    {
        return $this->getAllSellerProfilesAsync()->wait();
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllSellerProfilesAsync()
    {
        return $this->callOperationAsync('GetAllSellerProfiles');
    }

    /**
     * @param \Enbit\eBaySDK\Analytics\Types\GetTrafficReportRestRequest $request
     * @return \Enbit\eBaySDK\Analytics\Types\GetTrafficReportRestResponse
     */
    public function getTrafficReport(\Enbit\eBaySDK\Analytics\Types\GetTrafficReportRestRequest $request)
    {
        return $this->getTrafficReportAsync($request)->wait();
    }

    /**
     * @param \Enbit\eBaySDK\Analytics\Types\GetTrafficReportRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTrafficReportAsync(\Enbit\eBaySDK\Analytics\Types\GetTrafficReportRestRequest $request)
    {
        return $this->callOperationAsync('GetTrafficReport', $request);
    }
}
