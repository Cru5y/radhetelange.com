function sendAnimation() {
  var element = document.getElementById("sendAnim");
  element.classList.toggle("panel_force_hover");
}

function bounceButton() {
  var element = document.getElementById("sendAnim");
  element.classList.toggle("panel_bounce");

  setTimeout(function bounceButton() {
    var element = document.getElementById("sendAnim");
    element.classList.toggle("panel_bounce");
  }, (1*300)); //0.5 seconds
}

function allMight() {
  var element = document.getElementById("allMightBtn");
  element.classList.toggle("all-might-button-hover");
}

