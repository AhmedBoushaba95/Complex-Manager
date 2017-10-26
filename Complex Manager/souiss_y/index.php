<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>ComplexManager</title>
</head>
<body>
<div class="formu">
    <form method="POST">
        <table>
            <td>
                <tr><input type="text" name="ree" placeholder="Réelle"></tr>
            </td>
            <td>
                <tr><input type="text" name="ima" placeholder="Imaginaire"></tr>
            </td>
            <td>
                <tr><input type="submit" value="Afficher"></tr>
            </td>
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
    <p class="formu">Veuillez remplir tous les champs</p>
    <?php
}
?>
</body>
</html>
