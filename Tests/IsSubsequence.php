<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class IsSubsequence extends TestCase
{
    public function test_case_1()
    {
        $s = "abc"; $t = "ahbgdc";
        $expected = (new \Problems\IsSubsequence())->solution($s, $t);
        $this->assertTrue($expected);
    }

    public function test_case_2()
    {
        $s = "axc"; $t = "ahbgdc";
        $expected = (new \Problems\IsSubsequence())->solution($s, $t);
        $this->assertFalse($expected);
    }
}