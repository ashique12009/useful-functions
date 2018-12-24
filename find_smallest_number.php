<?php 

// Given array with values
$given_array = array(50, 1, 11, 12, 500);
// Assume first element is the smallest number
$smallest_number = $given_array[0];

// Find the smallest number from that given array
foreach ( $given_array as $key => $value ) {
	if ( $smallest_number > $value ) {
		$smallest_number = $value;
	}
}

echo 'The smallest number is :' . $smallest_number;