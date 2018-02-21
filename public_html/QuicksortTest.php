<?php
/**
 * Created by PhpStorm.
 * User: trkarasu
 * Date: 12/02/2018
 * Time: 11:20
 */

use PHPUnit\Framework\TestCase;

require_once 'vendor/autoload.php';
require_once __DIR__ . '/quicksort.php';

class QuicksortTest extends TestCase {

    public function firstTest(){
        $quickSort = new QuickSort();
        $input =  [ 1, 9, 0, 3 ];
        $result = $quickSort->apply($input);
        $this->assertEquals([0, 1, 3, 9], $result);
    }
}

$test = new QuicksortTest();
$test->firstTest();