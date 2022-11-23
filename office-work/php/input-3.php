<?php
// Given Values Appearing at here ----------End/
echo"Product Cost :- ".($_GET["p_cost"])."₹"."<br />";
echo"Tax :- ".($_GET["tax"])."%"."<br />";
echo "Discount :- ".($_GET["radio_button"])."%"."<br />";
echo"<hr/>";

// // Given Values Appearing at here ----------End/
// // Variables are atarting from here-----------------+
// $product_cost = ($_GET["p_cost"]);
// $tax = ($_GET["tax"]);  
// $discount = ($_REQUEST['radio_button']);
// echo "Your Tax Amount :- ".($product_cost*$tax/100)."₹"."<br />";
// echo"<hr/>";
// $tax_amount = $product_cost+($product_cost*$tax/100);
// $dis_amount = ($tax_amount)-($tax_amount*$discount/100);
// // Variables are ending from here--------------+
// echo "Your Taxable Amount :- ".($tax_amount)."₹"."<br />";
// echo "Your Total Amount is :- ".($dis_amount)."₹"."<br />";

$a =($_GET["p_cost"]);
$b =($_GET["tax"]);
$c =($_GET["radio_button"]);

 $d = ($a+($a*$b)/100);    //Taxable amount

 $e = ($d-($d*$c)/100);

 
 echo "Taxable Amount :- ".(($a*$b)/100)."₹";
 echo "<br  />";
 echo "<br  />";


 echo "Discountable Amount :- ".(($d*$c)/100)."₹"."<br  />";

 
echo ("<hr>");

echo "Final Payment :- ".($d-($d*$c)/100)."₹"; 

