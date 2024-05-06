<body>
  <div class="container">
    <div class="products">
      <h1>Prodotti</h1>
      <h2>Cibo</h2>
      <table class="table  ">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Categoria</th>
            <th scope="col">Nome</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Brand</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($foods as $food) : ?>
            <tr>
              <th><?php echo $food->id ?></th>
              <td><?php echo $food->categories->name ?></td>
              <td><?php echo $food->name ?></td>
              <td><?php echo $food->price ?></td>
              <td><?php echo $food->brand ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <h2>Giochi</h2>
      <table class="table  ">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Categoria</th>
            <th scope="col">Nome</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Brand</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($toys as $toy) : ?>
            <tr>
              <th><?php echo $toy->id ?></th>
              <td><?php echo $toy->categories->name ?></td>
              <td><?php echo $toy->name ?></td>
              <td><?php echo $toy->price ?></td>
              <td><?php echo $toy->brand ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

    </div>
  </div>
</body>

</html>