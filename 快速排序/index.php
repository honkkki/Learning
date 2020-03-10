<?php

//通过设置一个初始中间值，来将需要排序的数组分成3部分，小于中间值的左边，中间值，大于中间值的右边，继续递归用相同的方式来排序左边和右边，最后合并数组
$a = array(2,13,42,34,3);
//$a = array(2,13,42,34,56,23,67,365,87665,54,68,3);
function quick_sort($a)
{
    // 判断是否需要运行，因下面已拿出一个中间值，这里<=1
    if (count($a) <= 1) {
        return $a;
    }

    $middle = $a[0]; // 中间值

    $left = array(); // 接收小于中间值
    $right = array();// 接收大于中间值

    // 循环比较
    for ($i=1; $i < count($a); $i++) {

        if ($middle < $a[$i]) {

            // 大于中间值
            $right[] = $a[$i];
        } else {

            // 小于中间值
            $left[] = $a[$i];
        }
    }
    var_dump($left,$right);
    echo '==================='.PHP_EOL;

    // 递归排序划分好的2边
    $left = quick_sort($left);
    $right = quick_sort($right);

    // 合并排序后的数据，别忘了合并中间值
    return array_merge($left, array($middle), $right);
}

print_r(quick_sort($a));