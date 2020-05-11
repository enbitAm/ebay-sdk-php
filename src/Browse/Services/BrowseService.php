<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Browse\Services;

class BrowseService extends \Enbit\eBaySDK\Browse\Services\BrowseBaseService
{
    const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'GetItem' => [
            'method' => 'GET',
            'resource' => 'item/{item_id}',
            'responseClass' => '\Enbit\eBaySDK\Browse\Types\GetItemRestResponse',
            'params' => [
                'item_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetItemByLegacyId' => [
            'method' => 'GET',
            'resource' => 'item/get_item_by_legacy_id',
            'responseClass' => '\Enbit\eBaySDK\Browse\Types\GetItemByLegacyIdRestResponse',
            'params' => [
                'legacy_item_id' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'legacy_variation_id' => [
                    'valid' => ['string']
                ],
                'legacy_variation_sku' => [
                    'valid' => ['string']
                ]
            ]
        ],
        'GetItemsByItemGroup' => [
            'method' => 'GET',
            'resource' => 'item/get_items_by_item_group',
            'responseClass' => '\Enbit\eBaySDK\Browse\Types\GetItemsByItemGroupRestResponse',
            'params' => [
                'item_group_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'SearchForItems' => [
            'method' => 'GET',
            'resource' => 'item_summary/search',
            'responseClass' => '\Enbit\eBaySDK\Browse\Types\SearchForItemsRestResponse',
            'params' => [
                'aspect_filter' => [
                    'valid' => ['string']
                ],
                'category_ids' => [
                    'valid' => ['string']
                ],
                'epid' => [
                    'valid' => ['string']
                ],
                'fieldgroups' => [
                    'valid' => ['string']
                ],
                'filter' => [
                    'valid' => ['string']
                ],
                'gtin' => [
                    'valid' => ['string']
                ],
                'limit' => [
                    'valid' => ['string']
                ],
                'offset' => [
                    'valid' => ['string']
                ],
                'q' => [
                    'valid' => ['string']
                ],
                'sort' => [
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
     * @param \Enbit\eBaySDK\Browse\Types\GetItemRestRequest $request
     * @return \Enbit\eBaySDK\Browse\Types\GetItemRestResponse
     */
    public function getItem(\Enbit\eBaySDK\Browse\Types\GetItemRestRequest $request)
    {
        return $this->getItemAsync($request)->wait();
    }

    /**
     * @param \Enbit\eBaySDK\Browse\Types\GetItemRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemAsync(\Enbit\eBaySDK\Browse\Types\GetItemRestRequest $request)
    {
        return $this->callOperationAsync('GetItem', $request);
    }

    /**
     * @param \Enbit\eBaySDK\Browse\Types\GetItemByLegacyIdRestRequest $request
     * @return \Enbit\eBaySDK\Browse\Types\GetItemByLegacyIdRestResponse
     */
    public function getItemByLegacyId(\Enbit\eBaySDK\Browse\Types\GetItemByLegacyIdRestRequest $request)
    {
        return $this->getItemByLegacyIdAsync($request)->wait();
    }

    /**
     * @param \Enbit\eBaySDK\Browse\Types\GetItemByLegacyIdRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemByLegacyIdAsync(\Enbit\eBaySDK\Browse\Types\GetItemByLegacyIdRestRequest $request)
    {
        return $this->callOperationAsync('GetItemByLegacyId', $request);
    }

    /**
     * @param \Enbit\eBaySDK\Browse\Types\GetItemsByItemGroupRestRequest $request
     * @return \Enbit\eBaySDK\Browse\Types\GetItemsByItemGroupRestResponse
     */
    public function getItemsByItemGroup(\Enbit\eBaySDK\Browse\Types\GetItemsByItemGroupRestRequest $request)
    {
        return $this->getItemsByItemGroupAsync($request)->wait();
    }

    /**
     * @param \Enbit\eBaySDK\Browse\Types\GetItemsByItemGroupRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemsByItemGroupAsync(\Enbit\eBaySDK\Browse\Types\GetItemsByItemGroupRestRequest $request)
    {
        return $this->callOperationAsync('GetItemsByItemGroup', $request);
    }

    /**
     * @param \Enbit\eBaySDK\Browse\Types\SearchForItemsRestRequest $request
     * @return \Enbit\eBaySDK\Browse\Types\SearchForItemsRestResponse
     */
    public function searchForItems(\Enbit\eBaySDK\Browse\Types\SearchForItemsRestRequest $request)
    {
        return $this->searchForItemsAsync($request)->wait();
    }

    /**
     * @param \Enbit\eBaySDK\Browse\Types\SearchForItemsRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchForItemsAsync(\Enbit\eBaySDK\Browse\Types\SearchForItemsRestRequest $request)
    {
        return $this->callOperationAsync('SearchForItems', $request);
    }
}
