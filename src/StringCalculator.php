<?php

class StringCalculator
{
    public function add($numbers)
    {
        $parts = preg_split('/[,\\n]/', $numbers);

        return array_sum($parts);
    }
}
