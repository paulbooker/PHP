<?php
/*
class Foo {
	public static function aStaticMethod() {
		
	}
}

//Foo::aStaticMethod();
$classname = 'Foo';
$classname::aStaticMethod();
*/
class Foo
{
	public static $my_static = 'foo';
	
	public function staticValue() {
		return self::$my_static;
	}
}

class Bar extends Foo
{
	public function fooStatic() {
		return parent::$my_static;
	}
}

//print Foo::$my_static . "\n";
$foo = new Foo();
//print $foo->staticValue() . "\n";
//print $foo->my_static . "\n";
//Notice: Accessing static property Foo::$my_static as non static 
//Warning: Undefined property: Foo::$my_static 

print Bar::$my_static . "\n";
$bar = new Bar();
print $bar->fooStatic() . "\n";