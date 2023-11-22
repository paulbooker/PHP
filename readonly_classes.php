<?php
/*	
#[\AllowDynamicProperties]
readonly class Foo {
	
}
//Fatal error: Cannot apply #[AllowDynamicProperties] to readonly class Foo
*/
/*
readonly class Foo {
	public $bar;
}
//Fatal error: Readonly property Foo::$bar must have type
*/
/*
readonly class Foo {
	public static int $bar;
}
//Fatal error: Static property Foo::$bar cannot be readonly
*/