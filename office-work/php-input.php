 <?php

echo " Your Amount:- ".($_GET["t_price"])."<br />";

 echo " Percented Amount:- ". ($_GET["percent_amnt"])."<br />";
 echo "<hr>"
?>

<?php
$a = ($_GET["t_price"]);

$b = ($_GET["percent_amnt"]);

$c = $a-($a*$b)/100; 

 echo "Actual Amount:- ".($c); 
// $c =($a*$b)/100;

// echo "Your Discount Amount:- ". ($c);

// echo "<hr>"

// echo "Actual Amount:- ".($a-$c);


?>