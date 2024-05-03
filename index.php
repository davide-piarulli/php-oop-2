<?php
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/ProductCategories.php';
require_once __DIR__ . '/db.php';



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <title>PHP OOP 2</title>
</head>

<body>
  <div class="container">
    <div class="products">
      <h1>Prodotti</h1>

      <?php foreach ($db as $product) : ?>
        <div class="col p-3 " mb-3>

          <div class="card" style="width: 18rem;">

            <div class="card-body text-center">
              <h5 class="card-title"><?php echo $product->name ?></h5>

            </div>

          </div>
        </div>

      <?php endforeach ?>
    </div>
  </div>
</body>

</html>