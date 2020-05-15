<?php
/**
面试题53 - I. 在排序数组中查找数字 I
统计一个数字在排序数组中出现的次数。



示例 1:

输入: nums = [5,7,7,8,8,10], target = 8
输出: 2
示例 2:

输入: nums = [5,7,7,8,8,10], target = 6
输出: 0
 */

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search1($nums, $target) {
        $count = 0;
        foreach($nums as $num){
            if ($num == $target){
                $count++;
            }
        }
        return $count;
    }

    function search($nums, $target) {
        //二分查找找左边界 - 右边界
        if (empty($nums)) return 0;

        $len = count($nums);

        $l = 0;

        $r = $len - 1;

        //找左边界
        while ($l <= $r) {
            $mid = $l + floor(($r - $l) / 2);

            if ($nums[$mid] < $target) {
                $l = $mid + 1;
            } else {
                $r = $mid - 1;
            }
        }

        $left = $r;

        $lt = 0;
        $rt = $len - 1;

        while ($lt <= $rt) {
            $mid = $lt + floor(($rt - $lt) / 2);

            if ($nums[$mid] <= $target) {
                $lt = $mid + 1;
            } else {
                $rt = $mid - 1;
            }
        }

        $right = $lt;

        return $right - $left - 1;
    }
}

$nums = [5,7,7,8,8,10];
$target = 8;

$solution = new Solution();
var_dump($solution->search($nums,$target));