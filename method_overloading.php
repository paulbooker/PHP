<?php

class MethodTest
{
	public function __call($name, $arguments)
	{
		// Note: value of $name is case sensitive.
		echo "Calling object method '$name' "
			. implode(', ', $arguments) . "\n";
	}
	
	public static function __callStatic($name, $arguments)
	{
		// Note: value of $name is case sensitive.
		echo "Calling static method '$name' "
			. implode(', ', $arguments) . "\n"; 
	}
}

$obj = new MethodTest;
$obj->runTest('in', 'argument', 'context');

MethodTest::runTest('in', 'static', 'context');