<!DOCTYPE html>
<?php
    define('__CONFIG__', true);
    require_once "../inc/config.php";
?>
    <html>

    <head>
        <title>Facilities</title>
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
                        <a href="./team.php">Team</a>
                    </li>
                    <li>
                        <a href="#">Facilities</a>
                    </li>
                </ul>
            </div>

            <div class="about-us-container">
                <div class="about-us-header material-card">
                    <h3>MyLibrary Facilities</h3>
                    <p>Study spaces and computers are available around the clock to offer you choice and flexibility for your
                        study. You can access your library account and our rich digital collections from anywhere on or off
                        campus.
                    </p>
                </div>

                <div class="about-us-content">
                    <div class="facility-item material-card">
                        <div id="facility-item-1"  class="material-card-header">

                        </div>
                        <div class="material-card-content">
                            <h3>Assignment/Internet Computer</h3>
                            <p>There are 32 computers available for user to access the Internet as well as to complete the task.</p>
                        </div>
                        <div class="material-card-action-container">
                            <a href="#" class="material-card-action-button-text material-card-item-padding">LEARN MORE</a>
                        </div>
                    </div>

                    <div class="facility-item material-card">
                        <div id="facility-item-2"  class="material-card-header">

                        </div>
                        <div class="material-card-content">
                            <h3>Leisure Area</h3>
                            <p>Students can take a break at leisure area while playing games provided by the library</p>
                        </div>
                        <div class="material-card-action-container">
                            <a href="#" class="material-card-action-button-text material-card-item-padding">LEARN MORE</a>
                        </div>
                    </div>

                    <div class="facility-item material-card">
                        <div id="facility-item-3"  class="material-card-header">

                        </div>
                        <div class="material-card-content">
                            <h3>Printer</h3>
                            <p>Students can use photocopying service by using topup (Minimum RM5) at the Circulation Counter or
                            PPP</p>
                        </div>
                        <div class="material-card-action-container">
                            <a href="#" class="material-card-action-button-text material-card-item-padding">LEARN MORE</a>
                        </div>
                    </div>

                    <div class="facility-item material-card">
                        <div id="facility-item-4"  class="material-card-header">

                        </div>
                        <div class="material-card-content">
                            <h3>Lockers</h3>
                            <p>There are 308 lockers units available at the Main Campus and 36 units at the City Campus.</p>
                        </div>
                        <div class="material-card-action-container">
                            <a href="#" class="material-card-action-button-text material-card-item-padding">LEARN MORE</a>
                        </div>
                    </div>

                    <div class="facility-item material-card">
                        <div id="facility-item-5"  class="material-card-header">

                        </div>
                        <div class="material-card-content">
                            <h3>Hoverboard</h3>
                            <p>Hoverboard is a new service that gives a new experience for more leisure, fascinating, and interest
                                to the users in the library.</p>
                        </div>
                        <div class="material-card-action-container">
                            <a href="#" class="material-card-action-button-text material-card-item-padding">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once "../footer.php" ?>
    </body>

    </html>