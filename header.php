<?php

require_once("config.php");
require_once("function.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ProjectSet</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $rootUrl ?>images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $rootUrl ?>images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $rootUrl ?>images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $rootUrl ?>images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $rootUrl ?>images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $rootUrl ?>images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $rootUrl ?>images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $rootUrl ?>images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $rootUrl ?>images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo $rootUrl ?>images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $rootUrl ?>images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $rootUrl ?>images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $rootUrl ?>images/favicon/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" type="text/css" href="<?php echo $rootUrl ?>css/main.css">
</head>
<body class="logged-in">
<?php $pagename = getPageName(); ?>	
<div class="wrapper">
    <header class="site-header">
       <div class="site-header-top">
            <div class="container">
                <div class="site-header-inner">
                    <div class="logo-block">
                        <a href="#" title="Project Set">
                           <img src="<?php echo $rootUrl ?>images/site-logo.svg" alt="Project Set Logo" class="site-logo-normal">
                           <img src="<?php echo $rootUrl ?>images/site-logo-icon.svg" alt="Project Set Logo" class="site-logo-login">
                        </a>
                    </div>
                    <div class="header-right-wrapper">
                        <div class="header-right">
                            <nav class="main-nav">
                                <div class="hamburger"><img src="<?php echo $rootUrl ?>images/close-white.svg" alt="close"></div>
                              <ul class="after-login-link">
                                    <li class="has-submenu header-submenu-wrap  <?php if($pagename=='bulletin'){echo 'active';}else{echo'';}?>">
                                        <a href="#" title="Bulletin">Bulletin</a>
                                        <em><img src="<?php echo $rootUrl ?>images/down-arrow.svg" alt="down-arrow" alt="down-arrow"></em>
                                        <div class="header-submenu">
                                            <ul>
                                                <li><a href="#">Submenu link 1</a></li>
                                                <li><a href="#">Submenu link 2</a></li>
                                                <li><a href="#">Submenu link 3</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenu header-submenu-wrap <?php if($pagename=='opportunities'){echo 'active';}else{echo'';}?>">
                                        <a href="#" title="Opportunities">Opportunities</a>
                                        <em><img src="<?php echo $rootUrl ?>images/down-arrow.svg" alt="down-arrow" alt="down-arrow"></em>
                                        <div class="header-submenu">
                                            <ul>
                                                <li><a href="#">Submenu link 1</a></li>
                                                <li><a href="#">Submenu link 2</a></li>
                                                <li><a href="#">Submenu link 3</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenu header-submenu-wrap <?php if($pagename=='my-projects'){echo 'active';}else{echo'';}?>">
                                        <a href="<?php echo $rootUrl; ?>my-projects.php" title="My Projects">My Projects</a>
                                        <em><img src="<?php echo $rootUrl ?>images/down-arrow.svg" alt="down-arrow" alt="down-arrow"></em>
                                        <div class="header-submenu">
                                            <ul>
                                                <li><a href="#">Submenu link 1</a></li>
                                                <li><a href="#">Submenu link 2</a></li>
                                                <li><a href="#">Submenu link 3</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenu header-submenu-wrap <?php if($pagename=='my-network'){echo 'active';}else{echo'';}?>">
                                        <a href="<?php echo $rootUrl; ?>my-network.php" title="My Network">My Network</a>
                                        <em><img src="<?php echo $rootUrl ?>images/down-arrow.svg" alt="down-arrow" alt="down-arrow"></em>
                                        <div class="header-submenu">
                                            <ul>
                                                <li><a href="#">Submenu link 1</a></li>
                                                <li><a href="#">Submenu link 2</a></li>
                                                <li><a href="#">Submenu link 3</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenu header-submenu-wrap <?php if($pagename=='my-profile'){echo 'active';}else{echo'';}?>">
                                        <a href="<?php echo $rootUrl; ?>my-profile.php" title="My Profile">My Profile</a>
                                        <em><img src="<?php echo $rootUrl ?>images/down-arrow.svg" alt="down-arrow" alt="down-arrow"></em>
                                        <div class="header-submenu">
                                            <ul>
                                                <li><a href="#">Submenu link 1</a></li>
                                                <li><a href="#">Submenu link 2</a></li>
                                                <li><a href="#">Submenu link 3</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                            <div class="header-right-inner">
                                <ul class="user-account-links">
                                    <li><a href="#" title="Help">Help</a></li>
                                    <li><a href="#"><img src="<?php echo $rootUrl ?>images/calendar.svg" alt="Calendar"></a></li>
                                    <li><a href="#"><img src="<?php echo $rootUrl ?>images/comments.svg" alt="Comments"></a><span class="white-badge">5</span></li>
                                    <li><a href="#"><img src="<?php echo $rootUrl ?>images/todo-list.svg" alt="ToDO List"></a><span class="white-badge">5</span></li>
                                    <li><a href="#"><img src="<?php echo $rootUrl ?>images/notification.svg" alt="notification"></a><span class="white-badge">9</span></span></li>
                                    <li class="header-submenu-wrap user-dropdown-wrapper">
                                        <a href="#">
                                            <img src="<?php echo $rootUrl ?>images/setting-icon-white.svg" alt="Settings">
                                            <em><img src="<?php echo $rootUrl ?>images/down-arrow.svg" alt="down-arrow" alt="down-arrow"></em>
                                        </a>
                                        <div class="user-dropdown header-submenu">
                                            <ul>
                                                <li><a href="#" title="Account Settings">Account Settings</a></li>
                                                <li><a href="#" title="Payments">Payments</a></li>
                                                <li><a href="#" title="Logout">Logout</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                                <div class="hamburger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="12" viewBox="0 0 18 12">
                                    <path id="icon_menu" data-name="icon / menu" d="M3,18H21V16H3Zm0-5H21V11H3ZM3,6V8H21V6Z" transform="translate(-3 -6)" fill="#2F64FF"/>
                                    </svg>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
       <div class="site-header-bottom">
         <div class="container">
            <div class="user-name h1">Hi Elliot!</div>
         </div>
       </div>
    </header>
    <main id="maincontent"> 