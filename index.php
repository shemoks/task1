<?php
require_once "vendor/autoload.php";

?>
<!DOCTYPE html>
<html >
<link rel="stylesheet" type="text/css" href="style.css">
<script src="vendor/components/jquery/jquery.min.js"></script>
<script src="main.js"></script>
<head>
    <meta charset="UTF-8">
    <title>HomeWork 2</title>
</head>
<body>
<h1>Введите диапазон для поиска простых чисел</h1>
<form action="numbers.php" method="post" id="simpleNumbers">
  <div class="input">от  <input type="text" name="firstNumber" />до
    <input type="text" name="secondNumber" />
    <input type="submit" value="go"></div>
</form>
<div id="returnedData"></div>
</body>
</html>