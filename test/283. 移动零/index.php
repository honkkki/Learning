<?php

/**
 * Class Solution
 * 283. 移动零
给定一个数组 nums，编写一个函数将所有 0 移动到数组的末尾，同时保持非零元素的相对顺序。

示例:

输入: [0,1,0,3,12]
输出: [1,3,12,0,0]
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        for($i = 0;$i <count($nums);$i++){
            if ($nums[$i] == 0){
                array_push($nums,0);
                unset($nums[$i]);
            }

        }
        return $nums;
    }
}

$nums=[0, 1, 0, 3, 12];
$solution = new Solution();
var_dump($solution->moveZeroes($nums));