<?php
/*
spl_autoload_register(function  () {
	include $class_name . '.php';
});

$obj1 = new MyClass1();
$obj2 = new MyClass2(); 
*/

spl_autoload_register(function ($name) {
	var_dump($name);
});

class Foo implements ITest {
	
}