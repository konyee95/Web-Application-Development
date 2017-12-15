<!DOCTYPE html>
<?php
    define('__CONFIG__', true);
    require_once "inc/config.php";
    Page::checkIfStaffIsLoggedIn();

    $studentID = $_GET['data'];
?>
    <html>

    <head>
        <title>Reset Password</title>
        <?php require_once "inc/general-config.php" ?>
    </head>

    <body class="white-bg">
        <div id="navigation">
            <div class="auth-nav-header">
                <a class="site-title" href="./index.php">MyLibrary</a>
            </div>
        </div>
        <div class="auth-container-header some-shadow">
            <p class="auth-title">Reset Password for User <?php echo strtoupper($studentID) ?></p>
        </div>
        <div class="auth-container-body">
            <div class="auth-form-container">
                <form id="login-form" class="auth-form" name="login">
                    <div class="material-input-container">
                        <input id="new-password-1" class="material-input" placeholder="New Password" type="password" required>
                        <span class="material-input-highlight"></span>
                        <span class="material-input-bar"></span>
                        <label class="material-input-label"></label>
                    </div>
                    
                    <div class="material-input-container">
                        <input id="new-password-2" class="material-input" placeholder="New Password Again" type="password" required>
                        <span class="material-input-highlight"></span>
                        <span class="material-input-bar"></span>
                        <label class="material-input-label"></label>
                    </div>

                    <div id="error-container" class="error-container hide-auth-form">
                        <p id="error-text" class="error-text"></p>
                    </div>

                    <div class="button-group">
                        <button type="button" name="reset_button" class="button button-primary" onclick="resetPassword('<?php echo $studentID; ?>')">Reset Password</button>
                        <butoon type="button" class="button button-secondary" onclick="goBack()">&nbsp &nbsp Cancel &nbsp &nbsp</button>
                    </div>
                </form>
            </div>
            <div class="auth-form-empty">

            </div>
        </div>
    </body>

    </html>