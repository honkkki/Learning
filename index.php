<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    //方法1：循环
    function searchInsert1($nums, $target) {
        for ($i = 0; $i < count($nums); $i++) {
            if ($target <= $nums[$i]) {
                return $i;
            } else {
                continue;
            }
        }
        return count($nums);
    }

    //方法2：二分法
    function  searchInsert($nums, $target) {
        $len = count($nums);
        $left = 0;
        $right = $len-1;
        while($left <=$right){
            $mid =(int)( ($left+$right)/2);
            if ($target == $nums[$mid]) return $mid;
            if ($target >$nums[$mid]){
                $left=$mid+1;
            }else{
                $right = $mid-1;
            }
        }
        return $left;
    }
}

$solution = new Solution();

$arr =[1,3,5,6];
$k =  7;

var_dump($solution->searchInsert($arr,$k));