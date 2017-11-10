function onSearchInputFocus() {
  const searchForm = document.getElementById("search-form");
  const searchInput = document.getElementById("search-input");

  searchForm.classList.add("search-form-expanded");
  searchInput.classList.add("search-input-expanded");
}

function onSearchInputLoseFocus() {
  const searchForm = document.getElementById("search-form");
  const searchInput = document.getElementById("search-input");

  searchForm.classList.remove("search-form-expanded")
  searchInput.classList.remove("search-input-expanded")
}

function hamburgerMenu(x) {
  x.classList.toggle("change");

  if (!x.classList.contains("change")) {
    document.getElementById("side-panel").style.width = "0";
    document.body.style.backgroundColor = "white";
  } else {
    document.getElementById("side-panel").style.width = "350px";
    document.body.style.backgroundColor = "rgba(0, 0, 0, 0.3)";
  }
}

function init() {
  const searchInput = document.getElementById("search-input");

  searchInput.addEventListener("focus", onSearchInputFocus);
  searchInput.addEventListener("focusout", onSearchInputLoseFocus);
}