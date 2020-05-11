<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Test\Finding\Types;

use Enbit\eBaySDK\Finding\Types\FindCompletedItemsRequest;

class FindCompletedItemsRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new FindCompletedItemsRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Finding\Types\FindCompletedItemsRequest', $this->obj);
    }

    public function testExtendsBaseFindingServiceRequest()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Finding\Types\BaseFindingServiceRequest', $this->obj);
    }
}
