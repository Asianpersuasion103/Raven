const RegistrationButton=document.getElementById('signupButton');
const LoginButton=document.getElementById('signinButton');
const Signup=document.getElementById('Signup');
const Signin=document.getElementById('Signin');

RegistrationButton.addEventListener('click', function(){
    Signup.style.display="none";
    Signin.style.display="block";
})

LoginButton.addEventListener('click', function(){
    Signup.style.display="block";
    Signin.style.display="none";
})
    
