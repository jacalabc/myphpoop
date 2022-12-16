<?php
$cat = new Animal;

$dog = new Animal;

echo $cat->type;
echo "<br>";
echo $dog->type;
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
    }

    private function speed(){
        //私有行為內容
        echo "我會叫喔";
    }

}
