<?php
include "symmetryCheck.php";

if($_SERVER['REQUEST_METHOD'] == "GET"){
    $str = $_REQUEST['str'];
}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="get">
    <input type="text" name="str" size="50">
    <button>Check</button>
    <br>
</form>
<div>
    <?php if (isset($str)){
        symmetryCheck($str);
    }
    ?>
</div>
</body>
</html>
