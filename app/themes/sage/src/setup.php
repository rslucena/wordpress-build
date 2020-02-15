<?php

namespace App;

use Illuminate\Contracts\Container\Container as ContainerContract;
use Roots\Sage\Assets\JsonManifest;
use Roots\Sage\Config;
use Roots\Sage\Template\Blade;
use Roots\Sage\Template\BladeProvider;

if ( ! function_exists( 'is_plugin_active' ) )
    require_once( ABSPATH . '/wp-admin/includes/plugin.php' );

//INCLUDE ASSETS
add_action('wp_enqueue_scripts', function () {
    //CSS
    wp_enqueue_style('main.min.css', asset_path('assets/styles/main.min.css'), false, true);
    //JS
    wp_enqueue_script('slider.min.js', asset_path('assets/scripts/slider.min.js'), ['jquery'], true, true);
    wp_enqueue_script('lightbox.min.js', asset_path('assets/scripts/lightbox.min.js'), ['jquery'], true, true);
    wp_enqueue_script('main.min.js', asset_path('assets/scripts/main.min.js'), ['jquery'], true, true);
}, 100);

//INCLUDE ADMIN
add_action( 'admin_enqueue_scripts', function(){
    //CSS
    wp_enqueue_style('admin-main.min.css', asset_path('assets/styles/admin-main.min.css'), false, true);
}, 100);

//DEFAULT SETTINGS
add_action('after_setup_theme', function () {

    //ATIVE SUPORT SOIL
    add_theme_support('soil-clean-up');
    add_theme_support('soil-nav-walker');
    add_theme_support('soil-nice-search');
    add_theme_support('soil-relative-urls');
    add_theme_support('post-thumbnails');

    //ADD MENU
    register_nav_menus(['primary_navigation' => __('Navegação', '')]);

    //ATIVE PLUGINS
    activate_plugin( PLUGINDIR .'/acf/acf.php' );
    activate_plugin( PLUGINDIR .'/soil/soil.php' );
    activate_plugin( PLUGINDIR .'/contactform/wp-contact-form-7.php' );
    activate_plugin( PLUGINDIR .'/classiceditor/classic-editor.php' );

    //CLEAR WP
    wp_delete_post(1, true);
    wp_delete_post(2, true);
    wp_delete_post(3, true);
    wp_delete_post(4, true);

    //REMOVE WELCOME
    remove_action( 'welcome_panel', 'wp_welcome_panel' );

}, 20);

//CREATE XML
function xml_sitemap() {
    $postsForSitemap = get_posts( array( 'numberposts' => -1, 'orderby' => 'modified', 'post_type'  => array('post','page'), 'order'    => 'DESC' ));
    $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
    $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    foreach($postsForSitemap as $post) {
        setup_postdata($post);
        $postdate = explode(" ", $post->post_modified);
        $sitemap .= "<url>\n<loc>{get_permalink($post->ID)}</loc>\n<lastmod>{$postdate[0]}</lastmod>\n<changefreq>monthly</changefreq>\n</url>";
    }
    $sitemap .= "</urlset>";
    $fp = fopen(ABSPATH . "sitemap.xml", 'w');
    fwrite($fp, $sitemap);
    fclose($fp);
}
add_action("publish_post", function (){ xml_sitemap(); });
add_action("publish_page", function (){ xml_sitemap(); });

//END SETUP

add_action('the_post', function ($post) {
    sage('blade')->share('post', $post);
});

add_action('after_setup_theme', function () {
    $paths = [
        'dir.stylesheet' => get_stylesheet_directory(),
        'dir.template'   => get_template_directory(),
        'dir.upload'     => wp_upload_dir()['basedir'],
        'uri.stylesheet' => get_stylesheet_directory_uri(),
        'uri.template'   => get_template_directory_uri(),
    ];
    $viewPaths = collect(preg_replace('%[\/]?(templates)?[\/.]*?$%', '', [STYLESHEETPATH, TEMPLATEPATH]))
        ->flatMap(function ($path) {
            return ["{$path}/templates", $path];
        })->unique()->toArray();
    config([
            'assets.manifest' => "{$paths['dir.stylesheet']}/assets.json",
            'assets.uri'      => "{$paths['uri.stylesheet']}/",
            'view.compiled'   => "{$paths['dir.upload']}/cache/compiled",
            'view.namespaces' => ['App' => WP_CONTENT_DIR],
            'view.paths'      => $viewPaths,
        ] + $paths);

    sage()->singleton('sage.assets', function () {
        return new JsonManifest(config('assets.manifest'), config('assets.uri'));
    });

    sage()->singleton('sage.blade', function (ContainerContract $app) {
        $cachePath = config('view.compiled');
        if (!file_exists($cachePath)) {
            wp_mkdir_p($cachePath);
        }
        (new BladeProvider($app))->register();
        return new Blade($app['view'], $app);
    });

    sage('blade')->compiler()->directive('asset', function ($asset) {
        return "<?= App\\asset_path({$asset}); ?>";
    });
});

//INIT

sage()->bindIf('config', Config::class, true);
