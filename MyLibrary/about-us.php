<html>

<head>
    <title>About Us</title>
    <?php require_once "inc/general-config.php" ?>
</head>

<body onload="init()">
    <div id="main-container">
        <div id="side-panel" class="side-panel">
            <div id="user-account-header" class="user-account-header">
                <p>User Account</p>
            </div>
            <div id="user-account-container" class="user-account-container">
                <p>Log in your account to save your favourite books and read later!</p>
                <a class="button button-primary" href="./login.php">Login</a>
            </div>
        </div>

        <div id="navigation">
            <ul>
                <li>
                    <a href="./index.php">HOME</a>
                </li>
                <li>
                    <a href="#">ABOUT US</a>
                </li>
                <li>
                    <a href="./explore.php">EXPLORE</a>
                </li>
                <li>
                    <a href="./profile.php">PROFILE</a>
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

        <div id="navigation-about-us" class="some-shadow">
            <h3 class="textwhite navigation-text">About the Library</h3>
            <ul>
                <li>
                    <a href="./about-us/mission.php">Mission</a>
                </li>
                <li>
                    <a href="./about-us/services.php">Services</a>
                </li>
                <li>
                    <a href="./about-us/team.php">Team</a>
                </li>
                <li>
                    <a href="./about-us/facilities.php">Facilities</a>
                </li>
            </ul>
        </div>

        <div class="about-us-container">
            <div class="about-us-container-row">
                <div id="mission" class="about-us-row-item">
                    <h2>Mission of the Online Library</h2>
                    <p>The Online Library's mission is to develop and maintain online resources and services in support of the
                        present and future teaching, learning and research needs of the University of London's Distance learning
                        Community.
                    </p>
                </div>
                <div id="service" class="about-us-row-item block-color">
                    <h2 class="textbrown">Eligibility for Services</h2>
                    <p class="textblack">To use the services, you must be enrolled with the University's International Programmes or a member
                        of staff involved in delivering and supporting the International Programmes and directly employed
                        by the University of London.</p>
                    <p class="textblack">To access many of the online resources, you must have an Athens Account. Athens is a national authentication
                        service. To give the Online Library the necessary details to register you for an Athens account,
                        <a href="http://onlinelibrary.london.ac.uk/resources/register-athens">click here</a>
                    </p>
                </div>
            </div>

            <div class="about-us-container-row">
                <div id="library-team" class="about-us-row-item block-color">
                    <h2 class="textbrown">The Online Library Team</h2>
                    <ul>
                        <li>Enquiries Librarian</li>
                        <li>Law Librarian</li>
                        <li>Head of Library Services</li>
                    </ul>
                    <p class="textblack">For all enquiries and support, please contact the Online library team at onlinelibrary@shl.lon.ac.uk
                        or by telephone on +4420 7862 8478.</p>
                    <p class="textblack">You can also use the
                        <a href="http://onlinelibrary.london.ac.uk/about/contact-us">web-form</a>.</p>
                </div>
                <div id="availability" class="about-us-row-item">
                    <h2>Availability</h2>
                    <p>This service is available to you any time any where. You can access all resources from any computer with
                        internet access including your own PC at home. If you have problems accessing the service, please
                        contact the Online Library enquiry service at
                        <a href="mailto:webmaster@example.com">webmaster@example.com</a>.
                    </p>
                </div>
            </div>
        </div>

    </div>
</body>

</html>