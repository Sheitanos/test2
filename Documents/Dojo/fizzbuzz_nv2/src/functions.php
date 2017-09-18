<?php
/**
 * Created by PhpStorm.
 * User: nico
 * Date: 14/09/17
 * Time: 09:02
 */
function fizzbuzz(int $number) :string
{
    $result = '';

    if ($number%3==0) {
        $result = 'Fizz';
    }
    if ($number%5==0) {
        $result = $result . "Buzz";
    }
    return $result;
}
