<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="<?php echo base_url();?>./assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Job Portal</title>
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
      <i class="bi bi-slack"></i>
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#home" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="#register" class="nav-link px-2 link-dark">Register</a></li>
        <li><a href="#how-to" class="nav-link px-2 link-dark">How to apply?</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <a href="<?php echo base_url()?>welcome/signin" class="btn btn-primary">Log in</a>
      </div>
    </header>
</div>
  <div class="container col-xxl-8 px-4 py-5" id="home">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="<?php echo base_url()?>./assets/images/jobhunt.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Job Portal</h1>
        <p class="lead">Create a free account and apply/post jobs around you. Find jobs accross kerala in a convenient way. It just takes few minutes to setup and start browsing the jobs.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a href="#register" class="btn btn-primary btn-lg px-4 me-md-2">Register</a>
          <a href="<?php echo base_url()?>welcome/signin" class="btn btn-outline-secondary btn-lg px-4">Log in</a>
        </div>
      </div>
    </div>
  </div>
  <div class="container register" id="register">
    <div class="title">
      <h2 class="title_reg">REGISTER</h2>
      <p>Naviagte to the respective link for further registration process.</p>
    </div>
    <div class="row">
      <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <i class="person bi bi-person-fill"></i>
          <h5 class="card-title">Candidate Registration</h5>
          <p class="card-text">Candidate may click on the bellow button to register.</p>
          <a href="<?php echo base_url()?>candidate/register" class="btn btn-primary">Register</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <i class="person bi bi-building"></i>
          <h5 class="card-title">Employer Registration</h5>
          <p class="card-text">Employer may click on the bellow button to register.</p>
          <a href="<?php echo base_url()?>company/register" class="btn btn-primary">Register</a>
        </div>
      </div>
    </div>
    </div>
  </div>
  <div class="container col-xxl-8 px-4 py-5" id="how-to">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="<?php echo base_url()?>./assets/images/how-to.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 lh-1 mb-3">How to <strong>apply</strong> ?</h1>
        <p class="lead">Follow the below steps to get started.</p>
        <div>
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                  <span class="num">01&nbsp;</span>Register
                </button>
              </h2>
          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
          <div class="accordion-body">
          Click on the register button, fill up some basic details and then verify your email address.
        </div>
      </div>
    </div>
      <div class="accordion-item">
      <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        <span class="num">02&nbsp;</span>Complete your profile
        </button>
      </h2>
      <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
        <div class="accordion-body">
          Now you may complete your profile and once you get a confirmation email from our side you may further continue.
        </div>
      </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
          <span class="num">03&nbsp;</span>Find/Post your job
          </button>
        </h2>
      <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
        <div class="accordion-body">
        Finally you can find your desired job and apply for it or post a job that you have.
        Happy Recruitment!
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <span class="text-muted">© Copyright Job Portal. All Rights Reserved</span>
  </div>
</footer>
</body>

</html>