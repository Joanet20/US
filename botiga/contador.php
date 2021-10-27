<?php

$total_count = 1;
if(isset($_COOKIE['count'])){
$total_count = $_COOKIE['count'];
$total_count ++;
}

setcookie('count', $total_count);

if ($total_count < 2) {
    echo "<h1>Primera visita.</h1>";
} else {
    echo "<h1>Has visitat aquesta pàgina " . $total_count . " vegades</h1>";

}

?>