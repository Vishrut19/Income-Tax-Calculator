<?php
$net=400001;
$gross=0;
if($net<=400000)
{
  $gross=$net;
}
elseif ($net>400000)
{
    $amt=$net-150000;             //Slab 1
    $gross=$gross+150000;

    $amt=$amt-146250;               //Slab 2
    $gross=$gross+150000;

    if($amt<800000)                 //Slab 3
    {
      $gross=$gross+($amt/0.9);
      $amt=0;
    }
    else
    {
      $amt=$amt-450000;
      $gross=$gross+450000;
    }

    if($amt<10000000)                //Slab 4
    {
      $gross=$gross+($amt/0.75);
      $amt=0;
    }
    else
    {
      $amt=$amt-6900000;
      $gross=$gross+6900000;
    }


    $gross=$gross+($amt/0.7);         //Slab 5

}
echo "gross paid : ".floor($gross);

 ?>
