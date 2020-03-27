<?php
/**
给你一个整数 n，请你帮忙计算并返回该整数「各位数字之积」与「各位数字之和」的差。

 

示例 1：

输入：n = 234
输出：15
解释：
各位数之积 = 2 * 3 * 4 = 24
各位数之和 = 2 + 3 + 4 = 9
结果 = 24 - 9 = 15
示例 2：

输入：n = 4421
输出：21
解释：
各位数之积 = 4 * 4 * 2 * 1 = 32
各位数之和 = 4 + 4 + 2 + 1 = 11
结果 = 32 - 11 = 21
 

提示：

1 <= n <= 10^5
 */
//使用内置函数
function subtractProductAndSum1($n) {
    $n = str_split(strval($n));
    return array_product($n)-array_sum($n);

}

//使用求余的方法得到个位数
function subtractProductAndSum($n){
    $a =1;
    $b = 0;
    while($n){
        $m = $n %10;
        $a*=$m;
        $b+=$m;
        $n = intval($n/10);
    }
    return $a -$b;
}
$n = 4421;
var_dump(subtractProductAndSum($n));