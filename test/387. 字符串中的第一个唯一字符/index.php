<?php

/**
给定一个字符串，找到它的第一个不重复的字符，并返回它的索引。如果不存在，则返回 -1。

案例:

s = "leetcode"
返回 0.

s = "loveleetcode",
返回 2.
 */
class Solution {

    /**
     循环2遍，第一遍记录每个字母出现的次数 第二遍判断字母次数是否等于1，等于1，则代表这个数是第一个不重复的字符
     */
    function firstUniqChar($s) {
        $hash = [];

        for($i = 0;$i <strlen($s);$i++){
            $hash[$s[$i]] = ($hash[$s[$i]] ?? 0)+1;
        }

        for($i = 0;$i <strlen($s);$i++){
            if ($hash[$s[$i]] == 1){
                return $i;
            }
        }
        return -1;
    }
}


$solution = new Solution();
$s = "loveleetcode";
var_dump($solution->firstUniqChar($s));