<?php
/**
给定一个 N 叉树，返回其节点值的前序遍历。

例如，给定一个 3叉树 :

返回其前序遍历: [1,3,5,6,2,4]。
 */
/**
 * Definition for a Node.
 * class Node {
 *     public $val = null;
 *     public $children = null;
 *     function __construct($val = 0) {
 *         $this->val = $val;
 *         $this->children = array();
 *     }
 * }
 */

class Solution {
    /**
     * @param Node $root
     * @return integer[]
     */
    function preorder($root) {
        $res = [];
        $this->helper($root,$res);
        return $res;
    }

    function helper($root,&$res){
        if($root == null) return ;
        $res[]=$root->val;
        foreach($root->children as $children){
            $this->helper($children,$res);
        }
    }
}