<?php



$users = [
    (object)[
        'id' => 1,
        'name' => 'ahmed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'football', 'swimming', 'running'
        ],
        
        "email" => ['ahmed@gmail.com', 'ahmed2@gmail.com'],
        'phone' => [0100111111],
        // 'city' => ['cairo'],

    ],
    (object)[
        'id' => 2,
        'name' => 'mohamed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'swimming', 'running',
        ],
        
        "email" => [],
        'phone' => [0100111111,011111111],
        // 'city' => [], 

    ],
    (object)[
        'id' => 3,
        'name' => 'menna',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running',
        ],
       
        'email' => ['menna@gmail.com'],
        'phone' => [],
        // 'city' => ['cairo'],
    ],



    // (object)[      *test**
    //     'id' => 3,
    //     'name' => 'raghad',
    //     "gender" => (object)[
    //         'gender' => 'f'
    //     ],
    //     'hobbies' => [
    //         'running',
    //     ],
       
    //     'email' => ['menna@gmail.com'],
    //     'phone' => [],
    //     'city' => ['cairo'],
    // ],

];


// ***************************





$header = '';

$row = '';

foreach ($users[0] as $property => $value) {
    $header .= '<th>' . $property . '</th>';
}

for ($i = 0; $i < count($users); $i++) {
    $col = '';
    foreach ($users[$i] as $property => $value) {
       
        if ($property == 'id') {
            $col .= '<td>' . $value . '</td>';
        }

        if (is_string($value)) {
            $col .= '<td>' . $value . '</td>';
        } else if (is_array($value) || is_object($value)) {
            
            $colval = '';
            foreach ($value as $key => $val) {
                if ($val == 'm') {
                    $colval .= 'Male';
                } else if ($val == 'f') {
                    $colval .= 'Female';
                }
                else  {

                    $colval .= $val . ', <br>';
                } 
              
            }
            $col .= '<td>' . $colval . '</td>';
           
        }
       
    }
    $row .= '<tr>' . $col . '</tr>';
}



$table = '<table class="table table-hover">' . $header . $row . '</table>';
?>


<!DOCTYPE HTML>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Table</title>
</head>

<body>
    <div class="container">

        <?php print_r($table) ?>
    </div>
</body>

</html>