<?php
/**
 * Created by PhpStorm.
 * User: yusufshakeel
 * Date: 21/10/17
 * Time: 1:12 PM
 */


class HelloWorldTest extends PHPUnit_Framework_TestCase
{
    public function testGreeting()
    {

        $greeting = "Hello World";
        $requiredGreeting = "Hello World";

        $this->assertEquals($greeting, $requiredGreeting);

    }
}
