<?php

class car {
    public $roda = 4;
    public $spion = 2;
    public $bahanbakar = "bensin";
    public $merek;
    
    public function __construct($string) {
        $this->merek=$string;
    }
}

?>