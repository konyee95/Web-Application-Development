<!DOCTYPE html>
<html>

<head>
    <title>MyLibrary</title>
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
                <div class="intro-sidebar colorbox1">
                    <div class="intro-sidebar-header">
                        <marquee>
                            <h1>Welcome to MyLibrary</h1>
                        </marquee>
                    </div>
                    <div class="intro-sidebar-content">
                        <h3>A service dedicated to students of the Universiti Teknikal Malaysia Melaka's Distance learning community.
                            We provide online resources, professional support and guidance to all our students whenever,
                            and from wherever they have chosen to study.
                        </h3>
                        <h3>This service is available to you any time any where. You can access all resources from any computer
                            with internet access including your own PC at home. If you have problems accessing the service,
                            please contact the Online Library enquiry service at
                            <a href="mailto:webmaster@example.com">webmaster@example.com</a>.
                        </h3>
                    </div>
                </div>
            </div>

            <div id="hot-topics">
                <h2>Hot Topics</h2>
                <div class="column">
                    <div class="row">
                        <div id="topic1" class="colorbox1">
                            <h3>Ask a Librarian Live Pilot</h3>
                            <p>11 Oct 2017</p>
                            <p>The Online Library team is pleased to announce that we are piloting a live chat service. Students
                                are able to ask librarians questions in real time.</p>
                        </div>

                        <div id="topic2" class="colorbox2">
                            <h3>Online Library Newsletter Issue 6</h3>
                            <p>18 Oct 2017</p>
                            <p>In this issue we give you an update on what's new with the Online Library, including new resources,
                                an improvement to Summon search.</p>
                        </div>

                        <div id="topic3" class="colorbox1">
                            <h3>Change to the Dawsons Ebook Collection</h3>
                            <p>24 Oct 2017</p>
                            <p>Please note that ebooks in the Dawsons Ebook Collection cannot currently be downloaded onto Apple
                                devices. Dawsons are aware of the problem and will make a change to their system on the 31st
                                of October to fix it.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div id="topic4" class="colorbox2">
                            <h3>New Fine Rates</h3>
                            <p>02 Nov 2017</p>
                            <p>Attention to all users! NEW FINE RATES as mention below. Effective 2nd Nov 2017 (TODAY). Take
                                note guys! TQ.</p>
                            <center>
                                <img src="./image/hot-topic6.jpg" class="hot-topic-img" />
                            </center>
                        </div>

                        <div id="topic5" class="colorbox1">
                            <h3>Turnitin Accessibility</h3>
                            <p>09 Nov 2017</p>
                            <p>Dear users, please be informed that the UTeM Turnitin account is accessible again. Any problems
                                or questions, please contact Pn Norshahila Che Din, UTeM's Turnitin Administrator.</p>
                        </div>

                        <div id="topic6" class="colorbox2">
                            <h3>Journal List 2017</h3>
                            <p>21 Nov 2017</p>
                            <p>The MyLibrary Team has list out the journals available in MyLibrary online library in 2017.The
                                MyLibrary Team has list out the journals available in MyLibrary online library in 2017.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var slideIndex = 1;
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
            x[slideIndex - 1].style.width = "880px";
            x[slideIndex - 1].style.height = "85vh";
        }
    </script>
</body>

</html>