
<?php 


    class Car{

        function MoveWheels(){

            echo "Wheels move";

        }


    }


    if(method_exists("Car","MoveWheels")){

        echo "it does";
    }
    else echo "it doesn't";



?>