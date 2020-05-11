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

use Enbit\eBaySDK\Order\Types\UpdateGuestShippingOptionRestResponse;

class UpdateGuestShippingOptionRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new UpdateGuestShippingOptionRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Order\Types\UpdateGuestShippingOptionRestResponse', $this->obj);
    }

    public function testExtendsCheckoutSessionResponse()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Order\Types\CheckoutSessionResponse', $this->obj);
    }
}
