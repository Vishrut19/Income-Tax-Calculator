<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Output</title>
  </head>
  <style media="screen">
  h3{
    text-color: white;
  }
    body{
      padding: 50px;
    }
  </style>
  <body>

    <style media="screen">
      h1{
        text-align: center;
        padding-top: 10px;
      }
      /* h2{
        text-align: center;
        padding-top: 10px;
      } */
    </style>

    <div class="container ">
      <div class="jumbotron">
          <h1 class="display-4">Output Page</h1><br><br>
          <div>
              <table align="center" style="width:60%">
                <tr>
                  <td>
                    <div class="row">
                      <div class="col-sm-8"><h2><small>Name :</small></h2></label></div>
                        <div class="col-sm-4"><h2><small><?php $name=$_GET['Name'];echo $name; ?></small></h2></div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="row">
                      <div class="col-sm-8"><h2><small>Tax Calculated on Rs.<?php $val=$_GET['input_gross'];echo $val; ?> = </small></h2></label></div>
                        <div class="col-sm-4"><h2><small>Rs.<?php $val=$_GET['tax_output'];echo $val; ?></small></h2></div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="row">
                      <div class="col-sm-8"><h2><small>Gross Equivalent of Rs.<?php $val=$_GET['input_net'];echo $val; ?> = </small></h2></label></div>
                        <div class="col-sm-4"><h2><small>Rs.<?php $val=$_GET['gross_output'];echo $val; ?></small></h2></div>
                    </div>
                  </td>
                </tr>
              </table>
          </div>
          <h1><a class="btn btn-outline-dark" href="Tax_Calculator.html">Back</a></h1>
    </div>
  </body>
</html>
