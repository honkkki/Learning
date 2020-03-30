<?php

/**
给你一个仅由数字 6 和 9 组成的正整数 num。

你最多只能翻转一位数字，将 6 变成 9，或者把 9 变成 6 。

请返回你可以得到的最大数字。

 

示例 1：

输入：num = 9669
输出：9969
解释：
改变第一位数字可以得到 6669 。
改变第二位数字可以得到 9969 。
改变第三位数字可以得到 9699 。
改变第四位数字可以得到 9666 。
其中最大的数字是 9969 。
示例 2：

输入：num = 9996
输出：9999
解释：将最后一位从 6 变到 9，其结果 9999 是最大的数。
示例 3：

输入：num = 9999
输出：9999
解释：无需改变就已经是最大的数字了。
 */
class Solution {

    /**
     1 将目标数不断/10，找出最后一个6在什么位置
     2 通过10的n次方，来决定在该num数上加上多少
     */
    function maximum69Number1 ($num) {
        $temp  = $num;
        $index = -1;
        $count = 0;
        while($temp){

            if ($temp % 10 == 6){
                $index =$count;
            }
            $temp = intval($temp/10);
            $count++;
        }
        if ($index>= 0){
            $num +=(3*(10**$index));
        }
        return $num;

    }

    /**
     字符串查找替换
     */
    function maximum69Number ($num) {
        $str = strval($num);
        $index =strpos($str,'6');
        $str[$index] = '9';
        return intval($str);
    }
}

$solution = new Solution();
$num = 9996;
var_dump($solution->maximum69Number($num));