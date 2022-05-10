<?php 
    require_once 'database.php' ;
    include_once 'navbar.php' ;

    if (isset($_POST['add'])){
        $firstname = htmlspecialchars($_POST['firstname']);
        $lastname = htmlspecialchars($_POST['lastname']);
        $age = htmlspecialchars($_POST['age']);
        
        if(!empty($firstname) && !empty($lastname) && !empty($age)){
            $sql =$database->prepare("INSERT INTO stagiaire(firstname, lastname, age) VALUES(?, ?, ?)");
            $result =$sql->execute([$firstname, $lastname, $age]);
            header('location: index.php');
        }
    }
        
?>



