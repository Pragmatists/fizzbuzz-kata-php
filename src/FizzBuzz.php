<?php

class FizzBuzz
{
    public function calculate($input): string
    {
        if ($input % 3 == 0)
            return 'Fizz';
        elseif ($input % 5 == 0)
            return 'Buzz';
        return $input;
    }
}
