function onSearchInputFocus() {
  const searchForm = document.getElementById("searchForm");
  const searchInput = document.getElementById("searchInput");

  searchForm.classList.add("search-form-expanded");
  searchInput.classList.add("search-input-expanded");
}

function onSearchInputLoseFocus() {
  const searchForm = document.getElementById("searchForm");
  const searchInput = document.getElementById("searchInput");

  searchForm.classList.remove("search-form-expanded")
  searchInput.classList.remove("search-input-expanded")
}

function init() {
  const searchInput = document.getElementById("searchInput");

  searchInput.addEventListener("focus", onSearchInputFocus);
  searchInput.addEventListener("focusout", onSearchInputLoseFocus);
}