<?php

/**
 * Created by PhpStorm.
 * User: mfhj-dz-001-323
 * Date: 2017/1/9
 * Time: 上午10:49
 */
class node {

    public $data;
    public $next;

    public function __construct($data = null, $next = null) {
        $this->data = $data;
        $this->next = $next;
    }
}

class sList {
    private $header;

    public function __construct($data = null, $next = null) {
        $this->header = new node($data, $next);
        echo "construct\n";
    }

    //头插法
    public function create() {


        for ($i = 1; $i < 6; $i++) {
            $p = new node();
            $p->data=$i;
            $p->next=$this->header->next;
            //var_dump($p);
        }
        var_dump($this);
        return $this;
    }

    //第i个节点位置插入
    public function add($node, $i) {
        $p = $this->header;
        $j = 0;
        while ($p && $j < $i) {
            $p = $p->next;
            $j++;
        }
        var_dump($p);exit;
        if (!$p || $j > $i) {
            echo "i不存在";
            return 0;
        }
        $node->next = $p->next;
        $p->next = $node;
        return 1;
    }

    //删除第i个节点位置
    public function delete($i) {
        $p = $this->header;
        $j = 0;
        while ($p && $j < $i) {
            $p = $p->next;
            $j++;
        }
        if (!$p || $j > $i) {
            echo "i不存在";
            return null;
        }
        $q = $p->next;
        $p->next = $q;
        return $q;
    }
}

$sList=new sList();
$node= new node(1);
var_dump($sList->add($node,1));
//echo $sList;
//var_dump($sList);