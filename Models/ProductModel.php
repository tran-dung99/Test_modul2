<?php
include_once "BaseModel.php";
class ProductModel extends BaseModel
{
     protected $table = "products";

     public function create($request) {
         $sql = "INSERT INTO $this->table(name,category,number,date,detail,category_id) values (?,?,?,?,?,?)";
         $stmt = $this->connect->prepare($sql);
         $stmt->bindParam(1,$request["name"]);
         $stmt->bindParam(2,$request["category"]);
         $stmt->bindParam(3,$request["price"]);
         $stmt->bindParam(4,$request["number"]);
         $stmt->bindParam(5,$request["detail"]);
         $stmt->bindParam(6,$request["category"]);
         $stmt->execute();
     }

     public function update($request){
         $sql = "UPDATE $this->table SET name= ?, category=?,price=?,number=?,detail=?,category_id=? WHERE id=?";
         $stmt = $this->connect->prepare($sql);
         $stmt->bindParam(1,$request["name"]);
         $stmt->bindParam(2,$request["category"]);
         $stmt->bindParam(3,$request["price"]);
         $stmt->bindParam(4,$request["number"]);
         $stmt->bindParam(5,$request["detail"]);
         $stmt->bindParam(6,$request["category"]);
         $stmt->bindParam(7,$request["id"]);
         $stmt->execute();
     }

     public function search($key) {
         $sql = "SELECT * FROM $this->table WHERE name like '%$key%'";
         $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
     }
}