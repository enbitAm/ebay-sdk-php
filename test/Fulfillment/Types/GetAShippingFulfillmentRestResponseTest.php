<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Test\Fulfillment\Types;

use Enbit\eBaySDK\Fulfillment\Types\GetAShippingFulfillmentRestResponse;

class GetAShippingFulfillmentRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetAShippingFulfillmentRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Fulfillment\Types\GetAShippingFulfillmentRestResponse', $this->obj);
    }

    public function testExtendsShippingFulfillment()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Fulfillment\Types\ShippingFulfillment', $this->obj);
    }
}
