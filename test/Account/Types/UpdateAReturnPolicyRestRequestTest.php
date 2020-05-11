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

use Enbit\eBaySDK\Account\Types\UpdateAReturnPolicyRestRequest;

class UpdateAReturnPolicyRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new UpdateAReturnPolicyRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Account\Types\UpdateAReturnPolicyRestRequest', $this->obj);
    }

    public function testExtendsReturnPolicyRequest()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Account\Types\ReturnPolicyRequest', $this->obj);
    }
}
