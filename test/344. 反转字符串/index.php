<?php

/**
编写一个函数，其作用是将输入的字符串反转过来。输入字符串以字符数组 char[] 的形式给出。

不要给另外的数组分配额外的空间，你必须原地修改输入数组、使用 O(1) 的额外空间解决这一问题。

你可以假设数组中的所有字符都是 ASCII 码表中的可打印字符。

 

示例 1：

输入：["h","e","l","l","o"]
输出：["o","l","l","e","h"]
示例 2：

输入：["H","a","n","n","a","h"]
输出：["h","a","n","n","a","H"]

 */
class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    //便利数组，将第一个元素和倒数一个元素置换...继而多次，达到反转数组的效果
    function reverseString1(&$s) {
        $len =count($s);
        for ($i = 0;$i <$len;$i++){
            $temp = $s[$i];
            $s[$i] = $s[$len-1];
            $s[$len-1] =$temp;
            $len --;
        }
        return $s;
    }

    //方法2：从数组的倒数第二个元素开始，将该元素存一个变量，删除该元素，在将变量添加到数组的最后
    function reverseString2(&$s) {
        $len = count($s);
        for ($i = $len-2;$i>=0;$i--){
            $temp= $s[$i];
            unset($s[$i]);
            array_push($s,$temp);
        }
        return $s;
    }
}

$test =new Solution();
$arr = ["h","e","l","l","o"];
var_dump($test->reverseString($arr));