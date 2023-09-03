<?php

namespace Problems;

class IsSubsequence
{
    /*
     * https://leetcode.com/problems/is-subsequence/
     */

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    public function solution(string $s, string $t): bool
    {
        $s_len = strlen($s);
        if ($s_len == 0) return true;

        $j = 0;
        for ($i = 0; $i < strlen($t); $i++) {
            if ( $s[$j] == $t[$i]) {
                $j++;
            }
        }
        return $s_len == $j;
    }
}