<?php
class ExtendClass extends SimpleClass
{
	//Redefine the parent method
	function displayVar()
	{
		echo "Extending class\n";
		parent::displayVar();		
	}	
}

class SimpleClass 
{
	//property declaration
	public $var = 'default value';
	
	//method declaration
	public function displayVar() 
	{
		echo $this->var;
	}
}

$extended = new ExtendClass();

$extended->displayVar();