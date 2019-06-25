<?php

trait Hello
{
    public function sayHello()
    {
        echo 'Hello';
    }
}

trait Salute
{
    public function saySalute()
    {
        echo ' Mr. ';
    }
}

class Users
{
    use Hello, Salute;
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function user()
    {
       echo $this->name;
    }
}


$user = new Users("Kipng'eno Kuttoh");
$user->sayHello();
$user->saySalute();
$user->user();



