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

function init() {
  const searchInput = document.getElementById("search-input");

  searchInput.addEventListener("focus", onSearchInputFocus);
  searchInput.addEventListener("focusout", onSearchInputLoseFocus);
}