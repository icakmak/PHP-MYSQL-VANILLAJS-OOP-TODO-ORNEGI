<?php
include("../connect.php");
if(isset($_POST)){
    //"id="+id+"&title="+title+"&text="+text+"&startDate="+startDate+"&finishDate="+finishDate
    $data=array(
        "id"=>$_POST['id'],
        "title"=>$_POST['title'],
        "text"=>$_POST['text'],
        "startDate"=>$_POST['startDate'],
        "finishDate"=>$_POST['finishDate']
    );

    $update=$db->prepare("UPDATE tbl_todo SET title=:title,text=:text,startDate=:startDate,finishDate=:finishDate WHERE id=:id");
    $result=$update->execute($data);

    if($result){
        echo json_encode($result);
    }else{
        $data="Veri Kaydı Başarısız";
        echo json_encode($data);
    }

}
?>