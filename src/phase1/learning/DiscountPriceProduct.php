<?php

namespace App\Phase1\Learning;

class DiscountPriceProduct
{
    public function run($n, $u)
    {
        $discount = 0;
        if ($n >= 10000000) {
            $discount = 20;
        } else if ($n >= 5000000 && $n < 10000000) {
            $discount = 10;
        } else if ($n >= 2000000 && $n < 5000000) {
            $discount = 5;
        } else if ($n < 200000) {
            $discount = 0;
        }

        $price_discount = $n * $discount / 100;
        $price_buy = $n - $price_discount;

        if ($price_buy > $u) {
            $change_money = 0;
        } else {
            $change_money = $u - $price_buy;
        }

        return $change_money;
    }
}
