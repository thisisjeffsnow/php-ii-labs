<?php
interface TestInterface
{
	public function test();
}

class Base implements TestInterface
{
	protected static $instance;
	private function __construct() {}
	public function test()
	{
		return 'TEST';
	}
	public static function getInstance() : static
	{
		if (empty(static::$instance))
			static::$instance = new static();
		return static::$instance;
	}
}

class A extends Base {}
class B extends Base {}

$base = Base::getInstance();
$a    = A::getInstance();
$b    = B::getInstance();


var_dump($base, $a, $b);