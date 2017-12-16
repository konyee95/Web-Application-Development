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


/*
 * Load and display books
 */
const loadBook = bookID => formAjaxRequest("loadBook", { bookID })

const loadBookCategory = category => formAjaxRequest("loadBookCategory", { category })

const reservationHandler = (bookID, reserveStatus) => {
  if (reserveStatus === "0") {
    reserveBook(bookID)
  } else {
    cancelReserveBook(bookID)
  }
}

const reserveBook = bookID => formAjaxRequest("reserveBook", { bookID })

const cancelReserveBook = bookID => {
  const respond = confirm("Cancel your reservation?");
  if (respond === true) {
    formAjaxRequest("cancelReserveBook", { bookID })
  }
}

const favouriteBook = (bookID, favStatus) => formAjaxRequest("favouriteBook", { bookID, favStatus })

const readBook = bookID => formAjaxRequest("readBook", { bookID })

/*
 * Use encodeURIComponent on url because `&` separates strings, ajax x happy with that
 */
const insertBook = () => {
  const dataObject = {
    bookID: document.getElementById("book-id").value,
    bookTitle: document.getElementById("book-title").value,
    bookAuthor: document.getElementById("book-author").value,
    bookAvailability: document.getElementById("book-availability").value,
    bookCategory: document.getElementById("book-category").value,
    bookRating: document.getElementById("book-rating").value,
    bookImageUrl: encodeURIComponent(document.getElementById("book-image-url").value),
    bookPublisherID: document.getElementById("book-publisher-id").value,
    bookPublishedYear: document.getElementById("book-published-year").value,
    bookOnlineReadingUrl: encodeURIComponent(document.getElementById("book-online-reading-url").value),
    bookDescription: encodeURIComponent(document.getElementById("book-description").value),
    bookPhysicalLocation: document.getElementById("book-physical-location").value,
  }

  for (let key in dataObject) {
    if (dataObject[key] === "") {
      window.alert('Make sure all fields are occupied!');
      return false;
    }
  }

  formAjaxRequest("insertBook", dataObject)
}

const cancelInsertBook = () => {
  const respond = confirm("Are you sure?");
  if (respond === true) {
    goBack();
  }
}

/* Helper method to pass bookID to updateBook page */
const updateBookHelper = bookID => processAjaxResponse({ action: 'updateBookHelper', bookID });

const updateBook = () => {
  const dataObject = {
    bookID: document.getElementById("book-id").value,
    bookTitle: document.getElementById("book-title").value,
    bookAuthor: document.getElementById("book-author").value,
    bookAvailability: document.getElementById("book-availability").value,
    bookCategory: document.getElementById("book-category").value,
    bookRating: document.getElementById("book-rating").value,
    bookImageUrl: encodeURIComponent(document.getElementById("book-image-url").value),
    bookPublisherID: document.getElementById("book-publisher-id").value,
    bookPublishedYear: document.getElementById("book-published-year").value,
    bookOnlineReadingUrl: encodeURIComponent(document.getElementById("book-online-reading-url").value),
    bookNoOfTimes: document.getElementById("book-no-of-times").value,
    bookDescription: encodeURIComponent(document.getElementById("book-description").value),
    bookPhysicalLocation: document.getElementById("book-physical-location").value,
  }

  for (let key in dataObject) {
    if (dataObject[key] === "") {
      window.alert('Make sure all fields are occupied!');
      return false;
    }
  }

  formAjaxRequest("updateBook", dataObject)
}

const deleteBookHelper = bookID => {
  const respond = confirm(`Delete book record ${bookID} ?`);
  if (respond === true) {
    deleteBook(bookID)
  }
}

const deleteBook = bookID => formAjaxRequest("deleteBook", { bookID })

const resetPasswordHelper = studentID => {
  const respond = confirm(`Reset password for user ${studentID} ?`);
  if (respond === true) {
    window.location = `./reset-password.php?data=` + studentID;
  }
}

const resetPassword = studentID => {
  const passwordA = document.getElementById("new-password-1").value;
  const passwordB = document.getElementById("new-password-2").value;

  if (passwordA === "" || passwordB === "") {
    displayErrorText("Please make sure both fields are entered!");
    return false
  } else if (passwordA.length < 8 || passwordB.length < 8) {
    displayErrorText("Please make sure password is more than 8 characters");
    return false
  } else if (passwordA !== passwordB) {
    displayErrorText("Please make suer both passwords entered are the same");
    return false
  } else {
    removeErrorText()
    const respond = confirm("Reset password?");
    if (respond === true) {
      formAjaxRequest("resetPassword", { studentID, newPassword: passwordA })
    }
  }
}

const deleteUserHelper = studentID => {
  const respond = confirm(`Delete user ${studentID} from MyLibrary ?`);
  if (respond === true) {
    formAjaxRequest("deleteUser", { studentID })
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
    case "cancelReserveBook":
      cancelReserveBookAjax(data);
      break;
    case "favouriteBook":
      favouriteBookAjax(data);
      break;
    case "readBook":
      readBookAjax(data);
      break;
    case "insertBook":
      insertBookAjax(data);
      break;
    case "updateBookHelper":
      updateBookHelperAjax(data);
      break;
    case "updateBook":
      updateBookAjax(data);
      break;
    case "deleteBook":
      deleteBookAjax(data);
      break;
    case "resetPassword":
      resetPasswordAjax(data);
      break;
    case "deleteUser":
      deleteUserAjax(data);
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
    } else if (data.action_result_code === 1) {
      window.alert("This book is not available for reservation");
    }
  } else if (data.action_result === true) {
    window.alert("Book reserved! You may collect your book at main counter");
    location.reload(true);
  }
}

const cancelReserveBookAjax = data => {
  if (data.action_result === true) {
    window.alert("Book reservation canceled!");
    location.reload(true);
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

const readBookAjax = data => {
  if (data.action_result === true) {
    window.location = data.redirect;
  } else {
    window.location = data.redirect;
  }
}

const insertBookAjax = data => {
  if (data.action_result === true) {
    const respond = confirm("Book inserted! Insert another one?");
    if (respond === true) {
      location.reload(true);
    } else {
      window.location = './staff-portal.php';
    }
  }
}

const updateBookHelperAjax = data => {
  window.location = `./update-book.php?data=` + btoa(unescape(encodeURIComponent(JSON.stringify(data))));
}

const updateBookAjax = data => {
  if (data.action_result === true) {
    window.alert("Book record updated!");
    goBack();
  }
}

const deleteBookAjax = data => {
  if (data.action_result === true) {
    window.alert("Book record removed from database!");
    location.reload(true);
  }
}

const resetPasswordAjax = data => {
  if (data.action_result === true) {
    window.alert("Password reset successfully!");
    goBack();
  }
}

const deleteUserAjax = data => {
  if (data.action_result === true) {
    window.alert("User removed successfully!");
    location.reload(true);
  } else if (data.action_result === false) {
    window.alert("User has reserved a book! Cancel reservation before removing user!");
    location.reload(true);
  }
}