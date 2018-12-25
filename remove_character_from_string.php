<?php 
$remove_character = 'c';

$str = "vitamine c";
$final_str = '';

for ( $i=0; $i < strlen($str); $i++ ) { 
	if ( $str[$i] != $remove_character ) {
		$final_str = $final_str . $str[$i];
	}
}

echo $final_str;