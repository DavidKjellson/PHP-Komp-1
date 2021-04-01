<?php $backButton = '<a href="index.php"><button type="button" class="btn btn-primary btn-lg">↲ Tillbaka till startsidan</button></a>' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo ($_SERVER['PHP_SELF'] === '/index.php') ? 'Produkter' : 'Produkt' ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1 class="text-center"><?php echo ($_SERVER['PHP_SELF'] === '/index.php') ? 'Produkter' : $backButton ?></h1>
  </header>