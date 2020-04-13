<?php

/**
编写一个程序判断给定的数是否为丑数。

丑数就是只包含质因数 2, 3, 5 的正整数。

示例 1:

输入: 6
输出: true
解释: 6 = 2 × 3
示例 2:

输入: 8
输出: true
解释: 8 = 2 × 2 × 2
示例 3:

输入: 14
输出: false
解释: 14 不是丑数，因为它包含了另外一个质因数 7。
 */
class Solution {

    /**
    如果被判断的数是1、2、3、5其中的一个，则这个数肯定是丑数。
    如果被判断的数能被2整除，则将这个数除以2，再进行循环判断；
    如果被判断的数能被3整除，则将这个数除以3，再进行循环判断；
    如果被判断的数能被5整除，则将这个数除以5，再进行循环判断；
    如果被判断的数不能被2、3、5这三个数其中的一个整除，则这个数肯定不是丑数。
     */
    function isUgly($num) {
        if ($num <1){
            return false;
        }
        while(true){
            if ($num == 1||$num == 3||$num ==5 ||$num ==2){
                return true;
            }
            if ($num % 2 == 0){
                $num = $num / 2;
            }elseif ($num % 3 == 0){
                $num = $num / 3;
            }elseif ($num % 5 == 0){
                $num = $num / 5;
            }else{
                return false;
            }

        }
    }
}

$solution = new Solution();
var_dump($solution->isUgly(6));