<?php


if ($_POST) {
    $physics = $_POST['physics'];
    $chemistry = $_POST['chemistry'];
    $biology = $_POST['biology'];
    $mathematics = $_POST['mathematics'];
    $computer = $_POST['computer'];

    $total=$physics?$physics:0 ;
    $total  +=  $chemistry?$chemistry:0;
    $total  +=  $biology?$biology:0 ;
    $total +=   $mathematics?$mathematics:0;
    $total +=  $computer?$computer:0;
    $percentage = $total/500*100;
    $grade = getGrade($percentage);
   

    $result = $percentage.' %' .' And your grade is '.$grade  ;
}
function getGrade($total){
    if ($total >= 90) {
        return 'Grade A';
    }
    if($total >= 80){
        return 'Grade B';    }
    if($total >=70){
        return 'Grade C';    }
    if($total >=60){
        return 'Grade D';    }
    if($total >=40){
        return 'Grade E';    }
    if($total <40){
        return 'Grade F';    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-7 offset-4 m-auto">
                <div class="card ">
                    <div class="card-header text-center">
                        <h4>Student grade</h1>
                    </div>
                    <div class="card-body">
                        <form method="post">

                            <br>
                            <label for="physics">Physics grade:  </label>

                            <input name="physics" id="physics" type="number">
                            <br>
                            <label for="chemistry">Chemistry grade:</label>

                            <input name="chemistry" id="chemistry" type="number">
                            <br>
                            <label for="biology">Biology grade:</label>

                            <input name="biology" id="biology" type="number">
                            <br>
                            <label for="mathematics">Mathematics grade:</label>

                            <input name="mathematics" id="mathematics" type="number">
                            <br>
                            <label for="computer">Computer grade:</label>

                            <input name="computer" id="computer" type="number">
                            <br><br>
                            <button class="btn btn-danger" name="submit">Get the result</button>
                        </form><br>


                        <div class="alert alert-primary">
                            <h1 class="alert-heading text-center"> Result </h1>
                            <ul>
                                <li>
                                    ur grade: <?= isset($result) ? $result : '' ?>
                                </li>


                            </ul>
                        </div>

                    </div>
                </div>
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