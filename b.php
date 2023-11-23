<?php
// var_dump($_GET);
?>

<?php
// var_dump($_GET);
// echo "<br>";
// print_r($_GET);
?>

<?php
// echo"Le nom est : ". $_GET['nom']."<br>";
// echo"L'âge est de : ". $_GET['age']."<br>";

// Avec GET, les données sont visibles dans l'URL
?>

<?php
// var_dump($_POST);
// echo"Le nom est : ". $_POST['nom']."<br>";
// echo"L'âge est de : ". $_POST['age']."<br>";

// Avec POST, les données ne sont pas visibles dans l'URL, contrairement à GET.
?>

<?php

echo"Le nom est : ". $_REQUEST['nom']."<br>";
echo"L'âge est de : ". $_REQUEST['age']."<br>";

// REQUEST récupère le GET, le POST et les cookies.

?>