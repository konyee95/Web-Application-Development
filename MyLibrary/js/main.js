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
 * Helper method to display error message
 */
const displayErrorText = text => {
  const errorContainer = document.getElementById("error-container");
  const errorText = document.getElementById("error-text");

  errorContainer.classList.remove("hide-auth-form");
  errorText.innerHTML = text;
}

/*
 * Remove error container
 */
const removeErrorText = () => {
  const errorContainer = document.getElementById("error-container");
  errorContainer.classList.add("hide-auth-form");
}

/*
 * Login and register button function
 */
const submitAuthForm = () => {
  const studentID = document.getElementById("student-id").value;
  var studentName;
  const password = document.getElementById("password").value;
  const formName = document.forms[0].name;

  if (formName === "registration") {
    studentName = document.getElementById("student-name").value;
  }

  if (formName === "registration") {
    if (studentName === "") {
      displayErrorText("Please make sure student name is entered");
      return false;
    } 
  }

  if (studentID === "") {
    displayErrorText("Please make sure student id is entered");
    return false;
  } else if (studentID.length !== 10) {
    displayErrorText("Please make sure student id is correctly entered. Example: b031510000");
    return false;
  } else if (password === "") {
    displayErrorText("Please make sure password is entered");
    return false;
  } else if (password.length < 8) {
    displayErrorText("Please make sure password is more than 8 characters");
    return false;
  } else {
    removeErrorText();

    const dataObject = {
      studentID: studentID.toLowerCase(),
      studentName: studentName,
      password: password
    }

    formAjaxRequest(formName, dataObject);
  }
}

/*
 * Dynamically tunnel data to either login or registration ajax file
 */
const formAjaxRequest = (form, dataObject) => {
  var request = new XMLHttpRequest();
  request.onreadystatechange = () => {
    if (request.readyState === 4 && request.status === 200) {
      processAjaxResponse(JSON.parse(request.responseText));
      console.log(JSON.parse(request.responseText))
    }
  }
  request.open('POST', `./ajax/${form}.php`, true);
  request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  request.send('data=' + JSON.stringify(dataObject));
}

/*
 * Process data returned
 */
const processAjaxResponse = data => (data.action === "login" ? processLoginAjax(data) : processRegistrationAjax(data));

const processRegistrationAjax = data => {
  if (data.action_result === true) {
    window.alert("Congratulation! You have created your library account!");
    window.location = data.redirect;
  } else {
    displayErrorText(data.error);
  }
}

const processLoginAjax = data => {
  if (data.action_result === true) {
    window.location = data.redirect;
  } else {
    displayErrorText(data.error);
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
  if (checkPathName() === "index.php") {
    imageSlider(9);
  }
}