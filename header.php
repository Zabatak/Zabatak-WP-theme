<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="http://zabatak.com/themes/default/css/style.css">
        <link rel="stylesheet" type="text/css" href="http://zabatak.com/themes/zabatak4/css/default.css">
        <link rel="stylesheet" type="text/css" href="http://zabatak.com/themes/zabatak4/css/robbin.css">
        <link rel="stylesheet" type="text/css" href="http://zabatak.com/themes/zabatak4/css/_zabatak.css">
        <!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="http://zabatak.com/media/css/iehacks.css" />
        <![endif]--><!--[if IE 7]><link rel="stylesheet" type="text/css" href="http://zabatak.com/media/css/ie7hacks.css" />
        <![endif]--><!--[if IE 6]><link rel="stylesheet" type="text/css" href="http://zabatak.com/media/css/ie6hacks.css" />
        <![endif]-->

        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-71480-8']);
            _gaq.push(['_setDomainName', 'zabatak.com']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();

        </script>
</head>

<body id="page" class="page-main" <?php body_class(); ?>>


        <!-- top bar-->

        <!-- / searchbox -->


        <!-- wrapper -->
        <div class="rapidxwpr floatholder">

            <!-- header -->
            <div id="header">

                <!-- logo -->
                <div id="logo">
                    <h1><a href="http://zabatak.com/">Zabatak</a></h1>
                    <span>Your report will make a difference</span>
                </div>
                <!-- / logo -->

                <!-- submit incident -->
                <div class="submit-incident clearingfix"><a href="http://zabatak.com/reports/submit">أبلغ عن واقعة</a></div>
                <!-- / submit incident -->

            </div>
            <!-- / header -->
            <!-- / header item for plugins -->
            <!-- main body -->
            <div id="middle">

                <div class="background layoutleft">

                    <!-- mainmenu -->
                    <div id="top-menu">
                        <h1><!--
                            <ul>
                                <li>
                                    <a href="http://zabatak.com/main" class="active">الرئيسية</a></li><li><a href="http://zabatak.com/reports">التقارير</a></li><li><a href="http://zabatak.com/reports/submit">أبلغ عن واقعة</a></li><li><a href="http://zabatak.com/alerts">استقبل تنبيهات من مكان معين</a></li><li><a href="http://zabatak.com/contact">اتصل بنا</a></li>                    </ul>
-->
                                    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

                        </h1>
                    </div>
                    <!-- / mainmenu -->


                    <!-- main body -->
                    <div id="main" class="clearingfix">
                        <div id="mainmiddle">




                            <!-- content column -->
                            <!-- / content column -->

                        </div>
                    </div>
                    <!-- / main body -->

                    <!-- content -->