<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>ComplexManager</title>
</head>
<body>

<?php

if (!empty($_POST['ree']) && !empty($_POST['ima'])) {
    header('Location: index.php?erreur=ok');
    exit();
} else {
    header('Location: index.php?erreur=ko');
    exit();
}
?>
</body>
</html>

