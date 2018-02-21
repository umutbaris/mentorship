<?php
/**
 * Created by PhpStorm.
 * User: trkarasu
 * Date: 29/01/2018
 * Time: 21:37
 */



require_once __DIR__ . '/quicksort.php';

class Test
{
    /**
     * Test constructor.
     */

    function __construct()
    {

    }

    /* This function wrote to test quicksort algorithm. QuickSort class assigned Quick_Sort object. There is a multiple
    array for testing. All elements of the array calls quick sort algorithm which foreach loop. So quicksort algorithm
    returns sorted set of numbers. Then printed sorted numbers.   */

    /**
     * Test values for any sorting algorithm
     * @param $unsorted
     * @return int
     */

    public function applyTest($unsorted){

        $Quick_Sort = new QuickSort($unsorted);
        $unsorted = array
        (
            array(1, 9, 0, 3),
            array(6, 6, 9, 4, 9, 1, 1, 7, 7, 6, 6),
            array(3, 5, 0),
            array(5, 8, 0, 6, 3, 5, 3, 4),
            array(4, 4, 4, 4, 4, 4,)
        );


        foreach ($unsorted as $val)
        {
            $sorted = $Quick_Sort->quickSort($val);
            echo implode(" - ", $sorted), "<br>";
        }
    }

}

$test = new Test();
$test->applyTest($unsorted);