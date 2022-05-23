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
                <input type="hidden" class="form-control" id="phone_number" name="phone_number" value="<?= $_POST['phone_number'] ?>">

                <div class="col-md-12 mt-5 " style="width:1100px;background:aliceblue;height:300px;padding-left: 0px;
                padding-right: 0px; border: 2px solid black">
                    <br>
                    <h4> <span style="margin-right: 104px;margin-left:5px">Are you satisfied whith the level of clean liness?</span>


                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="0">
                            <label class="form-check-label" for="inlineRadio2">مقبول</label>
                        </div>


                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="3">
                            <label class="form-check-label" for="inlineRadio1">جيد</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="5">
                            <label class="form-check-label" for="inlineRadio2">جيدجدا</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="10">
                            <label class="form-check-label" for="inlineRadio2">ممتاز</label>
                        </div>
                    </h4>
                    <br>
                    <h4><span style="margin-right: 177px;margin-left:5px">Are you satisfied whith the service price?</span>


                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions5" id="inlineRadio5" value="0">
                            <label class="form-check-label" for="inlineRadio2">مقبول</label>
                        </div>


                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions5" id="inlineRadio6" value="3">
                            <label class="form-check-label" for="inlineRadio1">جيد</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions5" id="inlineRadio7" value="5">
                            <label class="form-check-label" for="inlineRadio2">جيدجدا</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions5" id="inlineRadio8" value="10">
                            <label class="form-check-label" for="inlineRadio2">ممتاز</label>
                        </div>
                    </h4> <br>
                    <h4><span style="margin-right: 152px;margin-left:5px"> Are you satisfied whith the nursing service?</span>



                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions9" id="inlineRadio9" value="0">
                            <label class="form-check-label" for="inlineRadio2">مقبول</label>
                        </div>


                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions9" id="inlineRadio10" value="3">
                            <label class="form-check-label" for="inlineRadio1">جيد</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions9" id="inlineRadio11" value="5">
                            <label class="form-check-label" for="inlineRadio2">جيدجدا</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions9" id="inlineRadio12" value="10">
                            <label class="form-check-label" for="inlineRadio2">ممتاز</label>
                        </div>
                    </h4> <br>
                    <h4><span style="margin-right: 85px;margin-left:5px">Are you satisfid whith the calmness in the hispital?</span>


                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions10" id="inlineRadio13" value="0">
                            <label class="form-check-label" for="inlineRadio2">مقبول</label>
                        </div>


                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions10" id="inlineRadio14" value="3">
                            <label class="form-check-label" for="inlineRadio1">جيد</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions10" id="inlineRadio15" value="5">
                            <label class="form-check-label" for="inlineRadio2">جيدجدا</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions10" id="inlineRadio16" value="10">
                            <label class="form-check-label" for="inlineRadio2">ممتاز</label>
                        </div>
                    </h4> <br>

                    <div style="margin-top: 31px;margin-left: 46%;">
                        <button type="submit" class="btn btn-primary mb-3">submit</button>
                    </div>

                </div>

            </form>

        </div>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>