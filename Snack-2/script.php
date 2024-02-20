<?php
            $name = $_POST["firstname"] ?? '';
            $email = $_POST["email"] ?? '';
            $age = $_POST["age"] ?? '';
            $passed = "nope"; 

            if (mb_strlen(trim($name)) > 3 && str_contains($email, "@")  && str_contains($email, ".")  && is_numeric($age)) {
                $passed = "passed";
            }
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container p-5">
        <h1 class="text-center">
            <?php
                if ($passed === "passed") {
                    echo "Accesso riuscito"; 
                } else {
                    echo "Accesso negato";
                }
            ?>
        </h1>
    </div>
    
</body>
</html>