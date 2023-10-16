<form action="functions/insert.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name" style="font-weight: bold;">Product Name :</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label for="price" style="font-weight: bold;">Price :</label>
        <input type="unmber" class="form-control" name="price">
    </div>
    <div class="form-group">
        <label for="count" style="font-weight: bold;">count :</label>
        <input type="number" class="form-control" name="count">
    </div>
    <div class="form-group">
        <label for="image" style="font-weight: bold;">image :</label>
        <input type="file" name="image">
    </div>
    <div class="form-group">
        <label for="categroy" style="font-weight: bold;">categroy :</label>
        <select name="category" id="" class="form-control">
            <?php
            $select_cat = "SELECT * FROM category";
            $show_cat = $connect->query($select_cat);
            while ($reslut_cat = $show_cat->fetch_assoc()):
                ?>
            <option value="<?= $reslut_cat["id"] ?>"> <?= $reslut_cat["name"]?></option>
                <?php
            endwhile;
            ?>
        </select>

    </div>
    <div class="form-group">
        <label for="brand" style="font-weight: bold;">brand :</label>
        <select name="brand" id="" class="form-control">
            <?php

            $select_brand = "SELECT * FROM brand";

            $show_brand = $connect->query($select_brand);

            while ($reslut_brand = $show_brand->fetch_assoc()):
                ?>
            <option value="<?=$reslut_brand["id"]?>"><?=$reslut_brand["name"]?></option>
            <?php
            endwhile;
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="des" style="font-weight: bold;">description :</label>
        <textarea name="description" style="height: 100px;" class="form-control"></textarea>

    </div>
    <button type="submit" class="btn btn-success form-control">Add Product</button>


</form>