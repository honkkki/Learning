<?php
/**
面试题05. 替换空格
请实现一个函数，把字符串 s 中的每个空格替换成"%20"。
示例 1：

输入：s = "We are happy."
输出："We%20are%20happy."
 */

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function replaceSpace($s) {
        $res = '';
        for($i = 0;$i <strlen($s);$i++){
            $res.= $s[$i] == ' '?'%20':$s[$i];
        }
        return $res;
    }
}

$a  = "We are happy.";
$solution = new Solution();
var_dump($solution->replaceSpace($a));
