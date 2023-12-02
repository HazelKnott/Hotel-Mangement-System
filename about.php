<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Hotel -  About Us</title>
    <?php require('inc/links.php') ?>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet"href="css/style.css">
    
</head>
<body class="bg-light">

  <?php require('inc/header.php') ?>
  
  <div class="my-5 px-4">
    <h2 class="fw-bold text-center text-decoration-underline"> About Us</h2>
    <!-- <div class="border-bottom border-dark h-line"></div> -->
    <p class="text-center mt-3">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis est quidem enim ducimus doloremque quaerat error mollitia, itaque veniam, perspiciatis, dicta quam at ratione! Voluptates vel quasi laborum nesciunt. Voluptate, accusamus, quis facilis obcaecati laborum fugit vitae cupiditate dolor vel repellendus molestiae qui tempore nihil voluptatibus? Placeat optio pariatur minus.
    </p>
  </div>

<h2 style="text-align:center">Our Team</h2>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="/img/hazel.jpg" alt="Jade" style="width:100%">
      <div class="container">
        <h2>Hazel Jade O. Lobenaria</h2>
        <p class="title">Backend</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>lobenaria.hazeljade.bscs2021@gmail.com</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/img/JJ.jpg" alt="Joven" style="width:100%">
      <div class="container">
        <h2>John Joven Borromeo</h2>
        <p class="title">Project Head</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>bscs2021@gmail.com</p>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/image/Jam.jpg" alt="Jam" style="width:100%">
      <div class="container">
        <h2>Jamaica Rose Grafil</h2>
        <p class="title">Frontend</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>bscs2021@gmail.com</p>
        
      </div>
    </div>
  </div>
</div>
    

  <?php require('inc/footer.php') ?>
  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>