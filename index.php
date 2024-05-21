<?php include('includes/config.php') ?>
<?php include('header.php') ?>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-info ">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      data-mdb-collapse-init
      class="navbar-toggler"
      type="button"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <!-- <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img
          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFUefQxTxspjY4cRe_A798eJq_l--kvnvwttnkKa2prcmux99OK6_EQ_wjfXhubHh4mGI&usqp=CAU"
          height="35"
          alt="MDB Logo"
          loading="lazy"
        />
      </a> -->
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mt-2 ">
        <li class="nav-item">
          <a class="nav-link bg-light" href="#"><b>DMS</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" >Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Events</a>
        </li>
      </ul>
      
      <!-- Dropdown menu -->
      <!-- Left links -->
    </div>
<!-- Collapsible wrapper -->
 <!-- New navabar -->
      <?php if(isset($_SESSION['login'])) { ?>
       <ul class="navbar-nav ml-auto nav-flex-icons">
       <div class="dropdown">
        <a
          data-mdb-dropdown-init
          class="dropdown-toggle d-flex align-items-center hidden-arrow"
          href="#"
          id="navbarDropdownMenuAvatar"
          role="button"
          aria-expanded="false"
        >
          <img
            src="https://png.pngtree.com/png-vector/20190307/ourlarge/pngtree-vector-add-user-icon-png-image_762930.jpg"
            class="rounded-circle"
            height="35"
            alt="Black and White Portrait of a Man"
            loading="lazy"
          />
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuAvatar"
        >
          <li>
            <a class="dropdown-item" href="#">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Settings</a>
          </li>
          <li>
            <a class="dropdown-item" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div> 
     <!--End Navbar  -->
        
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-default"
            aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="#">Dashboard</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Logout</a>
        </li> -->
        <?php } else{ ?>
        <a href="login.php" class="nav-link" style="color:white"><i class="fa fa-user mr-2"></i> Login</a>
        <?php } ?>
      </ul> 
    </div>
    <!-- Right elements -->
      <!-- Avatar -->
       
    <!-- Right elements -->
  <!-- </div> -->
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->

<div class="d-flex shadow " style="height:650px; background:linear-gradient(-45deg, navy 50%,transparent 50%)">
  <div class="container my-auto">
    <div class="row">
      <div class="col-lg-6 my-auto">
        <h1 class="display-3 "><b>Department Management System</b></h1>
        <p>A Department Management System website streamlines tasks, projects, and communication within an organization. It offers secure user authentication, role-based access, document management, and analytics for efficient departmental oversight.</p>
        <br>
        <a href="" class="btn btn-lg btn-primary">Call to Action</a>
        <br>
      </div>
      <div class="col-lg-6 ">
        <div class="col-lg-8 mx-auto card shadow-lg">
        <div class="card-body">
        <h3 class="form text-center" >Inquiry Form</h3>
        <form action="" method="post" class="">
            <!-- Material Input -->
            <div class="md-form">
            <input type="text" id="form1" class="form-control" >
            <label for="form1">Your Name</label>
          </div>
          <div class="md-form">
            <input type="text" id="form1" class="form-control">
            <label for="mobile">Your Email</label>
          <div class="md-form">
            <input type="text" id="form1" class="form-control">
            <label for="email">Your Mobile</label>
          </div>
          <div class="md-form">
            <input type="text" id="form1" class="form-control">
            <label for="mobile">Your Query</label>
          </div>
            <!-- <h1>Register Yourself</h1>
            <input class="form-control btn-block" type="text" placeholder="Your Name">
            <input class="form-control btn-block" type="text" placeholder="Your Email">
            <input class="form-control btn-block" type="text" placeholder="Your phoneNo.">
          </div> -->

          <button class="btn btn-primary btn-block mt-4">Submit Form</button>
        </form>
        </div>
        </div>
        </div>
       </div>
    </div>
  </div>
</div>

<!-- About us -->
<section class="py-5">
  <div class="container">
  <div class="row">
    <div class="col-lg-6 py-5">
      <h2 class="font-weight-bold">About <br> Department Management System </h2>
      <div class="pr-5">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, fugiat animi unde,<br> porro ad quidem odio
           optio eaque quod consequatur odit? Quisquam repudiandae voluptatem molestiae dolor beatae ut in 
          nesciunt, et, dolore omnis iure incidunt?<br>
           Iure, ipsa id eius, sint consequatur deserunt ex, mollitia
           eveniet nisi suscipit aute.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis iste fugit voluptatibus perspiciatis soluta
           consequatur sed tenetur necessitatibus officia eiLorem ipsum<br> dolor sit amet consectetur adipisicing elit. Quae, fugiat animi unde, porro ad <br>quidem odio
           optio eaque quod consequatur odit? Quisquam repudiandae voluptatem molestiae dolor beatae ut in 
          nesciunt, et, dolore omnis iure incidunt? Iure, ipsa id eius.</p>
      </div>
      <a href="about-us.php" class="btn btn-secondary">Know More</a>
    </div>
    <div class="col-lg-6 ">
      <img src="./images/about.jpeg" alt="about" class="img-fluid">
    </div>
  </div>
  </div>
</section>

<!-- Courses -->

<section class="py-5 bg-light">
  <div class="text-center">
    <h2 class="font-weight-bold">Our Courses</h2>
    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, nesciunt incidunt? Asperiores quod officia</p>
  </div>

  <div class="container">
    <div class="row">

    <?php
    $query = mysqli_query($db_conn,"SELECT * FROM courses ORDER BY ID DESC LIMIT 0, 8");
    while($course = mysqli_fetch_object($query))
        {?>
        <div class="col-lg-3 mb-4">
          <div class="card">
            <div>
              <img src="./dist/uploads/<?php echo $course->image?>" alt="" class="img-fluid rounded-top course-image">
            </div>
            <div class="card-body">
              <b><?php echo $course->name?></b>
              <p class="card-text">
                <b>Duration: </b> <?php echo $course->duration?> <br>
                <b>Price: </b> 4000/- Rs
              </p>
              <button class="btn btn-block btn-primary btn-sm">Enroll Now</button>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>


<!-- Teachers -->
<section  class="py-5">
<div class="text-center">
    <h2 class="font-weight-bold">Our Teachers</h2>
    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, nesciunt incidunt? Asperiores quod officia</p>
  </div>

  <div class="container">
    <div class="row">
      <?php for ($i = 0; $i < 8; $i++) { ?>
        <div class="col-lg-3 my-5">
          <div class="card">
            <div class="col-7 position-absolute" style="top:-50px">
              <img src="./images/sir2.jpeg" alt="" class="mw-100 border rounded-circle">
            </div>
            <div class="card-body pt-5 mt-5">
              <h4 class="card-title mb-0">Teacher's Name</h4>
              <p><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i></p>
              <p class="card-text">
                <b>Courses: </b> 5 <br>
                <b>Rating: </b>
              </p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>

<!-- Acheivements -->
<section class="py-5 bg-light" style="background:linear-gradient(-45deg, navy 65%,transparent 50%)">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 pr-5">
          <h2>Acheivements</h2>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni, harum?</p>
          <img src="./images/achi.jpeg" alt="" class="img-fluid ">
      </div>
      <div class="col-lg-6 my-auto">
        <div class="row">
          <div class="col-lg-6 mb-4">
            <div class="border rounded">
              <div class="card-body text-center">
                <span><i class="text-warning fas fa-graduation-cap fa-3x"></i></span>
                <h2 class="my-2 font-weight-bold h1">334</h2>
                <hr class="border-warning">
                <h4>Graduates</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
          <div class="border rounded">
              <div class="card-body text-center">
                <span><i class="text-warning fas fa-graduation-cap fa-3x"></i></span>
                <h2 class="my-2 font-weight-bold h1">334</h2>
                <hr class="border-warning">
                <h4>Graduates</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
          <div class="border rounded">
              <div class="card-body text-center">
                <span><i class="text-warning fas fa-graduation-cap fa-3x"></i></span>
                <h2 class="my-2 font-weight-bold h1">334</h2>
                <hr class="border-warning">
                <h4>Graduates</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
          <div class="border rounded">
              <div class="card-body text-center">
                <span><i class="text-warning fas fa-graduation-cap fa-3x"></i></span>
                <h2 class="my-2 font-weight-bold h1">334</h2>
                <hr class="border-warning">
                <h4>Graduates</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      </section>

<!-- testimonials -->
<section class="py-5">
<div class="text-center mb-5">
    <h2 class="font-weight-bold">What People Says</h2>
    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, nesciunt incidunt? Asperiores quod officia</p>
  </div>
    <div class="container">
      <div class="row">
      <div class="col-6">
        <div class="border rounded position-relative">
        <div class="p-4 text-center">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia nesciunt a
          utem veniam odio quasi ipsam? Atque possimus impedit a molestias!
        </div>
        <i class="fa fa-quote-left fa-3x position-absolute" style="top:.5rem; left:.5rem; opacity:.2"></i>
        </div>
        <div class="text-center mt-n2">
        <img src="./images/sir.jpeg" alt="" class="rounded-circle border" width="100" height="100">
        <h6 class="mb-0 font-weight-bold">Name of Candidate</h6>
        <p>Designation</p>
      </div>
      </div>
      <div class="col-6">
        <div class="border rounded position-relative">
        <div class="p-4 text-center">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia nesciunt a
          utem veniam odio quasi ipsam? Atque possimus impedit a molestias!
        </div>
        <i class="fa fa-quote-left fa-3x position-absolute" style="top:.5rem; left:.5rem; opacity:.2"></i>
        </div>
        <div class="text-center mt-n2">
        <img src="./images/sir.jpeg" alt="" class="rounded-circle border" width="100" height="100">
        <h6 class="mb-0 font-weight-bold">Name of Candidate</h6>
        <p>Designation</p>
      </div>
      </div>
      </div>
    </div>
</section>

<!-- footer -->
<footer style="background:url(./images/links.jpeg) center/cover no-repeat">
<div class="py-5 text-white" style="background:#000000bb">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4">
          <h5>Useful Links</h5>
            <ul class="fa-ul ml-5">
              <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>List icons</a></li>
              <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>can be used</a></li>
              <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>as bullets</a></li>
              <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>in lists</a></li>
            </ul>
      </div>
      <div class="col-lg-4">
          <h5>Social Presence</h5>
            <div>
              <span class="fa-stack">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fab fa-facebook-f fa-stack-1x fa-inverse text-dark"></i>
              </span>
              <span class="fa-stack">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fab fa-instagram fa-stack-1x fa-inverse text-dark"></i>
              </span>
              <span class="fa-stack">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fab fa-twitter fa-stack-1x fa-inverse text-dark"></i>
              </span>
              <span class="fa-stack">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fab fa-linkedin fa-stack-1x fa-inverse text-dark"></i>
              </span>
              <span class="fa-stack">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fab fa-youtube fa-stack-1x fa-inverse text-dark"></i>
              </span>
            </div>
      </div>
      <div class="col-lg-3">
          <h5>FeedBack</h5>
          <!-- Material input -->
          <div class="md-form">
            <input type="text" id="text" class="form-control " >
            <label for="text">Your Query</label>
          </div>
          <div class="md-form">
            <input type="email" id="email" class="form-control " >
            <label for="email">Your Email</label>
          </div>
          <button class="btn btn-secondary btn-sm btn-block" >Submit</button>
      </div>
    </div>
  </div>
</div>
      </footer>

<!-- Admission -->    
<section>
    <div id="container">
            <div id="header">
                <marquee direction="left" scrollamount="12" behavior="alternate">Admission Open till 20th Mar 2024</marquee>
            </div>
    <div>
</section>

<style>
  .navbar-nav,.nav-link{
    font-size:larger;
  }
  
  </style>

<?php include('footer.php') ?>