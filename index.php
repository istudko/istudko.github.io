<?php
    $a = $_GET['a']; 
    $b = $_GET['b']; 
    if(isset($a) && isset($b)) {
        echo $a+$b;
    }

?>