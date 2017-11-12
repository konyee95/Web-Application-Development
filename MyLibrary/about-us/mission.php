<html>

<head>
    <title>Mission</title>
    <?php require_once "../inc/about-config.php" ?>
</head>

<body onload="init()">
    <div id="main-container">
        <div id="side-panel" class="side-panel">
            <div id="user-account-header" class="user-account-header">
                <p>User Account</p>
            </div>
            <div id="user-account-container" class="user-account-container">
                <p>Log in your account to save your favourite books and read later!</p>
                <a class="button button-primary" href="../login.php">Login</a>
            </div>
        </div>

        <div id="navigation">
            <ul>
                <li>
                    <a href="../index.php">HOME</a>
                </li>
                <li>
                    <a href="../about-us.php">ABOUT US</a>
                </li>
                <li>
                    <a href="../explore.php">EXPLORE</a>
                </li>
                <li>
                    <a href="../profile.php">PROFILE</a>
                </li>
            </ul>

            <div id="search-container" class="search-container">
                <form id="search-form" class="search-form" action="" method="GET">
                    <input id="search-input" class="search-input" type="text" placeholder="Search" />
                </form>
                <div id="hamburger-menu" class="hamburger-container" onclick="hamburgerMenu(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </div>
        </div>
        <div id="navigation-about-us">
            <h3 class="textwhite navigation-text">About the Library</h3>
            <ul>
                <li>
                    <a href="#">Mission</a>
                </li>
                <li>
                    <a href="./services.php">Services</a>
                </li>
                <li>
                    <a href="./team.php">Team</a>
                </li>
                <li>
                    <a href="./facilities.php">Facilities</a>
                </li>
            </ul>
        </div>
    </div>

    <div id="about-us-container" class="margin-leftright">
        <h2 class="about-us-container-title">Mission, Vision & Client's Charter</h2>
        <div class="row">
            <div id="mission" class="flex padding mission-block1">
                <h2>Mission</h2>
                <p>To provide excellent information resources and references, as well as to deliver quality services using the
                    latest technology in tandem with the vision and mission of the university.</p>
            </div>
            <div id="vision" class="flex padding mission-block2">
                <h2>Vision</h2>
                <p>To be a renowned, comprehensive and competitive centre for information in technical fields</p>
            </div>

            <div id="client-charter" class="flex padding mission-block3">
                <h2>Client's Charter</h2>
                <p>We, the staff of UTeM Library, pledge that we are to deliver efficient, accurate and quality services by
                    putting emphasis on the clients' satisfaction.</p>
            </div>
        </div>
    </div>

</body>

</html>