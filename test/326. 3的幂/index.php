<?php

/**
给定一个整数，写一个函数来判断它是否是 3 的幂次方。

示例 1:

输入: 27
输出: true
示例 2:

输入: 0
输出: false
示例 3:

输入: 9
输出: true
示例 4:

输入: 45
输出: false
 */
class Solution {

    /**
     循环
     */
    function isPowerOfThree1($n) {
        if ($n <= 0 ){
            return false;
        }

        while ($n % 3 == 0){
            $n = $n /3;
        }

        return $n == 1;
    }

    //递归
    function isPowerOfThree($n){
        if ($n == 1){
            return true;
        }elseif($n < 1){
            return false;
        }
        $n = $n /3;
       return  $this->isPowerOfThree($n);
    }
}

$solution = new Solution();
$n = 45;
//$n = 9;
//$n = 0;
//$n = 27;
var_dump($solution->isPowerOfThree($n));