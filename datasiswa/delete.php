<?php
session_start();
$id = $_GET['id'];

$w = new PDO("mysql:host=localhost;dbname=data_siswa", "root","");
$query = $w->query("DELETE FROM `datasiswa` WHERE id=$id");

if($query){
    header("Location:tbdata.php");
}