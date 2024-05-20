<!DOCTYPE html>
<html>
<head>
  <title>Registration and Sign In</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="login.css">
  
</head>
<body>
  <div class="container" id="signUp" style="display:none">

    <h2 class='form-title'>Register</h2>

    <form action="register.php" method="POST" id="registration-form">
      <div class="input-group">
        <i class="fa-solid fa-user"></i>
      <input type="text" id="fName" name="fName" palceholder='Firstname' required>
      </div>


      <div class="input-group">
      <i class="fa-solid fa-user"></i>
      <input type="text" id="lName" name="lName" palceholder='Lastname' required>
      </div>



      <div class="input-group">
      <i class="fa-solid fa-envelope"></i>
      <input type="email" id="email" name="email" placeholder='Email' required>
      </div>

      
      <div class="input-group">
      <i class="fa-solid fa-lock"></i>
        <input type="password" id="password" name="password" placeholder='password' required>
      </div>

      <div class="profile_image">

        <input type="file" name="profile_image">
      </div>

      <input type="submit" value="signUp" class="btn" name="signUp">
    </form>
    <p class='or'>........or.........<p>
      <div class="icons">

        <i class="fa-solid fa-lock"></i>

      </div>
  <div class="links">
     Already have account?
    <button  id="signInButton" >SignIn</button>
  </div>

  </div>


 

<div class="container" id="signIn">
  <h2 class='form-title'>SignIn </h2>
  
  <form action="register.php" method="POST" id="registration-form">


    <div class="input-group">
    <i class="fa-solid fa-envelope"></i>
    <input type="email" id="email" name="email" placeholder='Email' required>
    </div>


    <div class="input-group">
    <i class="fa-solid fa-lock"></i>
    <input type="password" id="password" name="password" placeholder='Password' required>
    </div>
      <input type="submit" value="SignIn" class="btn" name="signIn">
    
  </form>
  <p class='or'>........or.........<p>
    <div class="icons">

      <i class="fa-solid fa-lock"></i> 

    </div>
<div class="links">
  Don't have account?
  <button  id="signUpButton" >signUp</button>
</div>

</div>

<script src="login.js"></script>
 

</body>
</html>