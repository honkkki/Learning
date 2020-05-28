<?php
/**
请定义一个队列并实现函数 max_value 得到队列里的最大值，要求函数max_value、push_back 和 pop_front 的均摊时间复杂度都是O(1)。

若队列为空，pop_front 和 max_value 需要返回 -1

示例 1：

输入:
["MaxQueue","push_back","push_back","max_value","pop_front","max_value"]
[[],[1],[2],[],[],[]]
输出: [null,null,null,2,1,2]
示例 2：

输入:
["MaxQueue","pop_front","max_value"]
[[],[],[]]
输出: [null,-1,-1]

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/dui-lie-de-zui-da-zhi-lcof
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */
class MaxQueue {
    /**
     */
    public $max_value_queue;
    public $queue;
    function __construct() {
        $this->max_value_queue = [];
        $this->queue = [];
    }

    /**
     * @return Integer
     */
    function max_value() {
        //取第一个元素
        return empty($this->max_value_queue) ? -1:$this->max_value_queue[0];
    }

    /**
     * @param Integer $value
     * @return NULL
     */
    function push_back($value) {
        //往正常数组新增value
        //便利max_value_queue数组，得到最大值
        array_push($this->queue,$value);
        while(!empty($this->max_value_queue) && $this->max_value_queue[count($this->max_value_queue)-1] < $value){
            array_pop($this->max_value_queue);
        }
        array_push($this->max_value_queue,$value);

    }

    /**
     * @return Integer
     */
    function pop_front() {
        //弹出第一个元素
        //如果弹出的元素等于最大值，则删除最大值
        if(empty($this->queue)) return -1;
        $value = array_shift($this->queue);
        if($value == $this->max_value_queue[0]){
            array_shift($this->max_value_queue);
        }
        return $value;
    }
}

/**
 * Your MaxQueue object will be instantiated and called as such:
 * $obj = MaxQueue();
 * $ret_1 = $obj->max_value();
 * $obj->push_back($value);
 * $ret_3 = $obj->pop_front();
 */