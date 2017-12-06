<!DOCTYPE html>
<?php
    define('__CONFIG__', true);
    require_once "inc/config.php";
    Page::checkIfStaffIsLoggedIn();

    /* if staff is logged in, pulled student object to access later */
    $staff = new Staffs($_SESSION['staff_index']);
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
                    <?php echo $staff->staff_name; ?>
                </h2>
                <h4 class="profile-user-id">Staff Id:
                    <?php echo strtoupper($staff->staff_id); ?>
                </h4>
                <div class="profile-content-button-container">
                    <button class="button button-secondary" onclick="logOut()">Sign Out</button>
                </div>
            </div>
        </div>

        <div class="profile-content-body">
            <div class="profile-content-body-item">
                <h2>Manage Library Books</h2>
                <div class="explore-content-row-body">

                    <div class="facility-item material-card">
                        <div id="staff-item-1" class="material-card-header"></div>
                        <div class="material-card-content">
                            <h3>Insert Books</h3>
                            <p>Insert new books with style</p>
                        </div>
                        <div class="material-card-action-container">
                            <a href="./insert-book.php" class="material-card-action-button-text material-card-item-padding">Insert Books</a>
                        </div>
                    </div>

                    <div class="facility-item material-card">
                        <div id="staff-item-2" class="material-card-header"></div>
                        <div class="material-card-content">
                            <h3>Display Book List</h3>
                            <p>View, update or delete books from the library database in one place</p>
                        </div>
                        <div class="material-card-action-container">
                            <a href="#" class="material-card-action-button-text material-card-item-padding">Display books</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="profile-content-body-item">
                <h2>Manage Library Users</h2>
                <div class="explore-content-row-body">

                    <div class="facility-item material-card">
                        <div id="staff-item-1" class="material-card-header"></div>
                        <div class="material-card-content">
                            <h3>Insert Books</h3>
                            <p>Insert new books with style</p>
                        </div>
                        <div class="material-card-action-container">
                            <a href="#" class="material-card-action-button-text material-card-item-padding">Insert Books</a>
                        </div>
                    </div>

                    <div class="facility-item material-card">
                        <div id="staff-item-2" class="material-card-header"></div>
                        <div class="material-card-content">
                            <h3>Update Books</h3>
                            <p>Update existing book records</p>
                        </div>
                        <div class="material-card-action-container">
                            <a href="#" class="material-card-action-button-text material-card-item-padding">Update Books</a>
                        </div>
                    </div>

                    <div class="facility-item material-card">
                        <div id="staff-item-3" class="material-card-header"></div>
                        <div class="material-card-content">
                            <h3>Delete Books</h3>
                            <p>Remove selected book records from library database</p>
                        </div>
                        <div class="material-card-action-container">
                            <a href="#" class="material-card-action-button-text material-card-item-padding">Delete Books</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>

    </html>