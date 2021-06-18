
<?php 
        include "db.php";
        include "functions.php";
        include "includes/header.php";
        deleteRows();
        
      
?>



    
    <div class="container">

        <div class="col-md-4 mt-5">

        <h1 class="tect-center">Delete</h1>

        <form action="login_delete.php" method="post">

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
    <input style="width:100%;" type="submit" name="submit" class="btn btn-danger" value="Delete">
</form>


         </div>


         <?php include "includes/footer.php" ?>