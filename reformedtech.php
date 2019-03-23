<?php 
class ReformedTech
{
    public function showResult()
    {
        for ( $i = 1; $i <= 100; $i++ )
        {
            if ( $i%3 == 0 && $i%5 == 0 )
            {
                echo $i . " ReformedTech"."<br>" ;
            }
            else if ( $i%3 == 0 ) 
            {
                echo $i . " Reformed"."<br>";
            }
            else if ( $i%5 == 0 ) 
            {
                echo $i . " Tech"."<br>";
            }
            else
            {
                echo $i . "<br>";
            }
        }
    }
}

$objReformedTech = new ReformedTech();
$objReformedTech->showResult();