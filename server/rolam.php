<?php
    require_once "db.php";
    $sql="";
    $stmt=$db->query($sql);
    echo json_encode($stmt->fetchAll());
?>