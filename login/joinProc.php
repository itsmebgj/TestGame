<?php

    include "dbClass.php";

    $data = array($_POST['user_id'],$_POST['pwd'],$_POST['name'],$_POST['email']);


    $query = "insert into member(user_id, pwd, name, email) values(?,password(?),?,?) ";
    $insert  = $db->query($query,$data);
    $cnt = $insert->affectedRows();

    if($cnt!=1){
        echo $cnt;
        exit;
    }

    Header("Location: index.html");
?>