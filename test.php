<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
    
        $number1 = 10;
        $number2 = 20;

        echo $number1 + $number2;
    
        $array0 = ["users", "roles", "posts", "categories", "files"];

        $array1 = [1,2,3,4,5];

        $array2 = ['number' => 2, 'more_stuff' => '<h1>test</h1>', 'so_on' => 4325.23];

        
        echo $array2['more_stuff'];



        for($i=0; $i<count($array0); $i++){

            echo $array0[$i]. '<br>';

        }



    ?>


</body>
</html>