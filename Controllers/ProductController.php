<?php
include_once "Models/ProductModel.php";
include_once "Models/CategoryModel.php";
class ProductController
{
    protected $productController;
    protected $categoryController;

    public function __construct()
    {
        $this->productController = new ProductModel();
        $this->categoryController = new CategoryModel();
    }

    public function showAll()
    {
        $products = $this->productController->getAll();
        include_once "Views/product/list.php";
    }

    public function showFormDelete()
    {
        $product = $this->productController->getById($_REQUEST["id"]);
        include_once "Views/product/delete.php";
    }

    public function deleteProduct()
    {
        $this->productController->delete($_REQUEST["id"]);
        header("location:index.php?page=product-list");
    }

    public function showFormCreate()
    {
        $categorys = $this->categoryController->getAll();
        include_once "Views/product/create.php";
    }

    public function createProduct()
    {
        $this->productController->create($_REQUEST);
        header("location:index.php?page=product-list");
    }

    public function showFormUpdate() {
        $categorys = $this->categoryController->getAll();
        $product = $this->productController->getById($_REQUEST["id"]);
        include_once "Views/product/update.php";
    }
    public function update() {
        $this->productController->update($_REQUEST);
        header("location:index.php?page=product-list");
    }

    public function search(){
        $products = $this->productController->search($_REQUEST["search"]);
        include_once "Views/product/search.php";
    }

}