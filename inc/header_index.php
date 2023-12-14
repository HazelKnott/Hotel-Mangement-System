<?php

function displayUserInfo($firstName, $lastName)
{
    if (!empty($firstName) && !empty($lastName)) {
        echo '<div class="d-flex align-items-center me-3">';
        echo '<span class="me-2">Welcome, ' . $firstName . ' ' . $lastName . '</span>';
        echo '<a href="logout.php" class="btn btn-light btn-outline-dark btn-sm">Log-out</a>';
        echo '</div>';
    }
}

$firstName = 'Hazel';
$lastName = 'Lobi';
$username = '';

if (isset($_GET['username'])) {
    $username = htmlspecialchars($_GET['username']);

    require('inc/db_config.php');

    $stmt = $conn->prepare("SELECT firstname, lastname FROM users WHERE username = :username");
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->execute();

    $userData = $stmt->fetch(PDO::FETCH_ASSOC); 

    if ($userData) {
        $firstName = $userData['firstname'];
        $lastName = $userData['lastname'];
    }

    $conn = null;
}
?>





<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Tranquil Hotel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active p-2 bd-highlight me-3" aria-current="page" href="index.php">Homepage</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-2 bd-highlight me-3" href="rooms.php">Rooms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-2 bd-highlight me-3" href="facilities.php">Facilities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-2 bd-highlight me-3" href="contact.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-2 bd-highlight me-3" href="about.php">About Us</a>
          </li>
        </ul>
        <?php displayUserInfo($firstName, $lastName); ?>
     </div>
</div>

</nav>
     