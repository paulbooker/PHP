<?php
/*
// Using an explicit class
class Logger
{
	public function log($msg)
	{
		echo $msg;
	}
}

$util->setLogger(new Logger());

// Using an anonymous class
$util->setLogger(new Class{
	public function log($msg)
	{
		echo $msg;
	}
});
*/	
/*
class SomeClass {}
interface SomeInterface {}
trait SomeTrait {}

var_dump(new class(10) extends SomeClass implements SomeInterface {
	private $num;
	
	public function __construct($num)
	{
		$this->num = $num;
	}
	
	use SomeTrait;
});

//object(SomeClass@anonymous)#1 (1) {
//  ["num":"SomeClass@anonymous":private]=>
//  int(10)
//}
*/