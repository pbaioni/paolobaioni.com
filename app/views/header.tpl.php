<!DOCTYPE html>
<html lang="fr">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <?php
    // TODO SEO optimizations
    ?>

    <title>Title</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
    integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    
    <!-- Font-Awesome CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Custom fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet"> 

    <!-- Custom styles CSS -->
    <link href="<?= $viewVars["baseURL"] ?>/css/blog.css" rel="stylesheet">

  </head>

  <body>

    <header>

        <!-- NAV -->
        <nav class="navbar navbar-expand-md navbar-light">
          
          <a class="navbar-brand" href="<?=$viewVars['baseURL']?>/">
            LOGO
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            Menu <span class="navbar-toggler-icon"></span>
          </button>
          
          <!-- Navbar collapsed on mobile screens -->
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav ">
              <?php 
              // TODO : link to each category
              // TODO : class css "active" for currentpage
              // TODO : foreach on category list 
              ?>
              <!-- Assign class CSS "active" for current page -->
              <li class="nav-item <?= $viewVars['currentURL'] === '/' ? "active" : ""?>">
                <a 
                class="nav-link" href="<?=$viewVars['baseURL']?>/">
                  Home
                </a>
              </li>
              <li class="nav-item <?= $viewVars['currentURL'] === '/register' ? "active" : ""?>">
                <a class="nav-link" href="<?=$viewVars['baseURL']?>/register">
                  Register
                </a>
              </li>
              <li class="nav-item <?= $viewVars['currentURL'] === '/store' ? "active" : ""?>">
                <a class="nav-link" href="<?=$viewVars['baseURL']?>/store">
                  Store
                </a>
              </li>
              <li class="nav-item <?= $viewVars['currentURL'] === '/blog' ? "active" : ""?>">
                <a class="nav-link" href="<?=$viewVars['baseURL']?>/blog">
                  Blog
                </a>
              </li>
              <li class="nav-item <?= $viewVars['currentURL'] === '/about' ? "active" : ""?>">
                <a class="nav-link" href="<?=$viewVars['baseURL']?>/about">
                  About
                </a>
              </li>
              <li class="nav-item <?= $viewVars['currentURL'] === '/contact' ? "active" : ""?>">
                <a class="nav-link" href="<?=$viewVars['baseURL']?>/contact">
                  Contact
                </a>
              </li>
              
            </ul>
          </div>

        </nav>

        <section class="text-center">
          <h1>Title h1</h1>
          <hr />
          <p>
            Introduction about the content proposed on the website
          </p>
        </section>

      </header>

      