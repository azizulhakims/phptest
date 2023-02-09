<?php

for ($i = 20; $i < 30; $i++) {
    # code...

    // if ($i % 13 == 0) {
    //     echo $i;
    //     echo PHP_EOL;
    //     break;
    // }

    // if ($i < 27) {
    //     goto a;
    // }

    // echo $i;
    // echo PHP_EOL;

    // a:
    // '';

    if ($i < 27) {
        continue;
    }
    echo $i;
    echo PHP_EOL;
}
