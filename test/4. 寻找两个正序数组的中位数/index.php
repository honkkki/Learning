<?php

/**

给定两个大小为 m 和 n 的正序（从小到大）数组 nums1 和 nums2。

请你找出这两个正序数组的中位数，并且要求算法的时间复杂度为 O(log(m + n))。

你可以假设 nums1 和 nums2 不会同时为空。



示例 1:

nums1 = [1, 3]
nums2 = [2]

则中位数是 2.0
示例 2:

nums1 = [1, 2]
nums2 = [3, 4]

则中位数是 (2 + 3)/2 = 2.5
 */


    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
class Solution {
    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays1($nums1, $nums2) {
        $n1 = count($nums1);
        $n2 = count($nums2);
        if($n1>$n2){
            return $this -> findMedianSortedArrays($nums2, $nums1); // 数组1的长度永远不会比数组2更长
        }
        $k = intval(($n1+$n2+1)/2); // 总槽点数量二分之一
        $left = 0;
        $right = $n1;
        while($left < $right){
            $m1 = intval($left + ($right-$left)/2); // 此处实现二分查找

            // 第一次查找时：当数组1是奇数个，我们认为m1是中位数，当数组1是偶数个，认为m1是中位数中较大的那个。

            $m2 = $k - $m1;                         // 两个数组中位数的左边元素数量相加等于总槽点数量的二分之一

            if($nums1[$m1] < $nums2[$m2-1]){        // m1为数组1的的中位数或者较大的中位数 小于 数组2中位数左边的最大值m2-1

                $left = $m1 + 1;                    // 此时说明数组1可以继续向右查找，进入下一次二分查找

            }else{

                $right = $m1;                       //  否则已经找到中位数的位置，退出循环
            }
        }
        // 上面while循环的核心思想是：
//        因为规范了 数组1的长度永远不会比数组2更长， 所以当数组1长度为0时，数组2的中位数就是要求的中位数
//            当数组1的长度为3时，数组2长度远大于3，那么数组1对于所求的中位数影响有限。即最后得到的中位数如果在数组2中，则一定在第一次求得的中位数附近不超过3。如果中位数在数组1中，查询次数更不会超过3，所以满足 $left < $right 循环即可遍历所有可能。

        $m1 = $left;
        $m2 = $k - $m1;
        // 处理边界问题
        $c1 = max($m1<=0 ? PHP_INT_MIN : $nums1[$m1-1], $m2<=0 ? PHP_INT_MIN : $nums2[$m2-1]);
        if(($n1+$n2)%2 == 1){
            return $c1;
        }
        $c2 = min($m1 >= $n1 ? PHP_INT_MAX : $nums1[$m1], $m2 >= $n2 ? PHP_INT_MAX : $nums2[$m2]);
        return ($c1+$c2) * 0.5;
    }

    function findMedianSortedArrays3(array $nums1, array $nums2)
    {
        $nums = array_merge($nums1, $nums2);
        sort($nums);

        $n = count($nums);
        $i = $n - 1;
        if ($n % 2 == 0) { //偶数
            $m = ($nums[$i / 2] + $nums[$i / 2 + 1]) / 2;
        } else {
            $m = $nums[($i + 1) / 2];
        }

        return $m;
    }
}
$nums1 = [1, 3];
//$nums2 = [2];
$nums2=[];
$solution = new Solution();
var_dump($solution->findMedianSortedArrays($nums1,$nums2));