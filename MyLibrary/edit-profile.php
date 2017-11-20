<!DOCTYPE html>
<?php
    define('__CONFIG__', true);
    require_once "inc/config.php";
    Page::checkIfStudentIsLoggedIn();

    /* if student is logged in, pulled student object to access later */
    $student = new Student($_SESSION['student_index']);
?>
    <html>

    <head>
        <title>Edit Profile</title>
        <?php require_once "inc/general-config.php" ?>
    </head>

    <body onload="init()">
        <div id="navigation">
            <div class="auth-nav-header">
                <a class="site-title" href="./index.php">MyLibrary</a>
            </div>
        </div>

        <div class="auth-container-header some-shadow">
            <img src="./image/empty-avatar.png" class="user-avatar" />
            <div class="profile-content-container">
                <h2 class="profile-user-name">
                    <?php echo $student->student_name; ?>
                </h2>
                <h4 class="profile-user-id">Matric No:
                    <?php echo $student->student_id; ?>
                </h4>
                <div class="profile-content-button-container">
                    <button class="button button-secondary" onclick="editProfile('<?php echo $student->student_id; ?>')">Save Changes</button>
                    <button class="button button-secondary" onclick="cancelEditProfile()">Cancel</button>
                </div>
            </div>
        </div>

        <div class="auth-container-body">
            <div class="auth-form-container">
                <form id="registration-form" class="auth-form" name="register">
                    <div class="material-input-container">
                        <input id="student-id" type="text" class="material-input" placeholder="Student ID" required disabled value="<?php echo $student->student_id; ?>">
                        <span class="material-input-highlight"></span>
                        <span class="material-input-bar"></span>
                        <label class="material-input-label"></label>
                    </div>

                    <div class="material-input-container">
                        <input id="student-name" class="material-input" placeholder="Student Name" required  value="<?php echo $student->student_name; ?>">
                        <span class="material-input-highlight"></span>
                        <span class="material-input-bar"></span>
                        <label class="material-input-label"></label>
                    </div>

                    <div class="material-input-container">
                        <input id="old-password" class="material-input" placeholder="Old password" type="password">
                        <span class="material-input-highlight"></span>
                        <span class="material-input-bar"></span>
                        <label class="material-input-label"></label>
                    </div>

                    <div class="material-input-container">
                        <input id="new-password" class="material-input" placeholder="New password" type="password">
                        <span class="material-input-highlight"></span>
                        <span class="material-input-bar"></span>
                        <label class="material-input-label"></label>
                    </div>

                    <div id="error-container" class="error-container hide-auth-form">
                        <p id="error-text" class="error-text"></p>
                    </div>
                </form>

                <p class="user-note">*Please contact the admin if you wish to edit your Student ID</p>
                <p class="user-note user-note-2">**Leave password field empty if you only want to edit your name</p>
            </div>
            <div class="auth-form-empty">

            </div>
        </div>
    </body>

    </html>