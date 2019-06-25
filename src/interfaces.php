<?php

interface CanBeFiltered
{
    public function filter();
}

class Starred implements CanBeFiltered
{
    public function filter()
    {
        // TODO: Implement filter() method.
    }
}

class Unread implements CanBeFiltered
{
    public function filter()
    {
        // TODO: Implement filter() method.
    }
}

class Sent implements CanBeFiltered
{
    public function filter()
    {
        // TODO: Implement filter() method.
    }
}

