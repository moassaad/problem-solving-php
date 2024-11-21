<?php

namespace ProblemSolve\Tests\CodeWars\kyu_8;

use PHPUnit\Framework\TestCase;
use ProblemSolve\App\CodeWars\kyu_8\ConvertBooleanValuesToStrings;

class ConvertBooleanValuesToStringsTest extends TestCase
{
    public function testTrueShouldReturnYes() {
        $this->assertSame("Yes", ConvertBooleanValuesToStrings::boolToWord(true), "boolToWord(true) returned an incorrect answer.");
    }

    public function testFalseShouldReturnNo() {
        $this->assertSame("No", ConvertBooleanValuesToStrings::boolToWord(false), "boolToWord(false) returned an incorrect answer.");
    }
}
