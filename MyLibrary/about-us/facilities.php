<html>

<head>
    <title>Facilities</title>

    <!-- styles -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="../css/main.css" />
    <link rel="stylesheet" type="text/css" href="../css/about-us.css" />
    <link rel="stylesheet" type="text/css" href="../css/navigation-bar.css" />
    <link rel="stylesheet" type="text/css" href="../css/hamburger-menu.css" />
    <link rel="stylesheet" type="text/css" href="../css/material-button.css" />

    <!-- scripts -->
    <script src="../js/main.js"></script>

    <!-- meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
                    <a href="./team.php">Team</a>
                </li>
                <li>
                    <a href="#">Facilities</a>
                </li>
            </ul>
        </div>
    </div>

    <div id="about-us-container">
        <div id="facilities" class="margin-leftright">
            <h2 class="about-us-container-title">Facilities</h2>
            <div class="column">
                <div class="row">
                    <div class="flex padding faci-block1">
                        <h3>Seminar Room</h3>
                        <p class="textgrey">
                            There are 2 seminar rooms that are available to 32 ​​users at one time. The seminar room is also equipped by TV, LCD projector,
                            screen, tables and chairs.
                        </p>
                        <img src="../image/seminar.jpg" class="img-faci"/>
                    </div>
                    <div class="flex padding faci-block2">
                        <h3>Viewing Room</h3>
                        <p class="textgrey">There are viewing rooms available to users to view selected programs related to teaching, learning,
                            research and consultation. Prior booking is made at the Media Counter. Viewing Room which can
                            accommodate a maximum of 100 users.
                        </p>
                    </div>
                    <div class="flex padding faci-block3">
                        <h3>Discussion Room</h3>
                        <p class="textgrey">These rooms can only be used by registered library members. Prior booking is made at the Circulation
                            Counter. These rooms can only be used for 2 hours (max) and can accommodate a maximum of 3 to
                            6 users. Users are responsible for ensuring that the room is kept neat and the electricity is
                            turned off before leaving.</p>
                        <img src="../image/bilikperbincangan1.jpg" class="img-faci"/>
                    </div>
                    <div class="flex padding faci-block4">
                        <h3>Viewing Area</h3>
                        <p class="textgrey">Through space can accommodate about 49 users at one time. This space is provided for users to watch
                            exhibition activities provided by the Library UTeM and the freedom of entry and exit. Orders
                            may also be allowed if there is a demand for the use of a group. Also equipped with a television,
                            LCD projector, screen, tables and chairs.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="flex padding faci-block2">
                        <h3>Online Database Room</h3>
                        <p class="textgrey">This room provides 48 computers for user to accessi the online databases. Orders may also be allowed
                            if there is a demand for the use of a group. Also equipped with an LCD projector and screen</p>
                        <img src="../image/databaseroom.jpg" class="img-faci" />
                    </div>
                    <div class="flex padding faci-block3">
                        <h3>Audio/Visual Room</h3>
                        <p class="textgrey">10 Audio/Visual (AV) rooms which can accommodate a maximum of 1 users for each room at one time.
                            Users are also allowed to borrow media equipment available such as headphones and other media
                            materials.
                        </p>
                    </div>
                    <div class="flex padding faci-block4">
                        <h3>Assignment/Internet Computer</h3>
                        <p class="textgrey">There are 32 computers available for user to access the Internet as well as to complete the task</p>
                        <img src="../image/computers.png" class="img-faci" />
                    </div>
                    <div class="flex padding faci-block1">
                        <h3>Lockers</h3>
                        <p class="textgrey">There are 308 lockers units available at the Main Campus and 36 units at the City Campus.</p>
                        <img src="../image/loker1.jpg" class="img-faci"/>
                        <p class="textgrey">Request for rental are made at the Circulation Counter. The rental rate is as follows:</p>
                        <ul>
                            <li>Big:RM5.00/semester</li>
                            <li>Big:RM3.00/semester</li>
                        </ul>
                        <p class="textgrey">Fines will be imposed at 20 cents per day for overdue, RM1 for the lost of keychain and RM10 for
                            the lost of keys.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="flex padding faci-block3">
                        <h3>Open Carrel </h3>
                        <p class="textgrey">There are 32 open carrels available for users at the Main Campus and 7 open carrels at the City Campus.
                            The rooms can be accessed anytime during the library's operational hour.</p>
                    </div>
                    <div class="flex padding faci-block4">
                        <h3>Laptop</h3>
                        <p class="textgrey">Using your own laptops in the library is allowed. The safety of your laptop is on your responsibility.
                            Users can use the power supply provided at various areas.</p>
                    </div>
                    <div class="flex padding faci-block1">
                        <h3>WiFi Access</h3>
                        <p class="textgrey">Users can have free access to the library through WiFi services.</p>
                    </div>
                    <div class="flex padding faci-block2">
                        <h3>Photocopying and Printing Service</h3>
                        <p class="textgrey">Users can use photocopying service by using topup (Minimum RM5) at the Circulation Counter or PPPK</p>
                        <img src="../image/printing.jpg" class="img-faci" />
                    </div>
                </div>
                <div class="row">
                    <div class="flex padding faci-block4">
                        <h3>Self-Check Machine</h3>
                        <p class="textgrey">Users can use Self-Check Machine to borrow library materials by themselves.</p>
                        <img src="../image/selfcheck.jpg" class="img-faci" />
                    </div>
                    <div class="flex padding faci-block1">
                        <h3>Book Drop</h3>
                        <p class="textgrey">A book drop is available for retuning books and it is open 24/7.</p>
                        <img src="../image/bookdrop1.jpg" class="img-faci"/>
                    </div>
                    <div class="flex padding faci-block2">
                        <h3>Scanner</h3>
                        <p class="textgrey">Users can use scanner at media Counter in Main Campus Library and at Circulation Counter in City
                            Campus Library.</p>
                    </div>
                    <div class="flex padding faci-block3">
                        <h3>WebOPAC</h3>
                        <p class="textgrey">Users can easily use Web OPAC service to help them searching for the books</p>
                    </div>
                </div>
                <div class="row">
                    <div class="flex padding faci-block1">
                        <h3>Electronic Info-Board</h3>
                        <p class="textgrey">Electronic Info-Board view new information and latest update regarding the library/campus.</p>
                    </div>
                    <div class="flex padding faci-block2">
                        <h3>Gallery</h3>
                        <p class="textgrey">Provide information regarding Malacca and UTeM</p>
                        <img src="../image/gallery.jpg" class="img-faci" />
                    </div>
                    <div class="flex padding faci-block3">
                        <h3>24 Hours Reading Area</h3>
                        <p class="textgrey">This area is available to users for 24 hours a day</p>
                    </div>
                    <div class="flex padding faci-block4">
                        <h3>Leisure Area</h3>
                        <p class="textgrey">Users can take a break at leisure area while playing games provided by the library</p>
                        <img src="../image/leisure-area.jpg" class="img-faci" />
                    </div>
                </div>
                <div class="row">
                    <div class="flex padding faci-block2">
                        <h3>iPad Lending</h3>
                        <p class="textgrey">Users can borrow our iPad for free as long as its being used in the library. For further info, click
                            here
                        </p>
                    </div>
                    <div class="flex padding faci-block3">
                        <h3>Hoverboard</h3>
                        <p class="textgrey">Hoverboard is a new service that gives a new experience for more leisure, fascinating, and interest
                            to the users in the library.</p>
                        <img src="../image/hoverboard.jpg" class="img-faci"/>
                    </div>
                    <div class="flex padding faci-block4">
                        <h3></h3>
                        <p></p>
                    </div>
                    <div class="flex padding faci-block1">
                        <h3></h3>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>