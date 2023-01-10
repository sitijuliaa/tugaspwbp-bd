<?php
session_start();
$id = $_POST['id'];
$nis = $_POST['nis'];
$name = $_POST['name'];
$class =$_POST['class'];

$db =new PDO("mysql:host=localhost; dbname=data_siswa", "root", "");
$query = $db->query("INSERT INTO datasiswa values('','$nis','$name','$class')");

if($query){
    header("Location:tbdata.php");
}