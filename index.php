<?php
// Establish database info
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "hairtoday";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get all pages info from database, and store in variable
$get_pages = "SELECT * FROM pages";
$pages_result = $conn->query($get_pages);

?>

<!DOCTYPE html>

<html lang="en" class="h-100">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Haircut, beards, colours, highlights, curly cut" />
    <meta name="description" content="Unisex hairdresser website" />
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Hair Today</title>
  </head>

  <body class="d-flex flex-column h-100">

    <nav class="navbar navbar-dark bg-dark">
      <div class="container">
          <a class="navbar-brand">Hair Today!</a>
      </div>
    </nav>

    <div class="container-fluid hero-container">
      <div class="row">
        <div class="col-12 hero-text pt-2">
          <h1>Hair Today</h1>
          <p class="lead">All types of hair, we got you covered.</p>
        </div>
      </div>
    </div>

    <main class="container py-2 flex-shrink-0">
      <div class="row">
        <div class="col-12">
          <h1>Words!</h1>
          <p>Lots of words go here!  But I can't think of that many, so this will have to do :(</p>
        </div>
      </div>
    </main>

    <footer class="footer mt-auto py-2 bg-dark">
      <div class="container">
        <div class="row text-center">
          <div class="col-12 col-md-6">
            <p>Contact Us</p>
            <ul>
              <li>01234 987650</li>
              <li>hello@hair.cut</li>
            </ul>
          </div>
          <div class="col-12 col-md-6">
            <p>Socials</p>
            <ul class="list-inline socials">
              <li class="list-inline-item">
                <a href="https://www.instagram.com/" target="_blank" rel="noopener">
                  <i class="fab fa-instagram-square px-2"></i>
                  <span class="visually-hidden">Instagram</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.pinterest.co.uk/" target="_blank" rel="noopener">
                  <i class="fab fa-pinterest-square px-2" aria-hidden="true"></i>
                  <span class="visually-hidden">Pinterest</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.youtube.com/" target="_blank" rel="noopener">
                  <i class="fab fa-youtube-square px-2" aria-hidden="true"></i>
                  <span class="visually-hidden">YouTube</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

  </body>

</html>