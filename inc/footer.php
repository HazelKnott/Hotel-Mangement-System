<!-- Footer -->
<div class="container-fluid bg-whte border-top border-dark mt-4">
    <div class="row">
      <div class="col-lg-4 p-4">
        <h3 class="fw-bold fs-3 mb-2">Our Hotel</h3>
        <p>
        Our tranquil hotel will ensure you that not only will you be able to stay here comfortably but also enjoy the quality of our hotel examples, our gym, sauna pool, and so on. 
        Our Trnaquil Hotel will give you heaven not only the rooms but also our services. Tranquil Hotel will wait for you!
</p>

      </div>
      <div class="col-lg-4 p-4">
        <h5 class="mb-3">Links</h5>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a><br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact Us</a><br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About Us</a>
      </div>
      <div class="col-lg-4 p-4">
        <h5 class="mb-3">Follow Us</h5>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">
          <i class="bi bi-facebook"> </i>Facebook
        </a><br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">
        <i class="bi bi-instagram"></i>Instagram
        </a><br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">
        <i class="bi bi-twitter"></i> Twitter
        </a><br>
      </div>
    </div>
  </div>

<div class="alert alert-dismissible fade show" role="alert">
  <strong class="me-3"></strong>
  <button type="button"></button>
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
