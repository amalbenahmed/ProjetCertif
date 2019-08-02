<?php
include "user.php";
$n=$_GET['nom'];
$p=$_GET['prenom'];
$e=$_GET['email'];
$t=$_GET['telephone'];
$ps=$_GET['password'];

$use= new user();
$use->nom=$n;
$use->prenom=$p;
$use->email=$e;
$use->tel=$t;
$use->pass=$ps;
$use->insertUser();



?>