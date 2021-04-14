<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abubakar Mzf</title>
    <link rel="icon" href="../content/images/logo/logo.png" type="image/icon type">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../content/css/begin.css">
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>


<body>
<header>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color:white ; font-family:Montserrat ; font-weight: bold";>MZF</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <?php foreach ($navElem as $elem) : ?>
        <li class="nav-item active"><a class="nav-link" href=<?= "/?action=$elem" ?> style="color:white  ; font-family:Montserrat ; font-weight: bold; font-size : 1.5rem ; "><?= $elem ?></a></li>
      <?php endforeach ?>
      </ul>
    </div>
  </div>
</nav>

</header>
