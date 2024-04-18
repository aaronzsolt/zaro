<?php
    require_once "db.php";
    $sql="SELECT * FROM music";
    $stmt=$db->query($sql);
    echo json_encode($stmt->fetchAll());
?>