<?php

/**
232. 用栈实现队列
使用栈实现队列的下列操作：

push(x) -- 将一个元素放入队列的尾部。
pop() -- 从队列首部移除元素。
peek() -- 返回队列首部的元素。
empty() -- 返回队列是否为空。
示例:

MyQueue queue = new MyQueue();

queue.push(1);
queue.push(2);
queue.peek();  // 返回 1
queue.pop();   // 返回 1
queue.empty(); // 返回 false
 */
class MyQueue {
    /**
     * Initialize your data structure here.
     */
    private $stackPush;
    private $stackPop;

    function __construct() {
        $this->stackPush = new SplStack();
        $this->stackPop = new SplStack();
    }

    /**
     * Push element x to the back of queue.
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        $this->stackPush->push($x);
    }

    /**
     * Removes the element from in front of queue and returns that element.
     * @return Integer
     */
    function pop() {
        if ($this->stackPop->isEmpty()){
            $this->shift();
        }
        return $this->stackPop->pop();

    }

    function shift(){
        while(!$this->stackPush->isEmpty()){
            $this->stackPop->push($this->stackPush->pop());
        }
    }

    /**
     * Get the front element.
     * @return Integer
     */
    function peek() {
        if ($this->stackPop->isEmpty()){
            $this->shift();
        }
        return $this->stackPop->top();
    }

    /**
     * Returns whether the queue is empty.
     * @return Boolean
     */
    function empty() {
        return $this->stackPop->isEmpty() && $this->stackPush->isEmpty();
    }
}


/**
 * Your MyQueue object will be instantiated and called as such:
 * $obj = MyQueue();
 * $obj->push($x);
 * $ret_2 = $obj->pop();
 * $ret_3 = $obj->peek();
 * $ret_4 = $obj->empty();
 */
$query = new MyQueue();
$query->push(1);
$query->push(2);
echo $query->peek();  // 返回 1
echo $query->pop();   // 返回 1
echo $query->empty(); // 返回 false