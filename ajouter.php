<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>ajouter</title>
</head>
<body class="bg-secondary">
    <?php require_once 'database.php' ;?>
    <?php include_once 'navbar.php' ; ?>
    <div class="row text-center bg-dark" style="width: 20% ; margin:auto; margin-top:10%  ; ; padding-left:2%; padding-right:2% ; border-radius:10% ; height: 110%;"  >
        <form action="process.php" method="POST">
            <div class="form-group">
                <label class="text-muted">FirstName</label>
                <input type="text" autofocus name="firstname" class="form-control" placeholder="Enter your first name">
            </div>
            <div class="form-group">
                <label  class="text-muted">Last Name</label>
                <input type="text" name="lastname" class="form-control" placeholder="Enter your last name">
            </div>
            <div class="form-group">
                <label  class="text-muted">Age</label>
                <input type="number" name="age" class="form-control" placeholder="Enter your age">
            </div>
            <div class="form-group">
                <input type="submit" class='btn btn-dark rounded-3 my-2' value="save" name="add">
            </div>
        </form>
    </div>
</body>