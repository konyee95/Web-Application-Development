<!DOCTYPE html>
<?php
    define('__CONFIG__', true);
    require_once "../inc/config.php";
?>
    <html>

    <head>
        <title>Services</title>
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
                        <a href="#">Services</a>
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

        <div class="about-us-container margin-leftright">
            <div class="about-us-header material-card">
                <h3>Services</h3>
                <p>Library Services is responsible for managing information resources for learning, teaching and research and
                    providing support on their use.
                </p>
            </div>

            <div class="services-content">
                <div id="service-item-1" class="services-item material-card">
                    <div id="services-image-1"></div>
                    <div class="service-item-text">
                        <h3>Borrowing</h3>
                        <p>Only individuals registered with the Library may borrow books. Books can be borrowed at the Circulation
                            Counter or Self-check Machine. Borrowers will be given a slip for reference. Borrowers are encouraged
                            to view their borrowing transactions online.The borrowing of all Media Resources like cassette
                            video, cassette audio, slades and digital sources like video CD, CD-ROM, diskette and DVD should
                            be done at the Circulation Counter.</p>
                    </div>
                </div>

                <div id="service-item-1" class="services-item material-card">
                    <div id="services-image-1"></div>
                    <div class="service-item-text">
                        <h3>Returning</h3>
                        <p>Library materials borrowed must be returned to the Circulation Counter or by book drop which is available
                            24/7 before the due date. Fines will be imposed for items that are overdue. Students should return
                            all library materials when they withdraw, discontinue, defer or graduate from the university
                            programme.
                        </p>
                    </div>
                </div>

                <div id="service-item-1" class="services-item material-card">
                    <div id="services-image-1"></div>
                    <div class="service-item-text">
                        <h3>Renewal</h3>
                        <p>Books can be renewed two (2) times only. Renewal can be done at the Circulation Counter or through
                            online and should be done before the due date. Library materials which have been borrowed may
                            be renewed provided that they have not been reserved by another user and have not had any over
                            due date or fines.</p>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once "../footer.php" ?>
    </body>

    </html>