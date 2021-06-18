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
    
       $numberList = array(23,43,'754',211,90,'<h1>Hello</h1>'); 
    
        $numberList2 = [2, 33, 15, 7, 10];

        foreach($numberList as $num)
        {
            echo $num .'<br>';

        }


        print_r($numberList);



      //  echo $numberList[5];
    ?>



</body>
</html>