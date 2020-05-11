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

use Enbit\eBaySDK\Account\Types\UpdateAPaymentPolicyRestRequest;

class UpdateAPaymentPolicyRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new UpdateAPaymentPolicyRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Account\Types\UpdateAPaymentPolicyRestRequest', $this->obj);
    }

    public function testExtendsPaymentPolicyRequest()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Account\Types\PaymentPolicyRequest', $this->obj);
    }
}
