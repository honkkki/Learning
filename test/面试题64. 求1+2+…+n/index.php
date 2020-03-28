<?php

/**
求 1+2+...+n ，要求不能使用乘除法、for、while、if、else、switch、case等关键字及条件判断语句（A?B:C）。

 

示例 1：

输入: n = 3
输出: 6
示例 2：

输入: n = 9
输出: 45
 */
class Solution {

    /**
   利用递归的先进后出的特征
     */
    function sumNums($n) {
        if ($n>1){
            $s = $this->sumNums($n-1)+$n; // //调用自身，sum（100）=sum（99）+100;以此类推往下递归！
        }else{
            $s = 1;
        }
        return $s;
    }
}
$solution = new Solution();
var_dump($solution->sumNums(9));
