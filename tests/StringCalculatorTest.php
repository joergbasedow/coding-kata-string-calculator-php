<?php

require_once('../src/StringCalculator.php');

class StringCalculatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testAdd($input, $exprected)
    {
        $calculator = new StringCalculator();

        $result = $calculator->add($input);

        $this->assertSame($exprected, $result);
    }

    /**
     * @expectedException RuntimeException
     * @expectedExceptionMessage negatives not allowed
     */
    public function testAddWithOneNegativeNumber()
    {
        $calculator = new StringCalculator();

        $calculator->add('1,-2');
    }

    /**
     * @expectedException RuntimeException
     * @expectedExceptionMessage negatives not allowed (-2,-5)
     */
    public function testAddWithMultipleNegativeNumbers()
    {
        $calculator = new StringCalculator();

        $calculator->add('1,-2,-5,2');
    }

    public function dataProvider()
    {
        return array(
            array('', 0),
            array('7', 7),
            array('4,6', 10),
            array('1,2,5,6,10,100', 124),
            array("1\n2,3", 6),
            array("//;\n1;2", 3),
        );
    }
}
