<?php

/**
实现 strStr() 函数。

给定一个 haystack 字符串和一个 needle 字符串，在 haystack 字符串中找出 needle 字符串出现的第一个位置 (从0开始)。如果不存在，则返回  -1。

示例 1:

输入: haystack = "hello", needle = "ll"
输出: 2
示例 2:

输入: haystack = "aaaaa", needle = "bba"
输出: -1
 */
class Solution {

    /**
     1 将字符串的第n位与子串做对比
     2 如果相等，子串下标+1，不相等，继续累加字符串下标 $i = $i- $j +1;
     3 累加子串下标和字符串下标，判断下一个字串是否相等
     4 如果子串下标等于子串长度，说明已经找到了，返回字符串下标-字串下标
     */
    function strStr($haystack, $needle) {
        if($needle == ''){return 0;}    // 空字符串返回0
        $len = strlen($haystack);
        $length = strlen($needle);

        $i = 0;$j = 0;
        while($i<$len && $j < $length){
            echo $i.$j.'---';
            if($haystack[$i] == $needle[$j]){
              $j++;
              $i++;
            }else{
                $i = $i- $j +1;
                $j = 0;
            }
            if($j == $length){
                return $i-$j;
            }
        }
        return -1;
    }
}

$solution = new Solution();
$haystack = "mississippi";
$needle = "issip";
var_dump($solution->strStr($haystack,$needle));