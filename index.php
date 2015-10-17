<?php
use MathCaptcha\MathCaptcha;

require_once "vendor/autoload.php";

session_start();

$mathCaptcha = new MathCaptcha();

$mathCaptcha->generate();
//$mathCaptcha->output();

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
<form action="numbers.php" method="post" id="simpleNumbers">
    <input type="text" name="firstNumber" />
    <input type="text" name="secondNumber" />
    <input type="submit" value="go">
</form>
<div id="returnedData"></div>
</body>
</html>