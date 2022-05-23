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

    <?php
    if ($_POST) {
        $m =  $_POST['Number_Of_Varieties'];
        $m2 =  $_POST['User_Name'];
        $m3 =  $_POST['City'];
        $n =  $_POST['Number_Of_Varieties'];
    }
    ?>
    <div class="container">

        

                <div class="row">


                    <div class="col-md-8  mt-5 " style="width: 300px;background:aliceblue">

                        <div class="col-12 text-center text-primary mt-3 mb-4">
                            <h1>
                                Product_Data

                            </h1>
                        </div>


                        <form action="index2.php" method="POST">
                            <span style="    margin-left: 15%;">
                                <input type="hidden" name="User_Name" value="<?= $m2 ?>" id="User_Name" class="form-control" placeholder="" aria-describedby="helpId" style="border: 2px blue solid;">
                                <input type="hidden" name="Number_Of_Varieties" value="<?= $n ?>" id="User_Name" class="form-control" placeholder="" aria-describedby="helpId" style="border: 2px blue solid;">
                                <input type="hidden" name="City" value="<?= $m3 ?>" id="City" class="form-control" placeholder="" aria-describedby="helpId" style="border: 2px blue solid;">

                                <label for="Name" style="color:red"> Product_Name</label>
                                <?php
                                if ($_POST) {
                                    for ($i = 0; $i < $m; $i++) {
                                        echo '<input type="text" class="form-control" name="Product_Name[]" style="border: 2px black solid;" > <br>';
                                    }
                                }
                                ?>
                            </span>
                            <span style="    margin-left: 20%;">
                                <label for="Name" style="color:red;">Price </label>
                                <?php
                                if ($_POST) {
                                    for ($i = 0; $i < $m; $i++) {
                                        echo '<input type="text" class="form-control" name="Price[]" style="border: 2px black solid;" > <br>';
                                    }
                                }
                                ?>
                            </span>
                            <span style="    margin-left: 20%;">
                                <label for="Name" style="color:red"> Quantities</label>
                                <?php
                                if ($_POST) {
                                    for ($i = 0; $i < $m; $i++) {
                                        echo '<input type="text" class="form-control" name="Quantities[]" style="border: 2px black solid;" > <br>';
                                    }
                                }
                                ?>
                            </span>

                            <button class=" btn btn-outline-primary form-control"> Calculate </button>

                        </form>

                    </div>


                    <div class="col-md-4 mt-5">

                        <form action="index.php" method="POST">

                            <div class="form-group">
                                <label for="Name" style="color:red">User_Name</label>
                                <input type="text" name="User_Name" id="User_Name" class="form-control" placeholder="" aria-describedby="helpId" style="border: 2px blue solid;">
                            </div>
                            <div class="form-group">
                                <label for="Name" style="color:red">City </label>
                                <input type="text" name="City" id="City" class="form-control" placeholder="" aria-describedby="helpId" style="border: 2px blue solid;">
                            </div>
                            <div class="form-group">
                                <label for="Name" style="color:red">Number_Of_Varieties </label>
                                <input type="number" name="Number_Of_Varieties" id="Number_Of_Varieties" class="form-control" placeholder="" aria-describedby="helpId" style="border: 2px blue solid;">
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