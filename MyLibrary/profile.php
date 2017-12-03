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
                <h2 class="profile-user-name">
                    <?php echo $student->student_name; ?>
                </h2>
                <h4 class="profile-user-id">Matric No:
                    <?php echo $student->student_id; ?>
                </h4>
                <div class="profile-content-button-container">
                    <a href="./edit-profile.php" class="button button-secondary">Edit Profile</a>
                    <button class="button button-secondary" onclick="logOut()">Sign Out</button>
                </div>
            </div>
        </div>

        <div class="profile-content-body">
            <div class="profile-content-body-item">
                <h2 class="">Favourite Books</h2>
                <div class="explore-content-row-body">
                    <?php
                        $selectBook = $con->prepare("SELECT * FROM books AS b JOIN favourite AS f ON f.student_id_fk='{$student->student_id}' WHERE b.book_id=f.book_id");
                        $selectBook->execute();
                        $result = $selectBook->fetchAll(PDO::FETCH_ASSOC);
                        foreach($result as $book) {
                            echo "<div class='small-book-block' onClick='loadBook(\"" . $book['book_id'] . "\")'>";
                            echo "<div class='small-book-image-container'>";
                            echo "<img class='small-book-image' src={$book['image_url']} />";
                            echo "</div>";
                            echo "<div class='small-book-title-container'>";
                            echo "<p class='small-book-title'>{$book['title']}</p>";
                            echo "</div>";
                            echo "</div>";
                        }
                    ?>
                </div>
            </div>

            <div class="profile-content-body-item">
                <h2 class="">Borrowed Books</h2>
                <div class="explore-content-row-body">
                    <div class="small-book-block">
                        <div class="small-book-image-container">
                            <img>
                        </div>
                        <p class="small-book-title">Kelsey Bibliography</p>
                    </div>

                    <div class="small-book-block">
                        <div class="small-book-image-container">
                            <img>
                        </div>
                        <p class="small-book-title">Kelsey Bibliography</p>
                    </div>

                    <div class="small-book-block">
                        <div class="small-book-image-container">
                            <img>
                        </div>
                        <p class="small-book-title">Kelsey Bibliography</p>
                    </div>

                    <div class="small-book-block">
                        <div class="small-book-image-container">
                            <img>
                        </div>
                        <p class="small-book-title">Kelsey Bibliography</p>
                    </div>

                    <div class="small-book-block">
                        <div class="small-book-image-container">
                            <img>
                        </div>
                        <p class="small-book-title">Kelsey Bibliography</p>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>