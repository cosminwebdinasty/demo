
<?php 
        include "db.php";
        include "functions.php";
        include "includes/header.php";
        updateTable();
?>


    
    <div class="container">

        <div class="col-md-4 mt-5">

       <h1 class="text-center">Edit</h1>



        <form action="login_update.php" method="post">

<div class="form-group">
    <label for="username">Username</label>

        <input type="text" name="username" class=form-control>

</div>

<div class="form-group">
    <label for="password">Username</label>
        <input type="password" name="password" class=form-control>
</div>


<div class="form-group">
   
       <select name="id" id="">
       
            <?php 
            
             showAllData();
            
            ?>

       
       
       </select>
</div>

<div class="form-group text-center">

    <input style="width:100%;" type="submit" name="submit" class="btn btn-primary " value="Update">
</div>

</form>




         </div>


         <?php include "includes/footer.php" ?>