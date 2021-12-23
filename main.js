function login()
{
    var useremail = document.getElementById("email").value;
    var userpassword= document.getElementById("password").value;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(useremail =='')
    {
        alert("Please enter email!");
    }
    else if(userpassword=='')
    {
        alert("Please enter the password!");
    }
    else if(userpassword.length < 4 || userpassword.length > 18)
    {
        alert("Password min length is 4 and max length is 18.");
    }
    else
    {
alert('Thank You for Login to South Festival!');
window.location.replace = "";

        }
}		