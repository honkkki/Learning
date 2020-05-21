<?php
/**
翻转一棵二叉树。

示例：

输入：

4
/   \
2     7
/ \   / \
1   3 6   9
输出：

4
/   \
7     2
/ \   / \
9   6 3   1

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
     * @return TreeNode
     */
    function invertTree($root) {
        if($root == null) return ;
        $temp = $root->right;
        $root->right = $root->left;
        $root->left = $temp;

        $this->invertTree($root->right);
        $this->invertTree($root->left);
        return $root;


    }
}