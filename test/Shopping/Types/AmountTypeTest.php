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

use Enbit\eBaySDK\Shopping\Types\AmountType;

class AmountTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AmountType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Shopping\Types\AmountType', $this->obj);
    }

    public function testExtendsDoubleType()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Types\DoubleType', $this->obj);
    }
}
