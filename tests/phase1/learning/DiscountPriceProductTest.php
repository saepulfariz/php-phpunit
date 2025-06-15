<?php

namespace Tests\Phase1\Learning;

use PHPUnit\Framework\TestCase;
use App\Phase1\Learning\DiscountPriceProduct;

class DiscountPriceProductTest extends TestCase
{
    public function test_case_1()
    {
        $discount = new DiscountPriceProduct();
        $this->assertEquals(2205000, $discount->run(7550000, 9000000));
    }


    public function test_case_2()
    {
        $discount = new DiscountPriceProduct();
        $this->assertEquals(1000, $discount->run(499000, 500000));
    }

    public function test_case_3()
    {
        $discount = new DiscountPriceProduct();
        $this->assertEquals(4789600, $discount->run(12450500, 14750000));
    }

    public function test_case_4()
    {
        $discount = new DiscountPriceProduct();
        $this->assertEquals(0, $discount->run(2450000, 1650000));
    }

    public function test_case_5()
    {
        $discount = new DiscountPriceProduct();
        $this->assertEquals(1018275, $discount->run(3675500, 4510000));
        // $this->assertEquals(1018270, $discount->run(3675500, 4510000));
    }
}
