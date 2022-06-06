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

var darkModeBtn = document.querySelector(".darkmode");
var blacks = document.getElementById("white-text")

const enableDarkMode = () => {
  document.body.style.backgroundColor = "#F3FAFF";
  blacks.style.color = "black";
}

function darkMode() {
  //create darkmode and store in local storage
  if (localStorage.getItem("darkmode") === null) {
    localStorage.setItem("darkmode", "enabled");
  }
  //check if darkmode is enabled
  if (localStorage.getItem("darkmode") == "enabled") {
    document.body.style.backgroundColor = "#F3FAFF";
    blacks.style.color = "black";
    localStorage.setItem("darkmode", "disabled");
  }
  //check if darkmode is disabled
  else if (localStorage.getItem("darkmode") == "disabled") {
    document.body.style.backgroundColor = "#00111D";
    blacks.style.color = "#83CBFF";
    localStorage.setItem("darkmode", "enabled");
  }
}
darkModeBtn.addEventListener("click", darkMode);

var dropdown = document.querySelector(".dropdown");
var dropdownContent = document.getElementById("user-login");
function dropdownMenu() {
  if (dropdownContent.style.display == "none") {
    dropdownContent.style.display = "block";
  } else {
    dropdownContent.style.display = "none";
  }
}
dropdown.addEventListener("click", dropdownMenu);

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

var greeting = document.getElementById(".greeting");
var hour = new Date().getHours();
if (hour < 12) {
  greeting.innerHTML = "Good Morning!";
}
else if (hour < 18) {
  greeting.innerHTML = "Good Afternoon!";
}
else {
  greeting.innerHTML = "Good Evening!";
}
