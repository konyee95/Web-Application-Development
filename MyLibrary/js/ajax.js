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

  if (formName === "register") {
    studentName = document.getElementById("student-name").value;
  }

  if (formName === "register") {
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
 * Edit profile
 */
const editProfile = studentID => {
  const studentName = document.getElementById("student-name").value;
  const oldPassword = document.getElementById("old-password").value;
  const newPassword = document.getElementById("new-password").value;

  const dataObject = {
    studentID,
    studentName,
    oldPassword,
    newPassword
  }
  
  if (oldPassword !== "" && newPassword === "") {
    displayErrorText("Forget to enter your new password?");
    return false
  } else if (oldPassword === "" && newPassword !== "") {
    displayErrorText("Forget to enter your old password?");
    return false
  } else if (oldPassword !== "" && newPassword.length < 8) {
    displayErrorText("Please make sure password is more than 8 characters");
    return false;
  } else {
    const respond = confirm("Save changes?");
    if (respond === true) {
      formAjaxRequest("editProfile", dataObject);
    }
  }
}

const staffLogin = () => {
  const staffId = document.getElementById("staff-id").value;
  const password = document.getElementById("password").value;

  if (staffId === "") {
    displayErrorText("Please enter Staff ID!");
    return false;
  } else if (password === "") {
    displayErrorText("Please enter password!");
    return false;
  } else if (password.length < 8) {
    displayErrorText("Please make sure password is more than 8 characters");
    return false;
  } else {
    removeErrorText();

    const dataObject = {
      staffId,
      password
    }

    formAjaxRequest("staffLogin", dataObject);
  }
}

/*
 * Search function
 */
const searchBooks = () => formAjaxRequest("search", { keyword: document.getElementById("search-input").value })

const loadBook = bookID => formAjaxRequest("loadBook", { bookID })

const loadBookCategory = category => formAjaxRequest("loadBookCategory", { category })

const reserveBook = bookID => formAjaxRequest("reserveBook", { bookID })

const favouriteBook = (bookID, favStatus) => formAjaxRequest("favouriteBook", { bookID, favStatus })

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
const processAjaxResponse = data => {
  switch (data.action) {
    case "login":
      processLoginAjax(data);
      break;
    case "registration":
      processRegistrationAjax(data);
      break;
    case "editProfile":
      processEditProfileAjax(data);
      break;
    case "searchBook":
      processSearchBookAjax(data);
      break;
    case "loadBook":
      processLoadBookAjax(data, 'book');
      break;
    case "loadBookCategory":
      processLoadBookAjax(data, 'category');
      break;
    case "reserveBook":
      reserveBookAjax(data);
      break;
    case "favouriteBook":
      favouriteBookAjax(data);
      break;
    default:
      break;
  }
}

const processLoginAjax = data => {
  if (data.action_result === true) {
    window.location = data.redirect;
  } else {
    displayErrorText(data.error);
  }
}

const processRegistrationAjax = data => {
  if (data.action_result === true) { 
    window.alert("Congratulation! You have created your library account!");
    window.location = data.redirect;
  } else {
    displayErrorText(data.error);
  }
}

const processEditProfileAjax = data => {
  if (data.action_result === true) {
    window.alert("Account updated");
    window.location = data.redirect;
  } else {
    displayErrorText(data.error);
  }
}

const processSearchBookAjax = data => {
  const pathLength = window.location.pathname.split("/").length;
  const parentPath = window.location.pathname.split("/")[pathLength - 2];
  
  if (parentPath === "about-us") {
    window.location = "../search.php?data=" + btoa(unescape(encodeURIComponent(JSON.stringify(data))));
  } else {
    window.location = "./search.php?data=" + btoa(unescape(encodeURIComponent(JSON.stringify(data))));
  }
}

const processLoadBookAjax = (data, location) => {
  window.location = `./${location}.php?data=` + btoa(unescape(encodeURIComponent(JSON.stringify(data))));
}

const reserveBookAjax = data => {
  if (data.action_result === false) {
    if (data.action_result_code === 0) {
      window.location = data.redirect;
    }
  }
}

const favouriteBookAjax = data => {
  if (data.action_result === false) {
    if (data.action_result_code === 0) {
      window.location = data.redirect;
    }
  } else if (data.action_result === true) {
    window.alert("Favourite book list updated!");
    location.reload(true);
  }
}