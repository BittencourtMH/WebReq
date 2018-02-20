<?php
require __DIR__."/../../../../src/main/php/model/entities/User.php";

class ValidatePasswordTest extends PHPUnit_Framework_TestCase
{
    public function test1()
    {
        $user=new User();
        $user->setPassword(null);
        $this->assertSame(false, $user->validatePassword());
    }
    public function test2()
    {
        $user=new User();
        $user->setPassword('');
        $this->assertSame(false, $user->validatePassword());
    }
    public function test3()
    {
        $user=new User();
        $user->setPassword('a');
        $this->assertSame(false, $user->validatePassword());
    }
    public function test4()
    {
        $user=new User();
        $user->setPassword('123456789012345678901234567890');
        $this->assertSame(true, $user->validatePassword());
    }
    public function test5()
    {
        $user=new User();
        $user->setPassword('1234567890123456789012345678901');
        $this->assertSame(false, $user->validatePassword());
    }
    public function test6()
    {
        $user=new User();
        $user->setPassword(' ');
        $this->assertSame(false, $user->validatePassword());
    }
    public function test7()
    {
        $user=new User();
        $user->setPassword('-');
        $this->assertSame(false, $user->validatePassword());
    }
    public function test8()
    {
        $user=new User();
        $user->setPassword('á');
        $this->assertSame(false, $user->validatePassword());
    }
    public function test9()
    {
        $user=new User();
        $user->setPassword('♥');
        $this->assertSame(false, $user->validatePassword());
    }
    public function test10()
    {
        $user=new User();
        $user->setPassword('Α'); // alfa maiúsculo
        $this->assertSame(false, $user->validatePassword());
    }
    public function test11()
    {
        $user=new User();
        $user->setPassword(' 12345678');
        $this->assertSame(false, $user->validatePassword());
    }
    public function test12()
    {
        $user=new User();
        $user->setPassword('12345678 ');
        $this->assertSame(false, $user->validatePassword());
    }
    public function test13()
    {
        $user=new User();
        $user->setPassword(' 12345678 ');
        $this->assertSame(false, $user->validatePassword());
    }
    public function test14()
    {
        $user=new User();
        $user->setPassword('1');
        $this->assertSame(false, $user->validatePassword());
    }
    public function test15()
    {
        $user=new User();
        $user->setPassword('1234567');
        $this->assertSame(false, $user->validatePassword());
    }
    public function test16()
    {
        $user=new User();
        $user->setPassword('12345678');
        $this->assertSame(true, $user->validatePassword());
    }
}
