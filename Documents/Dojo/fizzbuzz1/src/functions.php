<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 14/09/17
 * Time: 09:38
 */

function fizzBuzz(int $number)
{
    if (!($number % 3) and !($number % 5)) {
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
