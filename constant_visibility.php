<?php
/**
 * Define MyClass
 */
class MyClass
{
 	// Declare a public constant
 	public const MY_PUBLIC = 'public';
 
 	// Declare a protected constant
 	protected const MY_PROTECTED = 'protected';
 
 	// Declare a private constant
 	private const MY_PRIVATE = 'private';
 
 	public function foo()
 	{
	 	echo self::MY_PUBLIC;
	 	echo self::MY_PROTECTED;
	 	echo self::MY_PRIVATE;
 	}
}

//$myClass = new MyClass();
//MyClass::MY_PUBLIC;
//MyClass::MY_PROTECTED; // Cannot access protected constant
//MyClass::MY_PRIVATE; // Cannot access private constant

/**
 * Define MyClass2
 */
class MyClass2 extends MyClass
{
	// This is public
	function foo2()
	{
		echo self::MY_PUBLIC;
		echo self::MY_PROTECTED;
		echo self::MY_PRIVATE; 
	}
}

$myClass2 = new MyClass2;
//echo MyClass2::MY_PUBLIC;
$myClass2->foo2();