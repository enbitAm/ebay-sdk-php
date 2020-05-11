<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Test\Order\Types;

use Enbit\eBaySDK\Order\Types\UpdateGuestLineItemShippingAddressRestRequest;

class UpdateGuestLineItemShippingAddressRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new UpdateGuestLineItemShippingAddressRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Order\Types\UpdateGuestLineItemShippingAddressRestRequest', $this->obj);
    }

    public function testExtendsShippingAddressImpl()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Order\Types\ShippingAddressImpl', $this->obj);
    }
}
