<html lang = "en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sign in</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="apple-touch-icon" sizes="180x180" href="/image/favicons/apple-touch-icon.png"> 
  <link rel="icon" type="image/png" sizes="32x32" href="/image/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/image/favicons/favicon-16x16.png">
  <link rel="manifest" href="/image/favicons/site.webmanifest">
  <link rel="mask-icon" href="/image/favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
</head>

<?php
	  if($_COOKIE['user'] ==''):
?>   
<body class="mt-5 d-flex justify-content-center">
    
<main class="form-signin">
 
  <form action="/validation-form/auth.php" method="post">
    <img class="mb-4" src="image/Sign%20in.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="login" class="form-control" id="floatingInput" placeholder="Enter your login" name="login">
      <label for="floatingInput">Login</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Enter your password" name="pass">
      <label for="floatingPassword">Password</label>
	  </div>
	  
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
  </form>
</main>

<?php else: ?>
  
<?require "indexSignUp.php"?>
   
<?php endif;?>
    
  

</body>
</html>