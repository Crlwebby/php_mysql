<?php
    class A{
        public static function whichclass(){
            echo __CLASS__."\n";
        }
        public static function test(){
            static::whichclass();
        }
    }

    class B extends A{
        public static function whichclass()
        {
            echo __CLASS__."\n";
        }
    }

    A::test();
    B::test();


?>