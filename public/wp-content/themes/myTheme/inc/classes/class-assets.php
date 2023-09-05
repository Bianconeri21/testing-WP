<?php
    namespace MYTHEME_THEME\Inc;

    use MYTHEME_THEME\Inc\Traits\Singleton;

    class Assets {
        use Singleton;

        protected function __construct() {
            $this->setup_hooks();
        }

        protected function setup_hooks() {
            //actions anf filters
            add_action('wp_enqueue_scripts', [$this, 'register_styles' ]);
            add_action('wp_enqueue_scripts', [$this, 'register_scripts' ]);
        }

        public function register_styles() {
            //style register
            wp_register_style('style-css', get_stylesheet_uri(), array(), filemtime( MYTHEME_DIR_PATH . '/style.css' ));
            wp_register_style('bootstrap-css', MYTHEME_DIR_URI . '/assets/src/library/css/bootstrap.min.css');

            //style enqueue
            wp_enqueue_style('style-css');
            wp_enqueue_style('bootstrap-css');
        }

        public function register_scripts() {
            //script register
            wp_register_script( 'main-js', MYTHEME_DIR_URI . '/assets/main.js', array(), filemtime( get_template_directory() . '/assets/main.js'), true );
            wp_register_script('bootstrap-js', MYTHEME_DIR_URI . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true);

            //script enqueue
            wp_enqueue_script('main-js');
            wp_enqueue_script('bootstrap-js');
        }
    }