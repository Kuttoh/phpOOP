<?php

trait A
{
    public function hi()
    {
        echo 'Hi';
    }
}

trait B
{
    public function users()
    {
        echo ' Kuttoh ';
    }
}

class C
{
    use A,B;
    public function welcome()
    {
        echo 'Welcome';
    }
}

$kuttoh = new C();
$kuttoh->hi();
$kuttoh->users();
$kuttoh->welcome();
