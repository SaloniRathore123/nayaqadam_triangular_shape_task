<?php

echo "<h2>Right Angle Triangle</h2>";
$traingle_row = 6;
$num = 6;
 for($a = 1; $a <= $traingle_row; $a++){
    for($b = 1; $b <= $a; $b++){
        echo "*";
    }
    echo "<br>";
 }
echo "----------------------------------";
echo "<h2>Inverted Triangle</h2>";
for($a = $traingle_row; $a >= 1; $a--){
    for($b = 1; $b <= $a; $b++){
        echo "*";
    }
    echo "<br>";
}

echo "----------------------------------";
echo "<h2>Number Triangle</h2>";
 for($a = 1; $a <= $num; $a++){
    for($b = 1; $b <= $a; $b++){
        echo $b;
    }
    echo "<br>";
 }

echo "----------------------------------";
echo "<h2>Pyramid Number Triangle</h2>";
for($a = 1; $a <= $traingle_row; $a++){
    for($b = $a; $b < $traingle_row; $b++){
        echo "&nbsp;&nbsp;";
    }
    for($c = 1; $c <= (2 * $a - 1); $c++){
        echo $c;
    }
    echo "<br>";
}
echo "----------------------------------";
echo "<h2>Inverted Pyramid Triangle</h2>";
for($a = $traingle_row; $a >= 1; $a--){
    for($b = $traingle_row; $b > $a; $b--){
        echo "&nbsp;&nbsp;";
    }
    for($c = 1; $c <= (2 * $a - 1); $c++){
        echo "*";
    }
    echo "<br>";
}
?>
