<?php
/**
将一个按照升序排列的有序数组，转换为一棵高度平衡二叉搜索树。

本题中，一个高度平衡二叉树是指一个二叉树每个节点 的左右两个子树的高度差的绝对值不超过 1。

示例:

给定有序数组: [-10,-3,0,5,9],

一个可能的答案是：[0,-3,9,-10,null,5]，它可以表示下面这个高度平衡二叉搜索树：

0
/ \
-3   9
/   /
-10  5
通过次数67,742提交
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
     * @param Integer[] $nums
     * @return TreeNode
     */
    function sortedArrayToBST($nums) {
        return $this->helper($nums,0,count($nums));
    }

    function helper($nums,$left,$right){
        if($left == $right) return $null;
        $mid = floor(($left+$right)/2);
        $node = new TreeNode($nums[$mid]);
        $node->left=$this->helper($nums,$left,$mid);
        $node->right = $this->helper($nums,$mid+1,$right);
        return $node;

    }
}