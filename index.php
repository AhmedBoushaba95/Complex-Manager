<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>ComplexManager</title>
</head>
<body>

<form action="corp.php" method="POST">
    <input type="text" name="ree" placeholder=" ">
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
   verif_nbr($_POST['ree'], $_POST['ima']);
 }
?>
</body>
</html>
