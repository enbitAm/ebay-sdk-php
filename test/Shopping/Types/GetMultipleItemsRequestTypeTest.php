<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Test\Shopping\Types;

use Enbit\eBaySDK\Shopping\Types\GetMultipleItemsRequestType;

class GetMultipleItemsRequestTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetMultipleItemsRequestType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Shopping\Types\GetMultipleItemsRequestType', $this->obj);
    }

    public function testExtendsAbstractRequestType()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Shopping\Types\AbstractRequestType', $this->obj);
    }
}
