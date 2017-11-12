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
  const password = document.getElementById("password").value;
  const formName = document.forms[0].name;

  if (studentID === "") {
    displayErrorText("Please make sure student id is entered");
    return false;
  } else if (studentID.length !== 10) {
    displayErrorText("Please make sure student id is correctly entered. Example: b031510000");
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

/* init listeners */
const init = () => {
  const hamburgerMenu = document.getElementById("hamburger-menu");
  const searchInput = document.getElementById("search-input");

  searchInput.addEventListener("focus", onSearchInputFocus);
  searchInput.addEventListener("focusout", onSearchInputLoseFocus);

  window.addEventListener("click", sidePanelListener);
}