<?php
/**

实现一个函数，检查二叉树是否平衡。在这个问题中，平衡树的定义如下：任意一个节点，其两棵子树的高度差不超过 1。


示例 1:
给定二叉树 [3,9,20,null,null,15,7]
3
/ \
9  20
/  \
15   7
返回 true 。
示例 2:
给定二叉树 [1,2,2,3,3,null,null,4,4]
1
/ \
2   2
/ \
3   3
/ \
4   4
返回 false 。
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
     * @return Boolean
     */
    function isBalanced($root) {
        return  $this->helper($root) != -1;
    }

    function helper($root){
        if($root == null) return 0;

        $l = $this->helper($root->left);
        if($l == -1) return -1;

        $r = $this->helper($root->right);
        if($r == -1) return -1;

        return abs($l- $r)<2 ?max($l,$r)+1:-1;

    }

}