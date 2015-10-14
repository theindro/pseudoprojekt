<?php
    $page=(isset($_GET['page'])? $_GET['page'] : 'home');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pseudo</title>
</head>
<body>
<?php
require $page.".php";
?>
</body>
</html>