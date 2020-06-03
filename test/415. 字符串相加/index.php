<?php
/**
给定两个字符串形式的非负整数 num1 和num2 ，计算它们的和。

注意：

num1 和num2 的长度都小于 5100.
num1 和num2 都只包含数字 0-9.
num1 和num2 都不包含任何前导零。
你不能使用任何內建 BigInteger 库， 也不能直接将输入的字符串转换为整数形式。
通过次数34,743提交次

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/add-strings
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */
class Solution {

    /**
     * @param String $num1
     * @param String $num2
     * @return String
     */
    function addStrings($num1, $num2) {
        $len1 = strlen($num1);
        $len2 = strlen($num2);

        if ($len1 == 0) return $num2;
        if ($len2 == 0) return $num1;

        $i = $len1 -1;
        $j = $len2 -1;

        $carry = 0;
        $return='';
        // 使用该判断条件，一次遍历处理完所有情况
        while ($i >= 0 || $j >= 0 || $carry) {
            $sum = $carry;
            if ($i >= 0) {
                $sum += substr($num1, $i, 1);
                $i--;
            }
            if ($j >= 0) {
                $sum += substr($num2, $j, 1);
                $j--;
            }
            // 进位处理
            $carry = floor($sum / 10);
            $return = $sum % 10 . $return;
        }
        return $return;
    }
}

$solution = new Solution();
$num1="33";
$num2="4";
var_dump($solution->addStrings($num1,$num2));