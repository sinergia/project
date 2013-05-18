<?php

namespace App\Tests;
use App\App;

class AppTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var App
     */
    protected $app;

    public function setUp()
    {
        $this->app = new App();
    }

    public function testAppShouldBeInvokeable()
    {
        $this->assertTrue(method_exists($this->app, "__invoke"));
    }

    public function testAppShouldNotHaveConstructorArgs()
    {
        
    }
}
