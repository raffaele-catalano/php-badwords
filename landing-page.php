<?php


$paragraph          = $_GET['paragraph'];
$wordToCensure      = $_GET['words'];
$paragraphReviewed  = str_replace(strtolower($wordToCensure), '*****', strtolower($paragraph));


// 
// var_dump([$paragraph, $wordToCensure]);

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- font-awesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css' integrity='sha512-Z0kTB03S7BU+JFU0nw9mjSBcRnZm2Bvm0tzOX9/OuOuz01XQfOpa0w/N9u6Jf2f1OAdegdIPWZ9nIZZ+keEvBw==' crossorigin='anonymous'/>
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/badwords_fav.png" type="png">
    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous'/>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Badwords</title>
</head>

<body>

    <div class="container d-flex justify-content-center align-items-center flex-column my-4 p-3">

    <h1 class="fw-bold text-center mb-4">Here's your Result</h1>

    <div class="paragraph-container my-3">
        <h3 class="mb-2 text-center">Paragraph:</h3>
        <h5 class="text-center mb-3"><?php echo ucfirst($paragraphReviewed) ?></h5>
        <p class="text-center text-warning"> <em>Your Paragraph has <?php echo strlen ($paragraph)?></em>  types</p>
    </div>

    <div class="words-container my-3">
        <h3 class="mb-2 text-center">Word Censored:</h3>
        <h4 class="text-center text-danger"><?php echo $wordToCensure ?></h4>
    </div>

    </div>

</body>

</html>