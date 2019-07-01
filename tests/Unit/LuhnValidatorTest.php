<?php
declare (strict_types=1);

namespace Tests\Dojo\Luhn;

use Deckard\Dojo\LuhnValidator;
use PHPUnit\Framework\TestCase;

class LuhnValidatorTest extends TestCase
{
    public function testShouldValidateAllZeros(): void
    {
        $validator = new LuhnValidator();
        $this->assertTrue($validator->isValid('00000000000'));
    }

    public function testShouldNotValidateAllZerosEndingInOne(): void
    {
        $validator = new LuhnValidator();
        $this->assertFalse($validator->isValid('00000000001'));
    }
}