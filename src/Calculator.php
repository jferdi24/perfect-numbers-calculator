<?php

namespace Jferdi24\PerfectNumbersCalculator;

class Calculator
{
    public static function calculate(int $number): array
    {
        $result = [];
        for ($i = 1; $i < $number; $i++) {
            if (self::checkIsPerfectNumber($i)) {
                $result[] = $i;
            }
        }

        return $result;
    }

    public static function checkIsPerfectNumber(int $number): bool
    {
        $sum = 0;
        for ($i = 1; $i < $number; $i++) {
            if ($number % $i == 0) {
                $sum += $i;
            }
        }

        if ($sum === $number) {
            return true;
        }

        return false;
    }
}
