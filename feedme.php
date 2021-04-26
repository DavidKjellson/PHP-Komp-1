<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include 'db.php';
$connection = new Db();

// Option 1: Doesn't work

// for ($i = 0; $i < 100; $i++) {
//   try {
//     $stmt = $connection->pdo->prepare("INSERT INTO products (name, description, image, price) VALUES(:name:, :description:, :image:, :price:)");
//     $image = 'https://picsum.photos/seed/' . $i . '/200/300';
//     $stmt->execute(
//       [
//         ':name:' => randomword(rand(4, 12)),
//         ':description:' => randomword(rand(4, 12)),
//         ':image:' => $image,
//         ':price:' => rand(10, 1000)
//       ]
//     );
//   } catch (Exception $e) {
//     echo "Connection failed:" . $e->getMessage();
//   }
// }
// function randomword($length = 4)
// {
//   return substr(str_shuffle("qwertyuiopasdfghjklzxcvbnm"), 0, $length);
// }

// Option 2: Also doesn't work, but at least I got a nice block of text from it

for ($i = 0; $i < 100; $i++) {
  $stmt = "INSERT INTO  products (name, description, image, price) VALUES(%s, %s, %s, %d)";
  $image = 'https://picsum.photos/seed/' . $i . '/200/300';
  $loek = sprintf(
    $stmt,
    randomword(rand(4, 12)),
    randomword(rand(4, 12)),
    $image,
    rand(10, 1000)

  );
  echo $loek . ";\n";
}
function randomword($length = 4)
{
  return substr(str_shuffle("qwertyuiopasdfghjklzxcvbnm"), 0, $length);
}
