<?php

/**
给定两个数组，编写一个函数来计算它们的交集。

示例 1:

输入: nums1 = [1,2,2,1], nums2 = [2,2]
输出: [2]
示例 2:

输入: nums1 = [4,9,5], nums2 = [9,4,9,8,4]
输出: [9,4]
说明:

输出结果中的每个元素一定是唯一的。
我们可以不考虑输出结果的顺序。
 */
class Solution {

    /**
    暴力法，判断一个数值在另一个数组是否存在
     */
    function intersection1($nums1, $nums2) {
       if(count($nums1) <count($nums2)){
           $arr = $nums1;
           $arr1 = $nums2;
       }else{
           $arr = $nums2;
           $arr1 = $nums1;
       }
       $new_arr = [];
       for ($i = 0;$i <count($arr) ;$i++){
           if (in_array($arr[$i],$arr1)){
               $new_arr[$arr[$i]]=$arr[$i];
           }
       }
       return array_values($new_arr);
    }

    /**
     内置函数
     */
    function intersection2($nums1, $nums2) {
        return array_unique(array_intersect($nums1,$nums2));
    }

    /**
     先把2个数组排序，通过双指针往前推来进行查找
     */
    function intersection3($nums1, $nums2) {
        sort($nums1);
        sort($nums2);
        $i = $j = 0;
        $res=[];
        while($i <count($nums1) && $j <count($nums2)){
            if ($nums1[$i] == $nums2[$j]){
                $res[] = $nums1[$i];
                $i++;
                $j++;
            }elseif ($nums1[$i] > $nums2[$j]){
                $j++;
            }elseif ($nums1[$i] < $nums2[$j]){
                $i++;
            }
        }
        return array_unique($res);
    }
}
$solution = new Solution();
//$nums1 = [1,2,2,1];
//$nums2 = [2,2];
$nums1 = [4,9,5]; $nums2 = [9,4,9,8,4];
var_dump($solution->intersection($nums1, $nums2));
