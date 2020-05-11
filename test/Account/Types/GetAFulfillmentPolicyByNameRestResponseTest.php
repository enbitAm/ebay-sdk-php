<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Test\Account\Types;

use Enbit\eBaySDK\Account\Types\GetAFulfillmentPolicyByNameRestResponse;

class GetAFulfillmentPolicyByNameRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetAFulfillmentPolicyByNameRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Account\Types\GetAFulfillmentPolicyByNameRestResponse', $this->obj);
    }

    public function testExtendsFulfillmentPolicy()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Account\Types\FulfillmentPolicy', $this->obj);
    }
}
