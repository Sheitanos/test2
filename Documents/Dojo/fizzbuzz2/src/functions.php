<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 14/09/17
 * Time: 10:57
 */

function fizzbuzz(int $number)
{
    if (!($number % 3) && !($number % 5)) {
        $result = 'FizzBuzz';
    } elseif (!($number % 3)) {
        $result = 'Fizz';
    } elseif (!($number % 5)) {
        $result = 'Buzz';
    } else {
        $result = $number;
    }

    return $result;
}
