<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Test\Metadata\Types;

use Enbit\eBaySDK\Metadata\Types\GetPoliciesForNegotiatedPriceRestResponse;

class GetPoliciesForNegotiatedPriceRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetPoliciesForNegotiatedPriceRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Metadata\Types\GetPoliciesForNegotiatedPriceRestResponse', $this->obj);
    }

    public function testExtendsNegotiatedPricePolicyResponse()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Metadata\Types\NegotiatedPricePolicyResponse', $this->obj);
    }
}
