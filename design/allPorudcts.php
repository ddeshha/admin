<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Count</th>
      <th scope="col">Brand</th>
      <th scope="col">Category</th>
    </tr>
  </thead>
  <tbody>
    <?php

    $select = "SELECT * FROM products";

    $reslut = $connect->query($select);

    while ($show = $reslut->fetch_assoc()):
      ?>

      <tr>
        <td scope="row">
          <?= $show['id'] ?>
        </td>
        <td>
          <?= $show['name'] ?>
        </td>
        <td>
          <?= $show['price'] ?>
        </td>
        <td>

          <img src="image/<?= $show['image']?>" style="width: 50px; height: auto;">
          <?php
          /**
           * <?= $show['image']?>
           */

          ?>
        </td>
        <td>
          <?= $show['count'] ?>
        </td>
        <td>
          <?php $show['brand'];

          $select_brand = "SELECT * FROM brand";

          $show_brand = $connect->query($select_brand);

          $reslut_brand = $show_brand->fetch_assoc();

          echo $show['name']; ?>
        </td>
        <td>
          <?= $show['category'];
          $select_category = "SELECT * FROM category";

          $show_category = $connect->query($select_category);

          $reslut_category = $show_category->fetch_assoc();

          echo $show['name'];

          ?>
        </td>


      </tr>

    <?php endwhile; ?>
  </tbody>
</table>
<a class="btn btn-success" href="?action=add">Add</a>