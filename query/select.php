<?php
include("../connect.php");
if(isset($_POST)){

    $id=$_POST['id'];
    $statement=$db->prepare("SELECT * FROM tbl_todo WHERE id=:id");
    $result=$statement->execute(array("id"=>$id));
    $row=$statement->fetch(PDO::FETCH_ASSOC);

    echo json_encode($row);


}
?>