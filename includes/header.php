<?php
  session_start();
  Protect::mustBeLoggedIn();
  $current_user = new User(); 

  // Get current page
  $current_page_ar = $_SERVER['REQUEST_URI'];
  $current_page = explode('/', $current_page_ar);
  $current_page = $current_page[1];
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-9ralMzdK1QYsk4yBY680hmsb4/hJ98xK3w0TIaJ3ll4POWpWUYaA2bRjGGujGT8w" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/main.css">
    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
    <title>Lodestar</title>
  </head>
  <body>
    <nav class='top-menu navbar navbar-expand-lg navbar-light justify-content-between'>
      <a class="navbar-brand" href="#">Lodestar</a>
      <!-- <ul class="navbar-nav mr-auto">
        <li class="nav-item <?= ($current_page == 'dashboard' ? 'active': ''); ?>">
          <a class="nav-link" href="/dashboard"><?= FontAwesome::getIcon('tachometer-alt', ['fw'])?>Dashboard <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item <?= ($current_page == 'products' ? 'active': ''); ?>">
          <a class="nav-link" href="/products"><?= FontAwesome::getIcon('tags', ['fw'])?>Products <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item <?= ($current_page == 'orders' ? 'active': ''); ?>">
          <a class="nav-link" href="/orders"><?= FontAwesome::getIcon('shopping-cart', ['fw'])?>Orders <span class="badge badge-light" title='Amount of open orders'>0</span><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item <?= ($current_page == 'customers' ? 'active': ''); ?>">
          <a class="nav-link" href="/customers"><?= FontAwesome::getIcon('users', ['fw'])?>Customers <span class="sr-only">(current)</span></a>
        </li>
      </ul> -->
      <div class="user-info dropdown navbar-text">
        <a class="dropdown-toggle" href="#" role="button" id="userInfoDropdownToggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?=$current_user->full_name?>
        </a>
        <div class="dropdown-menu user-info-dropdown" aria-labelledby="userInfoDropdownToggle">
          <a class="dropdown-item" href="#">Profile</a>
          <a class="dropdown-item" href="#">Notifications <span class="badge badge-primary">4</span></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/logout.php">Log Out</a>
        </div>
      </div>
    </nav>
    <div class="container-fluid row">
    <div class="sidebar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item <?= ($current_page == 'dashboard' ? 'active': ''); ?>">
          <a class="nav-link" href="/dashboard"><?= FontAwesome::getIcon('tachometer-alt', ['fw'])?>Dashboard <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item <?= ($current_page == 'products' ? 'active': ''); ?>">
          <a class="nav-link" href="/products"><?= FontAwesome::getIcon('tags', ['fw'])?>Products <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item <?= ($current_page == 'orders' ? 'active': ''); ?>">
          <a class="nav-link" href="/orders"><?= FontAwesome::getIcon('shopping-cart', ['fw'])?>Orders <span class="badge badge-light" title='Amount of open orders'>0</span><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item <?= ($current_page == 'customers' ? 'active': ''); ?>">
          <a class="nav-link" href="/customers"><?= FontAwesome::getIcon('users', ['fw'])?>Customers <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
    <div class='content-container'>
