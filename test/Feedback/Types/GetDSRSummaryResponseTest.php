<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Test\Feedback\Types;

use Enbit\eBaySDK\Feedback\Types\GetDSRSummaryResponse;

class GetDSRSummaryResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetDSRSummaryResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Feedback\Types\GetDSRSummaryResponse', $this->obj);
    }

    public function testExtendsBaseServiceResponse()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Feedback\Types\BaseServiceResponse', $this->obj);
    }
}
