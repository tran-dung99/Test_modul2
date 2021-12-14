<h2>Kết quả tìm kiếm mặt hàng</h2>
<div style="float: right"><a href="index.php?page=product-list" type="button" class="btn btn-success">Danh sách mặt hàng</a></div><br><br>
<table class="table">
    <thead style="background-color: forestgreen;color: white">
    <tr>
        <th>ID</th>
        <th>Tên hàng</th>
        <th>Loại hàng</th>
        <th colspan="2"></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $product): ?>
        <tr>
            <td><?php echo $product->id ?></td>
            <td><?php echo $product->name ?></td>
            <td><?php echo $product->category ?></td>
            <td><a href="index.php?page=edit-product&id=<?php echo $product->id ?>">Chỉnh sửa |</a></td>
            <td><a href="index.php?page=delete-product&id=<?php echo $product->id ?>">Xóa</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>