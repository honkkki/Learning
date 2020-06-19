<?php

/**
给定一个字符串，验证它是否是回文串，只考虑字母和数字字符，可以忽略字母的大小写。

说明：本题中，我们将空字符串定义为有效的回文串。

示例 1:

输入: "A man, a plan, a canal: Panama"
输出: true
示例 2:

输入: "race a car"
输出: false

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/valid-palindrome
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $s = preg_replace("/[^a-z0-9]/i",'',$s);
        $a = strtolower($s);
        $len = strlen($a);
        for($i = 0; $i < $len; $i++){
            if($a[$i] == $a[$len-$i-1]){
                continue;
            }else{
                return false;
            }
        }
        return true;
    }
}

$solution = new Solution();
$x =  "A man, a plan, a canal: Panama";
var_dump($solution->isPalindrome($x));