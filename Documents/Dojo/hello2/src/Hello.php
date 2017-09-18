<?php


function sayHello(string $name = 'you'): string
{
    return 'Hello ' . strtoupper($name);
}

echo sayHello('Coralie');
echo sayHello('Sylvain');
echo sayHello();
