<!DOCTYPE html>
<?php
    define('__CONFIG__', true);
    require_once "inc/config.php";
?>

<html>

<head>
    <title>About Us</title>
    <?php require_once "inc/general-config.php" ?>
</head>

<body onload="init()">
    <div id="main-container">
        <?php include_once "./widget/side-panel.php" ?>

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
                    <h2>Mission of MyLibrary</h2>
                    <p>The MyLibrary's mission is to develop and maintain online resources and services in support of the
                        present and future teaching, learning and research needs of the University of London's Distance learning
                        Community.
                    </p>
                </div>
                <div id="service" class="about-us-row-item block-color">
                    <h2 class="textbrown">Eligibility for Services</h2>
                    <p class="textblack">To use the services, you must be a student of Universiti Teknikal Malaysia Melaka.</p>
                    <p class="textblack">To access many of the online resources, you must have an MyLibrary Account.To register an account,
                        <a href="./register.php">click here</a>.
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
                    <p class="textblack">For all enquiries and support, please contact the MyLibrary team at webmaster@example.com<
                        or by telephone on +4420 7862 8478.</p>
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