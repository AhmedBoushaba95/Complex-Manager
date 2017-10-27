<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>ComplexManager</title>
</head>
<body>
<div class="formu">
    <h2>Complex Manager</h2>
    <form method="POST">
        <table>
            <tr>
                <td><input type="text" name="ree" placeholder="Réelle"></td>
            </tr>
            <tr>
                <td><input type="text" name="ima" placeholder="Imaginaire"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Afficher"></td>
            </tr>
        </table>
    </form>
</div>

<?php

require_once('function.php');
if (!empty($_POST['ree']) && !empty($_POST['ima'])) {

    $ree = $_POST['ree'];
    $ima = $_POST['ima'];
    verif_nbr($ree, $ima);
} else {
    ?>
    <p class="msg">Veuillez remplir tous les champs</p>
    <?php
}
?>
</body>
</html>
