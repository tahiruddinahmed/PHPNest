<?php 

/**
 * print and die 
 *
 * @param mixed $data
 * @return void
 */
function print_die($data) {
    echo "<pre>";
    die(var_dump($data));
    echo "</pre>";
}