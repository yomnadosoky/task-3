<?php

if ($_POST) {


    $Product_Name =  $_POST['Product_Name'];
    $Price =  $_POST['Price'];
    $Quantities =  $_POST['Quantities'];
    $User_Name = $_POST['User_Name'];
    $n =  $_POST['Number_Of_Varieties'];

    $City =  $_POST['City'];
    $Sub_total = array();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Document</title>

    <!-- <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style> -->
</head>

<body>
    <div class="container">



        <div class="row">

            <div class="col-md-10  mt-5 ml-20 " style="width: 300px;background:aliceblue">

                <div class="col-12 text-center text-primary mt-3 mb-4">
                    <h1>
                        Product_Data

                    </h1>
                </div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Product_Name</th>
                            <?php
                            foreach ($Product_Name as $Product_Names) {
                                echo '  <th>' . $Product_Names . '</th> ';
                            }
                            ?>
                        </tr>
                        <tr>

                            <th scope="col">Price</th>
                            <?php
                            foreach ($Price as $Prices) {
                                echo '  <th>' . $Prices . '</th> ';
                            }
                            ?>

                        </tr>
                        <tr>
                            <th scope="col">Quantities</th>
                            <?php
                            foreach ($Quantities as $Quantitie) {
                                echo '  <th>' . $Quantitie . '</th> ';
                            }
                            ?>
                        </tr>
                        <tr>
                            <th scope="col">Sub_total</th>

                            <?php
                            foreach ($Price as $key => $Prices) {


                                echo '<th>' . $Sub_total[] = $Prices * $Quantities[$key] . '</th> <br>';
                            }

                            ?>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>



                        </tr>

                    </tbody>
                </table>


            </div>

            <div class="col-md-10 mt-1  " style="width: 300px;">


                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">User_Name</th>
                            <th scope="col"><?= $User_Name ?></th>

                        </tr>
                        <tr>

                            <th scope="col">City</th>
                            <th scope="col"><?= $City ?></th>


                        </tr>
                        <tr>
                            <th scope="col">Total</th>
                            <th scope="col"> <?php
                                                $sum = 0;
                                                foreach ($Price as $key => $Prices) {


                                                    $sum += $Prices * $Quantities[$key];
                                                }
                                                echo $sum;






                                                ?></th>

                        </tr>
                        <tr>
                            <th scope="col">Discount</th>
                            <th scope="col"><?php if ($sum < 1000) {
                                                $n = ($sum * 0 / 100);
                                                echo $n;
                                            } elseif ($sum < 3000) {
                                                $n = ($sum * 10 / 100);
                                                echo $n;
                                            } elseif ($sum < 4500) {
                                                $n = ($sum * 15 / 100);
                                                echo $n;
                                            } elseif ($sum > 4500) {
                                                $n = ($sum * 20 / 100);
                                                echo $n;
                                            }


                                            ?></th>


                        </tr>
                        <tr>

                            <th scope="col">Total_after_discount</th>
                            <th scope="col"><?php
                                            $t = ($sum - $n);
                                            echo $t;

                                            ?></th>



                        </tr>
                        <tr>
                            <th scope="col">Delivery</th>
                            <th scope="col"> <?php
                                                $C = 0;
                                                if ($City  == 'Cairo') {
                                                    echo $C = 0;
                                                } elseif ($City  == 'Gize') {
                                                    echo  $C = 30;
                                                } elseif ($City  == ' Alex ') {
                                                    echo $C = 50;
                                                } elseif ($City  == 'Other') {
                                                    echo $C =  100;
                                                }

                                                ?></th>


                        </tr>
                        <tr>
                            <th scope="col">New_Total</th>
                            <th scope="col"> <?= ($t + $C) ?></th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>



                        </tr>

                    </tbody>
                </table>


            </div>


        </div>


    </div>

</body>

</html>