<?php

namespace igorw;

class DevZeroTest extends \PHPUnit_Framework_TestCase {
    /** @test */
    function devZeroShouldReturnAllZeroes() {
        foreach (dev_zero() as $zero) {
            $this->assertSame(0, $zero);
        }
    }
}
