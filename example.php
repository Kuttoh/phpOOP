<?php


use Acme\Person;
use Acme\Staff;
use Acme\Business;



$kuttoh = new Person('Isaac Kuttoh');

$staff = new Staff([$kuttoh]);

$bold = new Business($staff);

$bold->hire(new Acme\Person('Esther Muthoni'));
$bold->hire(new Acme\Person('Jessica Obonyo'));

var_dump($bold->getStaffMembers());
