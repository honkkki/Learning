<?php

/**
给你两个有序整数数组 nums1 和 nums2，请你将 nums2 合并到 nums1 中，使 nums1 成为一个有序数组。



说明:

初始化 nums1 和 nums2 的元素数量分别为 m 和 n 。
你可以假设 nums1 有足够的空间（空间大小大于或等于 m + n）来保存 nums2 中的元素。


示例:

输入:
nums1 = [1,2,3,0,0,0], m = 3
nums2 = [2,5,6],       n = 3

输出: [1,2,2,3,5,6]
 */
class Solution {

    /**
     截取替换
     */
    function merge(&$nums1, $m, $nums2, $n) {
        if (count($nums1) <$m+$n) return [];
        for($i = 0;$i < count($nums2);$i++){
            $nums1[$m]= $nums2[$i];
            $m = $m +1;
        }
        sort($nums1);
        return $nums1;
    }

    //临时表
    function merge1(&$nums1, $m, $nums2, $n) {

        $tmp = [];
        $i = 0;
        $j = 0;

        while ($i < $m && $j < $n) {
            if ($nums1[$i] < $nums2[$j]) {
                $tmp[] = $nums1[$i++];
            } else {
                $tmp[] = $nums2[$j++];
            }
        }
        while ($i < $m) {
            $tmp[] = $nums1[$i++];
        }

        while ($j < $n) {
            $tmp[] = $nums2[$j++];
        }

        for ($k = 0; $k < count($tmp); $k++) {
            $nums1[$k] = $tmp[$k];
        }

        return $nums1;
    }
}

$solution = new Solution();
$nums1 = [1,2,2,0,0,0];
$m = 3;
$nums2 = [2,5,6];
$n = 3;

var_dump($solution->merge($nums1, $m, $nums2, $n));