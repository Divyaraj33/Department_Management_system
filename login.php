<?php include ('header.php') ?>

 <!-- <section class="bg-light vh-100 d-flex">
 
    <div class="col-3 m-auto" >
        <div class="card" >
            <div class="card-body">
            
                <div class="text-center mb-5"><span class="fa-stack fa-3x">
                     <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-user fa-stack-1x text-light"></i>
                </span></div>
                <form action="actions/login.php" method="POST">
                <div class="md-form">
                    <h2 class="text-center">Login Form</h2>
                <label for="email">Your Email</label>
                    <input type="email" id="email" name="email" class="form-control">
                   
                </div>
                <div class="md-form">
                <label for="password" class="mt-3">Your password</label>
                    <input type="password" id="password" name="password" class="form-control">
                    
                </div>
                <div class="text-center">
                <button class="btn btn-secondary mt-5" name="login">Login</button>
     </div>
                 
                </form>
            </div>
        </div>
        </div>
    
 </section> -->
 
 <div class="login-container">
  <form class="login-form" action="actions/login.php" method="POST">
    <h1>Welcome Back</h1>
    <p>Please login to your account</p>
    <div class="input-group">
      <input type="text" id="email" name="email" placeholder="Email" required>
    </div>
    <div class="input-group">
      <input type="password" id="password" name="password" placeholder="Password" required>
    </div>
    <button name="login" >Login</button>
    <div class="bottom-text">
      <p>Don't have an account? <a href="#">Sign Up</a></p>
      <p><a href="#">Forgot password?</a></p>
    </div>
  </form>
</div>

<style>
    /* Reset CSS */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  background-color: #f2f2f2;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
}

.login-container {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  padding: 40px;
  max-width: 400px;
  width: 90%;
  text-align: center;
  margin: 0 auto;
}

.login-form {
  display: flex;
  flex-direction: column;
}

.login-form h1 {
  margin-bottom: 10px;
  color: #333;
}

.login-form p {
  margin-bottom: 20px;
  color: #777;
}

.input-group {
  margin-bottom: 20px;
}

.input-group input {
  padding: 15px;
  border-radius: 8px;
  border: 1px solid #ddd;
  width: 100%;
  font-size: 16px;
  transition: border-color 0.3s ease;
}

.input-group input:focus {
  border-color: #007bff;
  outline: none;
}

button {
  padding: 15px;
  border: none;
  border-radius: 8px;
  background-color: #007bff;
  color: #fff;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #0056b3;
}

.bottom-text {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 20px;
  color: #777;
}

.bottom-text p {
  margin-bottom: 10px;
}

.bottom-text a {
  color: #007bff;
  text-decoration: none;
  transition: color 0.3s ease;
}

.bottom-text a:hover {
  color: #0056b3;
}

/* Responsive */
@media screen and (max-width: 600px) {
  .login-container {
    width: 100%;
    border-radius: 0;
  }
}

    </style>
   
<?php include ('footer.php') ?>