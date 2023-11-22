<?php
/*	
class MyDateTime extends Datetime
{
	public function modify(string $modifier) { return false; }
}
//Deprecated: Return type of MyDateTime::modify(string $modifier) should either be compatible with DateTime::modify(string $modifier): DateTime|false, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice
*/
/*
class MyDateTime extends DateTime
{
	public function modify(string $modifier): ?DateTime { return null; }
}
//Deprecated: Return type of MyDateTime::modify(string $modifier): ?DateTime should either be compatible with DateTime::modify(string $modifier): DateTime|false, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice
*/
class MyDateTime extends DateTime
{
    /**
     * @return DateTime|false
     */
    #[\ReturnTypeWillChange]
    public function modify(string $modifier) { return false; }    
}
// No deprecation notice is triggered 