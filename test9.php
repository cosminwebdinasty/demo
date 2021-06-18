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
$button ="Click Here";
?>
<a href="test9.php?id=10"> <?php echo $button; ?>  </a><br>
    


<?php 
//step2
    $name = "test";
    $value ="123";
    $date = time() + (60*60*24*7);
    setcookie($name, $value, $date);

    if(isset($_COOKIE['test'])){
        echo "cookie is set<br>";
    }

//step3
    session_start();
    $_SESSION['test'] = "rwetwertwe";
    if(isset($_SESSION['test'])){
    echo $_SESSION['test'];
    }

?>



</body>
</html>