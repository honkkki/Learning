<?php

/**
给你一个数组 nums，对于其中每个元素 nums[i]，请你统计数组中比它小的所有数字的数目。

换而言之，对于每个 nums[i] 你必须计算出有效的 j 的数量，其中 j 满足 j != i 且 nums[j] < nums[i] 。

以数组形式返回答案。

 

示例 1：

输入：nums = [8,1,2,2,3]
输出：[4,0,1,1,3]
解释：
对于 nums[0]=8 存在四个比它小的数字：（1，2，2 和 3）。
对于 nums[1]=1 不存在比它小的数字。
对于 nums[2]=2 存在一个比它小的数字：（1）。
对于 nums[3]=2 存在一个比它小的数字：（1）。
对于 nums[4]=3 存在三个比它小的数字：（1，2 和 2）。
示例 2：

输入：nums = [6,5,4,8]
输出：[2,1,0,3]
示例 3：

输入：nums = [7,7,7,7]
输出：[0,0,0,0]
 

提示：

2 <= nums.length <= 500
0 <= nums[i] <= 100
 */
class Solution {
    /**
     1.新建一个数组，对他进行排序，变成[8,3，2,2，1]
     2.键值对互换 ["8"=>0,"3"=>1,"2"=>3,"1"=>4]
     3.获取小于当前数值的个数，因为是排过序的，所以下标就能代表有几个数字比他大
     * ["8"=>5-1-0,"3"=>5-1-1,"2"=>5-1-3,"1"=>5-1-4]
     *  ["8"=>4,"3"=>3,"2"=>1,"1"=>0]
     4.便利原数组，填充数值 [4,0,1,1,3]
     */
    function smallerNumbersThanCurrent1($nums) {
        $tmp_arr = $nums;
        rsort($tmp_arr);
        $tmp_arr = array_flip($tmp_arr);
        $length = count($nums);

        foreach ($tmp_arr as $key => $value) {
            $tmp_arr[$key] = $length - 1 -$tmp_arr[$key];
        }
        $arr = [];

        foreach ($nums as $value) {
            $arr[] = $tmp_arr[$value];
        }
        return $arr;
    }
    /**
    1 新建一个数组，对他进行排序，变成[1,2,2,3,8]
    2 便利原数组，嵌套便利新数组，新数组的下标等于他前边有多少个比他小的数组
     */
    function smallerNumbersThanCurrent($nums) {
        $old_arr = $nums;
        $new_arr =[];
       sort($old_arr);
       for($i =0;$i<count($nums);$i++){
           foreach ($old_arr as $index=> $num){
               if ($num == $nums[$i]) {
                   array_push($new_arr,$index);
                   break;
                   }
           }
       }
        return $new_arr;
    }
}
$arr = [8,1,2,2,3];
$arr1 = [7,7,7,7];
$solution = new Solution();
var_dump($solution->smallerNumbersThanCurrent($arr));