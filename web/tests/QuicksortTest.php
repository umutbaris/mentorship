<?php
/**
 * Created by PhpStorm.
 * User: trkarasu
 * Date: 12/02/2018
 * Time: 11:20
 */

use PHPUnit\Framework\TestCase;

class QuicksortTest extends TestCase {

	public function testApply() {
		$quickSort = new QuickSort();
		$input     = [ 1, 9, 0, 3 ];
		$result    = $quickSort->apply( $input );
		$this->assertEquals( [0, 1, 3, 9], $result );
	}
}
