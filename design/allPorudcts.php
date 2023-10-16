<a class="btn btn-success" href="?action=add">Add</a>
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
      <th scope="col">Controls</th>
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

          <img src="image/<?= $show['image'] ?>" style="width: 100px; height: 100px;">
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

          <?php $show['category'];
          $select_category = "SELECT * FROM category";

          $show_category = $connect->query($select_category);

          $reslut_category = $show_category->fetch_assoc();

          echo $show['name']; ?>
        </td>
        <td>
          <a href="?action=edit&id=<?= $show['id']?>"type="submit" class="btn btn-info form-control my">Edit</a>
          <a  href="?action=delete" type="submit" class="btn btn-danger form-control">Delete</a>
        </td>
        
      </tr>
    <?php endwhile; ?>
  </tbody>
</table>