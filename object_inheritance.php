<?php
/*
class A {
	public int $prop;
}

class B extends A {
	// Illegal: read-write -> readonly
	public readonly int $prop;
}
// Cannot redeclare non-readonly property as readonly
*/
class Foo
{
	public function printItem($string)
	{
		echo 'Foo: ' . $string . PHP_EOL;
	}
	
	public function printPHP()
	{
		echo 'PHP is great.' . PHP_EOL;
	}
}

class Bar extends Foo
{
	public function printItem($string)
	{
		echo 'Bar: ' . $string . PHP_EOL;
	}
}

$foo = new Foo();
$bar = new Bar();
//$foo->printItem('baz');
//$foo->printPHP();
//$bar->printItem('baz');
$bar->printPHP();
