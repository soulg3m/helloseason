<!DOCTYPE html>
<!--
Hello Season MVP
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home - Hello Season!</title>
        
        
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,700|Open+Sans|Playball|Playfair+Display:700i|Raleway:400,500|Vollkorn:400i" rel="stylesheet"> 
        <link href="css/fonts.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="css/responsive.css" rel="stylesheet" type="text/css"/>
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130177783-1"></script>
            <script>
                 window.dataLayer = window.dataLayer || [];
                    function gtag(){dataLayer.push(arguments);}
                       gtag('js', new Date());
                       gtag('config', 'UA-130177783-1');
            </script>
    </head>
    <body>
        <div class="page">
            <header>
                <div class="headerbox">
                    <div class="logo"><p class="logotext">Hello Season!</p></div>
                    <input type="checkbox" id="burger-menu" class="burger-menu">
                    <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="feedback.php">Feedback</a></li>
                        <li><a href="boxes.php">Past Boxes</a></li>
                        <li><a href="holiday.php">Holiday Boxes</a></li>
                        <li><a href="subscribe.php">Subscribe Today!</a></li>
                    </ul>
                    </nav>
                    <label for="burger-menu" class="burger-menu-label">
                        <span></span>
                    </label>
                </div>
            </header>
            <main>
                <div class="maincontainer">
                    <div class="maincontent_np">
                        <div class="indexcontainer">
                            <div class="indexbox">
                                <h1>Seasonal decor.</h1><br>
                                <h1>Every month.</h1><br>
                                <hr>
                                <p>Hello Season! delivers trendy seasonal decor to your door every month <b>for as little as $49.99 quarterly.</b></p>
                                <form>
                                    <input type="text" id="email" name="user_email" placeholder="Enter your email..">
                                    <input type="submit" value="Subscribe now for 10% off your first box!">
                                </form>
                                <br>
                                <p class="index_small">*Subscribe today and also receive additional discounts on all of our other boxes and with our affiliate shopping partners.</p>
                            </div>
                        </div>
                    </div>
                    <div class="maincontent_np_white">
                        <div class="indexcontainer">
                            <p class="diam">&diams;</p> <h4>What is Hello Season?</h4> <p class="diam">&diams;</p><br>
                            <p class="mission">Our goal is to empower our subscriber’s to decorate their worlds beautifully and affordably, one box at a time.</p><br>
                            <div class="threenested">
                                <div class="threenested">
                                    <h5>Save.</h5>
                                    <img src="img/icons8-money-box-64.png" alt=""/><br>
                                    <br><p>We beat the competition, so start saving $$$ now and subscribe!<br><br> We'll charge you $49.99 once quarterly.</p>
                                </div>
                                <div class="threenested">
                                    <h5>Receive.</h5>
                                    <img src="img/icons8-wedding-gift-64.png" alt=""/><br>
                                    <br><p>Once you subscribe we'll send you your Hello Season! box straight to your door.<br><br> We only ask for $5.99 for shipping & handling.</p>
                                </div>
                                <div class="threenested">
                                    <h5>Enjoy!</h5>
                                    <img src="img/icons8-romance-64.png" alt=""/><br>
                                    <br><p>Simplify your life, every season.<br>
                                    Enjoy more, worry less, decorate your life.</p>
                                </div>
                            </div>
                            <br>
                            <p class="diam">&diams;</p> <h4>What's in the box?</h4> <p class="diam">&diams;</p><br>
                            <p class="mission">Tailoring to your needs, as well as your budget, we provide beautiful decorating options for every season right to your doorstep. </p><br>
                            <p class="lessimprtnt">We specially curate a collection of 8 items for you to decorate with every month.</p><br>
                            <!-- PRODUCT PICTURE BELOW-->
                            <img src="img/coffee-cup-books-home.jpg" class="singleImg" alt="products included in our box" /><br>
                            <br>
                            <div class="onenested_contact">
                                <p>Have some questions? Don't hesitate to <a href="contact.php">contact us!</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="maincontent_np_green">
                        <div class="indexcontainer">
                            <p class="diam">&diams;</p> <h4>Test out a free Sample Box before you buy!</h4> <p class="diam">&diams;</p><br>
                            <br>
                            <p>Sample 4 specially picked items from the most current subscription box at no cost.</p>
                            <br>
                            <form>
                                <input type="text" id="email" name="user_email" placeholder="Enter your email..">
                                <input type="submit" class="trial" value="Get your FREE Sample Box!">
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <footer>
                <div class="footer_content">
                    <div class="footer_content"><p>Copyright © 2018 Team 9.</p></div>
                </div>
            </footer>
        </div>
    </body>
</html>
