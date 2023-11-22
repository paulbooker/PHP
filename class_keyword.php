<?php
/*
namespace NS {
	class ClassName {
		
	}
	
	echo ClassName::class;
}
*/
//print Does\Not\Exist::class;
namespace NS {
	class ClassName {		
	}

$c = new ClassName();
print $c::class;	
}