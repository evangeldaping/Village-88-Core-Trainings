<?php

use PHPUnit\Framework\TestCase;


class CalculatorTests extends TestCase
{
    private $calculator;

    protected function setUp(): void
    {
        require_once 'Calculator.php';
        $this->calculator = new Calculator();
    }

    protected  function tearDown(): void
    {
        $this->calculator = NULL;
    }

    /**
     * Test to add two numbers
     */
    public function testadd()
    {
        $equals = $this->calculator->add(1, 2);
        $this->assertEquals(3, $equals);
    }

    /**
     * Test adding string
     */
    public function testaddString()
    {
        $equals = $this->calculator->add("1", "2");
        $this->assertEquals(3, $equals);
    }

    /**
     * Test adding null
     */
    public function testaddNull()
    {
        $equals = $this->calculator->add(NULL, NULL);
        $this->assertFalse($equals);
    }

    /**
     * Test to subtract two numbers
     */
    public function testsubtract()
    {
        $equals = $this->calculator->subtract(2, 1);
        $this->assertEquals(1, $equals);
    }

    /**
     * Test to subtract two numbers
     */
    public function testsubtractString()
    {
        $equals = $this->calculator->subtract("2", "1");
        $this->assertEquals(1, $equals);
    }

    /**
     * Test to subtract two numbers
     */
    public function testsubtractNull()
    {
        $equals = $this->calculator->subtract(NULL, NULL);
        $this->assertFalse($equals);
    }

    /**
     * Test to multiple two numbers
     */
    public function testmultiple()
    {
        $equals = $this->calculator->multiple(1, 2);
        $this->assertEquals(2, $equals);
    }

    /**
     * Test to multiple two numbers
     */
    public function testmultipleString()
    {
        $equals = $this->calculator->multiple("1", "2");
        $this->assertEquals(2, $equals);
    }

    /**
     * Test to multiple two numbers
     */
    public function testmultipleNull()
    {
        $equals = $this->calculator->multiple(NULL, NULL);
        $this->assertFalse($equals);
    }

    /**
     * Test to divide two numbers
     */
    public function testdivide()
    {
        $equals = $this->calculator->divide(10, 2);
        $this->assertEquals(5, $equals);
    }

    /**
     * Test to divide two numbers
     */
    public function testdivideString()
    {
        $equals = $this->calculator->divide("10", "2");
        $this->assertEquals(5, $equals);
    }

    /**
     * Test to divide two numbers
     */
    public function testdivideNull()
    {
        $equals = $this->calculator->divide(NULL, NULL);
        $this->assertFalse($equals);
    }
}
