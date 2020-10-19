<?php
    class manner{
        private $attribute;
        function __construct($value)
        {
            $this->attribute=$value;
        }
        function __get($name)
        {
            return $this->$name;
        }
    }
    $demo = new manner("hello");
    echo $demo->attribute;

    class math{
        const pi = 3.1415;
    }
    echo "\nmath::pi=".math::pi;
?>