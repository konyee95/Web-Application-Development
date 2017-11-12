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

const displayErrorText = text => {
  const errorContainer = document.getElementById("error-container");
  const errorText = document.getElementById("error-text");

  errorContainer.classList.remove("hide-auth-form");
  errorText.innerHTML = text;
}

const removeErrorText = () => {
  const errorContainer = document.getElementById("error-container");
  errorContainer.classList.add("hide-auth-form");
}

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
      studentID,
      password
    }
    formAjaxRequest(formName, dataObject);
  }
}

const formAjaxRequest = (form, dataObject) => {
  var request = new XMLHttpRequest();
  request.open('POST', `./ajax/${form}.php`, true);
  request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
  request.onreadystatechange = () => {
    if (request.readyState === 4 && request.status === 200) {
      processAjaxResponse(request.responseText);
    }
  }
  request.send(dataObject);
}

const processAjaxResponse = data => {
  console.log(data)
}

/* go back to previous page */
const goBack = () => {
  window.history.back();
}

/* init listeners */
const init = () => {
  const hamburgerMenu = document.getElementById("hamburger-menu");
  const searchInput = document.getElementById("search-input");

  searchInput.addEventListener("focus", onSearchInputFocus);
  searchInput.addEventListener("focusout", onSearchInputLoseFocus);

  window.addEventListener("click", sidePanelListener);
}