<?php

class StringCalculator
{
    public function add($numbers)
    {
        $matches = null;

        preg_match('#^\/{2}(.)\\n(.*)#', $numbers, $matches);

        if ($matches) {
            $delimiter = $matches[1];
        }
        else {
            $delimiter = ',';
        }
        $parts = preg_split('/[' . $delimiter . '\\n]/', $numbers);

        return array_sum($parts);
    }
}
