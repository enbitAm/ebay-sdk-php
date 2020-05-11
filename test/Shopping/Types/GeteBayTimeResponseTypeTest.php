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

use Enbit\eBaySDK\Shopping\Types\GeteBayTimeResponseType;

class GeteBayTimeResponseTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GeteBayTimeResponseType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Shopping\Types\GeteBayTimeResponseType', $this->obj);
    }

    public function testExtendsAbstractResponseType()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Shopping\Types\AbstractResponseType', $this->obj);
    }
}
