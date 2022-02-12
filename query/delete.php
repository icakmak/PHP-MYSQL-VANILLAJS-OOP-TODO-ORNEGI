<?php
include("../connect.php");
if(isset($_POST)){

    $data=array(
        "id"=>$_POST['id']
    );

    $delete=$db->prepare("DELETE FROM tbl_todo WHERE id=:id");
    $result=$delete->execute($data);

    if($result){
        echo json_encode($result);
    }else{
        $data="Veri Kaydı Başarısız";
        echo json_encode($data);
    }

}
?>