<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include 'db.php';
$connection = new Db();
for ($i = 0; $i < 100; $i++) {
  try {
    $stmt = $connection->pdo->prepare("INSERT INTO  products (name, price, description, image) VALUES(':name:', ':price:', ':decription:', ':image:')");
    $image = 'https://picsum.photos/seed/' . $i . '/200/300';
    $stmt->execute([
      randomword(rand(4, 12)),
      rand(10, 1000),
      randomword(rand(4, 12)),
      $image
    ]);
  } catch (Exception $e) {
    echo "Connection failed:" . $e->getMessage();
  }
}
function randomword($length = 4)
{
  return substr(str_shuffle("qwertyuiopasdfghjklzxcvbnm"), 0, $length);
}
