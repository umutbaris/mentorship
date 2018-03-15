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
class QuickSort
{

    /**
     * apply number sorting algorithm
     *
     * @param array $unsorted
     * @return array
     */
    public function apply($unsorted)
    {
        $validation = $this->validate_inputs($unsorted);
        if ( true == $validation['error'] ) {
            return $validation;
        }

        return $this->sort($unsorted);
    }

    /**
     * Check to is all elements of array integer
     * @param $data
     * @return array
     */
    public function validate_inputs($data)
    {
         if (empty($data)) {
            return [
                'error' => true,
                'message' => 'You should enter at least one value.'
            ];
        }

        if (!is_array($data)) {
            return [
                'error' => true,
                'message' => 'Input should be an array.'
            ];
        }

        $is_valid = true;
        foreach ($data as $key) {
            if (!is_numeric($key)) {
                $is_valid = false;
                break;
            }
        }

        if (false == $is_valid) {
            return [
                'error' => true,
                'message' => 'Input should be interger value.'
            ];
        }

        return [
            'error' => false
        ];
    }

    /**
     * Array sorting
     *
     * @param $unsorted
     * @return array
     */
    public function sort($unsorted)
    {
        if (count($unsorted) <= 1) {
            return $unsorted;
        }

        $pivot = $unsorted[0];
        $left = [];
        $right = [];
        $size_unsorted = count($unsorted);
        for ($i = 1; $i < $size_unsorted; $i++) {
            if ($unsorted[$i] < $pivot) {
                $left[] = $unsorted[$i];
            } else {
                $right[] = $unsorted[$i];
            }
        }

        return array_merge($this->sort($left), [$pivot], $this->sort($right));
    }
}