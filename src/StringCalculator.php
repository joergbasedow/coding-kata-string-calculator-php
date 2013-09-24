<?php

class StringCalculator
{
    public function add($numbers)
    {
        $matches = null;

        if (preg_match_all('/-\\d+/', $numbers, $matches)) {
            throw new RuntimeException('negatives not allowed (' . implode(',', $matches[0]) . ')');
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
