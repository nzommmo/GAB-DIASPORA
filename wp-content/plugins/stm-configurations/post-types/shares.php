<?php
function stm_get_image_url($id, $size = 'full')
{
	$url = '';
	if (!empty($id)) {
		$image = wp_get_attachment_image_src($id, $size, false);
		if (!empty($image[0])) {
			$url = $image[0];
		}
	}

	return $url;
}

function stm_get_shares()
{

	$link = get_the_permalink();
	$image = stm_get_image_url(get_post_thumbnail_id());
	$title = get_the_title();

	$socials = array();

	$socials['facebook'] = "https://www.facebook.com/sharer/sharer.php?u={$link}";
	$socials['twitter'] = "https://twitter.com/home?status={$link}";
	// $socials['google-plus'] = "https://plus.google.com/share?url={$link}";
	$socials['linkedin'] = "https://www.linkedin.com/sharing/share-offsite/?url={$link}";
	$socials['pinterest'] = "https://pinterest.com/pin/create/button/?url={$link}&media={$image}&description=";
	$socials['tumblr'] = "https://www.tumblr.com/widgets/share/tool?canonicalUrl={$link}&title={$title}";
	$socials['telegram'] = "https://telegram.me/share/url?text={$title}&url={$link}";
	$socials['whatsapp'] = "https://api.whatsapp.com/send?text={$title}%20{$link}";
	$socials['skype'] = "https://web.skype.com/share?url={$link}&text={$title}";
	$socials['reddit'] = "https://reddit.com/submit?url={$link}&title={$title}";

	$default_social_buttons = array('facebook','twitter','google-plus','linkedin','pinterest');

	$theme_options = pearl_stored_theme_options();

	$post_show_share = (isset($theme_options['post_show_share'])) ? $theme_options['post_show_share'] : 'show';

	if($post_show_share == 'show'):
		ob_start();
		?>

	    <div class="stm_share stm_js__shareble">
			<?php foreach ($socials as $social => $url): ?>
				<?php
					$show_social = false;

					if(isset($theme_options[$social])) {
						$show_social = ($theme_options[$social] == 'true') ? true : $show_social;
					} else {
						$show_social = (in_array($social, $default_social_buttons)) ? true : $show_social;
					}

					if($show_social):
				?>
		            <a href="#"
		               class="__icon icon_12px stm_share_<?php echo esc_attr($social); ?>"
		               data-share="<?php echo esc_url($url); ?>"
		               data-social="<?php echo esc_attr($social); ?>">
		                <i class="fa fa-<?php echo esc_attr($social); ?>"></i>
		            </a>
				<?php endif; ?>
			<?php endforeach; ?>
	    </div>

		<?php echo ob_get_clean();
	endif;
}

function stm_get_ga_code()
{
	$options = get_option('stm_theme_options');
	$ga = !empty($options['ga']) ? $options['ga'] : false;
	if (!empty($ga)): ?>
        <script type="text/javascript">
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', '<?php echo esc_attr($ga); ?>', 'auto');
            ga('send', 'pageview');

        </script>
	<?php endif;
}
