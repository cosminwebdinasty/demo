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

        if(5 > 9) {
            echo "stuff";
        }
        elseif(6 > 8){
            echo "stuff2";
        }
        else echo "I love PHP<br>";
    
    //step2
    
        for($i=1; $i<=10; $i++)
        {
            echo $i ."<br>";
        }

    //step3

        $number = 30;

        switch($number){

            case 33:
                echo "case 33";
                break;

            case 345:
                echo "case 345";    
                break;

            case 23: 
                echo "case 23";
                break;

            case 77:
                echo "case 77";
                break;

            case 30:
                echo "case 30";
                break;

            default:
                echo "No results";
        }

    
    ?>



</body>
</html>