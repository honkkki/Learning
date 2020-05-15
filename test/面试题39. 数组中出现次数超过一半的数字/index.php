<?php

/**
面试题39. 数组中出现次数超过一半的数字
数组中有一个数字出现的次数超过数组长度的一半，请找出这个数字。

你可以假设数组是非空的，并且给定的数组总是存在多数元素。
示例 1:

输入: [1, 2, 3, 2, 2, 2, 5, 4, 2]
输出: 2
 */

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement1($nums) {
        $arr = array_count_values($nums);
        $count = ceil(count($nums)/2);
        foreach ($arr as $k=> $v){
            if ($v >= $count){
                return $k;
            }
        }
    }

    /**
    超过一半得数量的数字必然位于中间，所以排序后取中位数即可
     */
    function majorityElement($nums){
        sort($nums);
        $mid = intval(count($nums)/2) >>1;
        return $nums[$mid];
    }
}

$soluition = new Solution();
$nums = [6,5,5];
var_dump($soluition->majorityElement($nums));