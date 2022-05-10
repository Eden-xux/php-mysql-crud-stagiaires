<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>index</title>
</head>
<body>
<?php require_once 'database.php' ;?>
<?php require_once 'process.php' ;?>
<?php include_once 'navbar.php' ; ?>


            <?php 
            $sql = $database->query("SELECT * FROM stagiaire ORDER BY id DESC");
            $stagiaire = $sql->fetchAll(PDO::FETCH_OBJ);
        
            ?>




            <table class="table table-dark table-striped">
                
            <thead>
                    
                    <tr>
                        <th scope="col">(❁´◡`❁)</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Action</th>
                    </tr>
                
            </thead>
                <tbody>
                <?php
                        foreach($stagiaire as $key =>$val){
                            
                        
                        ?>
                            <tr>

                            <th scope="row"><?php echo $val->id ?></th>
                                <td> <?php echo $val->firstname ?></td>
                                <td> <?php echo $val->lastname ?></td>
                                <td> <?php echo $val->age ?></td>
                                <td>
                                    <form method="POST">
                                        <input type="hidden" name="id" value="<?php echo $val->id ?>">
                                        <input formaction="update.php" class='btn btn-sm rounded-3 btn-dark' type="submit" value="Edit" name="edit">
                                        <input formaction="delete.php" class='btn btn-sm rounded-3 btn-dark' type="submit" value="delete" name="delete" onclick="return confirm('do you really want to delete this <?php echo $val->firstname ?> ???');">
                                    </form>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                </tbody>
            </table>
</body>
</html>