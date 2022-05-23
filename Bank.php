<!doctype html>
<html lang="en">

<head>
    <title>Ecommerce</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



</head>


<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-primary mt-5">
                <h1>
                    Banck
                </h1>
            </div>
            <?php

            if ($_POST) {

                $number = $_POST['number'];

                $numbertwo = $_POST['number2'];
                $numberthere = $_POST['number3'];
                $Monthly = ($numbertwo / $numberthere);
            }

            ?>
            <div class="col-md-8  mt-5 " style="width: 300px;background:aliceblue">

                <div class="col-12 text-center text-primary mt-3">
                    <h1>
                        Banck
                    </h1>
                </div>
                <div class="row" style="margin-top: 20%;">
                    <div class="col">
                        <label for="Name" style="color:red">User Name</label>
                        <input type="text" class="form-control" style="border: 2px black solid;" value="<?php
                                                                                                        if ($_POST) {

                                                                                                            echo   $number;
                                                                                                        }

                                                                                                        ?>">
                    </div>
                    <div class="col">
                        <label for="Name" style="color:red">Interest Rate</label>
                        <input type="text" class="form-control" style="border: 2px black solid;" value="<?php
                                                                                                        if ($_POST) {

                                                                                                            $numberthere = $_POST['number3'];
                                                                                                            $Monthly = ($numbertwo / $numberthere);

                                                                                                            if ($numberthere < 3) {
                                                                                                                $MO = ($Monthly * 10 / 100);
                                                                                                            } elseif ($numberthere > 3) {

                                                                                                                $MO = ($Monthly * 15 / 100);
                                                                                                            };

                                                                                                            $MOO = ($MO * $numberthere);
                                                                                                            echo   $MOO;
                                                                                                        }

                                                                                                        ?>">
                    </div>
                    <div class="col">
                        <label for="Name" style="color:red">Loan After Interest</label>
                        <input type="text" class="form-control" style="border: 2px black solid;" value="<?php

                                                                                                        if ($_POST) {
                                                                                                            $M = ($MOO + $numbertwo);
                                                                                                            echo $M;
                                                                                                        }
                                                                                                        ?>">
                    </div>
                    <div class="col">
                        <label for="Name" style="color:red">Monthly</label>
                        <input type="text" class="form-control" style="border: 2px black solid;" value="<?php
                                                                                                        if ($_POST) {
                                                                                                            $Monthly = ($numbertwo / $numberthere);

                                                                                                            if ($numberthere < 3) {
                                                                                                                $MO = ($Monthly * 10 / 100);
                                                                                                                echo   $MO;
                                                                                                            } elseif ($numberthere > 3) {

                                                                                                                $MO = ($Monthly * 15 / 100);
                                                                                                                echo   $MO;
                                                                                                            };
                                                                                                        }

                                                                                                        ?>">
                    </div>
                </div>

            </div>
            <div class="col-md-4 mt-5">


                <form action="test.php" method="POST">
                    <div class="form-group">
                        <label for="Name" style="color:red">User Name</label>
                        <input type="text" name="number" id="number" class="form-control" placeholder="" aria-describedby="helpId" style="border: 2px blue solid;">
                    </div>
                    <div class="form-group">
                        <label for="Name" style="color:red">Loan Amount</label>
                        <input type="text" name="number2" id="number2" class="form-control" placeholder="" aria-describedby="helpId" style="border: 2px blue solid;">
                    </div>
                    <div class="form-group">
                        <label for="Name" style="color:red">Loan Years</label>
                        <input type="text" name="number3" id="number3" class="form-control" placeholder="" aria-describedby="helpId" style="border: 2px blue solid;">
                    </div>




                    <button class=" btn btn-outline-primary form-control"> Calculate </button>
                </form>
            </div>


        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>