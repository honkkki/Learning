<?php

/**
给定一个字符串 s，找到 s 中最长的回文子串。你可以假设 s 的最大长度为 1000。

示例 1：

输入: "babad"
输出: "bab"
注意: "aba" 也是一个有效答案。
示例 2：

输入: "cbbd"
输出: "bb"

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/longest-palindromic-substring
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */
class Solution {

    /**
     * @param String $s
     * @return String
     */
    public $res = '';
    public $max = 0;
    function longestPalindrome($s) {
        if(strlen($s) <=1) return $s;

        for ($i = 0;$i< strlen($s);$i++){
            $this->diffusion($s,$i,$i);
        }
    }

    public function diffusion($s,$left,$right){
        while($left >=0 &&$right <strlen($s) && $s[$left] == $s[$right]){
            if($right-$left+1>$this->max){
                $this->max = $right-$left +1;
                $this->res =substr($s,$left,$right-$left+1);
            }
            $left--;
            $right++;
        }
    }
}