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
