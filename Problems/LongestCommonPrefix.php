<?php

namespace Problems;

class LongestCommonPrefix
{
    /**
     * https://leetcode.com/problems/longest-common-prefix/
     *
     * @param array $strs
     * @return string
     */
    public function solution(array $strs): string
    {
        $result = "";

        for ($i=0; $i < strlen($strs[0]); $i++){
            $x = $strs[0][$i];
            for ($j = 0; $j < count($strs); $j++){
                if($strs[$j][$i] != $x){
                    return $result;
                }
            }
            $result.= $x;
        }
        return $result;
    }
}