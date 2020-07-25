<?php
     abstract class Pet{
        protected $name, $voice, $age;
        abstract protected function say_name();
        abstract protected function give_a_voice();
        public function tell_age(){
            echo "Мне - {$this->age} лет.<br>";
        }
        public function __construct(string $name,string $voice, int $age){
            $this->name = $name;
            $this->voice = $voice;
            $this->age = $age;
        }
    }

    class Cat extends Pet{
        public function say_name(){
            echo "Привет, я кошка и меня зовут - {$this->name}.<br>";
        }
        public function give_a_voice(){
            echo "Я кошка и говорю - {$this->voice}.<br>";
        }
    }

    class Dog extends Pet{
        public function say_name(){
            echo "Привет, я собака и меня зовут - {$this->name}.<br>";
        }
        public function give_a_voice(){
            echo "Я собака и говорю - {$this->voice}.<br>";
        }
    }

    $cat = new Cat("Мася","Мяу",12);
    $cat->say_name();
    $cat->give_a_voice();
    $cat->tell_age();

    $dog = new Dog("Дункан","Гаф",8);
    $dog->say_name();
    $dog->give_a_voice();
    $dog->tell_age();

?>