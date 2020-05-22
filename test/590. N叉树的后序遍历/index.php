<?php
/**
590. N叉树的后序遍历
给定一个 N 叉树，返回其节点值的后序遍历。

例如，给定一个 3叉树 :

返回其后序遍历: [5,6,3,2,4,1].
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
    function postorder($root) {
        $res = [];
        $this->helper($root,$res);
        $res[]=$root->val;
        return $res;
    }

    function helper($root,&$res){
        if($root == null) return ;
        foreach($root->children as $children){
            $this->helper($children,$res);
            $res[]= $children->val;
        }
    }
}