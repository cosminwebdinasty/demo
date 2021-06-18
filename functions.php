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

    function say_Something(){
        echo "Hello student";
    }


  function calculate(){
    echo 212312 * 456535 ."<br>";
  }
    


  function init(){

    echo "<span style='color:red'>";
    say_Something();
    echo "<br>";
    calculate();
    echo "</span>";

  }

init();




?>


<h1><?php say_Something() ?></h1>
<h1><?php calculate() ?></h1>
</body>
</html>