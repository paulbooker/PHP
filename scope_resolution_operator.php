<?php
/*	
class MyClass {
	const CONST_VALUE = 'A constant value';
}

//$classname = 'MyClass';
//echo $classname::CONST_VALUE;

//echo MyClass::CONST_VALUE;

class OtherClass extends MyClass
{
	public static $my_static = 'static var';
	
	public static function doubleColon() {
		echo parent::CONST_VALUE . "\n";
		echo self::$my_static . "\n";
	}
}

//$classname = 'OtherClass';
//$classname::doubleColon();

OtherClass::doubleColon();
*/

class MyClass
{
	protected function myFunc() {
		echo "MyClass::myFunc()\n";
	}
}

class OtherClass extends MyClass
{
	// Override parent's definition
	public function myFunc()
	{
		// But still call the parent function
		parent::myFunc();
		echo "OtherClass::myFunc()\n";
	}
}

$class = new OtherClass();
$class->myFunc();