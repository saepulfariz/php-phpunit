<?php

require_once __DIR__ . '/../src/Calculator.php';

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testTambah()
    {
        $calc = new Calculator();
        $this->assertEquals(5, $calc->tambah(2, 3));
    }

    public function testKurang()
    {
        $calc = new Calculator();
        $this->assertEquals(1, $calc->kurang(3, 2));
    }
}
