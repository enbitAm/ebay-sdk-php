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

use Enbit\eBaySDK\ResolutionCaseManagement\Types\InitialBuyerExpectationDetailType;

class InitialBuyerExpectationDetailTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new InitialBuyerExpectationDetailType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\ResolutionCaseManagement\Types\InitialBuyerExpectationDetailType', $this->obj);
    }

    public function testExtendsEnumerationDetailType()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\ResolutionCaseManagement\Types\EnumerationDetailType', $this->obj);
    }
}
