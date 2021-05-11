<?php
include('Calculation_Using_Multiple_Traits.php');


$object= new Driver();




$name=$_POST['name'];
$input_gross=$_POST['gross_income_input'];
$input_net=$_POST['net_income_input'];

$tax=$object->tax_calculate((int)$input_gross);
$gross_from_net=$object->gross_calculate((int)$input_net);
$gross_output=(int)$gross_from_net;

echo $name ."<br>";
echo "Tax Paid for " .$input_gross ." is : " .$tax ."<br>";
echo "Gross Amount for " .$input_net ." is : " .floor($gross_from_net)."<br>";

header("Location: Output_Page.php?Name=$name&tax_output=$tax&gross_output=$gross_output&input_gross=$input_gross&input_net=$input_net");

 ?>
