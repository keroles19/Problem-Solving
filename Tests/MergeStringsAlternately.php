<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Problems\TwoSum;

class MergeStringsAlternately extends TestCase
{
    public function test_solving_case_1(){
        $word1 = "abc"; $word2 = "pqr";
        $expect = "apbqcr";
        $result = (new \Problems\MergeStringsAlternately())->solution($word1,$word2);
        $this->assertEquals($expect, $result);
    }

    public function test_solving_case_2(){
        $word1 = "ab"; $word2 = "pqrs";
        $expect = "apbqrs";
        $result = (new \Problems\MergeStringsAlternately())->solution($word1,$word2);
        $this->assertEquals($expect, $result);
    }

    public function test_solving_case_3(){
        $word1 = "abcd"; $word2 = "pq";
        $expect = "apbqcd";
        $result = (new \Problems\MergeStringsAlternately())->solution($word1,$word2);
        $this->assertEquals($expect, $result);
    }
}