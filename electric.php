<?php

require("car.php");

Class Electric extends car {
    public $bahanbakar = "listrik";

    public function jalan($jarak) {
        return "Mobil berjalan sejauh $jarak km";
    }
}
?>