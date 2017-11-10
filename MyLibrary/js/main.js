/* hamburger menu */
const hamburgerMenu = x => {
  x.classList.toggle("change");

  if (!x.classList.contains("change")) {
    closeSidePanel();
  } else {
    openSidePanel();
  }
}

/* side panel */
const onSearchInputFocus = () => {
  const searchForm = document.getElementById("search-form");
  const searchInput = document.getElementById("search-input");

  searchForm.classList.add("search-form-expanded");
  searchInput.classList.add("search-input-expanded");
}

const closeSidePanel = () => {
  document.getElementById("side-panel").style.width = "0";
  document.body.style.backgroundColor = "white";
}

const openSidePanel = () => {
  document.getElementById("side-panel").style.width = "350px";
  document.body.style.backgroundColor = "rgba(0, 0, 0, 0.3)";
}

const onSearchInputLoseFocus = () => {
  const searchForm = document.getElementById("search-form");
  const searchInput = document.getElementById("search-input");

  searchForm.classList.remove("search-form-expanded")
  searchInput.classList.remove("search-input-expanded")
}

/* check is user clicked area is outside side panel, then close */
const sidePanelListener = e => {
  const hamburgerMenu = document.getElementById("hamburger-menu");
  let i = e.target.parentNode.id;
  let isHamburgerMenuOpened = hamburgerMenu.classList.contains('change');
  let elementArray = ["side-panel", "user-account-header", "user-account-container", "search-container", "hamburger-menu"];

  /* test is user clicked area match with elements inside the array */
  if (isHamburgerMenuOpened) {
    if (elementArray.indexOf(i) > -1 === false) {
      closeSidePanel();
      hamburgerMenu.classList.remove("change");
    }
  }
}

/* init listeners */
const init = () => {
  const hamburgerMenu = document.getElementById("hamburger-menu");
  const searchInput = document.getElementById("search-input");

  searchInput.addEventListener("focus", onSearchInputFocus);
  searchInput.addEventListener("focusout", onSearchInputLoseFocus);

  window.addEventListener("click", sidePanelListener);
}