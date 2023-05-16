var fullname=document.getElementById("full-name").value;
var email=document.getElementById("email").value;
var subject=document.getElementById("subject").value;
var message=document.getElementById("message").value;

function ContactUs()
{
    fetch("https://localhost:7074/api/UserAccount/ContactUs"),
    {
        method:"POST",
        body:JSON.stringify({
            Name:fullname,
            Email:email,
            Subject:subject,
            Message:message

        }),
        Headers:{
            "Content-Type":"application/json; charset=UTF-8",
            Credentials:'include'
        }

    }
}