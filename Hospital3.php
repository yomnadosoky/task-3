<?php
$m = $_POST['inlineRadioOptions'];
$n = $_POST['inlineRadioOptions5'];
$a = $_POST['inlineRadioOptions9'];
$f = $_POST['inlineRadioOptions10'];

$mg =  ($m + $n + $a + $f);

$p = $_POST['phone_number'];


?>
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
                    Hospital
                </h1>
            </div>
            <form class="row g-2" action="Hospital3.php" method="POST">

                <div class="col-md-12 mt-5 " style="width:1100px;background:aliceblue;height:300px;padding-left: 0px;
                padding-right: 0px; border: 2px solid black">
                    <br>
                    <h4> <span style="margin-right: 104px;margin-left:5px">Are you satisfied whith the level of clean liness?</span>


                        <div class="form-check form-check-inline">
                            <label class="form-check-label" for="inlineRadio2">
                                <?php if ($_POST['inlineRadioOptions5'] == 10) {
                                    echo 'ممتاز';
                                } elseif ($_POST['inlineRadioOptions5'] == 5) {
                                    echo 'جيدجدا';
                                } elseif ($_POST['inlineRadioOptions5'] == 3) {
                                    echo 'جيد';
                                } elseif ($_POST['inlineRadioOptions5'] == 0) {
                                    echo 'مقبول';
                                }
                                ?>
                            </label>
                        </div>



                    </h4>
                    <br>
                    <h4><span style="margin-right: 177px;margin-left:5px">Are you satisfied whith the service price?</span>



                        <div class="form-check form-check-inline">
                            <label class="form-check-label" for="inlineRadio2">
                                <?php if ($_POST['inlineRadioOptions9'] == 10) {
                                    echo 'ممتاز';
                                } elseif ($_POST['inlineRadioOptions9'] == 5) {
                                    echo 'جيدجدا';
                                } elseif ($_POST['inlineRadioOptions9'] == 3) {
                                    echo 'جيد';
                                } elseif ($_POST['inlineRadioOptions9'] == 0) {
                                    echo 'مقبول';
                                }
                                ?>
                            </label>
                        </div>


                    </h4> <br>
                    <h4><span style="margin-right: 152px;margin-left:5px"> Are you satisfied whith the nursing service?</span>



                        <div class="form-check form-check-inline">
                            <label class="form-check-label" for="inlineRadio2">

                                <?php if ($_POST['inlineRadioOptions10'] == 10) {
                                    echo 'ممتاز';
                                } elseif ($_POST['inlineRadioOptions10'] == 5) {
                                    echo 'جيدجدا';
                                } elseif ($_POST['inlineRadioOptions10'] == 3) {
                                    echo 'جيد';
                                } elseif ($_POST['inlineRadioOptions10'] == 0) {
                                    echo 'مقبول';
                                }
                                ?>
                            </label>
                        </div>



                    </h4> <br>
                    <h4><span style="margin-right: 85px;margin-left:5px">Are you satisfid whith the calmness in the hispital?</span>


                        <div class="form-check form-check-inline">
                            <label class="form-check-label" for="inlineRadio2">

                                <?php if ($_POST['inlineRadioOptions'] == 10) {
                                    echo 'ممتاز';
                                } elseif ($_POST['inlineRadioOptions'] == 5) {
                                    echo 'جيدجدا';
                                } elseif ($_POST['inlineRadioOptions'] == 3) {
                                    echo 'جيد';
                                } elseif ($_POST['inlineRadioOptions'] == 0) {
                                    echo 'مقبول';
                                }
                                ?>
                            </label>
                        </div>



                    </h4> <br>



                </div>

                <div class="col-12 text-center text-primary mt-5">
                    <h1>
                        <?php
                        if ($mg <=  3) {
                            echo ' <div style=" background:red ; color:#fff"> Please contact the patient to find out the reason for the bad evaluation' . $p . '</div> ';
                        } else {
                            echo '<div style=" background:#228B22; color:#fff">Thank you</div>';
                        }
                        ?>
                    </h1>
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