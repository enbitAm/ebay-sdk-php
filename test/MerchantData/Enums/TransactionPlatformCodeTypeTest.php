<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Test\MerchantData\Enums;

use Enbit\eBaySDK\MerchantData\Enums\TransactionPlatformCodeType;

class TransactionPlatformCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new TransactionPlatformCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\MerchantData\Enums\TransactionPlatformCodeType', $this->obj);
    }
}
