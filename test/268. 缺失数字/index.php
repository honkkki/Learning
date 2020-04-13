<?php

/**
给定一个包含 0, 1, 2, ..., n 中 n 个数的序列，找出 0 .. n 中没有出现在序列中的那个数。

示例 1:

输入: [3,0,1]
输出: 2
示例 2:
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumber1($nums) {
        sort($nums);
        $start = 0;
        for ($i = 1;$i < count($nums);$i++){
            if ($nums[$i] - $nums[$start] != 1){
                return $nums[$i]-1;
            }
            $start = $i;
       }
    }

    //异或运算
    function missingNumber($nums) {
        $ans = count($nums);
        for($i=0;$i<count($nums);$i++){
            $ans ^= $nums[$i];
            $ans ^= $i;
        }
        return $ans;
    }
}


$solution = new Solution();
$nums = [3,0,1];
var_dump($solution->missingNumber($nums));