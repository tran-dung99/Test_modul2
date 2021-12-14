<?php
include_once "DBConnect.php";
class BaseModel
{
 protected $connect;
 protected $table;
 public function __construct()
 {
     $db = new DBConnect();
     $this->connect = $db->connect();
 }

 public function getAll() {
     $sql = "SELECT products.*,categorys.name as category FROM products JOIN categorys ON products.category_id=categorys.id";
     $stmt = $this->connect->query($sql);
     return $stmt->fetchAll(PDO::FETCH_OBJ);
 }

 public function getById($id) {
     $sql = "SELECT * FROM $this->table WHERE id=".$id;
     $stmt = $this->connect->query($sql);
     return $stmt->fetch(PDO::FETCH_OBJ);
 }
 public function delete($id) {
     $sql = "DELETE FROM $this->table WHERE id= ?";
     $stmt = $this->connect->prepare($sql);
     $stmt->bindParam(1,$id);
     $stmt->execute();
 }
}