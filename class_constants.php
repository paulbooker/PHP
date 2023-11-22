<?php
/*
class MyClass
{
	const CONSTANT = 'constant value';
	
	function showConstant() {
		echo self::CONSTANT . "\n";
	}
}

echo MyClass::CONSTANT . "\n";

$classname = "MyClass";
echo $classname::CONSTANT . "\n";

$class = new MyClass();
$class->showConstant();

echo $class::CONSTANT;
*/
/*
namespace foo {
	class bar {
		
	}
	
	echo bar::class;  // foo\bar
}
*/
/*
const ONE = 1;
class foo {
	const TWO = ONE * 2;
	const THREE = ONE + self::TWO;
	const SENTENCE = 'The value of THREE is ' . self::THREE; 
}
*/
class Foo {
	public const BAR = 'bar';
	private const BAZ = 'baz';
}

echo Foo::BAR, PHP_EOL;
echo Foo::BAZ, PHP_EOL; // Fatal error: Uncaught Error: Cannot access private constant Foo::BAZ