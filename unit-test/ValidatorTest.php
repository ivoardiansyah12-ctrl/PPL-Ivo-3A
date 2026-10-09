<?php
//File: ValidatorTest.php
use PHPUnit\Framework\TestCase;

require_once 'Validator.php';

class ValidatorTest extends TestCase {

    // === Test Age ===
    public function testValidage() {
        $this->assertTrue(Validator::validateAge(30));
        $this->assertFalse(Validator::validateAge(-30));
    } 
    public function testEmptyAgeThrowException() {
        $this->expectException(InvalidArgumentException::class);
        validateAge("");
    }
}