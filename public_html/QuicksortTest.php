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


    class QuicksortTest extends TestCase{

    public function firstTest($input){
        $Quick_Sort = new QuickSort($input);
        $input =  array(array(1, 9, 0, 3),array(7, 2));
        $result = $Quick_Sort->quickSort($input);
        $this->assertEquals(array(array(0, 1, 3, 9), array(2,7)), $result);
    }



}

$test = new QuicksortTest();
$test->firsttest($input);