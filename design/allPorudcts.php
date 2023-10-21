<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Brand</th>
      <th scope="col">Category</th>
      <th scope="col">Image</th>
      <th scope="col">Description</th>
      <th scope="col">Controls</th>
    </tr>
  </thead>
  <tbody>
    <?php

    $select = "SELECT * FROM products";

    $result = $connect->query($select);
    $i = 1;
    while ($show = $result->fetch_assoc()):
      ?>

      <tr>
        <td scope="row">
          <?= $i++ ?>
        </td>
        <td>
          <?= $show['name'] ?>
        </td>
        <td>
          <?= $show['price'] ?>
        </td>
        <td>
          <?php
          $brand_id = $show['brand'];
          $select_brand = "SELECT name FROM brand WHERE id = $brand_id";
          $result_brand = $connect->query($select_brand);
          $brand = $result_brand->fetch_assoc();
          echo $brand['name'];
          ?>
        </td>
        <td>
          <?php
          $category_id = $show['category'];
          $select_category = "SELECT name FROM category WHERE id = $category_id";
          $result_category = $connect->query($select_category);
          $category = $result_category->fetch_assoc();
          echo $category['name'];
          ?>
        </td>
        <td>
          <img src="image/<?= $show['image'] ?>" style="width: 100px; height: 100px;">
        </td>
        <td>
          <?= $show['description'] ?>
        </td>
        <td>
        <a class="btn btn-info" href="?action=edit&id=<?= $show['id']?>">Edit</a>
      <a class="btn btn-danger" href="functions/deleteProducts.php?id=<?= $show['id']?>">Delete</a>
        </td>
      </tr>
    <?php endwhile; ?>

  </tbody>
</table>
