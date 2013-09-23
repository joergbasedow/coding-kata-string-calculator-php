<?php

require_once('../src/StringCalculator.php');

class StringCalculatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testAddWithEmptyString($input, $exprected)
    {
        $calculator = new StringCalculator();

        $result = $calculator->add($input);

        $this->assertSame($exprected, $result);
    }

    public function dataProvider()
    {
        return array(
            array('', 0),
            array('7', 7),
            array('4,6', 10),
        );
    }
}
