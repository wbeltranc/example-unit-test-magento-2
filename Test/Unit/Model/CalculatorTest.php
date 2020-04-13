<?php
/**
 * Basic Module that shows how to implement Unit tests in Magento 2
 * Copyright (C) 2020  BeltranC
 *
 * This file included in BeltranC/UnitTests is licensed under OSL 3.0
 *
 * @package         BeltranC/UnitTests
 * @category        UnitTest
 * @author          Will Beltran <wbeltran@beltranc.com>
 * @license         http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace BeltranC\UnitTests\Test\Unit;


/**
 * Class CalculatorTest
 *
 * @package BeltranC\UnitTests\Test\Unit
 */
class CalculatorTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @var \Magento\Framework\TestFramework\Unit\Helper\ObjectManager
     */
    protected $_objectManager;
    /**
     * @var object
     */
    protected $_model;

    /**
     * Is called before running a test
     */
    protected function setUp()
    {
        $this->_objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);
        $this->_model = $this->_objectManager->getObject("BeltranC\UnitTests\Model\Calculator");
    }

    /**
     * Is called after running a test
     */
    protected function tearDown()
    {
        //teardown
    }

    /**
     * The test itself, every test function must start with 'test'
     */
    public function testAdd()
    {
        $result = $this->_model->add(5.0, 5.0);
        $expectedResult = 10.0;
        $this->assertEquals($expectedResult, $result);
    }

    /**
     *
     */
    public function testSubtract()
    {
        $result = $this->_model->subtract(5.0, 2.0);
        $expectedResult = 3.0;
        $this->assertEquals($expectedResult, $result);
    }

    /**
     *
     */
    public function testMultiply()
    {
        $result = $this->_model->multiply(5.0, 10.0);
        $expectedResult = 50.0;
        $this->assertEquals($expectedResult, $result);
    }

    /**
     *
     */
    public function testDivide()
    {
        $result = $this->_model->divide(6.0, 2.0);
        $expectedResult = 3.0;
        $this->assertEquals($expectedResult, $result);
    }
}

