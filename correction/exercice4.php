<?php

function divide(int $nb1, int $nb2) : ?int
{
    if($nb2 === 0)
        return null;
        
    if($nb2 > $nb1)
        return 0;
    
    $rest = $nb1;
    $quo = 1;
    
    while($rest > $nb2)
    {
        $rest -= $nb2;
        $quo++;
    }
    
    return $quo;
}

$result = divide(10, 2);
echo "10 / 2 = $result<br>";

$result = divide(8, 3);
echo "8 / 3 = $result<br>";

$result = divide(25, 5);
echo "25 / 5 = $result<br>";

$result = divide(10000, 2);
echo "10000 / 2 = $result<br>";

?>