<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Test\Marketing\Types;

use Enbit\eBaySDK\Marketing\Types\BulkDeleteAdsByInventoryReferenceRestRequest;

class BulkDeleteAdsByInventoryReferenceRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BulkDeleteAdsByInventoryReferenceRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Marketing\Types\BulkDeleteAdsByInventoryReferenceRestRequest', $this->obj);
    }

    public function testExtendsBulkDeleteAdsByInventoryReferenceRequest()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Marketing\Types\BulkDeleteAdsByInventoryReferenceRequest', $this->obj);
    }
}
