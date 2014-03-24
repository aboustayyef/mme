<?php

// Define the version as a constant so we can easily replace it throughout the theme
define( 'LESS_VERSION', 1.1 );

/*-----------------------------------------------------------------------------------*/
/* Add Rss to Head
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );


/*-----------------------------------------------------------------------------------*/
/* register main menu
/*-----------------------------------------------------------------------------------*/
register_nav_menus( 
	array(
		'primary'	=>	__( 'Primary Menu', 'less' ),
	)
);

/*-----------------------------------------------------------------------------------*/
/* Enque Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function less_scripts()  { 

	// theme styles
	wp_enqueue_style( 'less-style', get_template_directory_uri() . '/style.css', '10000', 'all' );
			
	// add fitvid
	wp_enqueue_script( 'less-fitvid', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), LESS_VERSION, true );
	
	// add theme scripts
	wp_enqueue_script( 'less', get_template_directory_uri() . '/js/theme.min.js', array(), LESS_VERSION, true );
  
}
add_action( 'wp_enqueue_scripts', 'less_scripts' );

function disqus_count($disqus_shortname) {
    wp_enqueue_script('disqus_count','http://'.$disqus_shortname.'.disqus.com/count.js');
    echo '<a href="'. get_permalink() .'#disqus_thread"></a>';
}
function mustapha_me_share(){
	?>
	<?php 
		$twitterTextToShare = get_the_title().' '.urlencode(wp_get_shortlink()).' by @beirutspring';
		$twitterURL = 'https://twitter.com/home?status='.$twitterTextToShare;
		$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.urlencode(wp_get_shortlink());
	?>
	<div class ="sharing_menu">
		<ul>
			<li class ="share_header">Share</li>
			<a href="<?php echo $facebookURL ?>"><li><img width="14px" height="auto" src="<?php echo get_site_url().'/wp-content/themes/MLess/icons/facebook28.png'; ?>" alt=""><span class ="sharetext">Facebook</span></li></a>
			<a href="<?php echo $twitterURL ?>"><li><img width="14px" height="auto" src="<?php echo get_site_url().'/wp-content/themes/MLess/icons/twitter28.png'; ?>" alt=""><span class ="sharetext">Twitter</span></li></a>
		</ul>
	</div>
	<?php
}