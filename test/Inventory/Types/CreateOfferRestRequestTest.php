<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Test\Inventory\Types;

use Enbit\eBaySDK\Inventory\Types\CreateOfferRestRequest;

class CreateOfferRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CreateOfferRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Inventory\Types\CreateOfferRestRequest', $this->obj);
    }

    public function testExtendsEbayOfferDetailsWithKeys()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Inventory\Types\EbayOfferDetailsWithKeys', $this->obj);
    }
}
