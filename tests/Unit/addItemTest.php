<?php

use App\Controller\ItemController;
use PHPUnit\Framework\TestCase;

class addItemTest extends TestCase
{
    private ItemController $addItem;

    protected function setUp(): void
    {
        $this->addItem = new ItemController();
    }

    public function testIsEmailReturnsTrueForValidEmail()
    {
        $this->assertEquals(1, $this->addItem->isEmail('test@example.com'));
    }

    public function testIsEmailReturnsFalseForInvalidEmail()
    {
        $this->assertEquals(0, $this->addItem->isEmail('invalid-email'));
    }

    public function testIsEmailReturnsFalseForEmptyEmail()
    {
        $this->assertEquals(0, $this->addItem->isEmail(''));
    }

    public function testIsEmailReturnsFalseForEmailWithoutAtSymbol()
    {
        $this->assertEquals(0, $this->addItem->isEmail('test.example.com'));
    }

    public function testIsEmailReturnsFalseForEmailWithSpaces()
    {
        $this->assertEquals(0, $this->addItem->isEmail('test @example.com'));
    }
}