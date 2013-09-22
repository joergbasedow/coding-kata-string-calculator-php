<?php

class StringCalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testAddWithEmptyString()
    {
        $calculator = new StringCalculator();

        $result = $calculator->add('');

        $this->assertSame(0, $result);
    }
}


class StringCalculator
{
    public function add($numbers)
    {
        return 0;
    }
}
