<?php

echo " Product Cost:- ".($_GET["p_cost"])."₹"."<br />";

echo "Tax:- ".($_GET["tax"])."%"."<br />";

echo "Discount:- ".($_GET["discount"])."%"."<br />";
echo ("<hr>");

$a =($_GET["p_cost"]);
$b =($_GET["tax"]);
$c =($_GET["discount"]);

 $d = ($a+($a*$b)/100);    //Taxable amount

 $e = ($d-($d*$c)/100); // Discountable Amount

 echo "Taxable Amount :- ".(($a*$b)/100)."₹";
 echo "<br  />";
 echo "Discountable Amount :- ".(($d*$c)/100)."₹"."<br  />";
  
echo ("<hr>");

echo "Final Payment :- ".($d-($d*$c)/100)."₹"; 

// html starts ________________+ From Here 
