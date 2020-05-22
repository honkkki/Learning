<?php
/**
给定一个 N 叉树，找到其最大深度。

最大深度是指从根节点到最远叶子节点的最长路径上的节点总数。

例如，给定一个 3叉树 :







我们应返回其最大深度，3。

说明:

树的深度不会超过 1000。
树的节点总不会超过 5000。
通过次数22,985提交次数33,081
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
     * @return integer
     */
    function maxDepth($root) {
        if($root == null){
            return 0;
        }elseif(empty($root->children)){
            return 1;
        }else{
            $res = 0;
            foreach($root->children as $children){
                $temp = $this->maxDepth($children);
                $res = max($temp,$res);
            }
            return $res+1;
        }
    }
}