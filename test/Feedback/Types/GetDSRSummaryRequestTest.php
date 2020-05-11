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

use Enbit\eBaySDK\Feedback\Types\GetDSRSummaryRequest;

class GetDSRSummaryRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetDSRSummaryRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Feedback\Types\GetDSRSummaryRequest', $this->obj);
    }

    public function testExtendsBaseServiceRequest()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Feedback\Types\BaseServiceRequest', $this->obj);
    }
}
