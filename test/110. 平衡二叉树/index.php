<?php
/**
给定一个二叉树，判断它是否是高度平衡的二叉树。

本题中，一棵高度平衡二叉树定义为：

一个二叉树每个节点 的左右两个子树的高度差的绝对值不超过1。

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
return $this->travel($root) != -1;
}

function travel($root){
if($root == null) return 0;
$l = $this->travel($root->left);
if($l == -1) return -1;

$r = $this->travel($root->right);
if($r == -1) return -1;

return abs($l-$r) <2 ?max($l,$r)+1:-1;
}
}