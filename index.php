<?php
// 方法的使用
// $cat = new Animal;
// $dog = new Animal;
// $cat->run();
// $cat->speed();

// 建構式的使用
$cat = new Cat('小花','黑白');
echo $cat->getType();
echo $cat->getName();
echo $cat->getColor();
$cat->hide();
$dog = new Dog('普魯斯','黑色');
echo $dog->getType();
echo $dog->getName();
echo $dog->getColor();
$dog->eat();

class Animal
{
    protected $type = 'animal';
    protected $name = 'John';
    protected $hair_color = "brown";

    public function __construct($name,$color,$type)
    {
        //建構式內容
        // $this->run();
        $this->name=$name;
        $this->hair_color=$color;
        $this->type=$type;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getColor()
    {
        return $this->hair_color;
    }
    public function getType()
    {
        return $this->type;
    }


    public function run()
    {
        //公開行為內容
        echo "我會跑喔";
        $this->speed();
        echo $this->type;
    }

    private function speed()
    {
        //私有行為內容
        echo "我會加速喔";
    }   
}
class Cat extends Animal{
        public function __construct($name,$color)
        {
            $this->name=$name;
            $this->hair_color=$color;
            $this->type='貓';
        }
        public function hide(){
            echo "很會躲";
        }
}

class Dog extends Animal{
    public function __construct($name,$color)
    {
        $this->name=$name;
        $this->hair_color=$color;
        $this->type='狗';        
    }   
    public function eat(){
        echo "很會吃";
    }
}



