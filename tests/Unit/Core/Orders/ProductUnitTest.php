<?php


namespace Tests\Core\Orders;

use Core\Orders\Product;
use PHPUnit\Framework\TestCase;

class ProductUnitTest extends TestCase
{
    public function testCalc()
    {
        $product = new Product(
            name: "prodx",
            price: 10,
            total: 12
        );

        $this->assertEquals(120, $product->total());
    }
   
    public function testCalcWithTax()
    {
        $product = new Product(
            name: "prodx",
            price: 10,
            total: 12
        );

        $this->assertEquals(132, $product->totalWithTax10());
    }
}
