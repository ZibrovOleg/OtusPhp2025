<?php
declare(strict_types=1);

namespace ZibrovOleg\OtusPhp2025Hw4\Function;

class Maths
{
    public static function getFibonacci(int $number): string
    {
        $arNumber = [];
        $num1 = 0;
        $num2 = 1;

        for ($i = 0; $i < $number; $i++) {
            $arNumber[] = $num1;
            $num3 = $num1 + $num2;
            $num1 = $num2;
            $num2 = $num3;
        }

        return implode(', ', $arNumber);
    }
}