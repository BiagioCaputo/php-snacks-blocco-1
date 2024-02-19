<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Snack-2</title>
</head>
<body>
    <div class="container p-5">
        <form method="POST" action= "./script.php">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="firstname">
            </div>
            <div class="mb-3">
                <label for="emailAddress" class="form-label">Email address</label>
                <input type="email" class="form-control" id="emailAddress" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label" for="age">Age</label>
                <input type="number" id="age" name="age" min="1" max="130" class="form-control"/>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form> 
    </div>

    
</body>
</html>

<style>
    input{
        max-width:50%;
    }

    #age{
        max-width:20%;
    }
</style>