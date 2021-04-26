<?php

include 'db.php';

class Product
{
  public $id;
  public $name;
  public $product;
  public $pdo;

  public function __construct($id)
  {
    $this->id = $id;
    $connection = new Db();

    if (isset($product)) {
      return $product;
    }

    $query = 'SELECT * FROM products WHERE id = ?';
    $stmt = $connection->pdo->prepare($query);
    $stmt->execute([$this->id]);
    $product = $stmt->fetch();
    $this->name = $product['name'];
    $this->price = $product['price'];
    $this->image = $product['image'];
    $this->description = $product['description'];
    $this->product = $product;
  }
}

$product = new Product($_GET['id']);

include 'header.php'; ?>

<!-- Design from: https://codepen.io/LR96/pen/ZxQPbV -->
<div class="mx-auto col-md-10">
  <div class="card">
    <div class="card-body mx-auto">
      <h5 class="card-title"><?php echo $product->name ?></h5>
      <p class="card-text"><?php echo $product->description ?></p>
      <p class="card-text font-weight-light"><?php echo $product->price ?> kr</p>
    </div>
    <div class="card-image">
      <img class="card-img-top img-fluid" src="<?php echo $product->image ?>" alt="Card image cap">
    </div>
  </div>
</div>

<?php

include 'footer.php';
