<?php

function getRandomNumbersArray(int $min, int $max) : array
{
    $nbTab = range($min, $max);
    shuffle($nbTab);

    return $nbTab;
}

function insertAtPosition(array $tab, int $pos, int $nb)
{
    $copy = [];
    
    for($i = 0; $i < $pos; $i++)
    {
        $copy[$i] = $tab[$i];
    }
    
    $copy[$pos] = $nb;
    $j = $pos + 1;
    
    for($i = $pos; $i < count($tab); $i++)
    {
        $copy[$j] = $tab[$i];
        $j++;
    }
    
    return $copy;
}

function sortNumbers(array $numbers, bool $desc = false)
{
    $tab = [];
    $tab[0] = $numbers[0];
    
    for($i = 0; $i < count($numbers); $i++)
    {
        for($j = 0; $j < count($tab); $j++)
        {
            if(isset($tab[$j + 1]))
            {
                $prev = $tab[$j];
                $next = $tab[$j+1];
            
                if($prev < $numbers[$i] && $next > $numbers[$i])
                {
                    $tab = insertAtPosition($tab, $j + 1, $numbers[$i]);
                    $j = count($tab);
                }
                else if($prev > $numbers[$i])
                {
                    $tab = insertAtPosition($tab, $j, $numbers[$i]);
                    $j = count($tab);
                }
            }
            else
            {
                if($numbers[$i] > $tab[$j])
                {
                    $tab[] = $numbers[$i];
                    $j = count($tab);
                }
                else if ($numbers[$i] === $tab[$j])
                {
                    
                }
                else
                {
                    insertAtPosition($tab, $j, $numbers[$i]);
                    $j = count($tab);
                }
            }
        }
    }
    
    return $tab;
}

sortNumbers(getRandomNumbersArray(-10000, 10000));