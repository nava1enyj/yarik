<?php session_start(); ?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<div class="d-flex justify-content-between flex-column min-vh-100">
    <header class="header">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark bg-gradient">
            <div class="ms-3 me-3 container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">


                    <div class="mx-auto order-0">

                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/index.php">Главная</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/menu.php">Меню</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/about.php">О нас</a>
                            </li>
                        </ul>


                    </div>
                    <ul class="navbar-nav mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a type="button" class="nav-link active" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                               Бронь
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
