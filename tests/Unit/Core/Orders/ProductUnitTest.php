<?php


namespace Tests\Core\Orders;

use Core\Orders\Product;
use Mockery;
use PHPUnit\Framework\TestCase;

class ProductUnitTest extends TestCase
{
   
    public function testAttributes()
    {
        $product = new Product(
            id: 1,
            name: "prodx",
            price: 10,
            total: 12
        );

        $this->assertEquals('prodx', $product->getName());
        $this->assertEquals(10, $product->getPrice());
        $this->assertEquals(1, $product->getId());
    }

    public function testCalc()
    {
        $product = new Product(
            id: 1,
            name: "prodx",
            price: 10,
            total: 12
        );

        $this->assertEquals(120, $product->total());
    }
   
    public function testCalcWithTax()
    {
        $product = new Product(
            id: 1,
            name: "prodx",
            price: 10,
            total: 12
        );

        $this->assertEquals(132, $product->totalWithTax10());
    }

    public function testExempleMock()
    {
        $mockProduct = Mockery::mock(Product::class, [
            1, "prodx", 10, 12
        ]);

        $mockProduct->shouldReceive('getId')->andReturn(1);

        $this->assertTrue(true);
    }

    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }
}
