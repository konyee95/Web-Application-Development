<!DOCTYPE html>
<?php
    define('__CONFIG__', true);
    require_once "inc/config.php";
?>
    <html>

    <head>
        <title>MyLibrary</title>
        <?php require_once "inc/general-config.php" ?>
    </head>

    <body onload="init()">
        <div id="main-container">
            <?php include_once "./widget/side-panel.php" ?>

            <div id="navigation" class="some-shadow">
                <ul>
                    <li>
                        <a href="./index.php">HOME</a>
                    </li>
                    <li>
                        <a href="./about-us.php">ABOUT US</a>
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

            <div id="info-container" class="sticky-header-padding">
                <div class="intro-container">
                    <div class="slides-container">
                        <img src="image/utem-library.jpg" class="mySlides" />
                        <img src="image/image1.jpg" class="mySlides" />
                        <img src="image/image2.jpg" class="mySlides" />
                        <img src="image/image3.jpg" class="mySlides" />
                        <img src="image/image4.jpg" class="mySlides" />
                        <img src="image/image5.jpg" class="mySlides" />
                        <img src="image/image6.jpg" class="mySlides" />
                        <img src="image/image7.jpg" class="mySlides" />
                        <img src="image/image8.jpg" class="mySlides" />
                        <img src="image/image9.jpg" class="mySlides" />
                        <img src="image/image10.jpg" class="mySlides" />
                        <img src="image/image11.jpg" class="mySlides" />
                        <button class="image-button display-left" onclick="plusDivs(-1)">&#10094;</button>
                        <button class="image-button display-right" onclick="plusDivs(1)">&#10095;</button>
                    </div>
                    <div class="intro-sidebar material-card">
                        <div class="intro-sidebar-header">

                        </div>
                        <div class="intro-sidebar-content">
                            <h2>UTeM MyLibrary</h2>
                            <h5>A service dedicated to students of the Universiti Teknikal Malaysia Melaka's Distance learning
                                community. We provide online resources, professional support and guidance to all our students
                                whenever, and from wherever they have chosen to study.
                            </h5>
                            <h5>Operation Hour: 10am - 10pm</h5>
                        </div>
                    </div>
                </div>

                <div class="material-card-container">
                    <div class="material-card-container-row">

                        <div class="material-card material-card-large">
                            <div class="material-card-header material-card-item-padding card-image-1">

                            </div>
                            <div class="material-card-content">
                                <h3>Online Library Newsletter Issue 6</h3>
                                <p>The education sector needs to be given priority in the upcoming Budget 2018, to ensure the
                                    human capital development agenda and quality human resource development can be achieved
                                    based on the needs of the current job market.
                                    <br/>
                                    <br/> Universiti Teknologi Malaysia Melaka (UTeM) vice-chancellor Prof Datuk Dr Shahrin Sahib
                                    said sufficient allocation for the education sector in next year's budget would be in
                                    line with the focus on the Industrial Revolution 4.0, through the enhancement of Technical
                                    Education and Vocational Training (TVET).</p>
                            </div>
                            <div class="material-card-action-container">
                                <a href="http://english.astroawani.com/malaysia-news/education-sector-needs-be-prioritised-budget-2018-158571" class="material-card-action-button-text material-card-item-padding">LEARN MORE</a>
                            </div>
                        </div>

                        <div class="material-card-compound-container material-card-item-padding-left">
                            <div class="material-card material-card-small">
                                <div class="material-card-header material-card-container-row card-center">
                                    <img src="image/dictionary.png" class="dictionary-image" />
                                    <div class="material-card-item-padding-left">
                                        <h3>Word of the day</h3>
                                        <p>Benevolent</p>
                                        <h5>Well meaning and kindly.</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="material-card material-card-medium material-card-item-margin-top">
                                <div class="material-card-content">
                                    <h3>Turnitin Accessibility</h3>
                                    <p>Dear users, please be informed that the UTeM Turnitin account is accessible again. Any
                                        problems or questions, please contact Pn Norshahila Che Din, UTeM's Turnitin Administrator.</p>
                                    <p>To use Turnitin (Plagiarism Checker), lecturers need to first register and provide Class
                                        ID and Password to the students. By using the Class ID and Password, students can
                                        register and check the percentage of plagiarism in Turnitin.</p>
                                </div>
                                <div class="material-card-action-container material-card-item-margin-top">
                                    <a href="https://turnitin.com/login_page.asp?err=1&lang=en_us" class="material-card-action-button-text material-card-item-padding">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    var slideIndex = 9;
                    showDivs(slideIndex);

                    function plusDivs(n) {
                        showDivs(slideIndex += n);
                    }

                    function showDivs(n) {
                        var i;
                        var x = document.getElementsByClassName("mySlides");
                        if (n > x.length) {
                            slideIndex = 1
                        }
                        if (n < 1) {
                            slideIndex = x.length
                        }
                        for (i = 0; i < x.length; i++) {
                            x[i].style.display = "none";
                        }
                        x[slideIndex - 1].style.display = "block";
                        x[slideIndex - 1].style.width = "750px";
                        x[slideIndex - 1].style.height = "65vh";
                    }
                </script>
    </body>

    </html>