<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Math in PHP</title>
</head>
<body>
  <form action="mathfunction.php" method="post">
    <label>x:</label> </br>
    <input type="text" name="x">
    <label>y:</label> </br>
    <input type="text" name="y">
    <label>z:</label> </br>
    <input type="text" name="z">
    <input type="submit" value="total">
  </form>
</body>
</html>

<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    // $total = abs($x);  this is absolute function
    // $total = round($x);  it is round function
    // $total = floor($x); round down function
    // $total = ceil($x); round up number

    // $total = sqrt($x); root of number
    // $total = pow($x, $y); using power

    // $total = max($x, $y, $z); max number in given three
    // $total = min($x, $y, $z); minimum number of given number
    // $total = pi(); PI function
    // $total = rand(); it will show random number
    // $total = rand(93, 100); it will show random number

    echo $total;
?>