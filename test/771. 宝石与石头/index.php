<?php

/**
 给定字符串J 代表石头中宝石的类型，和字符串 S代表你拥有的石头。 S 中每个字符代表了一种你拥有的石头的类型，你想知道你拥有的石头中有多少是宝石。

J 中的字母不重复，J 和 S中的所有字符都是字母。字母区分大小写，因此"a"和"A"是不同类型的石头。

示例 1:

输入: J = "aA", S = "aAAbbbb"
输出: 3
示例 2:

输入: J = "z", S = "ZZ"
输出: 0
注意:

S 和 J 最多含有50个字母。
 J 中的字符不重复。

 */
class Solution {

    /**
     * @param String $J
     * @param String $S
     * @return Integer
     */
    function numJewelsInStones1($J, $S) {
        $keys = str_split($J);
        $arrs = array_count_values(str_split($S));
        $count = 0;
        foreach($keys as $key){
            if (array_key_exists($key,$arrs)){
                $count += $arrs[$key];
            }
        }
        return $count;
    }

    function numJewelsInStones($J, $S) {
        $hash = [];
        for($i = 0;$i<strlen($J);$i++){
            $hash[$J[$i]] = '';
        }
        $num = 0;
        for($j=0;$j<strlen($S);$j++){
            if(isset($hash[$S[$j]])){
                $num ++;
            }
        }
        return $num;
    }

}

$solution = new Solution();
$J = "aA";
$S = "aAAbbbb";
//$J = "z";
//$S = "ZZ";
var_dump($solution->numJewelsInStones($J,$S));