<?php

/**
 * Hero Video Block.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>

<?php if ( get_field('hero_video') ): ?>
    <section class="hero_banner">

        <div class="video-overlay"></div>

        <video playsinline autoplay muted loop poster="" class="w-100">
            <source src="<?= esc_url(get_field('hero_video')); ?>" type="video/mp4">
        </video>

        <button class="btn arrow_down rounded-pill">
            <i class="bi bi-arrow-down"></i>
        </button>

    </section>
<?php endif; ?>
