<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Contact Us - Hello Season</title>
        
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
                    <div class="maincontent_np_white">
                        <div class="boxcontainer">
                            <div class="onenested_box">
                                <div class="onenested_box">
                                    <h2>Contact Us!</h2><br>
                                    <br>
                                    <p>Please fill out the contact form below with any questions or concerns.</p>
                                </div>
                            </div>
                            <hr>
                            <br>
                            <img src="img/icons8-secured-letter-50.png" alt="email envelope"/><br><br>
                            <form>
                                <label for="fname">First Name</label>
                                <input type="text" id="fname" name="firstname" placeholder="Your name..">

                                <label for="lname">Last Name</label>
                                <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                                <label for="email">Email</label>
                                <input type="text" id="email" name="email" placeholder="Your email address..">

                                <label for="subject">Subject</label>
                                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                                <input type="submit" value="Submit">
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

