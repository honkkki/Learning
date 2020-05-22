<?php
/**
给你一个树，请你 按中序遍历 重新排列树，使树中最左边的结点现在是树的根，并且每个结点没有左子结点，只有一个右子结点。



示例 ：

输入：[5,3,6,2,4,null,8,1,null,null,null,7,9]

5
/ \
3    6
/ \    \
2   4    8
/        / \
1        7   9

输出：[1,null,2,null,3,null,4,null,5,null,6,null,7,null,8,null,9]

1
\
2
\
3
\
4
\
5
\
6
\
7
\
8
\
9


提示：

给定树中的结点数介于 1 和 100 之间。
每个结点都有一个从 0 到 1000 范围内的唯一整数值。
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
    function increasingBST($root) {
        $res = [];
        $this->helper($root,$res);
        $root = new TreeNode(0);
        $node = $root;
        while(!empty($res)){
            $val=array_shift($res);
            $node->right = new TreeNode($val);
            $node = $node->right;
        }
        return $root->right;
    }

    public function helper($root,&$res){
        if($root == null) return ;
        $this->helper($root->left,$res);
        $res[]=$root->val;
        $this->helper($root->right,$res);
    }
}