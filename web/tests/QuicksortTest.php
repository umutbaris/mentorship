<?php

/**
 * Created by PhpStorm.
 * User: trkarasu
 * Date: 12/02/2018
 * Time: 11:20
 */

use PHPUnit\Framework\TestCase;

/**
 * Class QuicksortTest
 */
class QuicksortTest extends TestCase
{
    /**
     *For valid values
     */
    public function testFirst()
    {
        $quickSort = new QuickSort();
        $input = [1, 9, 0, 3];
        $result = $quickSort->apply($input);
        $this->assertEquals([0, 1, 3, 9], $result);
    }

    /**
     *For duplicated values
     */
    public function testSameVal()
    {
        $quickSort = new QuickSort();
        $input = [0, 1, 0, 0, 1];
        $result = $quickSort->apply($input);
        $this->assertEquals([0, 0, 0, 1, 1], $result);
    }

    /**
     *If input is integer but is not a array
     */
    public function testArray()
    {
        $quickSort = new QuickSort();
        $input = 1;
        $result = $quickSort->apply($input);
        $this->assertEquals([
            'error' => true,
            'message' => 'Input should be an array.'
        ], $result);
    }

    /**
     *If input is not a array and int
     */
    public function testArrayForString()
    {
        $quickSort = new QuickSort();
        $input = "a";
        $result = $quickSort->apply($input);
        $this->assertEquals([
            'error' => true,
            'message' => 'Input should be an array.'
        ], $result);
    }

    /**
     *Type check in array
     */
    public function testTypeCheck()
    {
        $quickSort = new QuickSort();
        $input = ["a", 2, 1, "b"];
        $result = $quickSort->apply($input);
        $this->assertEquals( [
            'error' => true,
            'message' => 'Input should be integer value.'
        ], $result);
    }


    /**
     *Null control
     */
    public function testNull()
    {
        $quickSort = new QuickSort();
        $input = [];
        $result = $quickSort->apply($input);
        $this->assertEquals([
            'error' => true,
            'message' => 'You should enter at least one value.'
        ], $result);
    }

}
