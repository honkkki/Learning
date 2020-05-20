<?php
/**
面试题32 - II. 从上到下打印二叉树 II
从上到下按层打印二叉树，同一层的节点按从左到右的顺序打印，每一层打印到一行。



例如:
给定二叉树: [3,9,20,null,null,15,7],

3
/ \
9  20
/  \
15   7
返回其层次遍历结果：

[
[3],
[9,20],
[15,7]
]
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
     * @return Integer[][]
     */
    function levelOrder($root) {
        $res= [];
        $this->helper($root,0,$res);
        return $res;
    }

    function helper($root,$level,&$res){
        if($root == null) return null;
        $res[$level][]=$root->val;
        $level++;
        if($root->left != null){
            $this->helper($root->left,$level,$res);
        }

        if($root->right != null){
            $this->helper($root->right,$level,$res);
        }
    }
}