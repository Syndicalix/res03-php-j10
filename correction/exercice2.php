<?php

function power(int $nb1, int $nb2)
{
    $res = 0;
    
    for($i = 1; $i <= $nb2; $i++)
    {
        if($i === 1)
        {
            $res = $nb1;
        }
        else
        {
            $res *= $nb1;
        }
    }
    
    return $res;
}

$result = power(2, 3);
echo "2 ^ 3 = $result<br>";

$result = power(10, 4);
echo "10 ^ 4 = $result<br>";

$result = power(5, 2);
echo "5 ^ 2 = $result<br>";

?>