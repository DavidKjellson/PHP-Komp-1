<?php

class Index extends Db
{
  public function head()
  {
    include 'header.php';
  }
  public function getProducts()
  {
    $stmt = $this->connect()->query("SELECT * FROM products");
    while ($row = $stmt->fetch()) {
      $id = $row['id'];
      return $id;
    }
  }
  public function html()
  {
    ob_start();
?>
    <main>
      <div id="cards_landscape_wrap-2">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <a href="produkt.php?id=1">
                <div class="card-flyer">
                  <div class="text-box">
                    <div class="image-box">
                      <img src="https://cdn.pixabay.com/photo/2018/03/30/15/11/deer-3275594_960_720.jpg" alt="" />
                    </div>
                    <div class="text-container">
                      <h6>Title 01</h6>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                      <p class="font-weight-light">169 kr</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </main>
<?php
    return ob_get_clean();
  }
  public function foot()
  {
    include 'footer.php';
  }
}
$index = new Index("Index");
echo $index->head();
echo $index->getProducts();
echo $index->html();
echo $index->foot();
