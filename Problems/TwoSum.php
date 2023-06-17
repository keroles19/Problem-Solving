<?php

namespace Problems;

class TwoSum
{
    /**
     * @param array $numbers
     * @param $target
     * @return array
     */
    public function solution(array $numbers, $target)
    {
        $hashMap = [];
        for ($i = 0; $i <= count($numbers); $i++) {
            $secondElement = $target - $numbers[$i];
            if (isset($hashMap[$secondElement])) {
                return [$hashMap[$secondElement], $i];
            } else {
                $hashMap[$numbers[$i]] = $i;
            }
        }
        return [];
    }
}