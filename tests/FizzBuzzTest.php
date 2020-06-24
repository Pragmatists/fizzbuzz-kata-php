<?php

namespace tests;

use FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    private $fizzBuzz;

    function setUp(): void
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    function testFizzBuzzWith1ShouldBeReturn1()
    {
        $actual = $this->fizzBuzz->calculate(1);
        $this->assertEquals('1', $actual);
    }

    function testFizzBuzzWith2ShouldBeReturn2()
    {
        $actual = $this->fizzBuzz->calculate(2);
        $this->assertEquals('2', $actual);
    }

    function testFizzBuzzWith3ShouldBeReturnFizz()
    {
        $actual = $this->fizzBuzz->calculate(3);
        $this->assertEquals('Fizz', $actual);
    }

    function testFizzBuzzWith5ShouldBeReturnBuzz()
    {
        $actual = $this->fizzBuzz->calculate(5);
        $this->assertEquals('Buzz', $actual);
    }

    function testFizzBuzzWith6ShouldBeReturnFizz()
    {
        $actual = $this->fizzBuzz->calculate(6);
        $this->assertEquals('Fizz', $actual);
    }

    function testFizzBuzzWith10ShouldBeReturnBuzz()
    {
        $actual = $this->fizzBuzz->calculate(10);
        $this->assertEquals('Buzz', $actual);
    }

//    TODO this test is failing. You can contnue implementation from this point
    function testFizzBuzzWith15ShouldBeReturnFizzBuzz()
    {
        $actual = $this->fizzBuzz->calculate(15);
        $this->assertEquals('FizzBuzz', $actual);
    }

}
