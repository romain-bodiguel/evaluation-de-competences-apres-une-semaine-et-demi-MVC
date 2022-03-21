<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../docs/css/bootstrap.min.css">
  <link rel="stylesheet" href="../docs/css/font-awesome.min">
  <link rel="stylesheet" href="../docs/css/styles.css">
  <title>Sonic</title>
</head>

<body>
  <header>

    <nav class="navbar navbar-expand-lg navbar-sticky navbar-airy navbar-light">
      <div class="container-fluid">
        <!-- Navbar Header  -->
        <a href="index.html" class="navbar-brand">Sonic</a>
        <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
          aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
        <!-- Navbar Collapse -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a href="<?= $_SERVER['BASE_URI'] ?>/" class="nav-link active">Home</a>
            </li>
            <li class="nav-item">
              <a href="<?= $_SERVER['BASE_URI'] ?>/hirokazu-yasuhara" class="nav-link">Hirokazu Yasuhara</a>
            </li>
            <li class="nav-item">
              <a href="<?= $_SERVER['BASE_URI'] ?>/yuji-naka" class="nav-link">Yuji Naka</a>
            </li>
            <li class="nav-item">
              <a href="<?= $_SERVER['BASE_URI'] ?>/naoto-oshima" class="nav-link">Naoto Ōshima</a>
            </li>
          </ul>
          <div class="d-flex align-items-center justify-content-between justify-content-lg-end mt-1 mb-2 my-lg-0">
            <!-- Search Button-->
            <div class="nav-item navbar-icon-link">
              <a href="#" class="navbar-icon-link"><i class="fa fa-search"></i></a>
            </div>
            <!-- User Not Logged - link to login page-->
            <div class="nav-item">
              <a href="#" class="navbar-icon-link"><i class="fa fa-user"></i></a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>