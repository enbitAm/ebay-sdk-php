<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Test\PostOrder\Types;

use Enbit\eBaySDK\PostOrder\Types\GetReturnRulesRestResponse;

class GetReturnRulesRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetReturnRulesRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\PostOrder\Types\GetReturnRulesRestResponse', $this->obj);
    }

    public function testExtendsGetDispositionRulesResponse()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\PostOrder\Types\GetDispositionRulesResponse', $this->obj);
    }
}
