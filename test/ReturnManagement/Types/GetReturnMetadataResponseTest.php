<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Test\ReturnManagement\Types;

use Enbit\eBaySDK\ReturnManagement\Types\GetReturnMetadataResponse;

class GetReturnMetadataResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetReturnMetadataResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\ReturnManagement\Types\GetReturnMetadataResponse', $this->obj);
    }

    public function testExtendsBaseResponse()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\ReturnManagement\Types\BaseResponse', $this->obj);
    }
}
