<?php
class A
{
	function foo()
	{
		if (isset($this)) {
			echo "\$this is defined (";
			echo get_class($this);
			echo ")\n";
		} else {
			echo "\$this is not defined.\n";
		}
	}
}

class B 
{
	function bar()
	{
		A::foo();
	}
}

//$a = new A();
//$a->foo();
//$this is defined (A)

//A::foo();
//Fatal error: Uncaught Error: Non-static method A::foo() cannot be called statically

//$b = new B();
//$b->bar();
//Fatal error: Uncaught Error: Non-static method A::foo() cannot be called statically

//zB::bar();
//Fatal error: Uncaught Error: Non-static method B::bar() cannot be called statically