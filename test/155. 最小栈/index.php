<?php

/**
设计一个支持 push ，pop ，top 操作，并能在常数时间内检索到最小元素的栈。

push(x) —— 将元素 x 推入栈中。
pop() —— 删除栈顶的元素。
top() —— 获取栈顶元素。
getMin() —— 检索栈中的最小元素。
示例:

MinStack minStack = new MinStack();
minStack.push(-2);
minStack.push(0);
minStack.push(-3);
minStack.getMin();   --> 返回 -3.
minStack.pop();
minStack.top();      --> 返回 0.
minStack.getMin();   --> 返回 -2.
 */
class MinStack {
    /**
     * 数组结构实现
     */
    private $arr = null;
    private $count = 0;
    function __construct() {
        $this->arr = [];
    }

    /**
     * @param Integer $x
     * @return NULL
     * 将元素 x 推入栈中。
     */
    function push($x) {
       $this->arr[]=$x;
        $this->count++;
    }

    /**
     * @return NULL
     * 删除栈顶的元素。
     */
    function pop() {
        array_pop($this->arr);
        $this->count--;
    }

    /**
     * @return Integer
     * 获取栈顶元素
     */
    function top() {
        echo $this->arr[$this->count-1];
    }

    /**
     * @return Integer
     * 检索栈中的最小元素
     */
    function getMin() {
        echo min($this->arr);
    }
}

$MinStack = new MinStack();
$MinStack->push(-2);
$MinStack->push(0);
$MinStack->push(-3);
$MinStack->getMin();   //--> 返回 -3->
$MinStack->pop();

$MinStack->top();      //--> 返回 0->
$MinStack->getMin();   //--> 返回 -2->
