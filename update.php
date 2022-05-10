<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
    <?php
    
        require_once('database.php');
        require_once('navbar.php');

        if(isset($_POST["edit2"])) {

            $stgId = $_POST['stg_id'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $age = $_POST['age'];

            $sql = $database->prepare('UPDATE stagiaire SET firstname=?, lastname=?, age=? WHERE id=?');
            $sql->execute([$firstname, $lastname, $age, $stgId]);
            
            header("location: index.php");
        }

        // selection
        $id = $_POST['id'];
        $sql = $database->prepare('SELECT * FROM stagiaire WHERE id=:id');
        $sql->bindParam(':id', $id);
        $sql->execute();
        $stagiaire = $sql->fetch(PDO::FETCH_OBJ);

    ?>
    <div class="container">
        <div  class="position-absolute top-50 start-50  translate-middle w-50 p-1 ">
            <div  class="border border-5 p-3">
                <h2 class="text text-center">Edit Page. </h2>
                <div class="row text-center bg-dark" style="width: 60% ; margin:auto; margin-top:10%; padding-left:2%; padding-right:2% ; border-radius:10% ; height: 110%;">
                    <form method="POST">
                        <input type="hidden" name="stg_id" value="<?php echo $stagiaire->id; ?>">
                        <div class="form-group">
                            <label class="text-muted">FirstName</label>
                            <input type="text" autofocus name="firstname" class="form-control" placeholder="Enter your first name" value="<?php echo $stagiaire->firstname; ?>">
                        </div>
                        <div class="form-group">
                            <label  class="text-muted">Last Name</label>
                            <input type="text" name="lastname" class="form-control" placeholder="Enter your last name" value="<?php echo $stagiaire->lastname; ?>">
                        </div>
                        <div class="form-group">
                            <label  class="text-muted">Age</label>
                            <input type="number" name="age" class="form-control" placeholder="Enter your age" value="<?php echo $stagiaire->age; ?>">
                        </div>
                        <div class="form-group">
                            <input type="submit" class='btn btn-dark rounded-3 my-2' name="edit2" value="edit">
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
</body>
</html>