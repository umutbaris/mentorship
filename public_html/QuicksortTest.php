<?php
/**
 * Created by PhpStorm.
 * User: trkarasu
 * Date: 12/02/2018
 * Time: 11:20
 */

//use PHPUnit\Framework\TestCase;

require_once ('vendor/phpunit/phpunit/src/Framework/TestCase.php');
require_once __DIR__ . '/quicksort.php';

    class QuicksortTest extends TestCase{

    public function firstTest(){
        $Quick_Sort = new QuickSort();
        $input =  array(1, 9, 0, 3);
        $result = $Quick_Sort->quickSort($input);
        $this->assertEquals(0 - 1 - 3 - 9, $result);
    }


}

