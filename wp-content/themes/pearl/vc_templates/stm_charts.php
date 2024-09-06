<?php
$atts = vc_map_get_attributes($this->getShortcode(), $atts);
extract($atts);

$style = 'style_1';

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class($css, ' '));


pearl_add_element_style('chart', $style);

$chart_id = uniqid('chart_');

$values = (array)vc_param_group_parse_atts($values);
$values_circle = (array)vc_param_group_parse_atts($values_circle);

$x_values = explode(';', trim($x_values, ';'));

$canvas_style = array(
    'height' => '300',
    'width' => '500'
);

if ($height) {
    $canvas_style['height'] = $height;
}

if ($width) {
    $canvas_style['width'] = $width;
}

$data = array(
    'labels' => array(),
    'datasets' => array()
);

if ($design == 'line' || $design == 'bar') {
	$data = array(
		'labels' => $x_values,
	);
    foreach ($values as $k => $v) {

        $color = $v['color'];
        $rgb = vc_hex2rgb($color);

        if ($design == 'line') {
            $data['datasets'][] = array(
                'label' => isset($v['title']) ? $v['title'] : '',
                'borderColor' => 'rgba(' . $rgb[0] . ', ' . $rgb[1] . ', ' . $rgb[2] . ', 1)',
                'backgroundColor' => 'rgba(' . $rgb[0] . ', ' . $rgb[1] . ', ' . $rgb[2] . ', 0.1)',
                'data' => explode(';', isset($v['y_values']) ? trim($v['y_values'], ';') : ''),
            );
        } elseif ($design == 'circle') {
            $data['datasets'][] = array(
                'label' => isset($v['title']) ? $v['title'] : '',
                'highlight' => 'rgba(' . $rgb[0] . ', ' . $rgb[1] . ', ' . $rgb[2] . ', 0.75)',
                'color' => $color,
                'pointColor' => $color,
                'data' => explode(';', isset($v['y_values']) ? trim($v['y_values'], ';') : ''),
            );
        } else {
            $data['datasets'][] = array(
                'label' => isset($v['title']) ? $v['title'] : '',
                'backgroundColor' => 'rgba(' . $rgb[0] . ', ' . $rgb[1] . ', ' . $rgb[2] . ', 0.8)',
                'data' => explode(';', isset($v['y_values']) ? trim($v['y_values'], ';') : ''),
            );
        }
    }
} else {
	$data = array();
	foreach ($values_circle as $k => $v) {
		$data['labels'][] = $v['title'] ?? '';
		$color = $v['color'];
        $rgb = vc_hex2rgb($color);
		$data['datasets']['data'][] = (int) $v['value'];
		$data['datasets']['backgroundColor'][] = 'rgba(' . $rgb[0] . ', ' . $rgb[1] . ', ' . $rgb[2] . ', 0.75)';
    }
}
wp_enqueue_script('Chart');
?>
<?php if ($values && $x_values): ?>
    <div class="stm_chart<?php echo esc_attr($css_class); ?> stm_chart_<?php echo esc_attr($style); ?>">
        <canvas id="<?php echo esc_attr($chart_id); ?>" height="400"></canvas>
        <?php
        ob_start();
        ?>

            jQuery(window).on('load', function ($) {
                <?php if( $design == 'line' || $design == 'bar' ): ?>
                    var ChartData_<?php echo esc_js($chart_id); ?> = <?php echo json_encode($data); ?>;
                <?php else: ?>
                    var ChartData_<?php echo esc_js($chart_id); ?> = {
						labels: <?php echo json_encode( $data['labels'] ); ?>,
						datasets: [<?php echo json_encode( $data['datasets'] ); ?>],
					}
                <?php endif; ?>
                var <?php echo esc_js($chart_id); ?> = jQuery("#<?php echo esc_js($chart_id); ?>").get(0).getContext("2d");
                <?php echo esc_js($chart_id); ?>.canvas.width = <?php echo esc_js($canvas_style['width']); ?>;
                <?php echo esc_js($chart_id); ?>.canvas.height = <?php echo esc_js($canvas_style['height']); ?>;
                <?php if( $design == 'line' ){ ?>
					new Chart(<?php echo esc_js($chart_id); ?>, {
						type: 'line',
						data: ChartData_<?php echo esc_js($chart_id); ?>,
					});
                <?php }elseif( $design == 'bar' ){ ?>
					new Chart(<?php echo esc_js($chart_id); ?>, {
						type: 'bar',
						data: ChartData_<?php echo esc_js($chart_id); ?>,
					});
                <?php }elseif( $design == 'pie' ){ ?>
					new Chart(<?php echo esc_js($chart_id); ?>, {
						type: 'pie',
						data: ChartData_<?php echo esc_js($chart_id); ?>,
					});
                <?php }
				else{ ?>
					new Chart(<?php echo esc_js($chart_id); ?>, {
						type: 'doughnut',
						data: ChartData_<?php echo esc_js($chart_id); ?>,
					});

                <?php } ?>
            });
<?php $script = ob_get_clean();
wp_add_inline_script('pearl-theme-scripts', $script);
?>

    </div>
<?php endif; ?>