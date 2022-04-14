<?php

class Team{
    protected $name;
    protected $members = [];
    protected $age;

    public function __construct($name, $members = [], $age)
    {
        $this->name = $name;
        $this->members = $members;
        $this->age = $age;
    }

    public function name(){
        return $this->name;
    }

    public static function start(...$params){
        return new static(...$params);
    }

    public function members(){
        return $this->members;
    }

    public function add($name){
        $this->members[] = $name;
    }

    public function cancel(){

    }

    public function admin(){

    }
}

class Member{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

$object1 = Team::start('Laravel', [
    new Member('Kyaw Kyaw'),
    new Member('Aung Aung')
], 20);

$object2 = Team::start('Css', [
    new Member('Kyaw Kyaw'),
    new Member('Aung Aung')
], 20);

var_dump($object1);
var_dump($object2);
?>