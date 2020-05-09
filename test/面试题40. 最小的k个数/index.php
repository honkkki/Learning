<?php
/**
 * 面试题40. 最小的k个数
 * 输入整数数组 arr ，找出其中最小的 k 个数。例如，输入4、5、1、6、2、7、3、8这8个数字，则最小的4个数字是1、2、3、4。
 *
 *
 *
 * 示例 1：
 *
 * 输入：arr = [3,2,1], k = 2
 * 输出：[1,2] 或者 [2,1]
 * 示例 2：
 *
 * 输入：arr = [0,1,2,1], k = 1
 * 输出：[0]
 */

class Solution {

    /**
     * @param Integer[] $arr
     * @param Integer $k
     * @return Integer[]
     */
    function getLeastNumbers($arr, $k) {
        $sort =  $this->quick_sort($arr);
        return array_slice($sort,0,$k);
    }

    //快速排序
    function quick_sort($a) {
        if (count($a) <= 1) {
            return $a;
        }
        $middle = $a[0];
        $left = [];
        $right = [];

        for ($i = 1; $i < count($a); $i++) {
            if ($middle < $a[$i]) {
                $right[] = $a[$i];
            } else {
                $left[] = $a[$i];
            }
        }
        $left = $this->quick_sort($left);
        $right = $this->quick_sort($right);

        return array_merge($left,array($middle),$right);
    }
}

$solution = new Solution();
$arr = [3, 2, 1];
$k = 2;
var_dump($solution->getLeastNumbers($arr, $k));