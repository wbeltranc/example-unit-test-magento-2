<?php
/**
 * Basic Module that shows how to implement Unit tests in Magento 2
 * Copyright (C) 2020  BeltranC
 *
 * This file included in BeltranC/UnitTests is licensed under OSL 3.0
 *
 * @package         BeltranC/UnitTests
 * @subpackage      Controllers
 * @category        Model
 * @author          Will Beltran <wbeltran@beltranc.com>
 * @license         http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace BeltranC\UnitTests\Model;

/**
 * Class Calculator
 *
 * @package BeltranC\UnitTests\Model
 */
class Calculator
{
    /**
     * @param $a
     * @param $b
     * @return mixed
     */
    public function add($a, $b)
    {
        return $a + $b;
    }

    /**
     * @param $a
     * @param $b
     * @return mixed
     */
    public function subtract($a, $b)
    {
        return $a - $b;
    }

    /**
     * @param $a
     * @param $b
     * @return float|int
     */
    public function multiply($a, $b)
    {
        return $a * $b;
    }

    /**
     * @param $a
     * @param $b
     * @return float|int
     */
    public function divide($a, $b)
    {
        return $a / $b;
    }
}
