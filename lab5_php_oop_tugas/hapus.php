<?php

$database = new Database();
$nim = $_GET["nim"];

if (isset($_GET["nim"])) {
    $database->delete("lab5_php_oop", "where nim=" . $nim);
    header("Location: home");
}