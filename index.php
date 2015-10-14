<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pseudo</title>
</head>
<body>
<?php

if(isset($_GET['page'])) {
    require $_GET['page'] . ".php";
}
?>
</body>
</html>