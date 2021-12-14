<h1>Danh sách mặt hàng</h1>
<nav class="navbar navbar-light bg-light justify-content-between">
    <a type="button" class="btn btn-success" href="index.php?page=create-product">Thêm mặt hàng</a>
    <form class="form-inline" method="get">
        <input class="form-control mr-sm-2"  type="text" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0">Search</button>
    </form>
</nav>

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
