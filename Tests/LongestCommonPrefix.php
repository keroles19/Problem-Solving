<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class LongestCommonPrefix extends TestCase
{

    public function test_case_1(){
        $strings = ["flower","flow","flight"];
        $expect = "fl";
        $result = (new \Problems\LongestCommonPrefix())->solution($strings);
        $this->assertEquals($expect, $result);
    }

    public function test_case_2(){
        $strings = ["dog","racecar","car"];
        $expect = "";
        $result = (new \Problems\LongestCommonPrefix())->solution($strings);
        $this->assertEquals($expect, $result);
    }

    public function test_case_3(){
        $strings = ["a"];
        $expect = "a";
        $result = (new \Problems\LongestCommonPrefix())->solution($strings);
        $this->assertEquals($expect, $result);
    }


}