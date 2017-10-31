<?php
/**
 * Created by PhpStorm.
 * User: yusufshakeel
 * Date: 22/10/17
 * Time: 1:24 PM
 */


class OddEvenTest extends PHPUnit_Framework_TestCase
{
    protected static $number;

    public static function setUpBeforeClass()
    {
        self::$number = 10;
    }

    protected function setUp()
    {
        fwrite(STDOUT, 'Method: ' . __METHOD__ . "\n");

        $this->number = 2;
    }

    public function testOdd()
    {
        fwrite(STDOUT, 'Method: ' . __METHOD__ . "\n");

        $this->number++;
        $this->assertNotEquals(0, $this->number % 2);
    }

    public function testEven()
    {
        fwrite(STDOUT, 'Method: ' . __METHOD__ . "\n");

        $this->assertEquals(0, $this->number % 2);
    }

    protected function tearDown()
    {
        fwrite(STDOUT, 'Method: ' . __METHOD__ . "\n");

        $this->number = null;
    }
}
