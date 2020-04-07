<?php

/**
 * 编写一个函数来查找字符串数组中的最长公共前缀。
 *
 * 如果不存在公共前缀，返回空字符串 ""。
 *
 * 示例 1:
 *
 * 输入: ["flower","flow","flight"]
 * 输出: "fl"
 * 示例 2:
 *
 * 输入: ["dog","racecar","car"]
 * 输出: ""
 * 解释: 输入不存在公共前缀。
 * 说明:
 *
 * 所有输入只包含小写字母 a-z 。
 */
class Solution {
    function longestCommonPrefix($strs) {
        $prefix = '';
        $i = 0;
        while(true){
            $cur = $strs[0]{$i};

            if (!$cur) return $prefix;
            foreach($strs as $str){
                echo  $str{$i}.PHP_EOL;
                if ($str{$i} != $cur){
                    return $prefix;
                }
            }
            $prefix.=$cur;
            $i++;
        }
        return $prefix;
    }
}

$solution = new Solution();
$strs = ["flower","pppppflow","flight"];
var_dump($solution->longestCommonPrefix($strs));