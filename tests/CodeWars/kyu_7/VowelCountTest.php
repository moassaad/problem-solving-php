<?php

namespace ProblemSolve\Tests\CodeWars\kyu_7;

use PHPUnit\Framework\TestCase;
use ProblemSolve\App\CodeWars\kyu_7\VowelCount;

class VowelCountTest extends TestCase
{
    private function doTest(string $s, int $expected)
    {
        $this->assertSame($expected, VowelCount::getCount($s), "getCount('$s') returned an incorrect answer.");
    }
  
    public function testSampleTests()
    {
        $this->doTest("aeiou", 5);
        $this->doTest("y", 0);
        $this->doTest("bcdfghjklmnpqrstvwxz y", 0);
        $this->doTest("", 0);
        $this->doTest("abracadabra", 5);
    }
    //-----------------------------------
    private $vowels = 'aeiou';
    private $nonvowels = 'bcdfghjklmnpqrstvwxyz';
  
    public function testFixedTests()
    {
        $this->doTest("aeiou", 5);
        $this->doTest("y", 0);
        $this->doTest("bcdfghjklmnpqrstvwxz y", 0);
        $this->doTest("", 0);
        $this->doTest("abracadabra", 5);
    }
  
    private function generateNoVowels(): array
    {
        $wordCount = rand(1, 10);
        $words = [];
        for ($i = 0; $i < $wordCount; $i++) {
            $words[] = $this->randomString($this->nonvowels, rand(1, 8));
        }
        $sentence = implode(' ', $words);
        return [$sentence, 0];
    }

    private function generateOnlyVowels(): array
    {
        $wordCount = rand(1, 10);
        $words = [];
        $vowelCount = 0;
        for ($i = 0; $i < $wordCount; $i++) {
            $word = $this->randomString($this->vowels, rand(1, 8));
            $words[] = $word;
            $vowelCount += strlen($word);
        }
        $sentence = implode(' ', $words);
        return [$sentence, $vowelCount];
    }

    private function generateMixed(): array
    {
        $wordCount = rand(1, 10);
        $words = [];
        $vowelCount = 0;

        for ($i = 0; $i < $wordCount; $i++) {
            $vowelPart = $this->randomString($this->vowels, rand(1, 3));
            $nonvowelPart = $this->randomString($this->nonvowels, rand(1, 8));
            $word = str_shuffle($vowelPart . $nonvowelPart);
            $words[] = $word;
            $vowelCount += strlen($vowelPart);
        }

        $sentence = implode(' ', $words);
        return [$sentence, $vowelCount];
    }

    private function randomString(string $characters, int $length): string
    {
        return implode('', array_map(function () use ($characters) {
            return $characters[rand(0, strlen($characters) - 1)];
        }, range(1, $length)));
    }

    public function testRandomTests()
    {
        $testCases = array_merge(
            array_map([$this, 'generateNoVowels'], range(1, 10)),
            array_map([$this, 'generateOnlyVowels'], range(1, 10)),
            array_map([$this, 'generateMixed'], range(1, 80))
        );

        shuffle($testCases);

        foreach ($testCases as [$input, $expected]) {
            $this->doTest($input, $expected);
        }
    }
}
