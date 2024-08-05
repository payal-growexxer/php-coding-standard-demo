<?php

use MyProject\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testSayHello()
    {
        $example = new Example();
        $this->assertEquals('Hello, John!', $example->sayHello('John'));
    }
}
