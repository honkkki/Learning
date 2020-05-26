<?php
/**
从上到下打印出二叉树的每个节点，同一层的节点按照从左到右的顺序打印。

 

例如:
给定二叉树: [3,9,20,null,null,15,7],

3
/ \
9  20
/  \
15   7
返回：

[3,9,20,15,7]

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/cong-shang-dao-xia-da-yin-er-cha-shu-lcof
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
     * @return Integer[]
     */
    function levelOrder($root) {
        $res = [];
        $queue = new SplQueue();
        $queue->enqueue($root);
        while(!$queue->isEmpty()){
            $node = $queue->dequeue();
            array_push($res,$node->val);
            if($node->left != null){
                $queue->enqueue($node->left);
            }

            if($node->right != null){
                $queue->enqueue($node->right);
            }
        }
        return $res;
    }

}