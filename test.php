<?php

class A
{
    public static $a = "A";

    public static function display() {
        echo static::$a;
    }
}

class B extends A {
    public static $a = "B";
}

A::display();
B::display();


