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
    
    
        //step1
    
        function add($a, $b){
            $sum = $a + $b;
            return $sum;
        }
        $result = add(5,6);
        echo $result;
        echo "<br>";

        $result = add(5,$result);
        echo $result;
    
        //step2

        function add2($a, $b){

            $sum = $a + $b;
            echo $sum;
        }
        echo "<br>";
        add2(5,4);



    ?>




</body>
</html>