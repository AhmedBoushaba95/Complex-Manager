<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>ComplexManager</title>
</head>
<body>

<form action="corp.php" method="POST">
    <input type="text" name="ree" placeholder="Réelle">
    <input type="text" name="ima" placeholder="Imaginaire">
    <input type="submit" value="Afficher">
</form>

<?php

require_once ('function.php');

if ($_GET['erreur'] == "ko")
{
    ?>
    <p>Veuillez remplir tous les champs</p>
    <?php
}

if ($_GET['erreur'] == "ok")
{
    $ree = $_POST['ree'];
    $ima = $_POST['ima'];
   verif_nbr($ree, $ima);
 }
?>
</body>
</html>