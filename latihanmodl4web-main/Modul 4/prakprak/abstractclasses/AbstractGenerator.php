<?php

namespace abstractclasses;

abstract class AbstractGenerator
{
    protected $number;
    protected $output;

    abstract public function generateOutput($i);

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function generate()
    {
        $result = [];
        for ($i = 1; $i <= $this->number; $i++) {
            $this->generateOutput($i);
            $result[] = $this->output;
        }

        return $result;
    }
}
