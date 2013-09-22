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
}


class StringCalculator
{
    public function add($numbers)
    {
        if ($numbers) {
            return (int)$numbers;
        }

        return 0;
    }
}
