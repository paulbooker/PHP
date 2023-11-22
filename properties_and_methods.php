<?php
/*
class Foo
{
	public $bar = 'property';
	
	public function bar() {
		return 'method';
	}
}

$obj = new Foo();

echo $obj->bar, PHP_EOL, $obj->bar(), PHP_EOL;
*/
class Foo
{
	public $bar;
	
	public function __construct() {
		$this->bar = function() {
			return 42;
		};
	}
}

$obj = new Foo();

echo ($obj->bar)(), PHP_EOL;
//42 ?