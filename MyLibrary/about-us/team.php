<!DOCTYPE html>
<?php
    define('__CONFIG__', true);
    require_once "../inc/config.php";
?>
    <html>

    <head>
        <title>Team</title>
        <?php require_once "../inc/about-config.php" ?>
    </head>

    <body onload="init()">
        <div id="main-container">
            <?php include_once "../widget/side-panel.php" ?>

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
                    <?php include_once "../widget/search-form.php" ?>
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

            <div class="about-us-container">
                <div class="about-us-header material-card">
                    <h3>MyLibrary Team</h3>
                    <p>UTem MyLibrary offers a range of employee engagement opportunities, perfect for team-building and fullfilling
                        Corporate Social Responsibility objectives. Depending on your company’s level of membership, the
                        Library can facilitate group volunteer projects, diversity and inclusion workshops, as well as behind-the-scenes
                        tours of our world-renowned collections of books and research materials.
                    </p>
                </div>

                <div class="team-content">
                    <div class="team-item material-card">
                        <div id="team-item-1"  class="material-card-header">

                        </div>
                        <div class="material-card-content">
                            <h3>Sarah Southwood: Enquiries Librarian</h3>
                            <p>Sarah is responsible for co-ordinating the Online library Enquiry Service. This includes providing help
                            and support at the point of need as well as helping learners to discover and make effective use of
                            all Online Library’s collections.</p>
                        </div>
                        <div class="material-card-action-container">
                            
                        </div>
                    </div>

                    <div class="team-item material-card">
                        <div id="team-item-2"  class="material-card-header">

                        </div>
                        <div class="material-card-content">
                            <h3>Angela Boots: Law Librarian</h3>
                            <p>Angela is responsible for the development and management of the Online Library’s law collection and for
                        offering specialist training and support to all laws programme students and faculty.</p>
                        </div>
                        <div class="material-card-action-container">
                            
                        </div>
                    </div>

                    <div class="team-item material-card">
                        <div id="team-item-3"  class="material-card-header">

                        </div>
                        <div class="material-card-content">
                            <h3>Dr. Sandra Tury</h3>
                            <p>Sandra is responsible for providing leadership and overall development of a user-focused Library and
                            Information service that meets the University's learning, teaching and research requirements.</p>
                        </div>
                        <div class="material-card-action-container">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once "../footer.php" ?>
    </body>

    </html>