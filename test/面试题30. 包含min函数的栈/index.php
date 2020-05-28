<?php
/**
定义栈的数据结构，请在该类型中实现一个能够得到栈的最小元素的 min 函数在该栈中，调用 min、push 及 pop 的时间复杂度都是 O(1)。

 

示例:

MinStack minStack = new MinStack();
minStack.push(-2);
minStack.push(0);
minStack.push(-3);
minStack.min();   --> 返回 -3.
minStack.pop();
minStack.top();      --> 返回 0.
minStack.min();   --> 返回 -2.

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/bao-han-minhan-shu-de-zhan-lcof
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */
class MinStack {
    /**
     * initialize your data structure here.
     */

    function __construct() {
        $this->stack =[];
        $this->min =null;
    }

    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        if(!$this->stack){
            $this->min = $x;
        }else{
            $this->min = min($this->min,$x);
        }
        $this->stack[]=$x;
    }

    /**
     * @return NULL
     */
    function pop() {
        $last = $this->stack[count($this->stack)-1];
        unset($this->stack[count($this->stack)-1]);
        $this->stack=array($this->stack);
        if($this->min == $last){
            $this->min = min($this->stack);
        }
    }

    /**
     * @return Integer
     */
    function top() {
        if($this->stack){
            return $this->stack[count($this->stack)-1];
        }else{
            return null;
        }

    }

    /**
     * @return Integer
     */
    function min() {
        return $this->min;
    }
}

/**
 * Your MinStack object will be instantiated and called as such:
 * $obj = MinStack();
 * $obj->push($x);
 * $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->min();
 */