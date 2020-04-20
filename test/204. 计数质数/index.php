<?php

/**
统计所有小于非负整数 n 的质数的数量。

示例:

输入: 10
输出: 4
解释: 小于 10 的质数一共有 4 个, 它们是 2, 3, 5, 7 。
 */
class Solution {

    function countPrimes($n) {
        $a = [];
        for ($i=0;$i<$n;$i++) {
            $a[$i] = true;
        }
        $num = 0;
        for ($i=2;$i<$n;$i++) {
            if ($a[$i]) {
                $num++;
                for ($j=$i*$i;$j<$n;$j+=$i) {
                    $a[$j] = false;
                }
            }
        }
        return $num;
    }
}

$solution = new Solution();
var_dump($solution->countPrimes(10));