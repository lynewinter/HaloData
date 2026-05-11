<?php
/**
 * Tests for HaloData
 */

use PHPUnit\Framework\TestCase;
use Halodata\Halodata;

class HalodataTest extends TestCase {
    private Halodata $instance;

    protected function setUp(): void {
        $this->instance = new Halodata(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Halodata::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
