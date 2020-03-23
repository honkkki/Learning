<?php

/**
 * Created by PhpStorm.
 * User: huahua
 * Date: 2020/3/18
 * Time: 下午6:23
 */

/**
给定一个数组，将数组中的元素向右移动 k 个位置，其中 k 是非负数。

示例 1:

输入: [1,2,3,4,5,6,7] 和 k = 3
输出: [5,6,7,1,2,3,4]
解释:
向右旋转 1 步: [7,1,2,3,4,5,6]
向右旋转 2 步: [6,7,1,2,3,4,5]
向右旋转 3 步: [5,6,7,1,2,3,4]
示例 2:

输入: [-1,-100,3,99] 和 k = 2
输出: [3,99,-1,-100]
解释:
向右旋转 1 步: [99,-1,-100,3]
向右旋转 2 步: [3,99,-1,-100]
说明:

尽可能想出更多的解决方案，至少有三种不同的方法可以解决这个问题。
要求使用空间复杂度为 O(1) 的 原地 算法。
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    //三次反转
    /**
     * @param $nums
     * @param $k
     * @return mixed
     * 1。将整个数组反转
     * 2。将开始的部分反转
     * 3。将结束的部分饭庄
     */
    function rotate(&$nums, $k)
    {
        $len = count($nums);
        if ($k > $len) {
            $k = $k % $len;
        }
        $nums = $this->reverse($nums, 0, $len - 1);
        $nums = $this->reverse($nums, 0, $k - 1);
        $nums = $this->reverse($nums, $k, $len - 1);
        return $nums;
    }

    private function reverse($arr, $left, $right)
    {
        while ($left <= $right) {
            $tmp = $arr[$left];
            $arr[$left] = $arr[$right];
            $arr[$right] = $tmp;
            $left++;
            $right--;
        }

        return $arr;
    }

    //截取数组
    function rotate1(&$nums, $k) {
        $res_start = array_slice($nums,0,count($nums)-$k);
        $res_end   = array_slice($nums,count($nums)-$k,$k);
        return array_merge($res_end,$res_start);
    }
}


$test = new Solution();
$nums = [1,2,3,4,33,5,6,88,7];
$k = 3;
var_dump($test->rotate($nums,$k));
