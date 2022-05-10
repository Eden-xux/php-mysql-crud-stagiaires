<?php
    if(isset($_POST['delete'])){
        require_once 'database.php';
        $id = $_POST['id'];
        $sql = $database->prepare('DELETE FROM stagiaire WHERE id=?');
        $sql->execute([$id]);
        header('location: index.php');
    }
?>