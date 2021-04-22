<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// class Product
// {
//   public function head()
//   {
//     include 'header.php';
//   }
//   public function html()
//   {
//     ob_start();
?>
<!-- Design from: https://codepen.io/LR96/pen/ZxQPbV -->
<!-- <div class="mx-auto col-md-10">
      <div class="card">
        <div class="card-image">
          <img class="card-img-top img-fluid" src="https://www.unitedworx.com/media/content-images/470-lettings-cyprus-long-term-rentals-web-design_full.jpg" alt="Card image cap">
        </div>
        <div class="card-body mx-auto">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text font-weight-light">169 kr</p>
        </div>
      </div>
    </div> -->
<?php
//     return ob_get_clean();
//   }
//   public function foot()
//   {
//     include 'footer.php';
//   }
// }

// $product = new Product('Product');
// echo $product->head();
// echo $product->html();
// echo $product->foot();

include 'db.php';
// $connection = new Db();

class Product
{
  public $id;
  public $name;
  public $product;
  public $pdo;

  public function __construct($id, $name)
  {
    $this->id = $id;
    $this->name = $name;
  }

  public function getProduct()
  {
    $connection = new Db();
    if (isset($product)) {
      return $product;
    }
    $pdo = $this->id;
    $stmt = $connection->pdo->prepare("SELECT $pdo FROM products");
    $stmt->execute();
    $product = $stmt->fetchAll();
    $this->product = $product;
    return $product;
    // $pdo = $this->id;
    // $productExecute = $pdo->execute();
    // $productData = $productExecute->fetchAll();
    // $product = $this->product;
    // return $product;
  }
}

$product = new Product($_GET['id'], $_GET['name']);

?>

Name: <?php echo $product->name; ?>
Id: <?php echo $product->id; ?>