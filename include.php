<?php

function isActive($pagename)
{
    $currentfile = basename($_SERVER["PHP_SELF"], ".php");

    if ($currentfile == $pagename)
        echo "class=\"active\"";
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$pgname?> - DevZero</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="/">DevZero</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li <?=isActive("index")?>>
              <a href="/">
                <span class="fa fa-fw fa-home"></span>
                Home
              </a>
            </li>
            <li>
              <a href="https://github.com/devzero-xyz" target="_blank">
                <span class="fa fa-fw fa-github"></span>
                GitHub
              </a>
            </li>
            <li <?=isActive("contact")?>>
              <a href="contact.php">
                <span class="fa fa-fw fa-envelope"></span>
                Contact
              </a>
            </li>
          </ul>
        </div>
      </div> 
    </nav>
  </body>
</html>
