function hamburgerMenu(x) {
  x.classList.toggle("change");

  if (!x.classList.contains("change")) {
    document.getElementById("side-panel").style.width = "0";
    document.body.style.backgroundColor = "white";
  } else {
    document.getElementById("side-panel").style.width = "300px";
    document.body.style.backgroundColor = "rgba(0, 0, 0, 0.4)";
  }
}