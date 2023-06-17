<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Problems\TwoSum;

class TwoSumTests extends TestCase
{
    public function test_solving_two_sum_problem_case_1(){
        $arr = [2,7,11,15]; $target = 9;
        $result =  (new TwoSum())->solution($arr, $target);
        $this->assertEquals([0,1], $result);
    }

    public function test_solving_two_sum_problem_case_2(){
        $arr = [3,2,4]; $target = 6;
        $result =  (new TwoSum())->solution($arr, $target);
        $this->assertEquals([1,2], $result);
    }

    public function test_solving_two_sum_problem_case_3(){
        $arr = [3,3]; $target = 6;
        $result =  (new TwoSum())->solution($arr, $target);
        $this->assertEquals([0,1], $result);
    }
}