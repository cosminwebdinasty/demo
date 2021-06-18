
<?php 
    include "includes/header.php";
    include "db.php";
    include "functions.php";


    readRows(); 


?>


    
    <div class="container">

        <div class="col-md-4 mt-5">

       
<pre>
        <?php   readRows(); ?>
</pre>

         </div>

<?php include "includes/footer.php" ?>