<?php
/**
 * Created by PhpStorm.
 * User: nico
 * Date: 14/09/17
 * Time: 09:02
 */


/**
 * fonction renvois fizz si modulo 3
 * fonction renvois buzz si modulo 5
 * fonction renvois fizzbuzz si modulo 3 et 5
 * @param int $number
 * @return string
 */
function fizzBuzz(int $number) : string
{
    $result = '';

    if ($number%3 == 0) {
        $result .= "fizz";
    }

    if ($number%5 == 0) {
        $result = $result . "buzz";
    }

    return $result ;
}
