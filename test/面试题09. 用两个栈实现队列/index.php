<?php
/**
用两个栈实现一个队列。队列的声明如下，请实现它的两个函数 appendTail 和 deleteHead ，分别完成在队列尾部插入整数和在队列头部删除整数的功能。(若队列中没有元素，deleteHead 操作返回 -1 )

 

示例 1：

输入：
["CQueue","appendTail","deleteHead","deleteHead"]
[[],[3],[],[]]
输出：[null,null,3,-1]
示例 2：

输入：
["CQueue","deleteHead","appendTail","appendTail","deleteHead","deleteHead"]
[[],[],[5],[2],[],[]]

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/yong-liang-ge-zhan-shi-xian-dui-lie-lcof
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */
class CQueue {
    /**
     */
    private $stack_push;
    private $stack_pop;
    function __construct() {
        $this->stack_push = new SplStack();
        $this->stack_pop = new SplStack();
    }

    /**
     * @param Integer $value
     * @return NULL
     */
    function appendTail($value) {
        $this->stack_push->push($value);
    }

    /**
     * @return Integer
     */
    function deleteHead() {
        if($this->stack_pop->isEmpty()){
            $this->shift();
        }
        if($this->stack_pop->isEmpty()) return -1;
        return $this->stack_pop->pop();
    }

    function shift(){
        while(!$this->stack_push->isEmpty()){
            $this->stack_pop->push($this->stack_push->pop());
        }
    }
}

/**
 * Your CQueue object will be instantiated and called as such:
 * $obj = CQueue();
 * $obj->appendTail($value);
 * $ret_2 = $obj->deleteHead();
 */