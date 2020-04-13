<?php

/**
给定一个整数，编写一个函数来判断它是否是 2 的幂次方。

示例 1:

输入: 1
输出: true
解释: 20 = 1
示例 2:

输入: 16
输出: true
解释: 24 = 16
示例 3:

输入: 218
输出: false
 */
class Solution {

    /**
     * 是2的幂次方规则：转为二进制数，左边第一个数为1，最后一个数为0 比如16（10000）
     * &运算，同1则1
     */
    function isPowerOfTwo($n) {
        return $n>0 && ($n & ($n-1)) == 0;
    }
}

$solution = new Solution();
var_dump($solution->isPowerOfTwo(1));