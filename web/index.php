<?php
function custom_autoloader( $class ) {
    include $class . '.php';
}

// register the autoloader
spl_autoload_register( 'custom_autoloader' );

$quickSort = new QuickSort();
$sorted    = $quickSort->apply( [3,7,1,5] );
echo '<pre>';
print_r( $sorted );