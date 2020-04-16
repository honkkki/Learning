<?php

/**
给定一个整数数组和一个整数 k，判断数组中是否存在两个不同的索引 i 和 j，使得 nums [i] = nums [j]，并且 i 和 j 的差的 绝对值 至多为 k。



示例 1:

输入: nums = [1,2,3,1], k = 3
输出: true
示例 2:

输入: nums = [1,0,1,1], k = 1
输出: true
示例 3:

输入: nums = [1,2,3,1,2,3], k = 2
输出: false
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    function containsNearbyDuplicate($nums, $k) {
        $map = [];
        for ($i = 0;$i <count($nums);$i++){
            if (isset($map[$nums[$i]]) && $i - $map[$nums[$i]] <=$k){
                return true;
            }
            $map[$nums[$i]] = $i;
        }
        return false;
    }
}

$nums = [1,2,3,1];
$k = 3;
$solution = new Solution();
var_dump($solution->containsNearbyDuplicate($nums,$k));