<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Test\Trading\Types;

use Enbit\eBaySDK\Trading\Types\SetPromotionalSaleListingsResponseType;

class SetPromotionalSaleListingsResponseTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SetPromotionalSaleListingsResponseType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Trading\Types\SetPromotionalSaleListingsResponseType', $this->obj);
    }

    public function testExtendsAbstractResponseType()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Trading\Types\AbstractResponseType', $this->obj);
    }
}
