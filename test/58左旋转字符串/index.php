<?php

/**
 * Created by PhpStorm.
 * User: huahua
 * Date: 2020/3/18
 * Time: 下午6:23
 */

/**
 * 字符串的左旋转操作是把字符串前面的若干个字符转移到字符串的尾部。请定义一个函数实现字符串左旋转操作的功能。比如，输入字符串"abcdefg"和数字2，该函数将返回左旋转两位得到的结果"cdefgab"。
 *
 *
 *
 * 示例 1：
 *
 * 输入: s = "abcdefg", k = 2
 * 输出: "cdefgab"
 * 示例 2：
 *
 * 输入: s = "lrloseumgh", k = 6
 * 输出: "umghlrlose"
 *
 *
 * 限制：
 *
 * 1 <= k < s.length <= 10000
 */
class Solution {

    /**
     * @param String $s
     * @param Integer $n
     * @return String
     */
    function reverseLeftWords($s, $n) {
        if (empty($s) || $n == 0) return $s;
        $len = strlen($s);
        if ($n > $len || $len > 10000) return $s;
        $new_str = '';
        for ($i = 0; $i < $n; $i++) {
            $new_str .= $s[$i];
        }
        $s .= $new_str;
        return substr($s, $n);
    }
}


$test = new Solution();
echo $test->reverseLeftWords('lrloseumgh', 16);
