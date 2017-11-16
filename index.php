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
            <ul class="champ">
                <li class="r">
                    <input type="text" name="ree" placeholder="Réelle">
                </li>
                <li class="i">
                    <input type="text" name="ima" placeholder="Imaginaire"><label for="i"> i</label>
                </li>
                <li class="aff">
                    <input type="submit" value="Afficher" class="aff">
                </li>
        </div>
    </form>
</div>
<?php
require_once('function.php');
require_once('function2.php');
if (!empty($_POST['ree']) && !empty($_POST['ima'])) {

    $ree = $_POST['ree'];
    $ima = $_POST['ima'];
    echo '<div class="txt">';
    verif_nbr($ree, $ima);
    conj($ree, $ima);
    mod($ree, $ima);
    arg($ree, $ima);
    trig($ree, $ima);
    inv($ree, $ima);
    expo($ree, $ima);
    echo '</div>';
} else {
    echo "Veuillez remplir tous les champs";
}
?>
</body>
</html>