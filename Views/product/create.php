<h1>Thêm mặt hàng</h1>
<!--<form action=""method="post">-->
<!--    <input type="text" name="name">-->
<!--    <select name="category">-->
<!--        --><?php //foreach ($categorys as $category): ?>
<!--        <option value="--><?php //echo $category->id ?><!--">--><?php //echo$category->name ?><!--</option>-->
<!--        --><?php //endforeach;?>
<!--    </select>-->
<!--    <input type="number" name="price">-->
<!--    <input type="number" name="number">-->
<!--    <input type="text" name="detail">-->
<!--    <button>Nhập mặt hàng</button>-->
<!--    <a href="index.php?page=product-list">Thoát</a>-->
<!--</form>-->

<form method="post">
    <div class="container">
    <div class="form-group">
        <label for="exampleInputEmail1">Tên hàng</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"  name="name">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Loại hàng</label>
        <select name="category">
            <?php foreach ($categorys as $category): ?>
                <option value="<?php echo $category->id ?>"><?php echo$category->name ?></option>
            <?php endforeach;?>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Giá</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"  name="price">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Số lượng</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"  name="number">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Mô tả :</label><br>
        <textarea style="width: 1100px"></textarea>
    </div>
        <div style="float: right">
    <button type="submit" class="btn btn-success">Nhập mặt hàng</button>
    <a href="index.php?page=product-list" type="button" class="btn btn-success">Thoát</a>
        </div>
    </div>
</form>
