<?php

/**
给定一个整数数组，判断是否存在重复元素。

如果任意一值在数组中出现至少两次，函数返回 true 。如果数组中每个元素都不相同，则返回 false 。



示例 1:

输入: [1,2,3,1]
输出: true
示例 2:

输入: [1,2,3,4]
输出: false
示例 3:

输入: [1,1,1,3,3,4,3,2,4,2]
输出: true
 */
class Solution {

    /**
     使用array_count_values内置函数
     */
    function containsDuplicate1($nums) {
        if (empty($nums)) return false;
        $arr = array_count_values($nums);
        foreach ($arr as $k) {
            if ($k > 1) {
                return true;
            }
        }
        return false;
    }

    //判断唯一值后的数组个数是否和原数组个数一样
    function containsDuplicate2($nums) {
        if (count(array_unique($nums)) != count($nums)) {
            return true;
        }
        return false;

    }

    //创建一个新空间去存放已经便利的元素
    function containsDuplicate($nums) {
        $hash = [];

        for ($i = 0, $count = count($nums); $i < $count; $i++) {
            if (isset($hash[$nums[$i]])) {
                return true;
            }
            $hash[$nums[$i]] = '';
        }

        return false;
    }
}

$a = [1,2,3,1];
$solution = new Solution();
var_dump($solution->containsDuplicate($a));