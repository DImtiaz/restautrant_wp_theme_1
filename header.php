<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php wp_head(); ?>
</head>
<body>

<header>
        <div id="logo">
            <div class="inner">
                <a href="index-2.html">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a>
            </div>
        </div>


        <!-- mainmenu begin -->
        <div id="mainmenu-container">
            <ul id="mainmenu">
                <?php wp_nav_menu( array(

                    'theme_location' => 'primary',

                ) ); ?>
            </ul>
        </div>

    </header>


   <!--  <li><a href="index-2.html">Home</a></li>
                <li><a href="#">Menu</a>
                    <ul>
                        <li><a href="menu-list-1.html">Menu Style 1</a>
                        <li><a href="menu-list-2.html">Menu Style 2</a>
                        <li><a href="single-menu.html">Single Menu</a>
                    </ul>
                </li>
                <li><a href="reservation.html">Reservation</a></li>
                <li><a href="#">News</a>
                    <ul>
                        <li><a href="news.html">News List</a></li>
                        <li><a href="single-news.html">Single News</a></li>
                    </ul>
                </li>
                <li><a href="elements.html">Elements</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="contact.html">Contact</a></li> -->