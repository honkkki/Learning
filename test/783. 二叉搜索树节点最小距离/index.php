<?php
/**
给定一个二叉搜索树的根节点 root，返回树中任意两节点的差的最小值。

 

示例：

输入: root = [4,2,6,1,3,null,null]
输出: 1
解释:
注意，root是树节点对象(TreeNode object)，而不是数组。

给定的树 [4,2,6,1,3,null,null] 可表示为下图:

4
/   \
2      6
/ \
1   3

最小的差值是 1, 它是节点1和节点2的差值, 也是节点3和节点2的差值。
 

注意：

二叉树的大小范围在 2 到 100。
二叉树总是有效的，每个节点的值都是整数，且不重复。
本题与 530：https://leetcode-cn.com/problems/minimum-absolute-difference-in-bst/ 相同

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/minimum-distance-between-bst-nodes
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
    private $arr = [];
    function minDiffInBST($root) {
        $this->travel($root);
        $len = sizeof($this->arr);
        $min = $this->arr[1]-$this->arr[0];
        for($i = 1;$i<$len-1;$i++){
            $min = min($this->arr[$i+1]-$this->arr[$i],$min);
        }
        return $min;
    }

    function travel($root){
        if($root == null ) return ;
        $this->travel($root->left);
        $this->arr[]=$root->val;
        $this->travel($root->right);
    }
}