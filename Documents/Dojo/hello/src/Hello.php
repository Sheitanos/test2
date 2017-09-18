<?php

function callName($name = 'you'): string
{
    return 'Hello ' . strtoupper($name);
}

echo callName("Arnaud");
echo callName("Michel");
echo callName();
