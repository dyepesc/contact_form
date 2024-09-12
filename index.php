
<?php

function validate($name, $email, $subject, $message, $form) {
    return !empty($name) && !empty($email) && !empty($subject) && !empty($message);
}

$status = "";

if ( isset($_POST["form"]) ) {

    if ( validate(...$_POST) ) {
        
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        // Mandar el correo

        $status = "success";

    }
    else {
        $status = "danger";
    }
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="central">

        <?php if($status == "danger"): ?>
        
        <div class="alert danger">
            <span>Error, please t again</span>
        </div>
        
        <?php endif; ?>
      

        <?php if($status == "success"): ?>
      
        <div class="alert success">
          <span>¡Sending message!</span>
        </div>
      
        <?php endif; ?>
        <h2>!Contact Us!</h2>
        <form action="./" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name ="name" aria-describedby="nameHelp">
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
              <label for="subject" class="form-label">Subject</label>
              <input type="text" class="form-control" id="subject" name="subject">
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Menssage</label>
                <textarea id="message" name="message" class="form-control" > </textarea>
              </div>

            <div class="btnSubmit">
              <button type="submit" class="btn btn-primary" name="form">Submit</button>
            </div>
          </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>