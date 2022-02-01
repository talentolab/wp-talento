<?php
/**
 * talento functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package talento
 */


$dev_mode = true;
$CURRENT_COMMIT = 'd3adbe4';


if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', $CURRENT_COMMIT );
}

if ( ! defined( '__DIR' ) ) {
    // Replace the version number of the theme on each release.
    define( '__DIR', get_template_directory_uri() );
}

if ( ! defined( '__MODULES' ) ) {
    // Replace the version number of the theme on each release.
    define( '__MODULES', get_template_directory_uri() .'/node_modules' );
}




function my_cfs_options_screens( $screens ) {
  // Parent
  $screens[] = array(
    'name'         => 'Opções',
    'field_groups' => array( 'Home' ),
  );

  // Child
  $screens[] = array(
    'name'         => 'Home',
    'parent'       => 'Opções',
    'field_groups' => array( 'Home' ),
  );

  return $screens;
}

add_filter( 'cfs_options_screens', 'my_cfs_options_screens' );



if ( ! function_exists( 'talento_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function talento_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on talento, use a find and replace
         * to change 'talento' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'talento', get_template_directory() . '/languages' );

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
        register_nav_menus(
            array(
                'menu-1' => esc_html__( 'Primary', 'talento' ),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'talento_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action( 'after_setup_theme', 'talento_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function talento_content_width() {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters( 'talento_content_width', 640 );
}
add_action( 'after_setup_theme', 'talento_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function talento_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'talento' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'talento' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'talento_widgets_init' );


// Remove WP Emoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');


/**
 * Load latest version of jQuery
 */
function fix_jquery() {
  wp_deregister_script('jquery');
  wp_register_script('jquery', (__DIR .'/libs/jquery/3.4.1/jquery.min.js'), false, '3.4.1');
}
add_action('wp_enqueue_scripts', 'fix_jquery', 1, 1);


/**
 * Enqueue scripts and styles.
 */
function talento_scripts() {
  global $dev_mode;

  $min = !$dev_mode ? '.min' : '';
  
  // CSS Libraries
  wp_enqueue_style( 'animate.css', __DIR .'/libs/animate.css/animate'. $min .'.css', array(), '3.7.2' );
  
  wp_enqueue_style( 'materialize', __DIR .'/libs/materialize-src/materialize.min.css', array(), '1.0.0' );
  wp_enqueue_style( 'materialize-custom', __DIR .'/css/custom/materialize.custom'. $min .'.css', array(), _S_VERSION );
  wp_enqueue_style( 'bootstrap-grid', __MODULES .'/bootstrap/dist/css/bootstrap-grid'. $min .'.css', array(), _S_VERSION );
  wp_enqueue_style( 'bootstrap-utilities', __MODULES .'/bootstrap/dist/css/bootstrap-utilities'. $min .'.css', array(), _S_VERSION );
  wp_enqueue_style( 'swiper', __MODULES .'/swiper/swiper-bundle.css', array(), _S_VERSION );
  // wp_enqueue_style( 'bootstrap', __MODULES .'/bootstrap/dist/css/bootstrap'. $min .'.css', array(), _S_VERSION );
  
  wp_enqueue_style( 'helpers.css', __DIR .'/libs/helpers.css/src/helpers'. $min .'.css', array(), '1.0.0' );
  // Main CSS
  wp_enqueue_style( 'talento-style', get_stylesheet_uri(), array(), _S_VERSION );
  wp_style_add_data( 'talento-style', 'rtl', 'replace' );
  wp_enqueue_style( 'main', __DIR .'/css/main'. $min .'.css', array(), _S_VERSION );

  
  // Head JS Libraries
    wp_enqueue_script( 'jquery', __DIR . '/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1', true );
    

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'talento_scripts' );



function add_this_script_footer() {
  global $dev_mode;

  $min = !$dev_mode ? '.min' : '';

  // Footer JS Libraries
    wp_enqueue_script( 'materialize', __DIR . '/libs/materialize-src/js/bin/materialize.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'wow-js', __DIR . '/libs/wow.js/dist/wow.min.js', array(), '1.3.0', true );
    wp_enqueue_script( 'swiper',  __MODULES .'/swiper/swiper-bundle.js', array(), _S_VERSION, true );
  
  // Main JS
    wp_enqueue_script( 'talento-navigation', __DIR . '/js/navigation.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'talento-main', __DIR . '/js/main'. $min .'.js', array(), _S_VERSION, true );
}  
add_action('wp_footer', 'add_this_script_footer');



add_filter('script_loader_tag', 'add_type_attribute' , 10, 3);
function add_type_attribute($tag, $handle, $src) {
    // if not your script, do nothing and return original $tag
    if ( 'talento-main' !== $handle ) {
            return $tag;
    }
  // change the script tag by adding type="module" and return it.
  $tag = '<script type="module" src="' . esc_url( $src ) . '"></script>';
  return $tag;
}


function my_class_names($classes) {
    // add 'class-name' to the $classes array
    $classes[] = '';
    // return the $classes array
    return $classes;
}
add_filter('body_class','my_class_names');
  

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}





/**
 * Ajax Load More
 * Translation of results
 */
// Default: Viewing {post_count} of {total_posts} results.
add_filter('alm_display_results', function(){
    return 'Exibindo {post_count} de {total_posts} projetos';
});


// Default: No results found.
add_filter('alm_no_results_text', function(){
    return 'Não há nada aqui. :(';
});




require_once get_template_directory() .'/php-libs/class-tgm-plugin-activation.php';

function talento_register_required_plugins() {
    global $dev_mode;

    /*
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
        // Essenciais
        array(
            'name'      => 'Ajax Load More',
            'slug'      => 'ajax-load-more',
            'required'  => true
        ),

        array(
            'name'      => 'Allow Webp Image',
            'slug'      => 'allow-webp-image',
            'required'  => true
        ),

        array(
            'name'      => 'Custom Field Suite',
            'slug'      => 'custom-field-suite',
            'required'  => true
        ),

        array(
            'name'      => 'Custom Post Type UI',
            'slug'      => 'custom-post-type-ui',
            'required'  => true
        ),

        array(
            'name'      => 'Font Awesome',
            'slug'      => 'font-awesome',
            'required'  => true
        ),

        array(
            'name'      => 'Safe SVG',
            'slug'      => 'safe-svg',
            'required'  => true
        ),

        array(
            'name'      => 'WP Cerber',
            'slug'      => 'wp-cerber',
            'required'  => true,
            // Force activation on production
            'force_activation' => $dev_mode ? false : true
        ),

        array(
            'name'      => 'Wordfence',
            'slug'      => 'wordfence',
            'required'  => true,
            // Force activation on production
            'force_activation' => $dev_mode == true ? false : true
        ),

        array(
            'name'      => 'Contact Form 7',
            'slug'      => 'contact-form-7',
            'required'  => true,
        ),

        array(
            'name'      => 'WP Mail SMTP',
            'slug'      => 'wp-mail-smtp',
            'required'  => true,
        ),

        // Opcionais
        array(
            'name'      => 'EWWW Image Optimizer',
            'slug'      => 'ewww-image-optimizer',
            'required'  => true,
        ),

        array(
            'name'      => 'File Renaming on Upload',
            'slug'      => 'file-renaming-on-upload',
            'required'  => true,
        ),

        array(
            'name'      => 'Perfect Images + Retina',
            'slug'      => 'wp-retina-2x',
            'required'  => true,
        ),

        array(
            'name'      => 'CMP Coming Soon Maintenance',
            'slug'      => 'cmp-coming-soon-maintenance',
            'required'  => false,
        ),

        array(
            'source'             => get_template_directory() . '/php-libs/plugins/custom-field-suite-video.zip',
            'name'      => 'Custom Field Suite Video',
            'slug'      => 'custom-field-suite-video',
            'required'  => true,
        ),
    );



    $config = array(
        'id'           => 'talento',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug'  => 'themes.php',            // Parent menu slug.
        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.


        'strings'      => array(
            'page_title'                      => __('Instalar plugins essenciais', 'talento'),
            'menu_title'                      => __('Instalar plugins', 'talento'),
            /* translators: %s: plugin name. */
            'installing'                      => __('Instalando plugin: %s', 'talento'),
            /* translators: %s: plugin name. */
            'updating'                        => __('Atualizando plugin: %s', 'talento'),
            'oops'                            => __('Algo deu errado com a API do plugin.', 'talento'),
            'notice_can_install_required'     => _n_noop(
                /* translators: 1: plugin name(s). */
                'Este plugin é essencial para esse tema: %1$s.',
                'Estes plugins são essenciais para esse tema: %1$s.',
                'talento'
            ),
            'notice_can_install_recommended'  => _n_noop(
                /* translators: 1: plugin name(s). */
                'Este plugin é opcional (mas recomendado) para esse tema: %1$s.',
                'Estes plugins são opcionais (mas recomendados) para esse tema: %1$s.',
                'talento'
            ),
            'notice_ask_to_update'            => _n_noop(
                /* translators: 1: plugin name(s). */
                'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
                'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
                'talento'
            ),
            'notice_ask_to_update_maybe'      => _n_noop(
                /* translators: 1: plugin name(s). */
                'Há uma atualização para: %1$s.',
                'Há atualizações disponíveis para esses plugins: %1$s.',
                'talento'
            ),
            'notice_can_activate_required'    => _n_noop(
                /* translators: 1: plugin name(s). */
                'O seguinte plugin essencial está atualmente inativo: %1$s.',
                'Os seguintes plugins essenciais estão atualmente inativos: %1$s.',
                'talento'
            ),
            'notice_can_activate_recommended' => _n_noop(
                /* translators: 1: plugin name(s). */
                'O seguinte plugin opcional está atualmente inativo: %1$s.',
                'Os seguintes plugins opcionais estão atualmente inativos: %1$s.',
                'talento'
            ),
            'install_link'                    => _n_noop(
                'Começar a instalar plugin',
                'Começar a instalar plugins',
                'talento'
            ),
            'update_link' 					  => _n_noop(
                'Começar a atualizar plugin',
                'Começar a atualizar plugins',
                'talento'
            ),
            'activate_link'                   => _n_noop(
                'Começar a ativar plugin',
                'Começar a ativar plugins',
                'talento'
            ),
            'return'                          => __('Voltar para o instalador de Plugins Essenciais', 'talento'),
            'plugin_activated'                => __('Plugin ativado com sucesso.', 'talento'),
            'activated_successfully'          => __('O seguinte plugin foi ativado com sucesso:', 'talento'),
            /* translators: 1: plugin name. */
            'plugin_already_active'           => __('Nenhuma ação feita. O plugin %1$s já está ativo.', 'talento'),
            /* translators: 1: plugin name. */
            'plugin_needs_higher_version'     => __('Plugin não ativado. Uma versão mais nova de %s é necessária para este tema. Por favor, atualize o plugin.', 'talento'),
            /* translators: 1: dashboard link. */
            'complete'                        => __('Todos os plugins foram instalados e ativados com sucesso. %1$s', 'talento'),
            'dismiss'                         => __('Ignorar', 'talento'),
            'notice_cannot_install_activate'  => __('Existem um ou mais plugins essenciais ou opcionais a serem instalados, atualizados ou ativados.', 'talento'),
            'contact_admin'                   => __('Por favor, contate o administrador do site para obter ajuda.', 'talento'),

            'nag_type'                        => 'notice-info', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
        ),

    );

    tgmpa($plugins, $config);
}

add_action('tgmpa_register', 'talento_register_required_plugins');


