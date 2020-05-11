<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Test\ResolutionCaseManagement\Types;

use Enbit\eBaySDK\ResolutionCaseManagement\Types\IssueFullRefundRequest;

class IssueFullRefundRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new IssueFullRefundRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\ResolutionCaseManagement\Types\IssueFullRefundRequest', $this->obj);
    }

    public function testExtendsBaseRequest()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\ResolutionCaseManagement\Types\BaseRequest', $this->obj);
    }
}
