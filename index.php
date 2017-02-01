<?php
    header('Content-Type: application/json');
    $a = $_GET['a']; 
    $b = $_GET['b']; 
    if(isset($a) && isset($b)) {
        $sum = $a * $b;
        $result = array('a' => $a, 'b' => $b, 'result' => $sum);
        echo json_encode($result);

    }
?>
