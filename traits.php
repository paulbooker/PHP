<?php
	
trait ezcReflectionReturnInfo {
    function getReturnType() { /*1*/ }
    function getReturnDescription() { /*2*/ }
}

class ezcReflectionMethod extends ReflectionMethod {
    use ezcReflectionReturnInfo;
    /* ... */
}

class ezcReflectionFunction extends ReflectionFunction {
    use ezcReflectionReturnInfo;
    /* ... */
}

// Deprecated: Return type of ezcReflectionReturnInfo::getReturnType() should either be compatible with ReflectionFunctionAbstract::getReturnType(): ?ReflectionType, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice

// Deprecated: Return type of ezcReflectionReturnInfo::getReturnType() should either be compatible with ReflectionFunctionAbstract::getReturnType(): ?ReflectionType, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice