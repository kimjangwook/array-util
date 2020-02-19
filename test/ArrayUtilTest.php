<?php
namespace KimJangwook\Test;

use KimJangwook\ArrayUtil\ArrayUtil;
use PHPUnit\Framework\TestCase;

/**
 * Class ArrayUtilTest
 * @group ArrayUtil
 */
class ArrayUtilTest extends TestCase
{
    public function testFind()
    {
        $testArr = [
            [ 'name' => 'a', 'age' => 30 ],
            [ 'name' => 'b', 'age' => 28 ],
            [ 'name' => 'c', 'age' => 30 ],
        ];
        $this->assertEquals(ArrayUtil::find($testArr, function ($person) {
            return $person['age'] === 30;
        })['name'], 'a');
        $this->assertNull(ArrayUtil::find($testArr, function ($person) {
            return $person['age'] === 29;
        }));
    }

    public function testExists()
    {
        $testArr = [
            [ 'name' => 'a', 'age' => 30 ],
            [ 'name' => 'b', 'age' => 28 ],
            [ 'name' => 'c', 'age' => 30 ],
        ];
        $this->assertTrue(ArrayUtil::exists($testArr, function ($person) {
            return $person['age'] === 30;
        }));
        $this->assertFalse(ArrayUtil::exists($testArr, function ($person) {
            return $person['age'] === 29;
        }));
    }
}
