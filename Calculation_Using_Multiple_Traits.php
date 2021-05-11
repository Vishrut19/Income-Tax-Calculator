<?php
trait Tax
{
  public function tax_calculate($gross)
  {
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
    return $tax;
  }
}
trait Gross
{
  public function gross_calculate($net)
  {
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
    return $gross;
  }
}

class Driver
{
  use Tax;
  use Gross;
}
 ?>
