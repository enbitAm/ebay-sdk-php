<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Test\ReturnManagement\Enums;

use Enbit\eBaySDK\ReturnManagement\Enums\ErrorCategory;

class ErrorCategoryTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ErrorCategory();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\ReturnManagement\Enums\ErrorCategory', $this->obj);
    }
}
