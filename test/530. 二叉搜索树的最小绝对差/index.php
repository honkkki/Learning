<?php
/**
给你一棵所有节点为非负值的二叉搜索树，请你计算树中任意两节点的差的绝对值的最小值。

 

示例：

输入：

1
\
3
/
2

输出：
1

解释：
最小绝对差为 1，其中 2 和 1 的差的绝对值为 1（或者 2 和 3）。

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/minimum-absolute-difference-in-bst
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
     * @return Integer
     */
    private $arr=[];
    function getMinimumDifference($root) {
        $this->travel($root);
        $len = sizeof($this->arr);
        $min = $this->arr[1]-$this->arr[0];
        for($i = 0;$i <$len-1; $i++){
            $min = min($this->arr[$i+1]-$this->arr[$i],$min);
        }
        return $min;
    }

    function travel($root){
        if($root == null) return ;
        $this->travel($root->left);
        $this->arr[]=$root->val;
        $this->travel($root->right);
    }
}