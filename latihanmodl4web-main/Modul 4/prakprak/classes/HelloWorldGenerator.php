<?php

namespace classes;
use abstractclasses\AbstractGenerator;
use traits\HelloWorldTrait;

class HelloWorldGenerator extends AbstractGenerator
{
    use HelloWorldTrait;

    public function generateOutput($i)
    {
        if ($i % 3 == 0 && $i % 5 == 0) {
            $this->output = $this->printHelloWorld();
        } elseif ($i % 3 == 0) {
            $this->output = "Hello";
        } elseif ($i % 5 == 0) {
            $this->output = "World";
        } else {
            $this->output = $i;
        }
    }
}
