<!DOCTYPE html>
<?php
    define('__CONFIG__', true);
    require_once "inc/config.php";
?>
    <html>

    <head>
        <title>Login</title>
        <?php require_once "inc/general-config.php" ?>
    </head>

    <body onload="init()">
        <div id="navigation">
            <div class="auth-nav-header">
                <a class="site-title" href="./index.php">MyLibrary</a>
                <a href="./register.php" class="button button-secondary">Need an account?</a>
            </div>
        </div>
        <div class="auth-container-header some-shadow">
            <p class="auth-title">Login to MyLibrary</p>
        </div>
        <div class="auth-container-body">
            <div class="auth-form-container">
                <form id="login-form" class="auth-form">
                    <div class="material-input-container">
                        <input id="student-id" type="text" class="material-input" placeholder="Student ID" required>
                        <span class="material-input-highlight"></span>
                        <span class="material-input-bar"></span>
                        <label class="material-input-label"></label>
                    </div>
                    
                    <div class="material-input-container">
                        <input id="password" class="material-input" placeholder="password" type="password" required>
                        <span class="material-input-highlight"></span>
                        <span class="material-input-bar"></span>
                        <label class="material-input-label"></label>
                    </div>

                    <div class="error-container">
                        <p class="error-text"></p>
                    </div>
                    
                    <div class="button-group">
                        <button type="submit" name="login_button" class="button button-primary">&nbsp &nbsp &nbsp Login &nbsp &nbsp &nbsp </button>
                        <a name="forgot_password_button" class="button button-primary">Forgot Password?</a>
                    </div>
                </form>
                <p class="user-note">**MyLibrary is only available for UTeM staffs and students.</p>
            </div>
            <div class="auth-form-empty">

            </div>
        </div>
    </body>

    </html>