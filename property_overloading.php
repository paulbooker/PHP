<?php

class PropertyTest
{
	/**  Location for overloaded data.  */
	private $data = array();
	
	/**  Overloading not used on declared properties.  */
	public $declared = 1;
	
	/**  Overloading only used on this when accessed outside the class.  */
	private $hidden = 2;
	
	public function __set($name, $value) 
	{
		echo "Setting '$name' to '$value'\n";
	}
	
	public function __get($name)
	{
		echo "Getting '$name'\n";
		if (array_key_exists($name, $this->data)) {
			return $this->data[$name];
		}
		
		$trace = debug_backtrace();
		trigger_error(
			'Undefined property via __get():' . $name . 
			' in ' . $trace[0]['line'],
			E_USER_NOTICE);
		return null;
	}
	
	public function __isset($name)
	{
		echo "Is '$name' set?\n";
		return isset($this->data[$name]);
	}
	
	public function __unset($name)
	{
		echo "Unsetting '$name'\n";
		unset($this->data[$name]);
	}
	
	/**  Not a magic method, just here for example.  */
	public function getHidden()
	{
		return $this->hidden;
	}
}

echo "<pre>\n";

$obj = new PropertyTest;

$obj->a = 1;
//Setting 'a' to '1'
echo $obj->a . "\n\n";
//Getting 'a
//Undefined property via __get():a
var_dump(isset($obj->a));
//Is 'a' set?
//bool(false)
unset($obj->a);
//Unsetting 'a'
var_dump(isset($obj->a));
//Is 'a' set?
//bool(false)
echo "\n";

echo $obj->declared . "\n\n";
//1

echo "Let's experiment with the private property named 'hidden':\n";
echo "Privates are visible inside the class, so __get() not used...\n";
echo $obj->getHidden() . "\n";
//2
echo "Privates not visible outside of class, so __get() is used...\n";
echo $obj->hidden . "\n";
// Getting 'hidden'
// Notice: Undefined property via __get():hidden
