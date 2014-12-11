<?php

namespace Mos\Mumin;

/**
 * A testclass
 *
 */
class MumintrolletDatabaseTest extends \PHPUnit_Framework_TestCase
{

    private $mumin;



    /**
     * SetUp
     *
     * @return void
     *
     */
     protected function setUp()
     {
        $this->mumin = new \Mos\Mumin\MumintrolletDatabase();
        $this->mumin->setOptions(['dsn' => "sqlite:memory::", "verbose" => true]);
        $this->mumin->connect();

    }



    /**
    * Test
    *
    * @return void
    *
    */
    public function testGetName()
    {
        $res = $this->mumin->getName();
        $exp = "My Name is Mumintrollet.";
        $this->assertEquals($res, $exp, "The name does not match.");
    }



    /**
    * Test
    *
    * @return void
    *
    */
    public function testCreateTable()
    {
        $res = $this->mumin->createTableTest();
        $this->assertTrue($res, "Failed to create database tables.");
    }
}
