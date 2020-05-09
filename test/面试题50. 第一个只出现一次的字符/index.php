<?php

/**
 * 在字符串 s 中找出第一个只出现一次的字符。如果没有，返回一个单空格。
 * 示例:
 *
 * s = "abaccdeff"
 * 返回 "b"
 *
 * s = ""
 * 返回 " "
 */
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function firstUniqChar($s) {
        $arr=array_count_values(str_split($s));
        for($i = 0;$i<strlen($s);$i++){
            if ($arr[$s[$i]] == 1){
                return $s[$i];
            }
        }
        return ' ';
    }

    //如果下标等于截取他的长度一致，就说明他是第一个首次出现的
    //strrpos：查找 "php" 在字符串中最后一次出现的位置：
    function firstUniqChar1($s) {
        $tmp=[];
        for($i=0;$i<strlen($s);$i++){
            if(isset($tmp[$s[$i]])){
                echo '存在'.PHP_EOL;
                continue;
            }
            if($i==strrpos($s,$s[$i])){
                return $s[$i];
            }
            echo 'bu 存在'.PHP_EOL;
            $tmp[$s[$i]]=1;
        }
        return " ";
    }
}

$solution = new Solution();
$s = "raraccdeff";
var_dump($solution->firstUniqChar1($s));