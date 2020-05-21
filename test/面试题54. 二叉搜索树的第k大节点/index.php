<?php
/**
面试题54. 二叉搜索树的第k大节点
给定一棵二叉搜索树，请找出其中第k大的节点。



示例 1:

输入: root = [3,1,4,null,2], k = 1
3
/ \
1   4
\
2
输出: 4
示例 2:

输入: root = [5,3,6,2,4,null,null,1], k = 3
5
/ \
3   6
/ \
2   4
/
1
输出: 4
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
    private $res = [];
    function kthLargest($root, $k) {
        $this->helper($root);
        return $this->res[$k-1];
    }

    function helper($root){
        if($root==null) return;
        $this->helper($root->right);
        array_push($this->res,$root->val);
        $this->helper($root->left);
    }
}