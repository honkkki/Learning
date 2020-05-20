<?php

class Solution {

    /**
     * @param Integer $num
     * @return Boolean
     */
    function isPerfectSquare($num) {
//        return $num>0 && ($num & ($num - 1)) == 0 && $num%3 ==1;
        return $num > 0 && ($num & ($num - 1)) == 0 && $num % 3 == 1;
    }
}

$solution = new Solution();
var_dump($solution->isPowerOfFour(16));