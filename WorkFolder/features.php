<html lang = "en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Features</title>
  <!--  Favicons-->
  <link rel="apple-touch-icon" sizes="180x180" href="/image/favicons/apple-touch-icon.png"> 
  <link rel="icon" type="image/png" sizes="32x32" href="/image/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/image/favicons/favicon-16x16.png">
  <link rel="manifest" href="/image/favicons/site.webmanifest">
  <link rel="mask-icon" href="/image/favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!--header-->
<?php require "header.php" ?>
 <div class="container py-5" id="hanging-icons">
  <h2 class="pb-2 border-bottom">Hanging icons</h2>
  <div class="row g-5 py-5">
    <div class="col-md-4 d-flex align-items-start">
      <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
        <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg>
      </div>
      <div>
        <h2>Featured title</h2>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <a href="#" class="btn btn-primary">
          Primary button
        </a>
      </div>
    </div>
    <div class="col-md-4 d-flex align-items-start">
      <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
        <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"></use></svg>
      </div>
      <div>
        <h2>Featured title</h2>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <a href="#" class="btn btn-primary">
          Primary button
        </a>
      </div>
    </div>
    <div class="col-md-4 d-flex align-items-start">
      <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
        <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"></use></svg>
      </div>
      <div>
        <h2>Featured title</h2>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <a href="#" class="btn btn-primary">
          Primary button
        </a>
      </div>
    </div>
  </div>
</div>
<!--footer-->
<?php require "footer.php" ?>
</body>
</html>