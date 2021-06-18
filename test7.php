<?php 

    $connection = mysqli_connect('localhost','root','','test7');

    if($connection){
        echo "connection ok";
    }
    else die("failed to connect to db");

    $query = "SELECT * FROM address ";
    $result = mysqli_query($connection,$query);

    if(!$result){
        die("query failed");
    }
?>




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
//step 4

    while($row = mysqli_fetch_assoc($result)){

        $street = $row['street'];
        $number = $row['number'];

        echo "<ul>";
        echo "<li>" . $street. " - " . $number ."</li>";
        echo "</ul>";
    }


?>    



</body>
</html>