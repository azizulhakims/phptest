<?php
function isEven($n)
{
    if ($n % 2 == 0) {
        return true;
    }

    // else {
    //     return false;
    // }

    return false;
}

function factorial(int $n)
{
    $result = 1;
    for ($i = $n; $i > 1; $i--) {
        $result *= $i;
    }
    return $result;
}

function factorial1($n)
{
    if (gettype($n) != 'integer') {
        return 'invalid';
    }
    $result = 1;
    for ($i = $n; $i > 1; $i--) {
        $result *= $i;
    }
    return $result;
}

function serve($foodType = 'Coffee', $numberOfItems = '1 cup')
{
    echo "{$numberOfItems} of {$foodType} have been served";
}
