<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orzeł czy reszka?</title>
</head>
<body>
    <form action="index.php" method="post">
      <button type="submit">Losuj!</button>
    </form>
<?php
  $los = rand(0, 1);
  if($los === 0) {
     echo "orzeł";
  } else {
      echo "reszka";
}
?>
</body>
</html>