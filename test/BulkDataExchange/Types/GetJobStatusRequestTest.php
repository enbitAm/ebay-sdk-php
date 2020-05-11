<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Test\BulkDataExchange\Types;

use Enbit\eBaySDK\BulkDataExchange\Types\GetJobStatusRequest;

class GetJobStatusRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetJobStatusRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\BulkDataExchange\Types\GetJobStatusRequest', $this->obj);
    }

    public function testExtendsBaseServiceRequest()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\BulkDataExchange\Types\BaseServiceRequest', $this->obj);
    }
}
