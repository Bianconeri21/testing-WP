<section class="no-result not-found">
    <header class="page-header">
        <h1 class="page-title"><?php esc_html_e('Nothing found', 'mytheme'); ?></h1>
    </header>

    <div class="page-content">
        <?php
        if(is_home() && current_user_can('publish_posts')) {
            ?>
            <p>
                <?php
                    printf(
                        wp_kses(
                            __('Ready to publish your first post?. <a href="%s">Click here to start</a>', 'mytheme'),
                            [
                                'a' => [
                                    'href' => []
                                ]
                            ]
                        ),
                        esc_url(admin_url('post-new.php'))
                    );
                ?>
            </p>
        <?php
            }
            elseif (is_search()) {
                ?>
                <p><?php esc_html('Nothing was found. Please input correct characters') ?></p>
            <?php
                get_search_form();
            } else {
                ?>
                <p><?php esc_html_e('Try to find what you want') ?></p>
                <?php
                get_search_form();
            }
        ?>
    </div>
</section>
