<?php
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/ProductCategory.php';
require_once __DIR__ . '/Models/Cibo.php';
require_once __DIR__ . '/data/db.php';


$foods = array_filter($products, fn ($product) => get_class($product) === 'Cibo');

var_dump($food);




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
      <h2>Cibo</h2>
      <table class="table table-striped ">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Prezzo</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($foods as $food) : ?>
            <tr>
              <th></th>
              <td><?php echo $food->categories->name ?></td>
              <td></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

    </div>
  </div>
</body>

</html>