
var darkModeBtn = document.querySelector(".darkmode");
var blacks = document.getElementById("white-text")
var element = document.body;
let darkMode = localStorage.getItem("dark-mode");

const enableDarkMode = () => {
  element.classList.add("dark-mode");
  blacks.style.color = "#83CBFF";
  localStorage.setItem("dark-mode", "enabled");
};

const disableDarkMode = () => {
  element.classList.remove("dark-mode");
  localStorage.setItem("dark-mode", "disabled");
};

if (darkMode === "enabled") {
  enableDarkMode(); // set state of darkMode on page load
}

darkModeBtn.addEventListener("click", (e) => {
  darkMode = localStorage.getItem("dark-mode"); // update darkMode when clicked
  if (darkMode === "disabled") {
    enableDarkMode();
  } else {
    disableDarkMode();
  }
});

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

var greeting = document.getElementById("greeting");
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