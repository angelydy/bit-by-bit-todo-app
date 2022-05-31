var time = document.getElementById("time");
function displayFiveSec() {
  var five = 7;
  var counter = setInterval(function() {
    five--;
    time.innerHTML = "This window will close in " + five + "s";
    if (five == 0) {
      clearInterval(counter);
      window.close();
    }
  }, 1000);
}
displayFiveSec();

var submit = document.getElementById("send");
function submitForm() {
  if (document.getElementById("name").value == "" || document.getElementById("email").value == "" || document.getElementById("message").value == "" || document.getElementById("subject").value == "") {
    alert("Please fill in all fields");
    return false;
  } else {
    window.open("https://todoapp.elementfx.com/submitForm.html", "_blank");
  }
}
submit.addEventListener("click", submitForm);
