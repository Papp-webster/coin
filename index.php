<?php
	
	
function countFlip($s, $n) {
	
	$p = [0,0];

	//Ellenőrizzük, hogy kezdetben az összes érme a fej felé néz.
    if($s == 'H')
    {
        $p[0] = floor($n / 2.0);
        $p[1] = ceil($n / 2.0);
    }
     
    //Ellenőrizzük, hogy kezdetben az összes érme az írás felé néz.
   
    else if($s == 'T')
    {
        $p[0] = ceil($n / 2.0);
        $p[1] = floor($n / 2.0);
    }
     
    return $p;
}

$c = 'H';
$n = 3;
 
$p = countFlip($c, $n);
 
echo "Fej: " . $p[0] . "<br>";
echo "Írás: " . $p[1] . "<br>";

?>