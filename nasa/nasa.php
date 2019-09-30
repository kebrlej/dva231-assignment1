<?php
session_start();

require_once("../src/Globals.php");
require_once("../src/file_reader.php");
$news = get_json();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo Globals::$news_file; ?></title>
    <link rel="stylesheet" type="text/css" href="styles/nasa_style.css">
    <link rel="stylesheet" type="text/css" href="styles/id_styles.css">
    <link rel="icon" type="image/png" href="img/nasa-logo.png"/>
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
    <script src="script/scripts.js"></script>
</head>
<body>

<div id="allContent">

    <!--    Top -->
    <div id="menu-wrapper">
        <a class="logo" href="/">
            <img src="img/nasa-logo.svg" alt="">
        </a>
        <!--	upper navbar -->
        <div id="upper-navbar-row">
            <ul id="upper-navbar">


                <li class="dropbtn dropdown">
                    <a href=""><?php echo Globals::$news_file; ?></a>
                    <div class="dropdown-content">
                        <a href="#">International Space station</a>
                        <a href="#">Hubble space telescope</a>
                        <a href="#">Mars Rover Curiosity</a>
                    </div>
                </li>


                <li><a href="">Galleries</a></li>
                <li><a href="">NASA TV</a></li>
                <li><a href="">Follow NASA</a></li>
                <li><a href="">Downloads</a></li>
                <li><a href="">About</a></li>
                <li><a href="">NASA Audiences</a></li>


            </ul>
            <a href="/">
                <img id="share-image" src="img/share.svg">
            </a>
            <div id="search-form">
                <form id="search-bar">
                    <input type="text" name="Search" placeholder="Search">
                </form>
            </div>


        </div>
        <!--	lower navbar -->
        <div>
            <div id="lower-navbar-wrapper">
                <ul id="lower-navbar">
                    <li><a href="">Humans in Space</a></li>
                    <li><a href="">Moon to Mars</a></li>
                    <li><a href="">Earth</a></li>
                    <li><a href="">Space Tech</a></li>
                    <li><a href="">Flight</a></li>
                    <li><a href="">Solar System and Beyond</a></li>
                    <li><a href="">STEM engagement</a></li>
                    <li><a href="">History</a></li>
                    <li><a href="">Benefits to You</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--    WEBSITE content-->
    <div class="website-content">
        <div class="content-wrapper">
            <div class="panel one">
                <div id="main-news0">
                    <a class="image-panel-href" href="/">
                        <img src="img/flat-earth-society-banner.png">
                        <div class="image-panel-text-wrapper main-image-panel-text-wrapper">
                            <a class="image-panel-tag" href="/">Conspiracy</a>
                            <div class="image-panel-title">
                                Flat Earth society has a new theory.
                            </div>
                        </div>
                    </a>
                </div>
                <div id="main-news1" style="display: none">
                    <a class="image-panel-href" href="/">
                        <img src="img/apollo-landing-panorama.jpg">
                        <div class="image-panel-text-wrapper main-image-panel-text-wrapper">
                            <a class="image-panel-tag" href="/">Moon NEWS</a>
                            <div class="image-panel-title">
                                NASA releases stunning Apollo landing panorama.
                            </div>
                        </div>
                    </a>
                </div>
                <div id="main-news2" style="display: none">
                    <a class="image-panel-href" href="/">
                        <img src="img/opportunity-parting-shot.jpg">
                        <div class="image-panel-text-wrapper main-image-panel-text-wrapper">
                            <a class="image-panel-tag" href="/">Mars expedition</a>
                            <div class="image-panel-title">
                                Nasa rover Opportunity sends its last image.
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="news-panel">
                <h4>NASA Events</h4>
                <div>
                    
                    <div class="news-link-title">
                        <a href="">Wed., Sept. 25, 9:57 a.m. EDT: Expedition 61 Crew Launch to Space Station (NASA TV
                            Begins 9 a.m.)</a>
                    </div>
                    <div>
                        <a href="">Wed., Sept. 25, 3:45 p.m. EDT: Expedition 61 Crew Soyuz Docking to Space Station
                            (NASA TV Begins 3 p.m.)</a>
                    </div>
                    <div>
                        <a href="">Sat., Oct. 5: International Observe the Moon Night 2019</a>
                    </div>
                    <div>
                        <a href="">U.S. K-12 Students: Name the Next Mars Rover!</a>
                    </div>
                </div>
                <div class="news-panel-footer">
                    <a class="news-left-bottom-link" href="">Calendar</a>
                    <a class="news-right-bottom-link" href="">Launches and Landings</a>
                </div>
            </div>

            <div class="panel three">
                <a class="image-panel-href" href="/">
                    <img src="
                    <?php echo $news['news'][1]['imgurl'];
                    ?>">
                    <div class="image-panel-text-wrapper small-image-panel-text-wrapper">
                        <a class="image-panel-tag" href="/"><?php echo $news['news'][1]['title']; ?></a>

                        <a href="/">
                            <div class="image-panel-hover" onmouseover="onMouseOver()" onmouseleave="onMouseLeave()">
                                <div class="image-panel-title">
                                    Pad 39B Water Flow Test Comes Through Loud and Clear
                                </div>
                                <div id="image-panel-hover-description" style="display: none">
                                    <?php
                                    echo $news['news'][1]['content'];
                                    ?>
                                </div>
                            </div>
                        </a>
                    </div>
                </a>
            </div>


            <div class="four panel">
                <div class="four-left panel">
                    <img src="<?php echo $news['news'][2]['imgurl'];?>">
                </div>
                <div class="four-right">
                    <div class="four-right-content">
                        <h1>NASA <?php echo $news['news'][2]['title']; ?></h1>
                        <p><!-- Red rover, red rover, send a name for Mars 2020 right over! NASA is recruiting help from
                            students nationwide to find a name for its next Mars rover mission.-->
                            <?php echo $news['news'][2]['content']; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="five">
                <iframe width="343" height="315" src="https://www.youtube.com/embed/uGoAQu66d4I" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>

            </div>
            <div class="six">
                <img src="img/spacefox.jpg">
            </div>
            <div class="seven">
                <a class="twitter-timeline" data-width="343" data-height="300" data-theme="dark"
                   href="https://twitter.com/elonmusk?ref_src=twsrc%5Etfw">Tweets by elonmusk</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>

    </div>
    <div class="admin_login">
        <a class ="login-button" href="admin_login.php">Log in as administrator</a>
    </div>
</div>

</body>

</html>
