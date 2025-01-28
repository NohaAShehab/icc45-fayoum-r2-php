<?php
session_start();
if($_SESSION['login']){
    header("location:homepage.php");
}


if (isset($_GET['errors'])){
    $errors = json_decode($_GET['errors'], true);
    extract($errors);  # variable with values --> based on errors
}
if(isset($_GET['old'])){
    $old_data = json_decode($_GET['old'], true);

    if(isset($old_data['name'])){
        $old_name = $old_data['name'];
    }
    if(isset($old_data['grade'])){
        $old_grade = $old_data['grade'];
    }
    if(isset($old_data['id'])){
        $old_id = $old_data['id'];
    }
}

if(isset($_GET['invalid'])){

    $invalid_credits= "Email or password incorrect";
}
?>

<p class="text-danger"><?php echo $invalid_credits ?? "" ?> </p>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Login  </h1>

    <form action="loginform.php"  method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email"  value="<?php echo $old_id ?? ''; ?>"   name="email"
                   class="form-control" >
            <p class="text-danger"> <?php echo $id ?? '' ?> </p>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password"   value="<?php echo $old_name ?? ''; ?>"  name="password"
                   class="form-control" >
            <p class="text-danger"> <?php if($name){echo $name;} ?> </p>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>