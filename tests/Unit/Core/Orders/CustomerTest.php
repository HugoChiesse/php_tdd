<?php

namespace Tests\Core\Orders;

use Core\Orders\Customer;
use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{
    public function testAttributes()
    {
        $customer = new Customer(
            name: "Hugo Chiesse"
        );
        $this->assertEquals("Hugo Chiesse", $customer->getName());
        
        $customer->changeName(
            name:"Karen Barros"
        );
        $this->assertEquals("Karen Barros", $customer->getName());

        $this->assertTrue(true);
    }
}
