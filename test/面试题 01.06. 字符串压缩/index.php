<?php

/**
字符串压缩。利用字符重复出现的次数，编写一种方法，实现基本的字符串压缩功能。比如，字符串aabcccccaaa会变为a2b1c5a3。若“压缩”后的字符串没有变短，则返回原先的字符串。你可以假设字符串中只包含大小写英文字母（a至z）。

示例1:

输入："aabcccccaaa"
输出："a2b1c5a3"
示例2:

输入："abbccd"
输出："abbccd"
解释："abbccd"压缩后为"a1b2c2d1"，比原字符串长度更长。
 */
class Solution {

    /**
     字符串拼接统计
     */
    function compressString($S) {
        $count = 1;
        $str = $S[0];
        $new_str = $str;
        for ($i = 1 ;$i <strlen($S);$i++){
            if ($S[$i] == $str){
                $count += 1;
            }else{
                $new_str.= $count;
                $str = $S[$i];
                $count = 1;
                $new_str .= $str;
            }
        }
        $new_str .= $count;
        return strlen($new_str) >= strlen($S) ?$S :$new_str;

    }
}

$solution = new Solution();
$str = "abbccd";
var_dump($solution->compressString($str));