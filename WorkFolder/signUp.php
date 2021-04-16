<html lang = "en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sign up</title>
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


<body>
<div  class="mt-5 d-flex justify-content-center">
    
<main class="form-signin">
 
  <form action="/validation-form/check.php" method="post">
    <img class="mb-4" src="image/logoRegistr.jpg" alt="" width="92" height="92">
    <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
    
    <div class="form-floating">
      <input type="name" class="form-control"  name="name"  id="name" placeholder="Enter your name">
      <label for="floatingInput">Name</label>
    </div>
    <div class="form-floating">
      <input type="login" class="form-control"  name="login"  id="login" placeholder="Enter your login">
      <label for="floatingInput">Login</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control"  name="pass"  id="pass" placeholder="Enter your password">
      <label for="floatingPassword">Password</label>
    </div>

    
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
    <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
  </form>
</main>    
  
</div>
</body>
</html>