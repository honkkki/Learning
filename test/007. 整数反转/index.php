<?php

/**
 * Created by PhpStorm.
 * User: huahua
 * Date: 2020/3/18
 * Time: 下午6:23
 */

/**
 * Class Solution
 * 给出一个 32 位的有符号整数，你需要将这个整数中每位上的数字进行反转。

示例 1:

输入: 123
输出: 321
示例 2:

输入: -123
输出: -321
示例 3:

输入: 120
输出: 21
注意:

假设我们的环境只能存储得下 32 位的有符号整数，则其数值范围为 [−231,  231 − 1]。请根据这个假设，如果反转后整数溢出那么就返回 0。
 */
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        if (!is_int($x)) {
            return 0;
        }
        $max = pow(2,31)-1;
        $min = pow(-2,31);
        $flag = true;
        if ($x < 0) {
            $x = -$x;
            $flag = false;
        }
        $len = strlen($x);
        $newStr = '';
        for ($i = $len - 1; $i >= 0; $i--) {
            $newStr.= substr($x, $i, 1);
        }
        $newStr= intval($newStr);
        if (!$flag){
            $newStr= -$newStr;
        }
        if($newStr > $max || $newStr < $min){
            return 0;
        }
        return $newStr;
    }
}

$test = new Solution();
echo($test->reverse(-120));
echo PHP_EOL;
//echo $test->rev(43261596);

//echo bindec("1100000");
