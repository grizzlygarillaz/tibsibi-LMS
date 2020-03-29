<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="../jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark desktop" style="z-index: 2">
    <a class="navbar-brand material-icons md-light" href="#" onclick="TransformNav()">menu</a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active d-flex" href="#">
                <span class="material-icons mr-1">home</span>
                Home <span class="sr-only">(current)</span>
            </a>
            <a class="nav-item nav-link d-flex" href="#">
                <span class="material-icons mr-1">book</span>
                Features
            </a>
            <a class="nav-item nav-link d-flex" href="#">
                <span class="material-icons mr-1">face</span>
                Pricing
            </a>
            <a class="nav-item nav-link d-flex" href="#">
                <span class="material-icons mr-1">blur_on</span>
                Disabled
            </a>
        </div>
    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mobile" style="z-index: 2">
    <div class="mob-nav">
        <a class="navbar-brand material-icons md-light" href="#" onclick="TransformNav()">menu</a>
        <a class="nav-item nav-link active d-flex" href="#">
            <span class="material-icons">home</span>
            <span class="sr-only">(current)</span>
        </a>
        <a class="nav-item nav-link d-flex" href="#">
            <span class="material-icons">book</span>
        </a>
        <a class="nav-item nav-link d-flex" href="#">
            <span class="material-icons">face</span>
        </a>
        <a class="nav-item nav-link d-flex" href="#">
            <span class="material-icons">blur_on</span>
        </a>
    </div>
</nav>

<div id="mySidebar" class="sidebar">
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
</div>

<div id="main">
