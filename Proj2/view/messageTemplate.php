<?php
class Template
{
    function __construct($content,$title)
    {
        $this->content=$content;
        $this->title=$title;
    }
    
    
    
    function create()
    {
        echo'
            <!DOCTYPE html>
            <html>
            <head>
                    <title>'. $this->title.' </title>
                    <link rel="stylesheet" type="text/css" href="../view/style/style.css">
                    <meta charset="utf-8">
            </head>
            <body>
                    <div id="main">
                            <div id="top">
                                    <div id="logo"><img src="../view/images/logo.png"></div>

                                    <ul id="smallMenu">
                                            <li><a href="../view/main.php">Strona glowna</a></li>
                                            <li><a href="../view/viewLoginUser.php">Login</a></li>
                                            <li><a href="../view/viewAddUser.php">Rejestracja</a></li>
                                            <li><a href="../controler/logout.php">Logout</a></li>
                                    </ul>

                            </div>
                            <div id="banner"><img src="../view/images/banner.png"/></div>
                            <div id="content">
                                    <div id="leftContent"> '. $this->content->getLeft().'  </div>
                                    <div id="rightContent"> '. $this->content->getRight().' </div>
                            </div>
                            <footer>Strona &copy Sylwester Macura 2013</footer>
                    </div>
            </body>
            </html>
            ';
    }
    private $content;
    private $title;
}

?>