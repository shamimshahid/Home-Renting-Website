// SELECTING ALL TEXT ELEMENTS
var ownername = document.forms["vform"]["ownername1"];
var password = document.forms["vform"]["password1"];
var email = document.forms["vform"]["email1"];
var contact_no = document.forms["vform"]["contact_no1"];

// SELECTING ALL ERROR DISPLAY ELEMENTS
var name_error = document.getElementById("ownername_error");
var email_error = document.getElementById("email_error");
var password_error = document.getElementById("password_error");
var contact_no_error = document.getElementById("contact_no_error");

// SETTING ALL EVENT LISTENERS
ownername.addEventListener("blur", nameVerify, true);
email.addEventListener("blur", emailVerify, true);
password.addEventListener("blur", passwordVerify, true);
contact_no.addEventListener("blur", contact_noVerify, true);

// validation function
function Validate() {
  // validate ownername
  if (ownername.value == "") {
    ownername.style.border = "1px solid red";
    document.getElementById("ownername_div").style.color = "white";
    name_error.textContent = "ownername is required";
    ownername.focus();
    //
    return false;
  } else if (ownername.value.length < 5) {
    ownername.style.border = "1px solid red";
    document.getElementById("ownername_div").style.color = "white";
    name_error.textContent = "ownername must be at least 5 characters";
    ownername.focus();
    return false;
  } else if (!ownername.value.match(/^[0-9a-zA-Z ]+$/)) {
    ownername.style.border = "1px solid red";
    document.getElementById("ownername_div").style.color = "white";
    name_error.textContent = "ownername must contain only letters and numbers";
    ownername.focus();
    return false;
  }
  // validate email

  if (email.value == "") {
    email.style.border = "1px solid red";
    document.getElementById("email_div").style.color = "white";
    email_error.textContent = "Email is required";
    email.focus();
    return false;
  }
  // validate password

  if (password.value == "") {
    password.style.border = "1px solid red";
    document.getElementById("password_div").style.color = "white";
    password_error.textContent = "Password is required";
    password.focus();
    return false;
  } else if (password.value.length < 8) {
    password.style.border = "1px solid red";
    document.getElementById("password_div").style.color = "white";
    password_error.textContent = "password must be at least 8 characters";
    password.focus();
    return false;
  }

  // validate contact_no

  if (contact_no.value == "") {
    contact_no.style.border = "1px solid red";
    document.getElementById("contact_no_div").style.color = "white";
    contact_no_error.textContent = "Contact No is required";
    contact_no.focus();
    return false;
  } else if (contact_no.value.length < 11) {
    contact_no.style.border = "1px solid red";
    document.getElementById("contact_no_div").style.color = "white";
    contact_no_error.textContent = "contact_no must be at 11 characters";
    contact_no.focus();
    return false;
  } else if (contact_no.value.length > 11) {
    contact_no.style.border = "1px solid red";
    document.getElementById("contact_no_div").style.color = "white";
    contact_no_error.textContent = "contact_no must be at 11 characters";
    contact_no.focus();
    return false;
  } else if (!contact_no.value.match(/^[0-9]+$/)) {
    contact_no.style.border = "1px solid red";
    document.getElementById("contact_no_div").style.color = "white";
    contact_no_error.textContent = "contact_no only contain numbers";
    contact_no.focus();
    return false;
  }
}
// event handler functions
function idVerify() {
  if (user_id.value != "") {
    user_id.style.border = "1px solid #5e6e66";
    document.getElementById("user_id_div").style.color = "#5e6e66";
    id_error.innerHTML = "";
    return true;
  }
}

function nameVerify() {
  if (ownername.value != "") {
    ownername.style.border = "1px solid #5e6e66";
    document.getElementById("ownername_div").style.color = "#5e6e66";
    name_error.innerHTML = "";
    return true;
  }
}
function emailVerify() {
  if (email.value != "") {
    email.style.border = "1px solid #5e6e66";
    document.getElementById("email_div").style.color = "#5e6e66";
    email_error.innerHTML = "";
    return true;
  }
}
function passwordVerify() {
  if (password.value != "") {
    password.style.border = "1px solid #5e6e66";
    document.getElementById("password_div").style.color = "#5e6e66";
    password_error.innerHTML = "";
    return true;
  }
}
function contact_noVerify() {
  if (contact_no.value != "") {
    contact_no.style.border = "1px solid #5e6e66";
    document.getElementById("contact_no_div").style.color = "#5e6e66";
    contact_no_error.innerHTML = "";
    return true;
  }
}

document.getElementById("log").addEventListener("click", function () {
  document.querySelector(".login_css").style.display = "grid";
  document.querySelector(".register2").style.display = "none";
  document.querySelector(".form1").style.display = "none";

  document.getElementById("log").style.backgroundColor = "#007bff";
  document.getElementById("log").style.borderColor = "#007bff";
  document.getElementById("reg").style.borderColor = "#6c757d";
  document.getElementById("reg").style.backgroundColor = "#6c757d";
});
document.getElementById("reg").addEventListener("click", function () {
  document.querySelector(".register2").style.display = "grid";
  document.querySelector(".form1").style.display = "flex";
  document.getElementById("reg").style.backgroundColor = "#007bff";
  document.getElementById("reg").style.borderColor = "#007bff";
  document.getElementById("log").style.borderColor = "#6c757d";
  document.getElementById("log").style.backgroundColor = "#6c757d";
  document.querySelector(".login_css").style.display = "none";
});
