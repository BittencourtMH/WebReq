<?php

require __DIR__."/../../../../src/main/php/model/entities/User.php";

class ValidateNameTest extends PHPUnit_Framework_TestCase
{
    public function test1()
    {
        $user=new User();
        $user->setName(null);
        $this->assertSame(false, $user->validateName());
    }
    public function test2()
    {
        $user=new User();
        $user->setName('');
        $this->assertSame(false, $user->validateName());
    }
    public function test3()
    {
        $user=new User();
        $user->setName('a');
        $this->assertSame(true, $user->validateName());
    }
    public function test4()
    {
        $user=new User();
        $user->setName('1234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890');
        $this->assertSame(true, $user->validateName());
    }
    public function test5()
    {
        $user=new User();
        $user->setName('12345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901');
        $this->assertSame(false, $user->validateName());
    }
    public function test6()
    {
        $user=new User();
        $user->setName(' ');
        $this->assertSame(true, $user->validateName());
    }
    public function test7()
    {
        $user=new User();
        $user->setName('-');
        $this->assertSame(true, $user->validateName());
    }
    public function test8()
    {
        $user=new User();
        $user->setName('á');
        $this->assertSame(true, $user->validateName());
    }
    public function test9()
    {
        $user=new User();
        $user->setName('♥');
        $this->assertSame(true, $user->validateName());
    }
    public function test10()
    {
        $user=new User();
        $user->setName('Α'); // alfa maiúsculo
        $this->assertSame(true, $user->validateName());
    }
    public function test11()
    {
        $user=new User();
        $user->setName(' a');
        $this->assertSame(true, $user->validateName());
    }
    public function test12()
    {
        $user=new User();
        $user->setName('a ');
        $this->assertSame(true, $user->validateName());
    }
    public function test13()
    {
        $user=new User();
        $user->setName(' a ');
        $this->assertSame(true, $user->validateName());
    }
    public function test14()
    {
        $user=new User();
        $user->setName('1');
        $this->assertSame(true, $user->validateName());
    }
}
