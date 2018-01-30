<?php

/**
 * Created by PhpStorm.
 * User: trkarasu
 * Date: 23/01/2018
 * Time: 16:28
 */

//class QuickSort {
    function quickSort($unsorted)
    {

        if (count($unsorted) <= 1) {
            return $unsorted;
        } else {
            $pivot = $unsorted[0];
            $left = array();
            $right = array();
            for ($i = 1; $i < count($unsorted); $i++) {
                if ($unsorted[$i] < $pivot) {
                    $left[] = $unsorted[$i];
                } else {
                    $right[] = $unsorted[$i];
                }
            }

            return array_merge(quickSort($left), array($pivot), quickSort($right));
        }

    }
//}

    $unsorted = array
    (
        array(1, 9, 0, 3),
        array(6, 6, 9, 4, 9, 1, 1, 7, 7, 6, 6),
        array(3, 5, 0),
        array(5, 8, 0, 6, 3, 5, 3, 4),
        array(4, 4, 4, 4, 4, 4,)
    );

    foreach ($unsorted as $val) {
        $sorted = quickSort($val);
        echo implode(" - ", $sorted), PHP_EOL;;
    }

