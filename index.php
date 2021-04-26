<?php

include 'db.php';
$connection = new Db();
include 'header.php';

?>

<main>
  <div id="cards_landscape_wrap-2">
    <div class="container">
      <div class="row">
        <?php
        $stmt = $connection->pdo->prepare(
          "SELECT * FROM products"
        );
        $stmt->execute();
        $products = $stmt->fetchAll();
        foreach ($products as $product) { ?>
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <a href="product.php?id=<?php echo $product['id']; ?>">
              <div class="card-flyer">
                <div class="text-box">
                  <div class="image-box">
                    <img src="<?php echo $product['image']; ?>" alt="" />
                  </div>
                  <div class="text-container">
                    <h6><?php echo $product['name']; ?></h6>
                    <!-- wordwrap(substr($product['name'];, 0, 20), 19, '...'); -->
                    <p><?php echo $product['description']; ?></p>
                    <p class="font-weight-light"><?php echo $product['price']; ?> kr</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</main>

<?php

include 'footer.php';
