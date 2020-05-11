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

use Enbit\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemRestRequest;

class CreateOrReplaceInventoryItemRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CreateOrReplaceInventoryItemRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemRestRequest', $this->obj);
    }

    public function testExtendsInventoryItem()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Inventory\Types\InventoryItem', $this->obj);
    }
}
