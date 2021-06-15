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
            <a href="#" class="navbar-brand">Hair Today!</a>

            <?php
                if($pages_result->num_rows > 0) {
                    while($row = $pages_result->fetch_assoc()) { ?>
                        <a href="index.php?pid=<?php echo $row["id"]; ?>" class="nav-link"><?php echo $row["title"]; ?></a>
                    <?php
                   }
                }
            ?>
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

    <main class="container pt-4 pb-2 flex-shrink-0">
        <div class="row">
            <div class="col-12">
                <?php
                    if(!empty($_GET["pid"])) {
                        $get_specific_page = "SELECT * FROM pages WHERE id=" . $_GET["pid"];
                        $specific_result = $conn->query($get_specific_page);

                        if($specific_result->num_rows > 0) {
                            while($row = $specific_result->fetch_assoc()) { ?>
                                <h1><?php echo $row["title"]; ?></h1>
                                <p><?php echo $row["blurb"]; ?></p>
                            <?php
                            }
                        }
                    }
                ?>
            </div>
        </div>
    </main>

    <footer class="footer mt-auto py-2 bg-dark">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 col-md-6">
                    <p>Contact Us</p>
                    <ul class="list-inline">
                        <li class="list-inline-item">01234 987650</li>
                        <li class="list-inline-item">hello@hair.cut</li>
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

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/js/bootstrap.bundle.min.js"></script>
    
  </body>

</html>

<?php
$conn->close();
?>