<?php

class StringCalculator
{
    public function add($numbers)
    {
        $parts = explode(',', $numbers);

        return array_sum($parts);
    }
}
