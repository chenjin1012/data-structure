<?php
/**
 * Created by PhpStorm.
 * User: mfhj-dz-001-323
 * Date: 2017/1/9
 * Time: 下午4:21
 */

 function fib($i) {
    if ($i < 2) {
        return $i == 0 ? 0 : 1;
    }
    return fib($i - 1) + fib($i - 2);
}


for ($j = 1; $j <= 3; $j++) {
   echo fib($j);
}