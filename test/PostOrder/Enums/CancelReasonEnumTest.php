<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Test\PostOrder\Enums;

use Enbit\eBaySDK\PostOrder\Enums\CancelReasonEnum;

class CancelReasonEnumTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CancelReasonEnum();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\PostOrder\Enums\CancelReasonEnum', $this->obj);
    }
}
