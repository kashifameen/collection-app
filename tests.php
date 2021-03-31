<?php
use PHPUnit\Framework\TestCase;
require_once 'functions.php';

class Tests extends TestCase
{
    public function testcarTable_success1()
    {
        $practice_array = [[
            'Brand' => 'Mercedes',
            'Model' => 'E63',
            'Year_released' => '2020'
        ]];
        $result = carTable($practice_array);
        $expected = '<div class = "container"><div>Brand: Mercedes<br>Model: E63<br>Year Released: 2020</div></div>';
        $this->assertEquals($result, $expected);
    }
    public function testcarTable_malformed1()
    {
        $this->expectException(TypeError::class);
        carTable(100);
    }
    public function testcarTable_malformed2()
    {
        $this->expectException(TypeError::class);
        carTable("hello");
    }
}