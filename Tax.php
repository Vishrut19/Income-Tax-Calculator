<?php
$gross=20000000;
$tax=0;
if($gross<=400000)
{
  $tax=0;
}
elseif ($gross>400000)
{
    $amt=$gross-150000;             //Slab 1
    $tax=$tax+$amt*0;

    $amt=$amt-150000;               //Slab 2
    $tax=$tax+(150000*0.025);

    if($amt<800000)                 //Slab 3
    {
      $tax=$tax+($amt*0.1);
      $amt=0;
    }
    else
    {
      $amt=$amt-500000;
      $tax=$tax+(500000*0.1);
    }

    if($amt<10000000)                //Slab 4
    {
      $tax=$tax+($amt*0.25);
      $amt=0;
    }
    else
    {
      $amt=$amt-9200000;
      $tax=$tax+(9200000*0.25);
    }

    $tax=$tax+($amt*0.3);         //Slab 5

}
echo "Tax paid : ".$tax;

 ?>
