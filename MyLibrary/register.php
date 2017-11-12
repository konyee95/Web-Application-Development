<!DOCTYPE html>
<html>

<head>
    <title>Register</title>

    <!-- styles -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" type="text/css" href="./css/navigation-bar.css" />
    <link rel="stylesheet" type="text/css" href="./css/auth-form.css" />
    <link rel="stylesheet" type="text/css" href="./css/material-input.css" />
    <link rel="stylesheet" type="text/css" href="./css/material-button.css" />

    <!-- scripts -->
    <script src="./js/main.js"></script>

    <!-- meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>

<body onload="init()">
    <div id="navigation">
        <div class="auth-nav-header">
            <a class="site-title" href="./index.php">MyLibrary</a>
            <a href="./login.php" class="button button-secondary">Have an account?</a>
        </div>
    </div>
    <div class="auth-container-header some-shadow">
        <p class="auth-title">Register an account</p>
    </div>
    <div class="auth-container-body">
        <div class="auth-form">
            <form id="login-form" class="login-form" action="" method="POST">
                <div class="material-input-container">
                    <input type="text" class="material-input" placeholder="Student ID" required>
                    <span class="material-input-highlight"></span>
                    <span class="material-input-bar"></span>
                    <label class="material-input-label"></label>
                </div>
                <div class="material-input-container">
                    <input type="text" class="material-input" placeholder="password" required>
                    <span class="material-input-highlight"></span>
                    <span class="material-input-bar"></span>
                    <label class="material-input-label"></label>
                </div>
                <div class="material-input-container">
                    <input type="text" class="material-input" placeholder="password again" required>
                    <span class="material-input-highlight"></span>
                    <span class="material-input-bar"></span>
                    <label class="material-input-label"></label>
                </div>
            </form>
            <div class="button-group">
                <a href="#" class="button button-primary"> &nbsp &nbsp Register &nbsp &nbsp </a>
            </div>
            <p class="user-note">**MyLibrary is only available for UTeM staffs and students.</p>
        </div>
        <div class="auth-form-empty">

        </div>
    </div>
</body>

</html>