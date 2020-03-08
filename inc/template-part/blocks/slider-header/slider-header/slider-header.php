<?php

/**
 * Slider Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'slider-header-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'slider-header';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

if( $is_preview ) {
    $className .= ' is-admin';
}
?>

<figure id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> template-image">
    <?php if(have_rows('slider_header')) : ?>
    <div class="slides">
        <?php while(have_rows('slider_header')) : the_row(); 
        $image = get_sub_field('image'); ?>
        <div>
            <div class="banner-image">
                <?php echo wp_get_attachment_image($image['id'], 'full'); ?>
            </div>
            <button class="banner-toggle">
                <a href="<?php the_sub_field('link'); ?>">
                    <span class="toggle-inner">
                        <span class="button-text">
                            <?php the_sub_field('button'); ?>
                        </span>
                        <span class="toggle-icon">
                            <?php twentytwenty_the_theme_svg( 'arrow-right' ); ?>
                        </span>
                    </span>
                </a>
            </button>
            <figcaption><?php the_sub_field('figcaption'); ?></figcaption>
        </div>
        
        <?php endwhile; ?>
    </div>
    <?php else:  ?>
    Please add some sliders.
    <?php endif; ?>
</figure>