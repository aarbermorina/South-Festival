const form = document.getElementById('form');
const signInForm = document.getElementById('formSignIn');

function heh(){
    alert("Not good!");
}

let isAlpha=/^[a-zA-Z\s]+$/;
let isEmail=/^[\S]+@[\S]+\.[a-zA-Z]{2,3}$/;
let isPassword=/^((?=\S*?[A-Z])(?=\S*?[a-z])(?=\S*?[0-9])(?=\S*?[\W]).{6,})\S$/;

function signUp(){
    
    var sName=document.getElementById('sName').value;
    var sLName=document.getElementById('sLName').value;
    var sEmail=document.getElementById('sEmail').value;
    var sPassword=document.getElementById('sPassword').value;
    var sCPassword=document.getElementById('sCPassword').value;
    var ConditionName = false;
    var ConditionLastName = false;
    var ConditionEmail = false;
    var ConditionPassword = false;
    var ConditionConfirmPassword = false;
    if(!(isAlpha.test(sName))){
        document.getElementById("labelName").innerHTML="Name is invalid!";
    }else{document.getElementById("labelName").innerHTML=""; ConditionName=true;}
    if(!(isAlpha.test(sLName))){
        document.getElementById("labelLName").innerHTML="Last name is invalid!";
    }else{document.getElementById("labelLName").innerHTML=""; ConditionLastName=true;}
    if(!(isEmail.test(sEmail))){
        document.getElementById("labelEmail").innerHTML="Email is invalid!";
    }else{document.getElementById("labelEmail").innerHTML=""; ConditionEmail=true;}
    if(!(isPassword.test(sPassword))){
        document.getElementById("labelPassword").innerHTML="Password must contain at least one uppercase, lowercase, special character and number! Minimum length is 6.";
    }else{document.getElementById("labelPassword").innerHTML=""; ConditionPassword=true;}
    if(!(isPassword.test(sCPassword)) && !(sCPassword===sPassword)){
        document.getElementById("labelCPassword").innerHTML="Passwords dont match!";
    }else{document.getElementById("labelCPassword").innerHTML=""; ConditionConfirmPassword=true;}
    if(ConditionName && ConditionLastName && ConditionEmail && ConditionPassword && ConditionConfirmPassword){
        form.submit();
    }
}

function signIn(){
    var SIEmail=document.getElementById('SIemail').value;
    var SIPassword=document.getElementById("SIpassword").value;
    var ConditionEmail = false;
    var ConditionPassword = false;
    if(!(isEmail.test(SIEmail))){
        document.getElementById("labelSIEmail").innerHTML="Email is invalid!";
    }else{document.getElementById("labelSIEmail").innerHTML=""; ConditionEmail=true;}
    if(!(isPassword.test(SIPassword))){
        document.getElementById("labelSIPassword").innerHTML="Password incorrect!";
    }else{document.getElementById("labelSIPassword").innerHTML=""; ConditionPassword=true;}
    if(ConditionEmail && ConditionPassword){
        signInForm.submit();
    }
}
