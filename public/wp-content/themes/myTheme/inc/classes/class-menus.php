<?php
    namespace MYTHEME_THEME\Inc;

    use MYTHEME_THEME\Inc\Traits\Singleton;

    class Menus {
        use Singleton;

        protected function __construct() {
            $this->setup_hooks();
        }

        protected function setup_hooks() {
            //actions anf filters
            add_action('init', [$this, 'register_menus' ]);
        }

        public function register_menus() {
            register_nav_menus([
                'mytheme-header-menu' => esc_html__('Header menu', 'mytheme'),
                'mytheme-footer-menu' => esc_html__('Footer menu', 'mytheme')
            ]);
        }

        public function get_menu_id( $location ) {
            //Gel all locations
            $locations = get_nav_menu_locations();

            //Get object id by location
            $menu_id = $locations[$location];

            return ! empty($menu_id) ? $menu_id : '';
        }

        public function get_child_menus($menu_array, $parent_id) {
            $child_menus = [];

            if (!empty($menu_array) && is_array($menu_array)) {
                foreach ($menu_array as $menu) {
                    if(intval($menu->menu_item_parent == $parent_id)) {
                        array_push($child_menus, $menu);
                    }
                }
            }

            return $child_menus;
        }
    }