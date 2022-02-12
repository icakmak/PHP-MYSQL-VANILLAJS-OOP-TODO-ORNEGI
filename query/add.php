<?php
include("../connect.php");
if(isset($_POST)){

    $data=array(
        "title"=>$_POST['title'],
        "text"=>$_POST['text'],
        "startDate"=>$_POST['startDate'],
        "finishDate"=>$_POST['finishDate']
    );

    $insert=$db->prepare("INSERT INTO tbl_todo SET title=:title,text=:text,startDate=:startDate,finishDate=:finishDate");
    $result=$insert->execute($data);

    if($result){
        echo json_encode($result);
    }else{
        $data="Veri Kaydı Başarısız";
        echo json_encode($data);
    }

}
?>