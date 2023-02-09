<?php
function sum(int ...$numbers): int
{
    $result = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        $result += $numbers[$i];
    }

    return $result;
}

echo sum(12, 11, 22, 3, 33, 23, 23, 1234);
