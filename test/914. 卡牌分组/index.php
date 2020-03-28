<?php

/**
给定一副牌，每张牌上都写着一个整数。

此时，你需要选定一个数字 X，使我们可以将整副牌按下述规则分成 1 组或更多组：

每组都有 X 张牌。
组内所有的牌上都写着相同的整数。
仅当你可选的 X >= 2 时返回 true。

示例 1：

输入：[1,2,3,4,4,3,2,1]
输出：true
解释：可行的分组是 [1,1]，[2,2]，[3,3]，[4,4]
示例 2：

输入：[1,1,1,2,2,2,3,3]
输出：false
解释：没有满足要求的分组。
示例 3：

输入：[1]
输出：false
解释：没有满足要求的分组。
示例 4：

输入：[1,1]
输出：true
解释：可行的分组是 [1,1]
示例 5：

输入：[1,1,2,2,2,2]
输出：true
解释：可行的分组是 [1,1]，[2,2]，[2,2]

提示：

1 <= deck.length <= 10000
0 <= deck[i] < 10000
 */
class Solution {

    /**
     1 统计数组中所有的值的个数
     2 给所有值做一个最大公约数
     * 如果该数等于1 返回false 反之 返回true
     */
    function hasGroupsSizeX($deck) {
        $count = count($deck);
        if ($count < 2) return false;
        $arrs = array_count_values($deck);
        $x = array_shift($arrs);
        foreach($arrs as $v){
            $x =$this->gds($x,$v);
            if ($x == 1){
                return false;
            }
        }
        return true;
    }

    //辗转相除法
    public function gds($a, $b) {
        return $b == 0 ? $a : $this->gds($b, $a % $b);
    }

    /**
     暴力解决法
     1 先给数组排序，根据数组个数计算出该数组分为几组
     2 得到x组后，取对应的组的sum值和最后一个值*x比较是否相等
     * 如果相等，取第二部分值作为数组比较，直到最后
     * 反之，跳回到最初的循环，继续找最适合分为几组
     */
    function test($deck) {
        $n = count($deck);
        if ($n <= 1) return false;
        sort($deck);
        for ($i = 2; $i <= $n; ++$i) {
            if ($n % $i == 0) {
                $groupCount = $n / $i;
                for ($j = 0; $j < $groupCount; ++$j) {
                    $g = array_slice($deck, $j * $i, $i);
                    if (array_sum($g) != end($g) * $i) {
                        continue 2;
                    }
                    if ($j == $groupCount - 1) return true;
                }
            }
        }
        return false;
    }
}

$solution = new Solution();
$deck = [1, 1, 2, 2, 2, 2, 2,2,3];
var_dump($solution->test($deck));