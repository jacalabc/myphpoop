<?php
// $cat = new Animal;
// $dog = new Animal;
// echo $cat->type;
// echo "<br>";
// echo $dog->type;

// 方法的使用
$cat = new Animal;
$dog = new Animal;
$cat->run();
$cat->speed();
Class Animal{
    protected $type='animal';
    protected $name='John';
    protected $hair_color="brown";

    public function __constructor(){
        //建構式內容
    }

    public function run(){
        //公開行為內容
        echo "我會跑喔";
        $this->speed();
        echo $this->type;
    }

    private function speed(){
        //私有行為內容
        echo "我會加速喔";       
    }

}
