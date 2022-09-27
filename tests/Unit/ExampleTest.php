<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Mockery;
use stdClass;

class ExampleTest extends TestCase
{
    public function test_example()
    {
        Mockery::mock(stdClass::class)->shouldReceive('teste')->andReturn(true);
        $this->assertTrue(true);
    }
}
