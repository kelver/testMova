<?php
use PHPUnit\Framework\TestCase;

class MessageTest extends TestCase
{
    public function testShowMessage(){
        $d = getdate();
        $hoje = 'Thursday';

        $this->assertEquals("Hello, today is {$hoje}!");
    }
}
