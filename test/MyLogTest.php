<?php
use podolskii\MyLog;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class MyLogTest extends TestCase
{
    /**
     * @dataProvider providerEquation
     */
    public function testLog($str)
    {
        $this->assertEquals('',  \podolskii\MyLog::log($str));
    }
    public function providerEquation ()
    {
        return array (
            array ("something"),
            array ("some things"),
            array (001001101),
            array (false)
        );
    }
    public function testLogEx()
    {
        $this->expectException(TypeError::class);
        $this->assertEquals('',  \podolskii\MyLog::log(null));
        $this->assertEquals('',  \podolskii\MyLog::log());
    }
    public function testWrite()
    {
        $this->assertEquals('',   \podolskii\MyLog::write(123));
        $this->assertEquals('',   \podolskii\MyLog::write("test"));
        $this->assertEquals('',   \podolskii\MyLog::write());
    }
}
?>