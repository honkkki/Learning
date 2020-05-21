<?php
/**
面试题55 - I. 二叉树的深度
输入一棵二叉树的根节点，求该树的深度。从根节点到叶节点依次经过的节点（含根、叶节点）形成树的一条路径，最长路径的长度为树的深度。

例如：

给定二叉树 [3,9,20,null,null,15,7]，

3
/ \
9  20
/  \
15   7
返回它的最大深度 3 。
 */
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function maxDepth($root) {
        if($root == null){
            return 0;
        }elseif($root->left == null || $root->right ==null){
            return $this->maxDepth($root->left)+$this->maxDepth($root->right)+1;
        }else{
            $l = $this->maxDepth($root->left);
            $r = $this->maxDepth($root->right);
            return $l>$r ?$l+1 :$r +1;
        }
    }
}