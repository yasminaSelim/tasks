<?php
session_start();
if ($_POST) {
    $errors = "";
    if (empty($_POST['phoneNumber'])) {
        $errors = "<div class='alert alert-danger'> Phone Number Is Required </div>";
    }
    else{
        $_SESSION['phoneNumber']=$_POST['phoneNumber'];
        header('Location: reviews.php');
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Phone Number</title>
</head>
<body>
    <div class="row">
        <div class="col-12 text-center text-dark mt-5 mb-5">
            <h1>Hospital</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-3 text-center m-auto">
            <?php
            if (!empty($errors)) {
                    echo $errors;
            }
            ?>
        </div>
    <div class="row">
        <div class="col-4 m-auto">
            <form action="" method="post">
                <div class="mb-3 form-group">
                    <label for="phoneNumber" class="form-label d-inline w-25">Phone Number : </label>
                    <input type="number" class="form-control d-inline w-50" name="phoneNumber" id="phoneNumber" aria-describedby="helpId" placeholder="Phone Number">
                    <small id="helpId" class="form-text text-muted d-block"> Enter Your Phone Number</small>
                </div>
                <div class="mb-3 form-group">
                    <button class="btn btn-primary">Survey</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>