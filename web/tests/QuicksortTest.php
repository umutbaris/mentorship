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

class QuicksortTest extends TestCase {

    /**
     *
     */
    public function testFirst(){
        $quickSort = new QuickSort();
        $input =  [ 1, 9, 0, 3 ];
        $result = $quickSort->apply($input);
        $this->assertEquals([0, 1, 3, 9], $result);
    }

    /**
     *
     */
    public function testSameVal(){
        $quickSort = new QuickSort();
        $input =  [ 0, 0, 0, 0 ];
        $result = $quickSort->apply($input);
        $this->assertEquals([0, 0, 0, 0], $result);
    }

}
