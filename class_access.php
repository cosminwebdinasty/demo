
<?php

use Car as GlobalCar;

class Car{

    public $wheels = 4;
    protected $hood = 1;
    private $engine = 1;
    var $doors = 4;

    function showProperty(){

        echo  $this->engine;
          
      }
    
}


class Semi extends Car{

}


$bmw = new Car();
$semi = new Semi();

echo $bmw->showProperty();

?>