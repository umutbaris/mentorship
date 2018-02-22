<?php
function custom_autoloader( $class ) {
    include $class . '.php';
}

// register the autoloader
spl_autoload_register( 'custom_autoloader' );

$quickSort = new QuickSort();
$sorted    = $quickSort->apply( [3,7,1,5] );
print_r($sorted);

// check the list of all loaded files
var_dump( get_included_files() );