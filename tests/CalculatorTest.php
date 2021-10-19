<?php

use Jferdi24\PerfectNumbersCalculator\Calculator;
use \PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function test_calculate_perfect_numbers()
    {
        $result = Calculator::calculate(8);
        $this->assertIsArray($result);
        $this->assertEquals([6], $result);

        $this->assertEquals([6, 28], Calculator::calculate(29));
        $this->assertEquals([6, 28, 496], Calculator::calculate(497));
    }

    public function test_check_is_perfect_number()
    {
        $this->assertEquals(true, Calculator::checkIsPerfectNumber(6));
        $this->assertEquals(false, Calculator::checkIsPerfectNumber(8));
        $this->assertEquals(true, Calculator::checkIsPerfectNumber(28));
        $this->assertEquals(false, Calculator::checkIsPerfectNumber(3));
        $this->assertEquals(false, Calculator::checkIsPerfectNumber(12));
    }
}
