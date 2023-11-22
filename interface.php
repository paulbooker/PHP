<?php
/*
// Declare the interface 'Template'
interface Template
{
	public function setVariable($name, $var);
	public function getHtml($template);
}

// Implement the interface
// This will work
class WorkingTemplate implements Template
{
	private $vars = [];
	
	public function setVariable($name, $var)
	{
		$this->vars[$name] = $var;
	}
	
	public function getHtml($template)
	{
		foreach($this->vars as $name => $value) {
			$template = str_replace('{' . $name . '}', $value, $template);
		}
		
		return $template;
	}
}

// This will not work
// Fatal error: Class BadTemplate contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Template::getHtml)
class BadTemplate implements Template
{
	private $vars = [];
	
	public function setVariable($name, $var)
	{
		$this->vars[$name] = $var;
	} 
}
*/
/*
interface A
{
	public function foo();
}

interface B extends A 
{
	public function baz(Baz $baz);
}

// This will work
class C implements B
{
	public function foo()
	{
		
	}
	
	public function baz(Baz $baz)
	{
		
	}
}

// This will not work and result in a fatal error
class D implements B 
{
	public function foo()
	{
		
	}
	
	public function baz(Foo $foo)
	{
		
	}
}

//Fatal error: Could not check compatibility between D::baz(Foo $foo) and B::baz(Baz $baz), because class Baz is not available
*/
/*
class Foo {}
class Bar extends Foo {}

interface A {
	public function myfunc(Foo $arg): Foo;
}

interface B {
	public function myfunc(Bar $arg): Bar;
}

class MyClass implements A, B 
{
	public function myfunc(Foo $arg): Bar
	{
		return new Bar();
	}
}
*/
/*
interface A
{
	public function foo();
}

interface B
{
	public function bar();
}

interface C extends A, B 
{
	public function baz();
}

class D implements C 
{
	public function foo()
	{
		
	}
	
	public function bar()
	{
		
	}
	
	public function baz()
	{
		
	}
}
*/
/*
interface A
{
	const B = 'Interface constant';
}

// Prints: Interface constant
//echo A::B;

class B implements A 
{
	const B = 'Class constant';
}

// Prints: Class constant
// Prior to PHP 8.1.0, this will however not work because it was not
// allowed to override constants.
echo B::B;
*/
/*
interface A 
{
	public function foo(string $s): string;
	
	public function bar(int $i): int;
}

// An abstract class may implement only a portion of an interface.
// Classes that extend the abstract class must implement the rest.
abstract class B implements A 
{
	public function foo(string $s): string
	{
		return $s . PHP_EOL;
	}
}

class C extends B
{
	public function bar(int $i): int
	{
		return $i * 2;
	}
}
*/
class One 
{
	
}

interface Useable
{
	
}

interface Updateable
{
	
}


// The keyword order here is important. 'extends' must come first.
class Two extends One implements Useable, Updateable
{
	
}