<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>ComplexManager</title>
</head>
<body>

<?php

require_once('function.php');

if (!empty($_POST['ree']) && !empty($_POST['ima'])) {
    echo "Hello";
} else {
    header('Location: index.php?erreur=ok');
    exit();
}
?>
</body>
</html>

