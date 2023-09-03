<?php

namespace Problems;

class PascalTriangle
{
    /*
     * https://leetcode.com/problems/pascals-triangle/
     */


    /**
     * @param int $numRows
     * @return int [][]
     */
    public function solution(int $numRows): array
    {

        $rows = [];

        for ($i = 0; $i < $numRows; $i++) {
            for ($j = 0; $j <= $i; $j++) {
                $rows[$i][$j] = ($j == 0 || $i == $j) ? 1 : ($rows[$i - 1][$j - 1] + $rows[$i - 1][$j]);
            }
        }
        return $rows;

    }
}