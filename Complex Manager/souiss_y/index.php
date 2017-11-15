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
        <div class="tata">
        <table class="champ">
            <tr>
                <td class="r"><input type="text" name="ree" placeholder="Réelle"></td>
            </tr>
            <tr>
                <td class="i"><input type="text" name="ima" placeholder="Imaginaire"><label for="i"> i</label></td>
            </tr>
            <tr>
                <td><input type="submit" value="Afficher" class="aff"></td>
            </tr>
        </table>
        </div>
    </form>
</div>
<?php

require_once('function.php');
require_once ('function2.php');
if (!empty($_POST['ree']) && !empty($_POST['ima'])) {

    $ree = $_POST['ree'];
    $ima = $_POST['ima'];
    verif_nbr($ree, $ima);
    conj($ree, $ima);
    mod($ree, $ima);
    arg($ree, $ima);
    trig($ree, $ima);
    inv($ree, $ima);
    expo($ree, $ima);
} else {
    echo "Veuillez remplir tous les champs";
}
?>
</body>
</html>