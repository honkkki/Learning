<?php

/**
 * Created by PhpStorm.
 * User: huahua
 * Date: 2020/3/9
 * Time: 下午2:25
 */
class Test {
    //顺序打印
    public function call() {
        echo PHP_EOL;
        static $i = 0;
        echo $i;
        $i++;
        if ($i < 10) {
            $this->call();
        }
    }

    //递归求和
    public function recursionSum($n) {
        echo $n . "===" . PHP_EOL;
        if ($n > 1) {
            $s = $this->recursionSum($n - 1) + $n;//调用自身，sum（100）=sum（99）+100;以此类推往下递归！
            echo $n . "===" . $s . PHP_EOL;
        } else {
            $s = 1;
            echo '----' . PHP_EOL;
        }
        return $s;
    }

    //阶乘
    public function fact($x){
        if ($x == 1){
            return 1;
        }else{
            return $x*$this->fact($x - 1);
        }
    }

}

$test = new Test();
//$test->call();
//echo $test->recursionSum(100);
echo $test->fact(3);
