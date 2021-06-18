
<?php 

include "db.php";
include "functions.php";
include "includes/header.php";
createRows();

?>




    <div class="container">

        <div class="col-md-4 mt-5">

<h1 class="text-center">Create </h1>
            <form action="login.php" method="post">

                <div class="form-group">
                    <label for="username">Username</label>
                        <input type="text" name="username" class=form-control>
                </div>

                <div class="form-group">
                    <label for="password">Username</label>
                        <input type="password" name="password" class=form-control>
                </div>
    
                <div class="form-group text-center">
                    <input type="submit" style="width:100%;" name="submit" class="btn btn-primary" value="Create">
               
                </div>
            </form>


         </div>

<?php include "includes/footer.php"; ?>