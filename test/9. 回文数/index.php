<?php

/**
判断一个整数是否是回文数。回文数是指正序（从左向右）和倒序（从右向左）读都是一样的整数。

示例 1:

输入: 121
输出: true
示例 2:

输入: -121
输出: false
解释: 从左向右读, 为 -121 。 从右向左读, 为 121- 。因此它不是一个回文数。
示例 3:

输入: 10
输出: false
解释: 从右向左读, 为 01 。因此它不是一个回文数。
 */
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome1($x) {
        $s = strrev($x);
        return $s == $x;
    }

    function isPalindrome($x) {
        //特殊情况
        //1、小于0的负数肯定不是回文数
        //2、最后一位是0，且第一位也不是0，肯定不是回文数
        if($x < 0 || ($x%10 == 0 && $x != 0)){
            return false;
        }
        $res = 0;//反转后的数
        while($x > $res){//当x小于等于res时，即已经反转一半了
            $res = $res*10 + $x%10;
            $x = intval($x/10);//需要使用intval强制把浮点转整型
        }
        //当x的位数为偶数时，比如1221，循环的最后，x=12，res=12
        //当x的位数为奇数时，比如12321，循环的最后，x=12，res=123，但中间的位数对于回文数没有影响，所以res除以10可以剔除掉
        return $x == $res || $x == intval($res/10);
    }
}

$solution = new Solution();
var_dump($solution->isPalindrome(121));

