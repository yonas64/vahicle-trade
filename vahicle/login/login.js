 const signupButton = document.getElementById("signUpButton");
 const signInButton = document.getElementById("signInButton");
 const signInForm = document.getElementById("signIn");
 const signupForm = document.getElementById("signUp");

 signupButton.addEventListener('click', function() {
     signInForm.style.display = "none";
     signupForm.style.display = "block";
 })
 signInButton.addEventListener('click', function() {
     signInForm.style.display = "block";
     signupForm.style.display = "none";
 })