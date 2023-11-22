<?php
/*
class Test
{
	public readonly string $prop;
	
	public function __construct(string $prop) {
		// Legal initialization.
		$this->prop = $prop;
	}
}

$test = new Test("foobar");
// Legal read.
var_dump($test->prop);
// Illegal reassignment. It does not matter that the assigned value is the same.
$test->prop = "foobar";
*/
/*
class Test1 {
	public readonly string $prop;
}

$test1 = new Test1;
// Illegal initialization outside of private scope.
$test1->prop = "foobar";
// Fatal error: Uncaught Error: Cannot initialize readonly property Test1::$prop from global scope
*/
/*
class Test
{
	public readonly int $prop = 42;
}
// Fatal error: Readonly property Test::$prop cannot have default value
*/
/*
class Test {
	public function __construct(
		public readonly int $i = 0,
		public readonly array $ary = [],
	) {}
}

$test = new Test;
//$test->i += 1;
//++$test->i;
//$test->i++;
//test->ary[] = 1;
//$test->ary[0][] = 1;
//$ref =& $test->i; //?
//$test->i =& $ref; 
//byRef($test->i); //?
foreach ($test as &$prop); // Fatal error: Uncaught Error: Cannot acquire reference to readonly property Test::$i
*/
class Test {
	public function __construct(public readonly object $obj) {}
}

$test = new Test(new stdClass);
// Legal interior mutation.
$test->obj->foo = 1;
// Illegal reassignment.
$test->obj = new stdClass();