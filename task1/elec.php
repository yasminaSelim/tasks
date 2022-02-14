<?php
if ($_POST) {
    if ($_POST['charges'] <= 50) {
        $cal = $_POST['charges'] * .5;
        $totalBill = ($cal * .2) + $cal;
        $message = "<div class='alert alert-primary'><h3>Total Bill For {$_POST['charges']} Units after adding surcharge of 20% = <span class='text-danger'>$totalBill</span></h3></div>";
    } elseif ($_POST['charges'] > 50 && $_POST['charges'] <= 150) {
        $cal = $_POST['charges'] * .75;
        $totalBill = ($cal * .2) + $cal;
        $message = "<div class='alert alert-primary'><h3>Total Bill For {$_POST['charges']} Units after adding surcharge of 20% =  <span class='text-danger'>$totalBill</span></h3></div>";
    } elseif ($_POST['charges'] > 150 && $_POST['charges'] <= 250) {
        $cal = $_POST['charges'] * 1.2;
        $totalBill = ($cal * .2) + $cal;
        $message = "<div class='alert alert-primary'><h3>Total Bill For {$_POST['charges']} Units after adding surcharge of 20% =  <span class='text-danger'>$totalBill</span></h3></div>";
    } elseif ($_POST['charges'] > 250) {
        $cal = $_POST['charges'] * 1.5;
        $totalBill = ($cal * .2) + $cal;
        $message = "<div class='alert alert-primary'><h3>Total Bill For {$_POST['charges']} Units after adding surcharge of 20% =  <span class='text-danger'>$totalBill</span></h3></div>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Total Electricity</title>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-6 m-auto">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="text-danger">Total Electricity</h1>
                    </div>
                    <div class="col-12">
                        <form method="post" class="form">
                            <div class="mb-3">
                                <label for="num" class="form-label">Electricity Unit Charges</label>
                                <input type="number" name="charges" id="charges" class="form-control" value="<?= isset($_POST['charges']) ? $_POST['charges'] : '' ?>" placeholder="">
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-danger">Calculate Total</button>
                            </div>
                        </form>
                        <?php
                        echo (isset($message)  ?  $message : '');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>