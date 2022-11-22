<?php


// Given Values Appearing at here ----------End/

echo"Product Cost :- ".($_GET["p_cost"])."₹"."<br />";

echo"Tax :- ".($_GET["tax"])."%"."<br />";

echo "Discount :- ".($_GET["radio_button"])."%"."<br />";

echo"<hr/>";

// Given Values Appearing at here ----------End/

// Variables are atarting from here-----------------+
$product_cost = ($_GET["p_cost"]);

$tax = ($_GET["tax"]);  

$discount = ($_REQUEST['radio_button']);


// Variables are ending from here---------------+

$tax_amount = $product_cost-($product_cost*$tax/100);

$dis_amount = $product_cost-($product_cost*$discount/100);

// Second Variable Start From----------------------+ From Here......

// Final Computing  starts from here -----

echo"Taxable mount :-".($tax_amount)."<br/>";


