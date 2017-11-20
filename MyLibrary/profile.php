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
    <title>Profile</title>
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
            <h2 class="profile-user-name"><?php echo $student->student_name; ?></h2>
            <h4 class="profile-user-id">Matric No: <?php echo $student->student_id; ?></h4>
            <div class="profile-content-button-container">
                <a href="./edit-profile.php" class="button button-secondary">Edit Profile</a>
                <button class="button button-secondary" onclick="logOut()">Sign Out</button>
            </div>
        </div>
    </div>

    <div class="profile-content-body">
        <div class="profile-content-body-item">
            <h2 class="">Saved Books</h2>
            <div class="explore-content-row-body">
                <div class="book-block">
                    <div class="book-image-container">
                        <img>
                    </div>
                    <p class="book-title">Kelsey Bibliography</p>
                </div>

                <div class="book-block">
                    <div class="book-image-container">
                        <img>
                    </div>
                    <p class="book-title">Kelsey Bibliography</p>
                </div>

                <div class="book-block">
                    <div class="book-image-container">
                        <img>
                    </div>
                    <p class="book-title">Kelsey Bibliography</p>
                </div>

                <div class="book-block">
                    <div class="book-image-container">
                        <img>
                    </div>
                    <p class="book-title">Kelsey Bibliography</p>
                </div>

                <div class="book-block">
                    <div class="book-image-container">
                        <img>
                    </div>
                    <p class="book-title">Kelsey Bibliography</p>
                </div>
            </div>
        </div>

        <div class="profile-content-body-item">
            <h2 class="">Borrowed Books</h2>
            <div class="explore-content-row-body">
                <div class="book-block">
                    <div class="book-image-container">
                        <img>
                    </div>
                    <p class="book-title">Kelsey Bibliography</p>
                </div>

                <div class="book-block">
                    <div class="book-image-container">
                        <img>
                    </div>
                    <p class="book-title">Kelsey Bibliography</p>
                </div>

                <div class="book-block">
                    <div class="book-image-container">
                        <img>
                    </div>
                    <p class="book-title">Kelsey Bibliography</p>
                </div>

                <div class="book-block">
                    <div class="book-image-container">
                        <img>
                    </div>
                    <p class="book-title">Kelsey Bibliography</p>
                </div>

                <div class="book-block">
                    <div class="book-image-container">
                        <img>
                    </div>
                    <p class="book-title">Kelsey Bibliography</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>