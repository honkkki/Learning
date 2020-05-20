<?php
/**
101. 对称二叉树
给定一个二叉树，检查它是否是镜像对称的。



例如，二叉树 [1,2,2,3,4,4,3] 是对称的。

1
/ \
2   2
/ \ / \
3  4 4  3


但是下面这个 [1,2,2,null,3,null,3] 则不是镜像对称的:

1
/ \
2   2
\   \
3    3
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
    function isSymmetric($root) {
        return $this->helper($root,$root);
    }

    function helper($root1,$root2){
        if($root1 == null && $root2 ==null) return true;
        if($root1 == null || $root2 == null) return false;
        if($root1->val != $root2->val) return false;

        $ret = $this->helper($root1->left,$root2->right);
        $ret1 = $this->helper($root1->right,$root2->left);
        return $ret && $ret1;
    }
}