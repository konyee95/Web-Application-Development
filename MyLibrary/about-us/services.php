<html>

<head>
    <title>Services</title>
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
        <h2 class="about-us-container-title">Services</h2>
        <div class="about-us-container-row">
            <div id="borrowing" class="about-us-row-item service-block1">
                <h2 class="textblack">Borrowing</h2>
                <p class="textgrey">Only individuals registered with the Library may borrow books. Books can be borrowed at the Circulation Counter
                    or Self-check Machine. Borrowers will be given a slip for reference. Borrowers are encouraged to view
                    their borrowing transactions online.The borrowing of all Media Resources like cassette video, cassette
                    audio, slades and digital sources like video CD, CD-ROM, diskette and DVD should be done at the Circulation
                    Counter.
                </p>
            </div>
            <div id="returning" class="about-us-row-item service-block2">
                <h2 class="textblack">Returning</h2>
                <p class="textgrey">Library materials borrowed must be returned to the Circulation Counter or by book drop which is available
                    24/7 before the due date. Fines will be imposed for items that are overdue. Students should return all
                    library materials when they withdraw, discontinue, defer or graduate from the university programme
                </p>
            </div>
        </div>

        <div class="about-us-container-row">
            <div id="reminder" class="about-us-row-item service-block2">
                <h2 class="textblack">Reminder/Overdue notice</h2>
                <p class="textgrey">Reminders will be send to staff only.</p>
                <ul>
                    <li>Overdue reminder notice will be sent to staff one week before the due date.</li>
                    <li>After one week of the due date, the first reminder notice will be made and 1 week grace period will be
                        given. Fines will not be imposed during this period.</li>
                    <li>The second reminder notice will be issued one week after the first notice, and fines will be imposed.
                    </li>
                    <li>The last reminder notice (third) will be issued two weeks after the second notice, and fines will be
                        calculated accordingly.</li>
                </ul>
            </div>
            <div id="renewal" class="about-us-row-item service-block1">
                <h2 class="textblack">Renewal</h2>
                <p class="textgrey">Books can be renewed two (2) times only. Renewal can be done at the Circulation Counter or through online
                    and should be done before the due date. Library materials which have been borrowed may be renewed provided
                    that they have not been reserved by another user and have not had any over due date or fines.</p>
            </div>
        </div>

        <div class="about-us-container-row">
            <div id="reservation" class="about-us-row-item service-block1">
                <h2 class="textblack">Reservation</h2>
                <p class="textgrey">Only on loan books may be reserved. Reservations can be made at the Circulation Counter or through online.
                    Reservation notice will be posted on the notice board. Materials reserved will be kept for one week only.
                    The failure to collect will result in the materials being returned to the stacks.
                </p>
            </div>
            <div id="lost-or-damaged-items" class="about-us-row-item service-block2">
                <h2 class="textblack">Lost or Damaged items</h2>
                <p class="textgrey">If a material is lost or damaged, an immediate report should be made to the Circulation Counter to enable
                    appropriate action. A grace period of two weeks will be given to borrowers to search/replace the materials.
                    If the items are still missing, the borrower should replace the items in one of the following three (3)
                    ways including overdue fines (if imposed).</p>
                <ul>
                    <li>Replace the book: the latest edition; Or</li>
                    <li>Pay the current cost together with RM25 service cost; Or</li>
                    <li>If the cost of the old item could not be deternined, locally published materials will be charged RM40
                        and imported materials RM150 in addition to the service cost of RM25.</li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>