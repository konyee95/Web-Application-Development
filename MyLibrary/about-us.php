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
                <div id="about-us-background" class="material-card">
                    <div id="about-us-background-image" class=""></div>
                    <div id="about-us-background-text" class="">
                        <h3>About MyLibrary</h3>
                        <p>On 5 September 2005, the Library was relocated from the Temporary Campus to the Industrial Campus,
                            which began its operation on 12 September 2005. With an area of 2,229 square meters, the Library
                            could accommodate approximately 400 users. Moreover, the Main Library (432 square meters), provides
                            a seating capacity of 120 users which caters to the needs of students from both the Faculty of
                            Electrical Engineering (FKE) and the Faculty of Electronics and Computer Engineering (FKEKK).</p>
                        <p>The Library at the Main Campus (10,063.68 square meters) provides a seating capacity of 500 users
                            at any one time. The Industrial Campus Library was closed on 3 September 2009. On 21 April 2011,
                            the Library opened a branch at the Industrial Campus, Hang Tuah Jaya, Melaka to provide reference
                            facilities for the students from both the Faculty of Mechanical (FKM) and Faculty of Technology
                            Engineering (FTK). With an area of 2,229 square meters, the Library can accommodate approximately
                            400 users.</p>
                    </div>
                </div>

                <div class="about-us-content">
                    <div class="about-us-content-item material-card">
                        <div id="about-us-item-1" class="material-card-header"></div>
                        <div class="material-card-content">
                            <h3>Mission</h3>
                            <p>The MyLibrary's mission is to develop and maintain online resources and services in support of
                                the present and future teaching.</p>
                        </div>
                        <div class="material-card-action-container">
                            <a href="#" class="material-card-action-button-text material-card-item-padding">LEARN MORE</a>
                        </div>
                    </div>

                    <div class="about-us-content-item material-card">
                        <div id="about-us-item-2" class="material-card-header"></div>
                        <div class="material-card-content">
                            <h3>Eligibility for Services</h3>
                            <p>To use the services, you must be a student of Universiti Teknikal Malaysia Melaka.</p>
                        </div>
                        <div class="material-card-action-container">
                            <a href="./login.php" class="material-card-action-button-text material-card-item-padding">LOGIN</a>
                            <a href="./register.php" class="material-card-action-button-text material-card-item-padding">REGISTER</a>
                        </div>
                    </div>

                    <div class="about-us-content-item material-card">
                        <div id="about-us-item-3" class="material-card-header"></div>
                        <div class="material-card-content">
                            <h3>Enquiries and support</h3>
                            <p>For all enquiries and support, please contact the MyLibrary team by telephone on +606-3316830.</p>
                        </div>
                        <div class="material-card-action-container">
                            <a href="#" class="material-card-action-button-text material-card-item-padding">LEARN MORE</a>
                        </div>
                    </div>

                    <div class="about-us-content-item material-card">
                        <div id="about-us-item-4" class="material-card-header"></div>
                        <div class="material-card-content">
                            <h3>Availability</h3>
                            <p>This service is available to you any time any where. You can access all resources from any computer
                                with internet access including your own PC at home.</p>
                        </div>
                        <div class="material-card-action-container">
                            <a href="#" class="material-card-action-button-text material-card-item-padding">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once "footer.php" ?>
    </body>

    </html>