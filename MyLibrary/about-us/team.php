<html>

<head>
    <title>Team</title>
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
                    <a href="./mission.php">Mission</a>
                </li>
                <li>
                    <a href="./services.php">Services</a>
                </li>
                <li>
                    <a href="#">Team</a>
                </li>
                <li>
                    <a href="./facilities.php">Facilities</a>
                </li>
            </ul>
        </div>
    </div>

    <div id="about-us-container" class="margin-leftright">
        <h2 class="about-us-container-title">The Online Library Team</h2>
        <div id="library-team" class="row">
            <div id="member1" class="flex padding member-block1">
                <img src="../image/member1.PNG" class="center" />
                <h3 class="bold">Sarah Southwood: Enquiries Librarian</h3>
                <p class="textgrey">Sarah is responsible for co-ordinating the Online library Enquiry Service. This includes providing help and
                    support at the point of need as well as helping learners to discover and make effective use of all Online
                    Library’s collections.</p>
            </div>

            <div id="member2" class="flex padding member-block2">
                <img src="../image/member2.PNG" class="center" />
                <h3 class="bold">Angela Boots: Law Librarian</h3>
                <p class="textgrey">Angela is responsible for the development and management of the Online Library’s law collection and for offering
                    specialist training and support to all laws programme students and faculty.</p>
            </div>

            <div id="member3" class="flex padding member-block3">
                <img src="../image/member3.PNG" class="center" />
                <h3 class="bold">Dr. Sandra Tury: Head of Library Services, University of London International Programmes</h3>
                <p class="textgrey">Sandra is responsible for providing leadership and overall development of a user-focused Library and Information
                    service that meets the University's learning, teaching and research requirements.</p>
            </div>
        </div>
        <p>For all enquiries and support, please contact the Online library team at onlinelibrary@shl.lon.ac.uk or by telephone
            on +4420 7862 8478.</p>
        <p>You can also use the
            <a href="#">web-form</a>.</p>
    </div>

</body>

</html>