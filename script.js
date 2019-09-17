    var password = document.getElementById("txtPassword");
    var confirmPassword = document.getElementById("txtConfirmPassword");
   function validatePassword () {
    if (password.value != confirmPassword.value) {
        alert("Passwords do not match!");
        return false;
    }
    return true;
}

var myInput = document.getElementById("txtpassword", "txtConfirmPassword");
var lower = document.getElementById("lower");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

/*Show message box when user clicks on password field */
myInput.onfocus = function() {
    document.getElementById("message").style.display ="block";
}

/*Hide message box when user clicks outside password field */
myInput.onblur = function() {
    document.getElementById("message").style.display="block";
}

/*validation of characters in  password field */
myInput.onkeyup = function () {

    var lowerCaseLetters = /[a-z]/g;
    if(myInput.value.match(lowerCaseLetters)) {
        lower.classList.remove("invalid");
        lower.classList.add("valid");
    }else {
        lower.classList.remove("valid");
        lower.classList.add("invalid");
    }
   
    var upperCaseLetters = /[A-Z]/g;
    if(myInput.value.match(upperCaseLetters)) {
        capital.classList.remove("invalid");
        capital.classList.add("valid");
    } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
    }

    var numberValue = /[0-9]/g;
    if(myInput.value.match(numberValue)) {
        number.classList.remove("invalid");
        number.classList.add("valid");
    }else {
        number.classList.remove("valid");
        number.classList.add("invalid");
    }

    if(myInput.value.length >=8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
    }else {
        length.classList.remove("valid");
        length.classList.add("invalid");
    }

}