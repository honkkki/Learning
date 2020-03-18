<?php

class Search {
    public function test($arrs) {
        foreach ($arrs as $arr) {
            $queue = $arr;
            $tag = false;
            while (!empty($queue)) {
                $person = array_shift($queue);
                $searched = [];
                if (in_array($person, $searched)) continue;
                $searched[] = $searched;
                if ($this->person_is_seller($person)) {
                    echo 'person ' . $person;
                    $tag = true;
                } else {
                    $queue = array_merge($queue, $arrs["$person"]);
                }
            }
            if ($tag) {
                return;
            }
        }
    }

    public function person_is_seller($name) {
        return strpos($name, 'm');
    }
}

$arr = [
    'you' => ["alice", "bob", "claire"],
    'bob' => ["anuj", "peggy"],
    'alice' => ["peggy"],
    'claire' => ["tho", "jonny"],
    'peggy' => [],
    'anuj' => ['nm'],
    'thom' => [],
    'jonny' => []
];

$target = new Search();
$target->test($arr);


//求 A -> F的最短路径
//$start='C' ;$target='F';
//function BFS($arr, $start, $target) {
//    $queue = $arr[$start];   //节点队列
//    $path = [];              //记录最短路径
//    foreach ($arr[$start] as $val) {
//        $path[$val] = $start;
//    }
//    var_dump($path);
//    $searched = [];          //标记已经访问过的节点
//    while (!empty($queue)) {
//        $head = array_shift($queue);
//        if ($head == $target) {    //找到目标
//            break;
//        }
//        if (in_array($head, $searched)) {  //已经访问过，直接跳过
//            continue;
//        }
//        $searched[] = $head;
//        foreach ($arr[$head] as $val) {
//            $path[$val] = $head;
//        }
//        $queue = array_merge($queue, $arr[$head]);
//    }
//
//    $pathto = [];
//    while (!empty($path[$target])) {
//        $pathto[] = $target;
//        $target = $path[$target];
//    }
//    $pathto[] = $target;
//    $pathstr = "";
//    for ($i = count($pathto) - 1; $i >= 0; $i--) {
//        $pathstr .= $pathto[$i] . "->";
//    }
//    $pathstr = substr($pathstr, 0, strlen($pathstr) - 2);
//    echo "min path:" . $pathstr;
//}
//
//
//BFS($arr, 'A', 'F');