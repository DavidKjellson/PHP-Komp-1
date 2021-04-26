<?php

include 'db.php';
$connection = new Db();

for ($i = 0; $i < 100; $i++) {
  try {
    $stmt = $connection->pdo->prepare("INSERT INTO products (name, description, image, price) VALUES(:name, :description, :image, :price)");
    $image = 'https://picsum.photos/seed/' . $i . '/200/300';
    $stmt->execute(
      [
        ':name' => randomword(rand(4, 12)),
        ':description' => randomword(rand(4, 12)),
        ':image' => $image,
        ':price' => rand(10, 1000)
      ]
    );
  } catch (Exception $e) {
    echo "Connection failed:" . $e->getMessage();
  }
}
function randomword($length = 4)
{
  return substr(str_shuffle("qwertyuiopasdfghjklzxcvbnm"), 0, $length);
}
