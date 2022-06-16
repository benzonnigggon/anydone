<?php
    echo'
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Anydone</title>
        <!-- bootstrap -->
        <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
        <link rel="stylesheet" href="vendor/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- font awsome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body>
        <!-- navbar -->
        <header id="header">
            <nav class="navbar nav-bg navbar-expand-lg  navbar-light">
                <div class="container nav-container">
                    <div class="logo active">
                        <a href="index.php" class="navbar-brand logo-brand">
                            <img src="images/Logo.webp" alt="">
                        </a>
                    </div>
                    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                            </button>
                    <div class="collapse navbar-collapse bg-sm-dark" id="navbarNav">
                        <ul class="navbar-nav nav-custom ml-auto">
                            <li class="nav-item "><a href="about.php " class="nav-link ">About us</a></li>
                            <li class="nav-item ">
                                <a href="features.php" class="nav-link ">features</a>
                            </li>
                            <li class="nav-item "><a href=" " class="nav-link ">Solutions</a></li>
                            <li class="nav-item "><a href="pricing.php" class="nav-link ">pricing</a></li>
                        </ul>
                    </div>
                    <div class="signin">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="signinForm.php" class="nav-link">sign in</a>
                            </li>
                        </ul>
                    </div>
                    <div class="trynow">
                        <a href="registerPage.php"><button class="btn btn-primary">TRY NOW</button></a>
                    </div>
                </div>
            </nav>
        </header>
    ';
?>