<?php

/**
给你一个整数数组 nums，请你将该数组升序排列。

 

示例 1：

输入：nums = [5,2,3,1]
输出：[1,2,3,5]
示例 2：

输入：nums = [5,1,1,2,0,0]
输出：[0,0,1,1,2,5]
 */
class Solution {

    /**
     快速排序
     */
    function sortArray($nums) {
        if (count($nums)<=1) return $nums;
        $middle = $nums[0];
        $left = [];
        $right = [];

        for ($j = 1;$j<count($nums);$j++){
            if ($middle >$nums[$j]){
                $left[] = $nums[$j];
            }else{
                $right[] = $nums[$j];
            }
        }

        $left = self::sortArray($left);
        $right = self::sortArray($right);

        return  array_merge($left,[$middle],$right);

    }

    //选择排序
    function sortArray1($nums) {
        for ($i =0;$i<count($nums);$i++){
            $maxIndex = $i;
            for ($j = $i+1;$j<count($nums);$j++){
                if ($nums[$j]>$nums[$maxIndex]){
                    $maxIndex = $j;
                }
            }
            $temp = $nums[$maxIndex];
            $nums[$maxIndex]= $nums[$i];
            $nums[$i] = $temp;
        }
        return $nums;
    }
}

$solution = new Solution();
$nums = [5,2,3,1];
var_dump($solution->sortArray($nums));
