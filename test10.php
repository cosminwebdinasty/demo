<?php 

   class Dog{

        var $eyes_color = "black";
        var $nose = "black";
        var $fur_color = "black";

        function showAll(){

            echo $this->eyes_color . "<br>".
                 $this->nose . "<br>".         
                 $this->fur_color;
        }
   }

   $pitbull = new Dog();

   echo $pitbull->showAll();

?>