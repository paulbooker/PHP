<?php
/**
 * Define MyClass
 */
class MyClass
{
	// Declare a public constructor
	public function __construct() {}
	
	// Declare a public method
	public function MyPublic() {}
	
	// Declare a protected method
	protected function MyProtected() {}
	
	// Declare a private method
	private function MyPrivate() {}
	
	// This is public
	function Foo()
	{
		$this->MyPublic();
		$this->MyProtected();
		$this->MyPrivate();
	}
}

$myClass = new MyClass;
//$myClass->MyPublic();
//$myClass->MyProtected(); // Call to protected method from global scope
//$myClass->MyPrivate(); //Call to private method from global scope

/**
 * Define MyClass2
 */
class MyClass2 extends MyClass
{
	// This is public
	function Foo2()
	{
		$this->MyPublic();
		$this->MyProtected();
		$this->MyPrivate();
	}
} 

//$myClass2 = new MyClass2;
//$myClass2->MyPublic();
//$myClass2->Foo2(); // Call to private method from scope MyClass2

class Bar
{
	public function test() {
		$this->testPrivate();
		$this->testPublic();
	}
	
	public function testPublic() {
		echo "Bar::testPublic\n";
	}	
	
	private function testPrivate() {
		echo "Bar::testPrivate\n";
	}
}

class Foo extends Bar
{
	public function testPublic() {
		echo "Foo::testPublic\n";
	}	
	
	private function testPrivate() {
		echo "Foo::testPrivate\n";
	}	
}

$myFoo = new Foo();
$myFoo->test();