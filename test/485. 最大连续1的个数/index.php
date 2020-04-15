<?php

/**
给定一个二进制数组， 计算其中最大连续1的个数。

示例 1:

输入: [1,1,0,1,1,1]
输出: 3
解释: 开头的两位和最后的三位都是连续1，所以最大连续1的个数是 3.
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMaxConsecutiveOnes($nums) {
        $count = $temp =  0;

        for ($i = 0;$i<count($nums);$i++){
            if ($nums[$i] == 1){
                $count++;
            }else{
                if ($count >$temp)$temp = $count;
                $count = 0;
            }
        }
        if ($count > $temp) $temp = $count;
        return $temp;
    }

    /**
     * @param $nums
     * @return int
     */
    function findMaxConsecutiveOnes1($nums) {
        return strlen(max(explode('0', implode('', $nums))));

    }

}