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
                    <?php echo strtoupper($student->student_id); ?>
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
                <?php
                    $hasFav = $con->prepare("SELECT EXISTS (SELECT * FROM favourite WHERE student_id_fk=:student_id_fk)");
                    $hasFav->bindParam(':student_id_fk', $student->student_id, PDO::PARAM_STR);
                    $hasFav->execute();
                    $hasFavBool = $hasFav->fetch()[0];

                    if (!$hasFavBool) {
                        echo "<br/>";
                        echo "You have not favourite any book yet!";
                        echo "<br/>";
                        echo "<br/>";
                    } else {
                        $selectBook = $con->prepare("SELECT * FROM books AS b JOIN favourite AS f ON f.student_id_fk=:student_id_fk WHERE b.book_id=f.book_id");
                        $selectBook->bindParam(':student_id_fk', $student->student_id, PDO::PARAM_STR);
                        $selectBook->execute();
                        $result = $selectBook->fetchAll(PDO::FETCH_ASSOC);

                        echo "<div class='explore-content-row-body'>";
                        
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
                        echo "</div>";
                    }
                ?>
            </div>

            <div class="profile-content-body-item">
                <h2 class="">Reserved Books</h2>
                <?php
                    $reservedBook = $con->prepare("SELECT DISTINCT * FROM reserve WHERE student_id_fk=:student_id_fk");
                    $reservedBook->bindParam(':student_id_fk', $student->student_id, PDO::PARAM_STR);
                    $reservedBook->execute();
                    $hasReserved = $reservedBook->fetch()[0];

                    if (!$hasReserved) {
                        echo "<br/>";
                        echo "You have not reserved any book yet!";
                        echo "<br/>";
                        echo "<br/>";
                    } else {
                        $selectReservedBook = $con->prepare("SELECT * FROM books AS b JOIN reserve AS r on r.student_id_fk=:student_id_fk WHERE b.book_id=r.book_id");
                        $selectReservedBook->bindParam(':student_id_fk', $student->student_id, PDO::PARAM_STR);
                        $selectReservedBook->execute();

                        $reserveResult = $selectReservedBook->fetchAll(PDO::FETCH_ASSOC);

                        echo "<div class='explore-content-row-body'>";
                        
                        foreach($reserveResult as $book) {
                            echo "<div class='small-book-block' onClick='loadBook(\"" . $book['book_id'] . "\")'>";
                            echo "<div class='small-book-image-container'>";
                            echo "<img class='small-book-image' src={$book['image_url']} />";
                            echo "</div>";
                            echo "<div class='small-book-title-container'>";
                            echo "<p class='small-book-title'>{$book['title']}</p>";
                            echo "</div>";
                            echo "</div>";
                        }
                        echo "</div>";
                    }
                ?>
            </div>
        </div>
    </body>

    </html>