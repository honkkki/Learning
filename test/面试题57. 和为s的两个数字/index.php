<?php
/**
面试题57. 和为s的两个数字
输入一个递增排序的数组和一个数字s，在数组中查找两个数，使得它们的和正好是s。如果有多对数字的和等于s，则输出任意一对即可。



示例 1：

输入：nums = [2,7,11,15], target = 9
输出：[2,7] 或者 [7,2]
示例 2：

输入：nums = [10,26,30,31,47,60], target = 40
输出：[10,30] 或者 [30,10]
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
//        $search = [];
//        foreach ($nums as $num){
//            $n = $target-$num;
//            if (array_key_exists($n,$search)){
//                return [$n,$num];
//            }
//            $search[$num] =$num ;
//        }

        $l = 0;
        $r = count($nums) - 1;

        while ($l < $r) {
            $sum = $nums[$l] + $nums[$r];
            if ($sum == $target) {
                return [$nums[$l], $nums[$r]];
            }
            $sum > $target ? $r-- : $l++;
        }
    }
}

$solution = new Solution();
$nums = [2,7,11,15];
$target = 9;
var_dump($solution->twoSum($nums,$target));