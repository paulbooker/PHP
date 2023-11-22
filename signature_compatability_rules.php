<?php
/*	
class Base
{
	public function foo(int $a) {
		echo "Valid\n";
	}
}

class Extend1 extends Base
{
	function foo(int $a = 5)
	{
		parent::foo($a);
	}
}

class Extend2 extends Base
{
	function foo(int $a, $b = 5)
	{
		parent::foo($a);
	}
}

$extended1 = new Extend1();
$extended1->foo();
$extended2 = new Extend2();
$extended2->foo(1);
*/
/*
class Base
{
	public function foo(int $a = 5) {
		echo "Valid\n";
	}
}

class Extend extends Base
{
	function foo()
	{
		parent::foo(1);
	}
}
*/
/*
class Base 
{
	public function foo(int $a = 5) {
		echo "Valid\n";
	}
}

Class Extend extends Base 
{
	function foo(int $a) 
	{
		parent::foo($a);
	}
}
*/
class A {
	public function test($foo, $bar) {}
}

class B extends A {
	public function test($a, $b) {}
}

$obj = new B;
//Pass parameters according to A::test() contract
$obj->test(foo: "foo", bar: "bar");
//Fatal error: Uncaught Error: Unknown named parameter $foo