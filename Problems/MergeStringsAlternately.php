<?php

namespace Problems;

class MergeStringsAlternately
{
    /**
     * https://leetcode.com/problems/merge-strings-alternately/?envType=study-plan-v2&envId=leetcode-75
     */
    public function solution(string $word_1, string $word_2): string
    {
        $m = strlen($word_1);
        $n = strlen($word_2);
        $result = "";
        $i = 0;$j = 0;
        
        while ($i < $m || $j < $n) {
            if ($i < $m) {
                $result .= $word_1[$i++];
            }
            if ($j < $n) {
                $result .= $word_2[$j++];
            }
        }
        return $result;
    }
}