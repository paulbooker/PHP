<?php
/*	
class ClassA extends \stdClass {}
class ClassB extends \stdClass {}
class ClassC extends ClassB {}
class ClassD extends ClassA {}

function  getSomeClass(): string
{
	return 'ClassA';
}

//var_dump(new (getSomeClass()));
//object(ClassA)#1 (0) {
//}

//var_dump(new ('Class' . 'B'));
//object(ClassB)#1 (0) {
//}

//var_dump(new ('Class' . 'C'));
//object(ClassC)#1 (0) {
//}

//var_dump(new (ClassD::class));
//object(ClassD)#1 (0) {
//}
*/
/*
class SimpleClass {
	//property declaration
	public $var = 'default value';
	
	//method declaration
	public function displayVar() {
		echo $this->var;
	}
}

$instance = new SimpleClass();

$assigned = $instance;
$reference =& $instance; 

$instance->var = '$assigned will have this value';

$instance = null; // $instance and $reference become null

var_dump($instance);
var_dump($reference);
var_dump($assigned);
*/
class Test
{
	static public function getNew()
	{
		return new static;
	}
}

Class Child extends Test
{}


//$obj1 = new Test();
//$obj2 = new $obj1;
//var_dump($obj1);
//var_dump($obj2);
//var_dump($obj1 !== $obj2); //bool(true)

//$obj3 = Test::getNew();
//var_dump($obj3 instanceof Test);

//$obj4 = Child::getNew();
//var_dump($obj4 instanceof Child);