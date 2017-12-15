/*
 * Hamburger menu
 */
const hamburgerMenu = x => {
  x.classList.toggle("change");

  if (!x.classList.contains("change")) {
    closeSidePanel();
  } else {
    openSidePanel();
  }
}

/*
 * Side panel
 */
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

/*
 * Dynamic side panel to select correct path (for about page)
 */
const dynamicPath = () => {
  const pathLength = window.location.pathname.split("/").length;
  const parentPath = window.location.pathname.split("/")[pathLength - 2];
  
  if (parentPath === "about-us") {
    window.location = "../login.php";
  } else {
    window.location = "./login.php";
  }
}

/*
 * Slider helper function
 */
this.slideIndex = 9;

const plusDivs = x => imageSlider(this.slideIndex += x);

const imageSlider = n => {
  const mySlides = document.getElementsByClassName("mySlides");

  if (n > mySlides.length) {
    this.slideIndex = 1;
  }

  if (n < 1) {
    this.slideIndex = mySlides.length;
  }

  for (i=0; i<mySlides.length; i++) {
    mySlides[i].style.display = "none";
  }

  mySlides[slideIndex - 1].style.display = "block";
  mySlides[slideIndex - 1].style.width = "750px";
  mySlides[slideIndex - 1].style.height = "65vh";
}

/*
 * Check is user clicked area is outside side panel, then close
 */
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

/*
 * Go back to previous page in the history stack
 */
const goBack = () => {
  window.history.back();
}

/*
 * Log out
 */
const logOut = () => {
  const respond = confirm("Are you sure?");
  if (respond === true) {
    window.location = "./logout.php";
  }
}

const cancelEditProfile = () => {
  const respond = confirm("Are you sure?");
  if (respond === true) {
    goBack()
  }
}

/*
 * check path name
 */
const checkPathName = () => window.location.pathname.split("/").pop();

/* init listeners */
const init = () => {
  const hamburgerMenu = document.getElementById("hamburger-menu");
  const searchInput = document.getElementById("search-input");

  searchInput.addEventListener("focus", onSearchInputFocus);
  searchInput.addEventListener("focusout", onSearchInputLoseFocus);

  window.addEventListener("click", sidePanelListener);

  /* only activate slider at homepage */
  if (checkPathName() === "index.php" || checkPathName() === "") {
    imageSlider(9);
  }
}

const forgotPassword = () => window.alert("Please approach our library admin to reset password!")