<?php
/**
给你一个整数数组 nums，请你返回其中位数为 偶数 的数字的个数。
示例 1：

输入：nums = [12,345,2,6,7896]
输出：2
解释：
12 是 2 位数字（位数为偶数） 
345 是 3 位数字（位数为奇数）  
2 是 1 位数字（位数为奇数） 
6 是 1 位数字 位数为奇数） 
7896 是 4 位数字（位数为偶数）  
因此只有 12 和 7896 是位数为偶数的数字
示例 2：

输入：nums = [555,901,482,1771]
输出：1
解释：
只有 1771 是位数为偶数的数字。
 */
class Solution {
    /**
    转成字符串，计算字符串的长度
     */
    function findNumbers1($nums) {
        $count = 0;
        foreach ($nums as $num){
            $num = strlen(strval($num));
            if ($num %2 == 0){
                $count ++;
            }
        }
        return $count;
    }

    /**
     不断/10，来统计位数
     */
    function findNumbers($nums) {
        $count = 0;
       for ($i = 0;$i <count($nums);$i++){
           $lenght = 0;
           while($nums[$i]){
               $nums[$i] = intval($nums[$i] /10);
               $lenght++;
           }
//           $lenght & 1 ?: $count++;
           $lenght % 2 !=0 ?: $count++;
       }
       return $count;
    }
}
$solution = new Solution();

$nums = [555,901,482,1771];
var_dump($solution->findNumbers($nums));