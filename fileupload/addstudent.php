

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add student </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Add student </h1>

    <form action="uploadfile.php"  method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">ID</label>
            <input type="number"    name="id"
                   class="form-control" >
            <p class="text-danger"> </p>
        </div>
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text"     name="name"
                   class="form-control" >
            <p class="text-danger">  </p>
        </div>
        <div class="mb-3">
            <label class="form-label">Grade</label>
            <input type="number"    name="grade"
                   class="form-control" >
            <p class="text-danger">  </p>
        </div>
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file"    name="image"
                   class="form-control" >
            <p class="text-danger">  </p>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>