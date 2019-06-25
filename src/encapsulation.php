<?php

Class Client
{
    public $name;

    private $age;

    private $amount;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        if ($age < 18)
        {
            throw Exception ("Client is below required age");
        }

        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age * 365;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        if ($amount < 1000000)
        {
            throw new Exception('The minimum initial investment amount is 1 million shillings');
        }
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

}

$kuttoh = new Client('Isaac Kuttoh');
$kuttoh->setAge(24);
$kuttoh->setAmount(1000000);

var_dump($kuttoh->getAge());

