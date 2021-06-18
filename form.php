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


    $name = [

        "Ana",
        "Ion",
        "George",
        'Mihaela',
        'Irina'
    ];



 
    if(isset($_POST['submit'])){

        echo "it works <br>";

        $username = $_POST['user'];

        $password = $_POST['pass'];

        /* echo $username. "<br> " .$password; */

        if(strlen($password) < 6 ){

            echo "the password is too short";
        }   
        else echo md5($password);


        if(! in_array($username, $name)){

            echo "<br>user not found";
        }
            else echo "<br>". $username;

    }
?>


    <form action="form.php" method="post">
    
    
        <input type="text" placeholder="Enter name" name="user"><br>
        <input type="password" placeholder="Enter password" name="pass"><br>
        <input type="submit" name="submit">

    </form>


</body>
</html>