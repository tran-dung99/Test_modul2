<!--<form action=""method="post">-->
<!--    <input type="text" name="name" value="--><?php //echo $product->name ?><!--">-->
<!--    <select name="category">-->
<!--        --><?php //foreach ($categorys as $category): ?>
<!--            <option --><?php //echo $category->id == $product->category_id?"select":null ?><!-- value="--><?php //echo $category->id ?><!--">--><?php //echo$category->name ?><!--</option>-->
<!--        --><?php //endforeach;?>
<!--    </select>-->
<!--    <input type="number" name="price" value="--><?php //echo $product->price ?><!--">-->
<!--    <input type="number" name="number" value="--><?php //echo $product->number ?><!--">-->
<!--    <input type="text" name="detail" value="--><?php //echo $product->detail ?><!--">-->
<!--    <button>Nhập mặt hàng</button>-->
<!--    <a href="index.php?page=product-list">Thoát</a>-->
<!--</form>-->


<form method="post">
    <div class="container">
        <div class="form-group">
            <label for="exampleInputEmail1">Tên hàng</label>
            <input value="<?php echo $product->name ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"  name="name">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Loại hàng</label>
            <select name="category">
                <?php foreach ($categorys as $category): ?>
                    <option <?php echo $category->id == $product->category_id?"select":null ?> value="<?php echo $category->id ?>"><?php echo$category->name ?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Giá</label>
            <input value="<?php echo $product->price ?>" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"  name="price">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Số lượng</label>
            <input value="<?php echo $product->number ?>" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"  name="number">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Mô tả :</label><br>
            <textarea value="<?php echo $product->detail ?>" style="width: 1100px"></textarea>
        </div>
        <div style="float: right">
            <button type="submit" class="btn btn-success">Sửa mặt hàng</button>
            <a href="index.php?page=product-list" type="button" class="btn btn-success">Thoát</a>
        </div>
    </div>
</form>