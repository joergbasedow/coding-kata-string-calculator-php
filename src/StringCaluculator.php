<?php

class StringCalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testAddWithEmptyString()
    {
        $calculator = new StringCalculator();

        $result = $calculator->add('');

        $this->assertSame(0, $result);
    }

    public function testAddWithOneNumber()
    {
        $calculator = new StringCalculator();

        $result = $calculator->add('7');

        $this->assertSame(7, $result);
    }

    public function testAddWithTwoNumber()
    {
        $calculator = new StringCalculator();

        $result = $calculator->add('4,6');

        $this->assertSame(10, $result);
    }
}


class StringCalculator
{
    public function add($numbers)
    {
        $parts = explode(',', $numbers);

        return array_sum($parts);
    }
}
