<?php

/**
 * Created by PhpStorm.
 * User: mfhj-dz-001-323
 * Date: 2017/1/5
 * Time: 上午11:52
 */
class SequenceList {
    public $seq_array;
    public $length;
    const   MAX = 100;

    public function init($arr, $n) {
        if ($n > $this::MAX || $n < 0) {
            echo "长度不在区间内";
        } else if ($n == 0) {
            echo "创建空表";
        } else {
            $this->seq_array = $arr;
            $this->length = $n;
            echo "创建成功";
        }
        return $this->seq_array;
    }

    public function add($v, $i) {
        if ($i < 0 || $i > $this->length - 1) {
            echo "wrong index";
        } else {
            for ($j = $this->length - 1; $j >= 0; $j--) {
                $this->seq_array[$j + 1] = $this->seq_array[$j];
            }
            $this->seq_array[$i] = $v;
            $this->length++;
        }
        return $this->seq_array;
    }
    public function delect($i){
        if($this->seq_array!=null){
            if ($i < 0 || $i > $this->length-1){
                echo "wrong index";
                return null;
            }else{
                $dele=$this->seq_array[$i];
                for ($k = $i;$k < $this->length-1;$k++){
                    $this->seq_array[$k]=$this->seq_array[$k+1];
                }
                unset($this->seq_array[$this->length-1]);
                $this->length--;
                echo $this->length;
                return $this->seq_array;
            }
        }
    }

}

$sqList = new SequenceList();
$a = array(2, 3, 6, 5, 9);
var_dump($sqList->init($a, 5));
//var_dump($sqList->add(122, 0));
//var_dump($sqList->length);
var_dump($sqList->delect(1));
//var_dump($sqList->length);


