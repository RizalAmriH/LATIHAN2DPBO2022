<?php

class Hardware extends Product{
    private $brand;
    private $model;
    
   

    public function __construct($brand= 0, $model = 0) {
        $this->brand = $brand;
        $this->model = $model;

    }

    public function setBrand($brand) { //
        $this->brand = $brand;
    }
    public function getBrand() { 
        return $this->brand;
    }

    public function setModel($model){ //
        $this->model = $model;
    }

    public function getModel(){ 
        return $this->model;

    } 

}
?>