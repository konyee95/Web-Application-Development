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
const searchBooks = () => {
  const searchInput = document.getElementById("search-input").value;

  const dataObject = { keyword: searchInput }

  formAjaxRequest("search", dataObject)
}

const loadBook = bookID => {
  const dataObject = { bookID }

  formAjaxRequest("loadBook", dataObject)
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
      processLoadBookAjax(data);
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

const processLoadBookAjax = data => {
  window.location = "./book.php?data=" + btoa(unescape(encodeURIComponent(JSON.stringify(data))));
}