<?php
require __DIR__."/../../../../src/main/php/model/entities/User.php";

class ValidateUsernameTest extends PHPUnit_Framework_TestCase
{
    public function test1()
    {
        $user=new User();
        $user->setUsername(null);
        $this->assertSame(false, $user->validateUsername());
    }
    public function test2()
    {
        $user=new User();
        $user->setUsername('');
        $this->assertSame(false, $user->validateUsername());
    }
    public function test3()
    {
        $user=new User();
        $user->setUsername('a');
        $this->assertSame(true, $user->validateUsername());
    }
    public function test4()
    {
        $user=new User();
        $user->setUsername('123456789012345678901234567890');
        $this->assertSame(true, $user->validateUsername());
    }
    public function test5()
    {
        $user=new User();
        $user->setUsername('1234567890123456789012345678901');
        $this->assertSame(false, $user->validateUsername());
    }
    public function test6()
    {
        $user=new User();
        $user->setUsername(' ');
        $this->assertSame(false, $user->validateUsername());
    }
    public function test7()
    {
        $user=new User();
        $user->setUsername('-');
        $this->assertSame(true, $user->validateUsername());
    }
    public function test8()
    {
        $user=new User();
        $user->setUsername('á');
        $this->assertSame(false, $user->validateUsername());
    }
    public function test9()
    {
        $user=new User();
        $user->setUsername('♥');
        $this->assertSame(false, $user->validateUsername());
    }
    public function test10()
    {
        $user=new User();
        $user->setUsername('Α'); // alfa maiúsculo
        $this->assertSame(false, $user->validateUsername());
    }
    public function test11()
    {
        $user=new User();
        $user->setUsername(' a');
        $this->assertSame(false, $user->validateUsername());
    }
    public function test12()
    {
        $user=new User();
        $user->setUsername('a ');
        $this->assertSame(false, $user->validateUsername());
    }
    public function test13()
    {
        $user=new User();
        $user->setUsername(' a ');
        $this->assertSame(false, $user->validateUsername());
    }
    public function test14()
    {
        $user=new User();
        $user->setUsername('1');
        $this->assertSame(true, $user->validateUsername());
    }
}
