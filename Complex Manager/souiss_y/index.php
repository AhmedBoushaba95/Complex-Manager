<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>ComplexManager</title>
</head>
<body>

<form method="POST">
    <input type="text" name="ree" placeholder="Réelle">
    <input type="text" name="ima" placeholder="Imaginaire">
    <input type="submit" value="Afficher">
</form>

<?php

require_once ('function.php');
if (!empty($_POST['ree']) && !empty($_POST['ima'])) {

    $ree = $_POST['ree'];
    $ima = $_POST['ima'];
    verif_nbr($ree, $ima);
} else {
    ?>
    <p>Veuillez remplir tous les champs</p>
    <?php
}
?>
</body>
</html>
