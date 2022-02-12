<?php
    include("../connect.php");
    if($_POST){
        if($_POST['list']='list'){
            $statement=$db->prepare("SELECT * FROM tbl_todo");
            $result=$statement->execute();
            $rows=$statement->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($rows);
        }

    }

?>
