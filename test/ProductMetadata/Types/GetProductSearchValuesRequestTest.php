<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Test\ProductMetadata\Types;

use Enbit\eBaySDK\ProductMetadata\Types\GetProductSearchValuesRequest;

class GetProductSearchValuesRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetProductSearchValuesRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\ProductMetadata\Types\GetProductSearchValuesRequest', $this->obj);
    }

    public function testExtendsGetProductSearchValuesBaseRequest()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\ProductMetadata\Types\GetProductSearchValuesBaseRequest', $this->obj);
    }
}
