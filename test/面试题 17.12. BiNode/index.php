<?php
/**
二叉树数据结构TreeNode可用来表示单向链表（其中left置空，right为下一个链表节点）。实现一个方法，把二叉搜索树转换为单向链表，要求值的顺序保持不变，转换操作应是原址的，也就是在原始的二叉搜索树上直接修改。

返回转换后的单向链表的头节点。

注意：本题相对原题稍作改动

 

示例：

输入： [4,2,5,1,3,null,6,0]
输出： [0,null,1,null,2,null,3,null,4,null,5,null,6]

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/binode-lcci
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
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
    function convertBiNode($root) {
        $res = [];
        $this->helper($root,$res);
        $root = new TreeNode(0);
        $node = $root;
        while(!empty($res)){
            $val = array_shift($res);
            $node->right = new TreeNode($val);
            $node = $node->right;
        }
        return $root->right;
    }

    function helper($root,&$res){
        if($root == null) return  null;
        if($root->left != null){
            $this->helper($root->left,$res);
        }
        $res[]=$root->val;
        if($root->right != null){
            $this->helper($root->right,$res);
        }

    }
}