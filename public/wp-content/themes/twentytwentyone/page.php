<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-page' );

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.
?>

<?php
$car = get_field('select_car');
$countries = get_field('where_you_want_to_visit');
$color = get_field('colours');
$relations = get_field('relations_test')
?>

<div>
    <?php
        if($car):
            foreach($car as $c):
                echo $c;
            endforeach;
        endif;
    ?>

    <?php if($countries): ?>
            <ul>
                <?php foreach ($countries as $country):
                ?>
                    <li><?php echo $country; ?></li>
                <?php endforeach; ?>
            </ul>
    <?php endif; ?>

    <?php if($color):

            switch ($color) {
                case 'red':
                    echo 'Stop! Color is red';
                    break;
                case 'orange':
                    echo 'Slow Down! Color is orange';
                    break;
                case 'green':
                    echo 'Go Go Go! Color is green';
            }

    endif; ?>

    <?php
        if($relations):
            echo '<pre>';
            var_dump($relations);
            echo '</pre>';
            foreach ($relations as $relation):?>
                <div>
                    <a href="<?php echo get_permalink($relation->ID) ?>">
                        <h3><?php echo $relation->post_name?></h3>
                    </a>
                    <div>
                        <img src="<?php echo get_the_post_thumbnail_url($relation->ID, 'thumbnail') ?>">
                    </div>
                    <p><?php echo $relation->post_content ?></p>
                    <p><?php echo $relation->post_date ?></p>
                </div>
            <?php endforeach;
        endif;
    ?>
</div>

<?php
get_footer();
?>