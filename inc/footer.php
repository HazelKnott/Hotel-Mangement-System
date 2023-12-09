<!-- Footer -->
<div class="container-fluid bg-whte border-top border-dark mt-5 mb-2">
    <div class="row align-items-center">
      <div class="column">
        <div class="card shadow-none border-0">
        <h3 class="fw-bold fs-3 mb-2">Tranquil Hotel</h3>
        <p>
        Our tranquil hotel will ensure you that not only will you be able to stay here comfortably but also enjoy the quality of our hotel examples, our gym, sauna pool, and so on. 
        Our Trnaquil Hotel will give you heaven not only the rooms but also our services. Tranquil Hotel will wait for you!
        </p>
       </div>

      </div>
      <div class="column">
        <div class="card shadow-none border-0">
        <h5 class="text-center mb-3">Links</h5>
        <a href="index.php" class="d-inline-block  text-center mb-2 text-dark text-decoration-none">Home</a>
        <a href="rooms.php" class="d-inline-block mb-2 text-center text-dark text-decoration-none">Rooms</a>
        <a href="facilities.php" class="d-inline-block text-center mb-2 text-dark text-decoration-none">Facilities</a>
        <a href="contact.php" class="d-inline-block text-center mb-2 text-dark text-decoration-none">Contact Us</a>
        <a href="about.php" class="d-inline-block text-center mb-2 text-dark text-decoration-none">About Us</a>
        </div>
      </div>

      <div class="column">
       <div class="card shadow-none border-0">
        <h5 class="text-center mb-3">Follow Us</h5>
        <a href="#" class="text-center d-inline-block mb-2 text-dark text-decoration-none">
          <i class="bi bi-facebook"> </i>Facebook
        </a><br>
        <a href="#" class="text-center d-inline-block mb-2 text-dark text-decoration-none">
        <i class="bi bi-instagram"></i>Instagram
        </a><br>
        <a href="#" class="text-center d-inline-block mb-2 text-dark text-decoration-none">
        <i class="bi bi-twitter"></i> Twitter
        </a>
        </div>
      </div>
    </div>
  </div>

<div class="alert alert-dismissible fade show" role="alert">
  <strong class="me-3"></strong>
  <button type="button">
    <!-- <a href="../admin/index.php"></a> -->
  </button>
</div>

<!-- <script>

  function alert(type,msg,position='body')
  {

    let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
    let element = document.createElement('div');
    element.innerHTML = `
    <div class="alert ${bs_class} alert-dismissible fade show" role="alert">
        <strong class="me-3">${msg}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    `;
    
    if(position='body'){
      document.body.append(element);
      element.classList.add('custom-alert');
    }
    else{
      document.getElementById(position).appendChild(element);
    }
    setTimeout(remAlert, 2000);

  }

  function remAlert() {
    var alerts = document.getElementsByClassName('alert');
    if (alerts.length > 0) {
        alerts[0].remove();
    }
  }


  let register_form = document.getElementById('register-form');

  register_form.addEventListener('submit', (e)=>{
    e.preventDefault();

    let data = new FormData();

    data.append('name', register_form.elements['name'].value);
    data.append('email', register_form.elements['email'].value);
    data.append('phonenum', register_form.elements['phonenum'].value);
    data.append('address', register_form.elements['address'].value);
    data.append('dob', register_form.elements['dob'].value);
    data.append('pass', register_form.elements['pass'].value);
    data.append('cpass', register_form.elements['cpass'].value);
    data.append('profile', register_form.elements['profile'].files[0]);
    data.append('register', '');

    var myModal = document.getElementById('registerModal');
    var modal = bootstrap.Modal.getInstance(myModal);
    modal.hide();


    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/login_register.php", true);

    xhr.onload = function(){
      if (this.responseText == 'pass_mismatch') {
          alert('error', "Password Mismatch");
        } else if (this.responseText == 'email_already') {
          alert('error', "Email is already used");
        } else if (this.responseText == 'phone_already') {
          alert('error', "Phone Number is already used");
        } else if (this.responseText == 'inv_img') {
          alert('error', "Only JPG, WEBP, & PNG images are allowed");
        } else if (this.responseText == 'upd_failed') {
          alert('error', "Image upload failed");
        } else if (this.responseText == 'ins_failed') {
          alert('error', "Registration failed");
        } else {
          alert('success', "Registration successful");
          register_form.reset();
        }

    }

    xhr.send(data);
  })
</script> -->
