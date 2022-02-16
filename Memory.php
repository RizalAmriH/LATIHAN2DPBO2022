<?php

class Memory extends Hardware{
    private $frekuensi;
    private $size;
    private $cuda;
    
   

    public function __construct($frekuensi = 0, $size = 0, $cuda = 0) {
        $this->frekuensi = $frekuensi;
        $this->size = $size;

    }

    public function setFrekuensi($frekuensi) { //
        $this->frekuensi = $frekuensi;
    }
    public function getFrekuensi() { 
        return $this->frekuensi; 
        
    }

    public function setSize($size) { //
        $this->size = $size;
    }

    public function getSize(){ 
        return $this->size;

    } 

    public function setCuda($cuda) { //
        $this->cuda = $cuda;
    }

    public function getCuda(){  
        return $this->cuda;

    } 

}
?>