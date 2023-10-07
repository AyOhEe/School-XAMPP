<?php
    function checkPin($target_pin){
        //open and read the file containing the pin
        $path = "../../../contacts_pin.txt";
        $pinfile = fopen($path, "r") or die("<h1>Unable to check pin!</h1>");
        $pin = fread($pinfile, filesize($path));
        fclose($pinfile);

        //check if the given pin matches the actual pin
        return $target_pin == $pin;
    }
?>