<?php

echo bd_taka_format(123456789.52); // Output 12,34,56,789.52
echo bd_taka_format(-123456789.52); // Output -12,34,56,789.52
echo bd_taka_format(789.52); // Output -12,34,56,789.52
echo bd_taka_format(-789.52); // Output -12,34,56,789.52
echo bd_taka_format(-1209.52); // Output -12,34,56,789.52
echo bd_taka_format(-12009.58); // Output -12,34,56,789.58

function bd_taka_format( $amount = 0 )
{
	$tmp 		= explode( ".", $amount ); // for float or double values
	$strMoney 	= "";
	$isNegetive = false;
	if ( $amount < 0 ) {
	    $amount 		= substr( $tmp[0], 1 );
	    $is_negetive 	= true;
	}
	else {
	    $amount 		= $tmp[0];
	}
    
	$strMoney 	.= substr( $amount, -3, 3 ) ;
	$amount 	= substr( $amount, 0, -3 ) ;

	while ( strlen( $amount ) > 0 ) {
		$strMoney 	= substr( $amount, -2, 2 ).",".$strMoney;
		$amount 	= substr( $amount, 0, -2 );
	}

	if ( isset($tmp[1]) ) { // if float and double add the decimal digits here.
	    if ( $is_negetive ) {
	        return "-".$strMoney.".".$tmp[1];
	    }
		return $strMoney.".".$tmp[1];
	}
	
	if ( $is_negetive ) {
	    return "-".$strMoney;
	}
	return $strMoney;
}