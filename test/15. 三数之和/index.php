<?php

/**
给你一个包含 n 个整数的数组 nums，判断 nums 中是否存在三个元素 a，b，c ，使得 a + b + c = 0 ？请你找出所有满足条件且不重复的三元组。

注意：答案中不可以包含重复的三元组。

 

示例：

给定数组 nums = [-1, 0, 1, 2, -1, -4]，

满足要求的三元组集合为：
[
[-1, 0, 1],
[-1, -1, 2]
]
 */
class Solution {

    /**
    1.先给数组排序[-4,-1,-1,0,1,2]
    2.遍历数组，以当前遍历值值为第一个数，去找另外2个数
    3.因为是排序过的，所以使用双指针，相加前后两个数，如果相加值大，则right--，反之left++
    4.如果相加数等于要找的数，则放入新数组，继续遍历 返回第2步
     */
    function threeSum($nums) {
        if (!$nums) return [];
        sort($nums);
        $ret = [];
        for ($i = 0;$i <count($nums)-2;$i++){
            if ($i>0 && $nums[$i] == $nums[$i-1]) continue;
            $left = $i +1;
            $right = count($nums)-1;
            $need = 0-$nums[$i];
            while($left < $right){
                if ($nums[$left]+$nums[$right] == $need){
                    array_push($ret,[$nums[$i],$nums[$left],$nums[$right]]);
                    while($left <$right && $nums[$left] == $nums[$left+1]) $left++;
                    while($left <$right && $nums[$right] == $nums[$right-1]) $right--;
                    $left++;
                    $right--;
                }elseif ($nums[$left]+$nums[$right] > $need){
                    $right--;
                }else{
                    $left++;
                }
            }
        }
        return $ret;
    }
}

$solution =  new Solution();
$nums = [-1, 0, 1, 2, -1, -4];
var_dump($solution->threeSum($nums));