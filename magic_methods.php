<?php
/*
class Connection 
{
	protected $link;
	private $dsn, $username, $password;
	
	public function __construct($dsn, $username, $password)
	{
		$this->dsn = $dsn;
		$this->username = $username;
		$this->password = $password;
		$this->connect();
	}
	
	private function connect()
	{
		$this->link = new PDO($this->dsn, $this->username, $this->password);
	}
	
	public function __sleep()
	{
		return array('dsn', 'username', 'password');
	}
	
	public function __wakeup()
	{
		$this->connect();
	}
}
*/
/*
class Connection
{
	protected $link;
	private $dsn, $username, $password;
	
	public function __construct($dsn, $username, $password)
	{
		$this->dsn = $dsn;
		$this->username = $username;
		$this->password = $password;
		$this->connect();
	}
	
	private function connect()
	{
		$this->link = new PDO($this->dsn, $this->username, $this->password);
	}
	
	public function __serialize(): array
	{
		return [
			'dsn' => $this->dsn,
			'user' => $this->username,
			'pass' => $this->password,
		];
	}
	
	public function __unserialize(array $data): void
	{
		$this->dsn = $data['dsn'];
		$this->username = $data['user'];
		$this->password = $data['pass'];
		
		$this->connect();
	}
}
*/
/*
// Declare a simple class
class TestClass
{
	public $foo;
	
	public function __construct($foo)
	{
		$this->foo = $foo;
	}
	
	public function __toString()
	{
		return $this->foo;
	}
}

$class = new TestClass('Hello');
echo $class;
*/
/*
class CallableClass
{
	public function __invoke($x)
	{
		var_dump($x);
	}
}

$obj = new CallableClass;
$obj(5);
var_dump(is_callable($obj));
//int(5)
//bool(true)
*/
/*
class Sort
{
	private $key;
	
	public function __construct(string $key)
	{
		$this->key = $key;
	}
	
	public function __invoke(array $a, array $b): int 
	{
		return $a[$this->key] <=> $b[$this->key];
	}
}

$customers = [
    ['id' => 1, 'first_name' => 'John', 'last_name' => 'Do'],
    ['id' => 3, 'first_name' => 'Alice', 'last_name' => 'Gustav'],
    ['id' => 2, 'first_name' => 'Bob', 'last_name' => 'Filipe']
];

// sort customers by first name
usort($customers, new sort('first_name'));
print_r($customers);

Array
(
    [0] => Array
        (
            [id] => 3
            [first_name] => Alice
            [last_name] => Gustav
        )

    [1] => Array
        (
            [id] => 2
            [first_name] => Bob
            [last_name] => Filipe
        )

    [2] => Array
        (
            [id] => 1
            [first_name] => John 
            [last_name] => Do
        )

)
*/
/*
class A 
{
	public $var1;
	public $var2;
	
	public static function __set_state($an_array)
	{
		$obj = new A;
		$obj->var1 = $an_array['var1'];
		$obj->var2 = $an_array['var2'];
		return $obj;
	}
}

$a = new A;
$a->var1 = 5;
$a->var2 = 'foo';
//var_dump($a);
//object(A)#1 (2) {
//  ["var1"]=>
//  int(5)
//  ["var2"]=>
//  string(3) "foo"
//}
$b = var_export($a, true); 
var_dump($b);
//string(61) "\A::__set_state(array(
//   'var1' => 5,
//   'var2' => 'foo',
//))"
*/
class C {
	private $prop;
	
	public function __construct($val) {
		$this->prop = $val;
	}
	
	public function __debugInfo() {
		return [
			'propSquared' => $this->prop ** 2,
		];
	}
}

var_dump(new C(42));
//object(C)#1 (1) {
//  ["propSquared"]=>
//  int(1764)
//}