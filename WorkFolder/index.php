<html lang = "en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Please,sign in</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
<!--  Favicons-->
  <link rel="apple-touch-icon" sizes="180x180" href="/image/favicons/apple-touch-icon.png"> 
  <link rel="icon" type="image/png" sizes="32x32" href="/image/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/image/favicons/favicon-16x16.png">
  <link rel="manifest" href="/image/favicons/site.webmanifest">
  <link rel="mask-icon" href="/image/favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
</head>
<body>
<div class="container">
 <img class="rounded float-left mt-1" src="image/logosite.png" alt="" width="62" height="62">
  <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
    </a>
    
    
     
    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="index.php" class="nav-link px-2 link-secondary">Home</a></li>
      <li><a href="index.php" class="nav-link px-2 link-dark">Features</a></li>
      <li><a href="index.php" class="nav-link px-2 link-dark">Pricing</a></li>
      <li><a href="index.php" class="nav-link px-2 link-dark">Team</a></li>
    </ul>

    <div class="col-md-3 text-end">
      <a class="btn btn-primary" href="/signIn.php" role="button">Sign In</a>
      <a class="btn btn-primary" href="/signUp.php" role="button" id="non-active">Sign Up</a>
    </div>
  </header>
  
  
  <div class="jumbotron text-danger">
        <h1 class="display-1">ERROR 404</h1>
        <h1 class="display-3 mt-5">Attention!</h1>
        <p class="h3 lead">Unfortunately,this site is not available to unauthorized users.<br>Please login in or sign up if you not yet!</p>
      </div>
</div>
<!--Footer-->
<?php require "footer.php" ?>
</body>
</html>