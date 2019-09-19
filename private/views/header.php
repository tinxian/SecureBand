<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="T X H Nieuws">
    <meta name="author" content="Tin Xian Hu">
    <meta name="copyright" content="Tin Xian Hu">
    <link rel="stylesheet" href="<?php echo url('/css/menu-style.css')?>">
    <link rel="stylesheet" href="<?php echo url('/css/home.css')?>">
    <link rel="stylesheet" href="<?php echo url('/css/footer.css')?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
          <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <title>T X H - Nieuws</title>
</head>

<body class="site">
<header>
    <div class="menu-toggle" id="hamburger">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </div>
    <div class="overlay"></div>
    <div class="container">
        <nav>
            <h1 class="brand"><a href="">T X H</a></h1>
            <ul>
                <li><a href="<?php echo url('/') ?>">Voorpagina</a></li>
                <li><a href="<?php echo url('/allenieuws') ?>">Alle Nieuws</a></li>
                <li><a href="<?php echo url('/overons') ?>">Over Ons</a></li>
            </ul>
            <div class="search">
    <form>
      <input type="text" id="searchCountry" placeholder="Search.." name="search">

      <div id="txtHint"></div>
    </form>
</div>

        </nav>
    </div>
</header>
<script src="js/menu.js"></script>
<script src="js/ajax.js"></script>
