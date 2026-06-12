<?php
/**
 * Tests for ChainCoin
 */

use PHPUnit\Framework\TestCase;
use Chaincoin\Chaincoin;

class ChaincoinTest extends TestCase {
    private Chaincoin $instance;

    protected function setUp(): void {
        $this->instance = new Chaincoin(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chaincoin::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
