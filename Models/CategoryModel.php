<?php
include_once "BaseModel.php";
class CategoryModel extends BaseModel
{
  protected $table = "categorys";

  public function getAll(){
      $sql = "SELECT *FROM $this->table";
      $stmt = $this->connect->query($sql);
      return $stmt->fetchAll(PDO::FETCH_OBJ);
  }
}