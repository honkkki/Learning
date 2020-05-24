<?php
/**
根据一棵树的中序遍历与后序遍历构造二叉树。

注意:
你可以假设树中没有重复的元素。

例如，给出

中序遍历 inorder = [9,3,15,20,7]
后序遍历 postorder = [9,15,7,20,3]
返回如下的二叉树：

3
/ \
9  20
/  \
15   7

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/construct-binary-tree-from-inorder-and-postorder-traversal
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
     * @param Integer[] $inorder
     * @param Integer[] $postorder
     * @return TreeNode
     */
    function buildTree($inorder, $postorder) {
        if(!$postorder) return null;
        $x = array_pop($postorder);
        $node = new TreeNode($x);
        $key = array_search($x,$inorder);
        $node->left= $this->buildTree(array_slice($inorder,0,$key),array_slice($postorder,0,$key));
        $node->right = $this->buildTree(array_slice($inorder,$key+1),array_slice($postorder,$key));
        return $node;
    }
}