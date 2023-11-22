<?php
/*
class BaseClass {
	function __construct() {
		print "In BaseClass constructor\n";
	}
}

class SubClass extends BaseClass {
	function __construct() {
		parent::__construct();
		print "In SubClass constructor\n";
	}	
}

class OtherSubClass extends BaseClass {
	// inherits BaseClass's constructor
}

// In BaseClass constructor
//$obj = new BaseClass();

// In BaseClass constructor
// In SubClass constructor
//$obj = new SubClass();

// In BaseClass constructor
$obj = new OtherSubClass();
*/
/*
class Point {
	protected int $x;
	protected int $y;
	
	public function __construct(int $x, int $y = 0) {
		$this->x = $x;
		$this->y = $y;
	}
}

// Pass both parameters.
$p1 = new Point(4, 5);

// Pass only the required parameter. $y will take its default value of 0.
$p2 = new Point(4);

// With named parameters (as of PHP 8.0):
$p3 = new Point(y: 5, x: 4);
*/
class Point {
	public function __construct(protected int $x, protected int $y = 0) {}
}