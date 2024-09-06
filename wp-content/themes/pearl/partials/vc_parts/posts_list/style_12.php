<?php
$id = get_the_ID();
pearl_add_element_style('posts_list', $style);
$img_size = !empty($img_size) ? $img_size : '320x180';
$post_format = get_post_format($id);
$video_label = false;
$video_link = false;

if ($post_format === 'video') {
	$video_label = esc_html('Video', 'pearl');
	$video_link = get_post_meta($id, 'single_post_video', true);
	if ($video_duration = get_post_meta($id, 'single_post_video_duration', true)) {
		if ($video_duration && $video_duration !== 0) {
			$video_duration = new DateInterval($video_duration);
			if ($video_duration->format('%H') > 0) {
				$video_label = $video_duration->format('%H:%I:%S');
			} else {
				$video_label = $video_duration->format('%I:%S');
			}
		}
	}
}

$post_views = get_post_meta($id, 'stm_post_views', true);
if (empty($post_views)) {
	$post_views = 0;
}
?>

<div class="stm_posts_list_single col-<?php echo intval($cols); ?>">
    <div class="stm_posts_list_single__container">
		<?php if (!empty($show_image) and has_post_thumbnail()): ?>

            <div class="stm_posts_list_single__image">
                <a href="<?php the_permalink(); ?>"
                   <?php the_title_attribute(); ?> class="no_deco">
					<?php echo pearl_get_VC_post_img_safe($id, $img_size, 'large'); ?>
                </a>
				<?php if (!empty($video_label)): ?>
                    <div class="video_label mbc_b">
						<?php
						echo wp_kses_post($video_label);
						?>
                    </div>
				<?php endif; ?>
            </div>

		<?php endif; ?>
        <div class="stm_posts_list_single__body <?php if (has_post_thumbnail()): ?>has_single__image<?php endif; ?>">

			<?php if (!empty($show_title)): ?>
                <h3>
                    <a href="<?php the_permalink(); ?>"
                       <?php the_title_attribute(); ?> class="no_deco">
						<?php the_title() ?>
                    </a>
                </h3>
			<?php endif; ?>

			<?php if (!empty($show_excerpt)): ?>
                <div class="stm_posts_list_single__excerpt">
					<?php echo get_the_excerpt(); ?>
                </div>
			<?php endif; ?>

            <div class="stm_posts_list_single__info">


                <div class="categories info__item">
					<?php
					$categories = wp_get_post_categories(get_the_ID(), array('fields' => 'all'));

					foreach ($categories as $category) : ?>
                        <a class="ttc ttc_h" href="<?php echo esc_attr(get_category_link($category->term_id)); ?>">
                            <div class="category">
								<?php echo wp_kses_post($category->name); ?>
                            </div>
                        </a>
						<?php endforeach; ?>
                </div>

				<?php if (!empty($show_date)): ?>
                    <div class="date info__item">
						<?php
						$posted = get_the_time('U');
                        echo sprintf(esc_html__('%s ago', 'pearl'), human_time_diff($posted, current_time( 'U' )));
						?>
                    </div>
				<?php endif; ?>

				<?php if (!empty($show_comments)): ?>
                    <div class="comments info__item">
                        <i class="stmicon-magazine-comment"></i>
                        <span>
                            <?php echo comments_number(0, 1, '%'); ?>
                        </span>
                    </div>
				<?php endif; ?>

				<?php if (!empty($show_views)): ?>
                    <div class="views info__item">
                        <i class="stmicon-magazine-view"></i>
                        <span>
						<?php echo intval($post_views); ?>
                        </span>
                    </div>
				<?php endif; ?>
            </div>
        </div>
    </div>
</div>