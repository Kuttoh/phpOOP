<?php

Class Task
{
    public $title;
    public $description;

    public $completed = false;

    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }
}

$task = new Task("Wake Up", 'I have to wake up from my dream');

var_dump($task->title);
var_dump($task->description);

//$task2 = new Task("Brush your teeth!");

//$task->complete();
//
//var_dump($task->completed);
//var_dump($task2->description);

