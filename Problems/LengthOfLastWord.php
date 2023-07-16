<?php

namespace Problems;

class LengthOfLastWord
{
    /**
     * https://leetcode.com/problems/length-of-last-word/
     *
     * @param string $string
     * @return int
     */
    public function solution(string $string): int
    {
        $length = 0;
        for ($i = strlen($string) - 1; $i >= 0; $i--) {
            if ($string[$i] != " ") {
                $length++;
            } else {
                if ($length > 0) {
                    break;
                }
            }
        }
        return $length;
    }
}