<?php
/*
trait A {
	public function smallTalk() {
		echo 'a';
	}
	public function bigTalk() {
		echo 'A';
	}
}

trait B {
	public function smallTalk() {
		echo 'b';
	}
	public function bigTalk() {
		echo 'B';
	}
}

class Talker {
	use A, B {
		B::smallTalk insteadof A;
		A::bigTalk insteadof B;
	}
}

class Aliased_Talker {
	use A, B {
		B::smallTalk insteadof A;
		A::bigTalk insteadof B;
		B::bigTalk as talk;	
	}
}
*/
/*
trait HelloWorld {
	public function sayHello() {
		echo 'Hello World!';
	}
}

// Change visibility of sayHello
class MyClass1 {
	use HelloWorld { sayHello as protected; }
}

// Alias method with changed visibility
// sayHello visibility not changed
class MyClass2 {
	use HelloWorld { sayHello as private myPrivateHello; }
}
*/
/*
trait Hello {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait World {
    public function sayWorld() {
        echo 'World!';
    }
}

trait HelloWorld {
    use Hello, World;
}

class MyHelloWorld {
    use HelloWorld;
}

$o = new MyHelloWorld();
$o->sayHello();
$o->sayWorld();
*/
/*
trait Hello {
	public function sayHelloWorld() {
		echo 'Hello' . $this->getWorld();
	}
	abstract public function getWorld();
}

class MyHelloWorld {
	private $world;
	use Hello;
	public function getWorld() {
		return $this->world;
	}
	public function setWorld($val) {
		$this->world = $val;
	}
}
*/
/*
trait Counter {
	public function inc() {
		static $c = 0;
		$c = $c + 1;
		echo "$c\n";
	}
}

class C1 {
	use Counter;
}

class C2 {
	use Counter;
}

$o = new C1(); $o->inc();
$p = new C2(); $p->inc();
$o->inc();
$o->inc();
$p->inc();
*/
/*
trait StaticExample {
	public static function doSomething() {
		return 'Doing something';
	}
}

class Example {
	use StaticExample;
}

Example::doSomething();
*/
/*
trait StaticExample {
	public static $static = 'foo';
}	


class Example {
	use StaticExample;
}

echo Example::$static;
*/
/*
trait PropertiesTrait {
	public $x = 1;
}

class PropertiesExample {
	use PropertiesTrait;
}

$example = new PropertiesExample;
echo $example->x;
*/
/*
trait PropertiesTrait {
	public $same = true;
	public $different1 = false;
	public bool $different2;
	public bool $different3;
}

class PropertiesExample {
	use PropertiesTrait;
	public $same = true;
	//public $different1 = true;
	//public string $different2;
	readonly protected bool $different3;
}

//Fatal error: PropertiesExample and PropertiesTrait define the same property ($different1) in the composition of PropertiesExample. However, the definition differs and is considered incompatible
//Fatal error: PropertiesExample and PropertiesTrait define the same property ($different2) in the composition of PropertiesExample. However, the definition differs and is considered incompatible
//Fatal error: PropertiesExample and PropertiesTrait define the same property ($different3) in the composition of PropertiesExample. However, the definition differs and is considered incompatible
*/
/*
trait ConstantsTrait {
	public const FLAG_MUTABLE = 1;
	final public const FLAG_IMMUTABLE = 5;
}

class ConstantsExample {
	use ConstantsTrait;
}

$example = new ConstantsExample;
echo $example::FLAG_MUTABLE;
*/

trait ConstantsTrait {
	public const FLAG_MUTABLE = 1;
	final public const FLAG_IMMUTABLE = 5;
}

class ConstantsExample {
	use ConstantsTrait;
	public const FLAG_IMMUTABLE = 5;
}

// Fatal error: ConstantsExample and ConstantsTrait define the same constant (FLAG_IMMUTABLE) in the composition of ConstantsExample. However, the definition differs and is considered incompatible.