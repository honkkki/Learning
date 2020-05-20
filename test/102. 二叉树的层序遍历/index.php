<?php
/**
102. 二叉树的层序遍历
给你一个二叉树，请你返回其按 层序遍历 得到的节点值。 （即逐层地，从左到右访问所有节点）。



示例：
二叉树：[3,9,20,null,null,15,7],

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
        $res = [];
        $this->level($root,0,$res);
        return $res;
    }

    function level($root,$level,&$res){
        if($root == null) return null;
        $res[$level][]=$root->val;
        $level++;

        if($root->left != null){
            $this->level($root->left,$level,$res);
        }
        if($root->right != null){
            $this->level($root->right,$level,$res);
        }
    }
}