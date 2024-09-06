<?php if(!empty($element['data']['address'])):
    $address = $element['data']['address'];
    $google_api_key = pearl_get_option('google_api_key');
    $filteredAddress = array_map(function ($item) {
	    $needle_keys = ['position', 'title', 'phone', 'hoursTitle', 'hours', 'addressTitle', 'address', 'lat', 'long'];
        foreach ($needle_keys as $key) {
            if (!array_key_exists($key, $item)) {
                $item[$key] = '';
            }
        }
        return $item;
    }, $address);
    ?>


    <?php foreach($filteredAddress as $key=>$item): ?>
        <div class="stm-address-box" style="z-index: <?php echo sanitize_text_field($item['position']); ?>">

        <div class="stm-address-hours-title" data-switch="<?php echo intval($key); ?>">
            <?php echo sprintf(_x('%s', 'Address title', 'pearl'), $item['title']); ?>
            <strong><?php echo sprintf(_x('%s', 'Address phone', 'pearl'), $item['phone']); ?></strong>
        </div>

        <div class="stm-address-info">
            <div class="stm-address-hours" data-switch="<?php echo intval($key); ?>">
                <strong><?php echo sprintf(_x('%s', 'Address hours title', 'pearl'), $item['hoursTitle']); ?></strong>
                <?php echo sprintf(_x('%s', 'Address hours', 'pearl'), $item['hours']); ?>
            </div>

            <div class="stm-address-address" data-switch="<?php echo intval($key); ?>">
                <strong><?php echo sprintf(_x('%s', 'Address info title', 'pearl'), $item['addressTitle']); ?></strong>
                <?php echo sprintf(_x('%s', 'Address info address', 'pearl'), $item['address']); ?>
            </div>

            <?php if(!empty(sanitize_text_field($item['lat'])) and !empty(sanitize_text_field($item['long'])) ) : ?>
                <iframe
                        width="100%"
                        height="100"
                        frameborder="0"
                        scrolling="no"
                        marginheight="0"
                        marginwidth="0"
                        src="https://maps.google.com/maps?q=<?php echo sanitize_text_field($item['lat']); ?>,<?php echo sanitize_text_field($item['long']); ?>&hl=es;z=14&amp;output=embed"
                >
                </iframe>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
    </div>
<?php endif; ?>