<?php 
if(get_option('opentablewidget_options')){
    add_action( 'admin_notices', 'stm_open_table_removing' );
}

function stm_open_table_removing() {
    ?>
        <div id="message" class="notice notice-error is-dismissible">
            <p>We have replaced the Open Table Widget with the new WPBakery STM Open Table element. </p>
            <p>Please, update the pages where you used the Open Table Widget, and change it for the STM Open Table element, to make sure the integration works properly.</p>

            <a href="<?php echo esc_attr(get_admin_url(null, 'plugins.php', null)); ?>">Deactivate and delete Open Table Widget plugin</a>
        </div>
    <?php
}

?>