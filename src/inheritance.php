<?php

abstract Class Shape{}

Class Circle extends Shape
{
    protected $length;

    public function getArea($length)
    {
        $this->length = $length;
        return pow($length, 2);
    }
}

//var_dump((new Circle) -> getArea(5));

Class Rectangle extends Shape
{
    protected $length, $width;

    /**
     * @return mixed
     */
    public function getArea($length, $width)
    {
        if ($length < $width)
        {
            throw new Exception('Length cannot be longer than width.');
        }

        $this->length = $length;
        $this->width = $width;

        return $length * $width;
    }

}

var_dump((new Rectangle)->getArea(4, 5));
