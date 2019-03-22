<?php 

// Given array with values
$given_array = array(50, 1, 55, 12, 500);
// Assume first element is the largest number
$largest_number = $given_array[0];

// Find the largest number from that given array
foreach ( $given_array as $key => $value ) {
	if ( $largest_number < $value ) {
		$largest_number = $value;
	}
}

echo 'The largest number is :' . $largest_number;