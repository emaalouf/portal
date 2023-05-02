var password="null";
var email="";

var username=document.getElementById("username").value;
var fullname=document.getElementById("fullname").value;
var passwordSignup=document.getElementById("signuppassword").value;
var emailSignup=document.getElementById("signupemail").value;
var phonenumber=document.getElementById("phonenumber").value;
var confirmPassword=getElementById.getElementById("confirmpassword").value;


function Login()
{
     password=document.getElementById("password").value;
     email=document.getElementById("email").value;
    fetch("https://localhost:7074/api/UserAccount/login"),
    {
        method:"POST",
        body:JSON.stringify({
            Email:email,
            Password:password

        }),
        Headers:{
            "Content-Type":"application/json; charset=UTF-8",
            Credentials:'include'
        }

    }
}

function SignUp()
{

fetch("https://localhost:7074/api/UserAccount/register"),
{
    method:"POST",
    body:JSON.stringify({
        Username:username,
        Role:"User",
        Fullname:fullname,
        Email:emailSignup,
        Password:passwordSignup,
        ConfirmPassword:confirmPassword, 
        PhoneNumber:phonenumber


    }),
    Headers:{
        "Content-Type":"application/json; charset=UTF-8",
        Credentials:'include'
    }

}
}

