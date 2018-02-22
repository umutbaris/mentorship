<?php

/**
 * Created by PhpStorm.
 * User: trkarasu
 * Date: 23/01/2018
 * Time: 16:28
 */

/**
 * This is quick sort algorithm function. Function takes unsorted parameter to get the unsorted set of numbers.
 * It firstly controls count of numbers. If there is only one number, no need to sort so it returns what it is the number.
 * If there are more than one number, quick sort algorithm starts. Algorithm choose a number and accept it the pivot
 * number. I preferred first number as pivot with using $unsorted[]. Two array defined left and right. Left  for
 * smaller than pivot, right for bigger than pivot. All elements of the array compared pivot value with for loop. The
 * smaller ones added left array, bigger ones added right array. The left and right arrays call to function to be sort
 * with same logic. Latest all arrays merged and returned.
 *
 */
class QuickSort {

    /**
     * QuickSort number sorting algorithm
     *
     * @param array $unsorted
     * @return array
     */
    public function apply($unsorted)
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
            return array_merge($this->apply($left), array($pivot), $this->apply($right));
        }
    }
}