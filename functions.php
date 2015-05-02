<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:


if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css' );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css' );

// END ENQUEUE PARENT ACTION


// BEGIN REQUIRED PLUGIN ACTIVATION
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );


/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function my_theme_register_required_plugins() {

    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(

        // REQUIRED PLUGIN from Github to allow automatic Updates of the Theme itself, that is hosted on github
	    array(
            'name'               => 'GitHub updater', // The plugin name.
            'slug'               => 'github-updater', // The plugin slug (typically the folder name).
            'source'             => get_stylesheet_directory() . '/lib/plugins/github-updater.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        ),



        /*
        array(
            'name'               => 'GitHub updater', // The plugin name.
            'slug'               => 'github-updater', // The plugin slug (typically the folder name).
            'source'             => 'https://github.com/afragen/github-updater/zipball/master', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'external_url'       => 'https://github.com/afragen/github-updater', // If set, overrides default API URL and points to an external URL.
        ),

		*/
        // REQUIRED PLUGINS from the WordPress Plugin Repository.
        array(
            'name'      => 'Wordpress Jetpack',
            'slug'      => 'jetpack',
            'required'  => true,
        ),

        array(
            'name'      => 'Contact Form 7 (Formular)',
            'slug'      => 'contact-form-7',
            'required'  => true,
        ),

        array(
            'name'      => 'Contact Form DB (Speichert Formulare in Datenbank)',
            'slug'      => 'contact-form-7-to-database-extension',
            'required'  => true,
        ),

		/** No longer required as the necessary code has been included in the Child Theme
        array(
            'name'      => 'Use any font (Gr&uuml;ne Schrift verwenden)',
            'slug'      => 'use-any-font',
            'required'  => true,
        ), // Use Any Font API Key: 3NA6H7UFBZOGTS2D5BCLV4D150428113331
        */

        array(
            'name'      => 'Social Media Sharing-Buttons (Sidebar)',
            'slug'      => 'custom-share-buttons-with-floating-sidebar',
            'required'  => false,
        ),



    );

    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => true,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => __( 'Plugins f&uuml;r das Wordpress-Theme der GR&Uuml;NEN installieren und aktivieren', 'tgmpa' ),
            'menu_title'                      => __( 'Erforderliche Plugins', 'tgmpa' ),
            'installing'                      => __( 'Installiere Plugin: %s', 'tgmpa' ), // %s = plugin name.
            'oops'                            => __( 'Etwas ging mit dem plugin-API schief.', 'tgmpa' ),
            'notice_can_install_required'     => _n_noop( 'Das Wordpress-Theme der GR&Uuml;NEN braucht das folgende Plugin: %1$s.', 'Das Wordpress-Theme der GR&Uuml;NEN braucht die folgenden Plugins: %1$s.' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'Das Wordpress-Theme der GR&Uuml;NEN empfiehlt das folgende Plugin: %1$s.', 'Das Wordpress-Theme der GR&Uuml;NEN empfiehlt die folgenden Plugin: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, Sie haben nicht die erforderlichen Zugriffsrechte zur Installation des %s plugins. Kontaktieren Sie den Administrator der Website.', 'Sorry, Sie haben nicht die erforderlichen Zugriffsrechte zur Installation der folgenden Plugins: %s . Kontaktieren Sie den Administrator der Website.' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'Ein f&uuml;r das Wordpress-Theme der GR&Uuml;NEN erforderliches Plugin ist nicht aktiviert: %1$s.', 'Folgende f&uuml;r das Wordpress-Theme der GR&Uuml;NEN erforderliche Plugins sind nicht aktiviert: %1$s.' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'Ein f&uuml;r das Wordpress-Theme der GR&Uuml;NEN empfohlenes Plugin ist nicht aktiviert: %1$s.', 'Folgende f&uuml;r das Wordpress-Theme der GR&Uuml;NEN empfohlene Plugins sind nicht aktiviert: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, Sie haben nicht die erforderlichen Zugriffsrechte um das %s plugin zu aktivieren. Kontaktieren Sie den Administrator der Website.', 'Sorry, Sie haben nicht die erforderlichen Zugriffsrechte um die %s plugins zu aktivieren. Kontaktieren Sie den Administrator der Website.' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'Das folgende Plugin muss aktualisiert werden: %1$s.', 'Die folgenden Plugins muessen aktualisiert werden: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, Sie haben nicht die erforderlichen Zugriffsrechte um das %s plugin zu aktualisieren. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Das Plugin installieren!', 'Die Plugins installieren!' ),
            'activate_link'                   => _n_noop( 'Das Plugin aktivieren!', 'Die Plugins aktivieren!' ),
            'return'                          => __( 'Zur&uuml;ck zum Installer f&uuml;r die erforderlichen Plugins', 'tgmpa' ),
            'plugin_activated'                => __( 'Plugin erfolgreich aktiviert.', 'tgmpa' ),
            'complete'                        => __( 'Alle Plugins erfolgreich installiert und aktiviert. %s', 'tgmpa' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );

    tgmpa( $plugins, $config );

}
