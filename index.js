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