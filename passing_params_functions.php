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
        function greeting($name){
            echo "Hello there " . $name; 
        }
        greeting("John");
    ?>

<br>

    <?php 
        function calculate($a,$b){
            echo $a+$b*$b/$a+($b*$a);
        }
        calculate(87,54);
    ?>

</body>
</html>