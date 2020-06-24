<?php

namespace tests;
use FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{

    public function test___FizzBuzz_example() {
//        This is just a sample test. Start here with your tests to test drive FizzBuzz.
        $fizzBuzz = new FizzBuzz();

        $result = $fizzBuzz->calculate();

        $this->assertEquals($result, null);
    }

}
