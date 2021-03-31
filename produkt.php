<?php

class Product
{
  public $name;
  public function __construct($name)
  {
    $this->name = $name;
  }
  public function head()
  {
    include 'header.php';
  }
  public function html()
  {
    ob_start();
?>
    <!-- <header>
      <h1 class="text-center">Produkt</h1>
    </header> -->
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
<?php
    return ob_get_clean();
  }
  public function foot()
  {
    include 'footer.php';
  }
}

$product = new Product('Product');
echo $product->head();
echo $product->html();
echo $product->foot();
