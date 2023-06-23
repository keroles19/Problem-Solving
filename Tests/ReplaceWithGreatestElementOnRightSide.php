<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Problems\TwoSum;

class ReplaceWithGreatestElementOnRightSide extends TestCase
{
    public function test_solving_replace_with_greatest_element_on_right_side_1()
    {
        $arr = [17, 18, 5, 4, 6, 1];
        $expected = [18, 6, 6, 6, 1, -1];
        $result = (new \Problems\ReplaceWithGreatestElementOnRightSide())->solution($arr);
        $this->assertEquals($expected, $result);
    }

    public function test_solving_replace_with_greatest_element_on_right_side_2()
    {
        $arr = [400];
        $expected = [-1];
        $result = (new \Problems\ReplaceWithGreatestElementOnRightSide())->solution($arr);
        $this->assertEquals($expected, $result);
    }
}