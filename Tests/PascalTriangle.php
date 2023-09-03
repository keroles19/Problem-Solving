<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class PascalTriangle extends TestCase
{
    public function test_case_1()
    {
        $numRows = 5;
        $output = [[1],[1,1],[1,2,1],[1,3,3,1],[1,4,6,4,1]];

        $solutions = new \Problems\PascalTriangle();
        $this->assertEquals($output, $solutions->solution($numRows));
    }

    public function test_case_2()
    {
        $numRows = 1;
        $output = [[1]];

        $solutions = new \Problems\PascalTriangle();
        $this->assertEquals($output, $solutions->solution($numRows));
    }
}