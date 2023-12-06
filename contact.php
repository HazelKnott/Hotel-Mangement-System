<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tranquil Hotel -  Contact Us</title>
    <?php require('inc/links.php'); ?>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet"href="css/style.css">
    
</head>
<body class="bg-light">

  <?php require('inc/header.php'); ?>

    <div class="my-5px-4">
      <h2 class="fw-bold h-font text-center">OUR CONTACT</h2>
      <div class="h-line bg-dark"></div>
      <p class="text-center mt-3">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat,
      </p>
</div>
     
<div class="d-flex justify-content-center">
       <div class="row px-3">
          <div class="col-lg-7 col-md-4 p-4 mb-lg-0 mb-3 bg-white rounded border border-dark">
           <iframe class="w-100 rounded mb-4"  height="200px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.2563839613304!2d121.0309099!3d14.754580400000009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b1cc9c9c83e9%3A0x303a03298da24ddb!2sUniversity%20of%20Caloocan%20City%20-%20Congressional%20Campus!5e0!3m2!1sen!2sph!4v1701334532767!5m2!1sen!2sph" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           <h5>Address</h5>
           <a href="https://maps.app.goo.gl/5mtBB9qgE6hZzP2y5" target="_blank" class=" d-inline-block tex-decoration-non text-dark mb-2"></a>
           <i class="bi bi-geo-fill">University of Caloocan City</i>
  
           <h5>
            <i class="bi bi-telephone-fill"> </i>Call Us
           </h5>
           <a href="#" class="d-inline-block mb-1 text-decoration-none text-dark">09234567890</a>
           <h5 class="mt-4">Email</h5>
           <a href="mailto:grafiljamaica@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
           <i class="bi bi-envelope"></i>grafiljamaica@gmail.com
            </a>
           <a href="hazeljadelobenaria@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
           <i class="bi bi-envelope"></i>hazeljadelobenaria@gmail.com
           </a>

           <h5 class="mt-4">Follow Us</h5>
           <a href="#" class="d-inline-block text-dark fs-5 "> 
           <i class="bi bi-instagram"></i>
           </a>
         
             <a href="#" class="d-inline-block  text-dark fs-5 me-2">
             <i class="bi bi-facebook"> </i>
             </a>
  
             <a href="#" class="d-inline-block  text-dark fs-5 me-2">
             <i class="bi bi-twitter"></i> 
             </a>
           </div>
        
        
          <div class="col-lg-5 col-md-5">
             <div class="bg-white p-4 rounded mb-4 border border-dark">
                <form method="POST">
                  <h5>Send a message </h5>
                    <div class="nb-3">
                      <label class="form-label" style= "font-weight: 500">Name</label>
                      <input name="name" required type="text" class="form-control border border-dark">
                    </div>
                   <div class="nb-3">
                   <label class="form-label" style= "font-weight: 500">Email</label>
                   <input name="email" required type="email" class="form-control border border-dark">
                    </div>
                    <div class="nb-3">
                    <label class="form-label" style= "font-weight: 500">Subject</label>
                    <input name="subject" required type="text" class="form-control border border-dark">
                   </div>
                   <div class="nb-3">
                  <label class="form-label" style= "font-weight: 500">Message</label>
                  <textarea name="message" required class="form-control shadow-none border border-dark" rows="5" style="resize: none"></textarea>
                  </div>
                   <button type="submit" name="send" class="btn-light text-black custom-bg mt-3">SEND</button>
                </form>
        </div>  
     </div>
    </div>
 </div>
  <?php require('inc/footer.php'); ?>
  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
