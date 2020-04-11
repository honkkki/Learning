<?php

/**
给定一个非空整数数组，除了某个元素只出现一次以外，其余每个元素均出现两次。找出那个只出现了一次的元素。

说明：

你的算法应该具有线性时间复杂度。 你可以不使用额外空间来实现吗？

示例 1:

输入: [2,2,1]
输出: 1
示例 2:

输入: [4,1,2,1,2]
输出: 4
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber1($nums) {
        $arrs = array_count_values($nums);
       foreach ($arrs as $k =>$v){
           if ($v == 1){
               return $k;
           }
       }
       return ;
    }
    //相同的数相异或都得到0，任何数跟0异或都得到原本那个数
    function singleNumber($nums) {
        $ret=0;
        foreach($nums as $item){
            $ret^=$item;
        }

        return $ret;
    }
}
$solution = new Solution();
$nums = [2,2,1];
var_dump($solution->singleNumber($nums));
