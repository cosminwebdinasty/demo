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
        if(isset($_POST['value'])){
    
        $value = $_POST['value'];
        
        echo $value;
        }
    
    ?>


    <form action="test6.php" method="post">
    
    <input type="text" name="value">
    <input type="submit">    
    </form>


</body>
</html>