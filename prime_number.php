<?php

function isPrime($number)
{
    if ($number <= 1)
    {
        return 0;
    }
    
    for ($i = 2; $i < $number; $i++) 
    { 
        if ($number % $i == 0)
        {
            return 0;
        }
    }

    return 1;
}

$prime_number = 12;

if (isPrime($prime_number) == 1)
{
    echo $prime_number . ' - It is a prime number.';
}
else {
    echo $prime_number . ' - Not a prime number.';
}