<?php

class StringCalculator
{
    public function add($numbers)
    {
        if (preg_match('/-\\d+/', $numbers)) {
            throw new RuntimeException('negatives not allowed');
        }

        $matches = null;

        preg_match('#^\/{2}(.)\\n(.*)#', $numbers, $matches);

        if ($matches) {
            $delimiter = $matches[1];
            $numbers = $matches[2];
        }
        else {
            $delimiter = ',';
        }
        $parts = preg_split('/[' . $delimiter . '\\n]/', $numbers);

        return array_sum($parts);
    }
}
