<?php
class test {
    /**
     * Created by PhpStorm.
     * User: huahua
     * Date: 2020/3/6
     * Time: 下午8:25
     */

    public function selectionSort($arrs) {
        $newArr = [];
        foreach ($arrs as $index => $value) {
            $key =$this->findSmallest($arrs);
            $newArr[] = $arrs[$key];
            unset($arrs[$key]);
            $arrs=array_values($arrs);  //索引重新规划
        }
        return $newArr;
    }

    //找到数组中最小的数字
    public function findSmallest($arrs) {
        $smallest = $arrs[0];
        $smallest_index = 0;
        foreach ($arrs as $index => $arr) {
            if ($arrs[$index] < $smallest) {
                $smallest = $arrs[$index];
                $smallest_index = $index;
            }
        }
        return $smallest_index;
    }

/**
 * 1 遍历数组，找到$i下标后数值最小的值与$i的值呼唤
 * 2 多次循环，得到正序数组
 * 3,6,1,0    $minIndex = 0;=>3   $temp=3 $arr[0]=$arr[3]=0 $arr[3]=3 (0,6,1,3)
 * 0,6,1,3    $minIndex = 1;=>2   $temp=6 $arr[1]=$arr[2]=1 $arr[2]=6 (0,1,6,3)
 * 0,1,6,3    $minIndex = 2;=>3   $temp=6 $arr[2]=$arr[3]=3 $arr[3]=6 (0,1,3,6)
 * **/
    function selectionSort2($arr)
    {
        $len = count($arr);
        for ($i = 0; $i < $len - 1; $i++) {
            $minIndex = $i;
            for ($j = $i + 1; $j < $len; $j++) {
                if ($arr[$j] < $arr[$minIndex]) {
                    $minIndex = $j;
                }
            }
            $temp = $arr[$i];
            $arr[$i] = $arr[$minIndex];
            $arr[$minIndex] = $temp;
        }
        return $arr;
    }
}
$test =new test();
var_dump($test->selectionSort([3,6,1,0,9,234,4325432,43,4324,8900,798479,4318982379,44,999,5,5,543343]));


