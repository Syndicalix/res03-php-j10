<?php

$map1 = [
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "1", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "2", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"]
];

$map2 = [
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["2", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "1", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"]
];

$map3 = [
    ["1", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "2"]
];

$map4 = [
    ["0", "0", "0", "0", "0", "0", "0", "0", "1", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "2"]
];

$map5 = [
    ["1", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "2", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"]
];


function findStart(array $tab)
{
    for($i = 0; $i < count($tab); $i++)
    {
        for($j = 0; $j < count($tab[$i]); $j++)
        {
            if($tab[$i][$j] === "1")
                return ["x" => $j, "y" => $i];
        }
    }
}

function findEnd(array $tab)
{
    for($i = 0; $i < count($tab); $i++)
    {
        for($j = 0; $j < count($tab[$i]); $j++)
        {
            if($tab[$i][$j] === "2")
                return ["x" => $j, "y" => $i];
        }
    }
}

function up(array $tab, int $x, int $y) : array
{
    $tab[$y][$x] = "0";
    $tab[$y - 1][$x] = "1";
    echo "UP<br>";
    
    return $tab;
}

function down(array $tab, int $x, int $y)
{
    $tab[$y][$x] = "0";
    $tab[$y + 1][$x] = "1";
    echo "DOWN<br>";
    
    return $tab;
}

function left(array $tab, int $x, int $y)
{
    $tab[$y][$x] = "0";
    $tab[$y][$x - 1] = "1";
    echo "LEFT<br>";
    
    return $tab;
}

function right(array $tab, int $x, int $y)
{
    $tab[$y][$x] = "0";
    $tab[$y][$x + 1] = "1";
    echo "RIGHT<br>";
    
    return $tab;
}

function displayMap($map) : void
{
    $str = "";
    
    for($i = 0; $i < count($map); $i++)
    {
        for($j = 0; $j < count($map[$i]); $j++)
        {
            $str = $str.$map[$i][$j];
        }
        
        $str = $str . "<br>"; 
    }
    
    echo $str;
}

function pathfinder(array $map) : int
{
    $start = findStart($map);
    $end = findEnd($map);
    
   echo "START<br>";
   var_dump($start);
   
   echo "END<br>";
   var_dump($end);
    
    $moves = 0;
    
    while(($start["x"] !== $end["x"]) || ($start["y"] !== $end["y"]))
    {
        if($start["y"] > $end["y"])
        {
            // i have to go up
            if($start["x"] > $end["x"])
            {
                // i have to go left
                $map = left($map, $start["x"], $start["y"]);
            }
            else if($start["x"] === $end["x"])
            {
                // same line
                $map = up($map, $start["x"], $start["y"]);
            }
            else
            {
                // i have to go right
                $map = right($map, $start["x"], $start["y"]);
            }
        }
        else if($start["y"] === $end["y"])
        {
            // same column
            if($start["x"] > $end["x"])
            {
                // i have to go left
                $map = left($map, $start["x"], $start["y"]);
            }
            else
            {
                // i have to go right
                $map = right($map, $start["x"], $start["y"]);
            }
        }
        else
        {
            // i have to go down
            if($start["x"] > $end["x"])
            {
                // i have to go left
                $map = left($map, $start["x"], $start["y"]);
            }
            else if($start["x"] === $end["x"])
            {
                // same line
                $map = down($map, $start["x"], $start["y"]);
            }
            else
            {
                // i have to go right
                $map = right($map, $start["x"], $start["y"]);
            }
        }
        
        if(($start["x"] !== $end["x"]) || ($start["y"] !== $end["y"]))
        {
            $start = findStart($map);
            $moves++;    
        }
        
        if($moves === 300)
        {
            $start["x"] = $end["x"];
            $start["y"] = $end["y"];
        }
        
        displayMap($map);
        echo "<br><br>";
    }
    
    return $moves;
}

$moves = pathfinder($map1);
echo "Map 1 : $moves moves<br>";

$moves = pathfinder($map2);
echo "Map 2 : $moves moves<br>";

$moves = pathfinder($map3);
echo "Map 3 : $moves moves<br>";

$moves = pathfinder($map4);
echo "Map 4 : $moves moves<br>";

$moves = pathfinder($map5);
echo "Map 5 : $moves moves<br>";

?>