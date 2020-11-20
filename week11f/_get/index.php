<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>GET</h2>
  <pre>
<?php
var_dump($_GET);
?>
  </pre>
  <h2>POST</h2>
  <pre>
<?php
var_dump($_POST);
?>
  </pre>
  <form action="index.php" method="put">
    <p><label for="a">First Operand: </label><input id="a" name="a" type="number"></p>
    <p><label for="b">Second Operand: </label><input id="b" name="b" type="number"></p>
    <p><input type="submit" name="submit" value="Calculate"></p>
  </form>

  <h2>SERVER</h2>
  <pre>
<?php
var_dump($_SERVER);
?>
  </pre>
</body>
</html>