<?php

namespace Problems;

class ReplaceWithGreatestElementOnRightSide
{
    /*
     * https://leetcode.com/problems/replace-elements-with-greatest-element-on-right-side/
     */

    private $max = -1;

    /**
     * @param array $arr
     * @return array
     */
    public function solution(array $arr): array
    {
        for ($i = count($arr) - 1; $i >= 0; $i--) {
            $init = $arr[$i];
            $arr[$i] = $this->max;
            $this->max = max($init, $this->max);
        }

        return $arr;
    }
}