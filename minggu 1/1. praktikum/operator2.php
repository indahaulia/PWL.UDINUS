<?php
//INDAH AULIA | A11.2019.11684

$a = 5 ;
$b = 4 ;
echo "$a == $b : ".($a==$b);
echo "<br>$a != $b : ".($a!=$b);
echo "<br>$a > $b : ".($a>$b);
echo "<br>$a < $b : ".($a<$b);
echo "<br>($a == $b) && ($a>$b) : ".(($a != $b) && ($a>$b));
echo "<br>($a == $b) || ($a>$b) : ".(($a != $b) || ($a>$b));

?>