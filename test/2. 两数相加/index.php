<?php
/**
给出两个 非空 的链表用来表示两个非负的整数。其中，它们各自的位数是按照 逆序 的方式存储的，并且它们的每个节点只能存储 一位 数字。

如果，我们将这两个数相加起来，则会返回一个新的链表来表示它们的和。

您可以假设除了数字 0 之外，这两个数都不会以 0 开头。

示例：

输入：(2 -> 4 -> 3) + (5 -> 6 -> 4)
输出：7 -> 0 -> 8
原因：342 + 465 = 807
 */
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution {
    /**
     * 使用递归
     */
    function addTwoNumbers1($l1, $l2) {
        $this->add($l1,$l2,0);
    }

    /**
     * @param $l1
     * @param $l2
     * @param $jinwei
     * @return ListNode
     */
    function add($l1,$l2,$jinwei){
        //计算两数相加后的个位
        $sum = new ListNode(($l1->val + $l2->val + $jinwei) % 10);
        //计算两数相加后是否大于10，是则进1，否则进0
        $jinwei = floor(($l1->val + $l2->val + $jinwei) / 10);

        if ($l1->next || $l2->next || $jinwei) {
            //l1和l2的next都有可能是null，如果是null就给个0
            if (is_null($l1->next)) {
                $l1->next = new ListNode(0);
            }
            if (is_null($l2->next)) {
                $l2->next = new ListNode(0);
            }
            $sum->next = $this->add($l1->next, $l2->next, $jinwei);
        }
        return $sum;
    }
    /**
    暴力解决
     */
    function addTwoNumbers2($l1, $l2) {
        $list = new ListNode(0);
        $cur = $list;
        $add = 0;

        while($l1 || $l2){
            $x = $l1 != null ?$l1->val :0;
            $y = $l2 != null ?$l2->val :0;

            $val = ($x+$y+$add)%10;
            $add = ($x+$y+$add)/10;

            $new = new ListNode($val);
            $cur->next = $new;
            $cur = $cur->next;

            if ($l1 != null){
                $l1 = $l1->next;
            }
            if ($l2 != null){
                $l2 = $l2->next;
            }
        }
        if ($add > 0 ){
            $cur->next = new ListNode($add);
        }
        return $list->next;
    }
}