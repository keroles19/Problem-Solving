<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Problems\TwoSum;

class LengthOfLastWord extends TestCase
{

    public function test_case_1(){
        $string = "Hello World";
        $expect = 5;
        $result = (new \Problems\LengthOfLastWord())->solution($string);
        $this->assertEquals($expect, $result);
    }

    public function test_case_2(){
        $string = "   fly me   to   the moon  ";
        $expect = 4;
        $result = (new \Problems\LengthOfLastWord())->solution($string);
        $this->assertEquals($expect, $result);
    }
    public function test_case_3(){
        $string = "luffy is still joyboy";
        $expect = 6;
        $result = (new \Problems\LengthOfLastWord())->solution($string);
        $this->assertEquals($expect, $result);
    }
}