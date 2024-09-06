<?php
/*Colors*/
$main_color = pearl_get_option('main_color');
$secondary_color = pearl_get_option('secondary_color');
$third_color = pearl_get_option('third_color');
?>

.home #wrapper {
    padding-bottom: 0;
}

.stm_footer_layout_2 .stm-footer {
    padding: 0;
    color: #888888;
    box-shadow: 0px -2px 30px 0px rgba(34, 34, 34, 0.1);
}
.stm_footer_layout_2 .stm-footer a {
    color: <?php echo wp_kses_post($third_color); ?>;
}
.stm_footer_layout_2 .stm-footer__bottom {
    border-top: 0;
}
.stm_slide__button a.btn:hover {
  border-color: <?php echo wp_kses_post($secondary_color); ?> !important;
}
.stm_footer_layout_2 .stm-footer .footer-widgets {
    margin: 0 -5000px;
    padding: 120px 5000px 80px;
    background-color: #fff;
}

.stm_footer_layout_2 .stm-footer .footer-widgets .widget .widgettitle h4 {
    text-transform: none !important;
    letter-spacing: -1px;
    font-size: 20px;
    font-weight: 600;
    color: #222222;
}

.stm_footer_layout_2 .stm-footer .footer-widgets .stm_wp_widget_text .textwidget {
    line-height: 22px;
}

.stm_footer_layout_2 .stm-footer .footer-widgets .stm_wp_widget_text .stm-socials {
    margin: 0 -5px;
}

.stm_footer_layout_2 .stm-footer .footer-widgets .stm_wp_widget_text .stm-socials a {
    width: 50px;
    height: 50px;
    line-height: 50px;
    background-color: #f2f3f5;
    margin: 0 5px;
    font-size: 18px;
    color: #888888 !important;
}

.stm_footer_layout_2 .stm-footer .footer-widgets .stm_wp_widget_text .stm-socials a:hover {
    color: #ffffff !important;
    background-color: <?php echo wp_kses_post($main_color) ?>;
}

.stm_footer_layout_2 .stm-footer .footer-widgets .widget_contacts_style_4 .stm-icontext__address {
    margin-bottom: 27px;
}

.stm_footer_layout_2 .stm-footer .footer-widgets .widget_contacts_style_4 .widget_contacts_inner .stm-icontext_style2 .stm-icontext__text {
    font-size: 14px;
}

.stm_footer_layout_2 .stm-footer .footer-widgets .widget_contacts_style_4 .stm-icontext__phone {
    margin-bottom: 3px;
}

.stm_footer_layout_2 .stm-footer .footer-widgets .stm_custom_menu_style_3 .menu {
    margin: -5px 0 0;
}

.stm_footer_layout_2 .stm-footer .footer-widgets .stm_custom_menu_style_3 .menu li:before {
    content: "";
    width: 4px;
    height: 4px;
    top: 50%;
    margin-top: -2px;
    position: absolute;
    background-color: #888888;
    border-radius: 50%;
}

.stm_footer_layout_2 .stm-footer .footer-widgets .stm_custom_menu_style_3 .menu li a {
    font-size: 14.5px;
    color: #888888 !important;
}

.stm_footer_layout_2 .stm-footer .footer-widgets .stm_custom_menu_style_3 .menu li a:hover {
    opacity: 0.8;
    color: <?php echo wp_kses_post($main_color) ?>;
}

@media (max-width: 1024px) {
    .stm_footer_layout_2 .stm-footer .footer-widgets {
        padding-top: 75px;
        padding-bottom: 55px;
    }
}

@media (max-width: 550px) {
    .stm_footer_layout_2 .stm-footer .footer-widgets {
        padding-top: 55px;
        padding-bottom: 45px;
    }

    .stm_footer_layout_2 .stm-footer .footer-widgets aside.widget {
        margin-bottom: 30px;
    }

    .stm_footer_layout_2 .stm-footer .footer-widgets .widget .widgettitle {
        margin-bottom: 15px;
    }

    .stm_footer_layout_2 .stm-footer .footer-widgets .widget_contacts_style_4 .widget_contacts_inner .stm-icontext_style2.stm-icontext__fax {
        margin-bottom: 0;
    }
}

.stm_footer_layout_2 .stm-footer__bottom .stm_bottom_copyright {
    width: 100%;
    max-width: 100% !important;
}

.stm_gmap_wrapper.style_1 .gmap_addresses .owl-dots-wr .owl-dots .owl-dot{
    width: 8px;
    margin: 5px 10px !important;
    background-color: #fff;
}

html body.stm_layout_company .stm-navigation__default ul li.stm_megamenu > ul.sub-menu > li, html body .stm-navigation__fullwidth ul li.stm_megamenu > ul.sub-menu > li{
    padding: 0 30px;
    margin: 0;
}

.stm_pricing-table_style_2 .stm_pricing-table__footer .btn{
    padding-right: 45px !important;
}

.stm_slider .stm_slide__button a:after {
    display: none;
}
.stm_slider .stm_slide {
    cursor: move;
    cursor: -webkit-grab;
    cursor: grab;
}

.stm_layout_company.stm_form_style_2 [type=submit],
.stm_layout_company.stm_form_style_2 .stm_wpcf7_submit {
    padding: 16px 34px !important;
}

.stm_form_style_2 [type=submit]:after, .stm_form_style_2 .stm_wpcf7_submit:after{
  top: auto !important;
}

.stm_layout_company.stm_form_style_2 form:not(#commentform) [type=submit],
.stm_layout_company.stm_form_style_2 .stm_wpcf7_submit {
    padding: 16px 34px;
}

.stm_slider_thumbs_container ul.stm_slider_thumbs_list li.stm_slide_thumb .stm_slide_thumb_icon span {
    color: <?php echo wp_kses_post($third_color); ?> !important;
}

..stm_layout_company.stm_buttons_style_9 .btn {
    text-transform: uppercase !important;
    letter-spacing: 2px;
    border-radius: 40px !important;
    padding: 24px 31px !important;
    font-weight: 600 !important;
    font-size: 12px !important;
}
.stm_buttons_style_9 .btn.btn_outline:hover {
    color: #fff !important;
}
.stm_buttons_style_9 .btn.btn_outline.btn_white:hover {
    color: #222 !important;
}
.stm_layout_company.stm_buttons_style_9 .btn.btn_icon-right {
    padding-right: 60px !important;
}
.stm_layout_company.stm_buttons_style_9 .btn.btn_icon-left {
    padding-left: 60px !important;
}

.stm_layout_company .stm_custom_heading__side_line {
    top: 0;
    width: 40px;
    background: #aaaaaa !important;
}

.stm_layout_company .stm_custom_heading__side_line_right {
    margin-left: 16px;
}

.stm_layout_company .stm_sliding_images.style_1 .stm_sliding_image__left {
    top: 0;
    right: 0;
    margin-top: -20px;
    position: absolute;
    max-width: 100%;
}

.stm_layout_company .stm_sliding_images.style_1 .stm_sliding_image__right {
    top: 100%;
    right: auto;
    left: 50px;
    margin-left: 0;
    position: absolute;
    max-width: 100%;
    z-index: 20;
}

.stm_layout_company .stm_gmap_wrapper.style_2 .gmap_addresses .title {
    text-transform: capitalize;
    line-height: 30px;
    letter-spacing: -0.5px;
    margin-bottom: 34px;
    font-weight: 300;
    font-size: 26px;
}
.stm_layout_company .stm_gmap_wrapper.style_2 .gmap_addresses .owl-item .item ul li {
    padding-right: 50px;
    margin-bottom: 30px;
}
.stm_layout_company .stm_gmap_wrapper.style_2 .gmap_addresses .owl-item .item ul li .text:before {
    text-transform: uppercase;
    letter-spacing: 3.3px;
    margin-bottom: 11px;
    line-height: 18px;
    font-weight: 600;
    font-size: 14px;
}
.stm_layout_company .stm_gmap_wrapper.style_2 .gmap_addresses .owl-item .item ul li .text p {
    font-weight: 600;
    line-height: 22px !important;
    opacity: 0.75;
}
.stm_layout_company .stm_gmap_wrapper.style_2 .gmap_addresses .owl-item .item ul li .text a {
    font-weight: 600;
    opacity: 0.75;
}

.stm_layout_company .vc_separator.max-width-40 .vc_sep_holder.vc_sep_holder_l .vc_sep_line {
    margin: 0 0 0 auto;
}
.stm_layout_company .vc_separator.max-width-40 .vc_sep_holder .vc_sep_line {
    top: -1px !important;
    max-width: 40px;
}
.stm_layout_company .vc_separator h4 {
    text-transform: uppercase;
    letter-spacing: 4px;
}
@media (max-width: 768px) {
    .stm_layout_company .vc_separator {
        width: 50% !important;
    }
}
@media (max-width: 479px) {
    .stm_layout_company .vc_separator {
        width: 80% !important;
    }
}

.stm_layout_company .stm_pricing-table-flip_style_1.stm_flipbox .stm_flipbox__front .inner h5,
.stm_layout_company .stm_pricing-table-flip_style_1.stm_flipbox .stm_flipbox__front .inner h2 {
    font-weight: 600;
}

.stm_layout_company .stm_pricing-table-flip_style_1.stm_flipbox .stm_flipbox__back .inner h4 {
    line-height: 22px;
    font-weight: 300;
    font-size: 18px;
}

.stm_layout_company .stm-counter_style_1 .stm-counter__value,
.stm_layout_company .stm-counter_style_1 .stm-counter__prefix {
    font-weight: 300;
    font-size: 50px;
}
.stm_layout_company .stm-counter_style_1 .stm-counter__label {
    margin-top: 10px;
    text-transform: none;
    font-weight: 300;
    font-size: 18px;
}
@media (max-width: 1023px) {
    .stm-header {
        background-image: none !important;
    }
    .stm_markup__content {
        padding-top: 40px !important;
    }
    .home .stm_markup__content {
        padding-top: 0 !important;
    }
    .stm-header {
        background-size: cover;
    }

    .stm_layout_company .stm-counter_style_1 {
        max-width: 200px;
        margin: 0 auto;
    }

    .stm_layout_company .stm_iconbox_style_2 .stm_iconbox__icon {
        float: left;
        margin-top: 0;
        margin-bottom: 0;
    }
    .stm_layout_company .stm_iconbox__text {
        overflow: initial;
    }
    html body .stm-navigation__default ul li.stm_megamenu ul.sub-menu li a,
    html body .stm-navigation__fullwidth ul li.stm_megamenu ul.sub-menu li a {
        padding: 15px 0 !important
    }
}

.stm_layout_company.stm_form_style_2 [type=submit] {
    font-weight: 600;
}

.stm_layout_company .stm_carousel_style_1 .stm_carousel__single_big {
    cursor: move;
    cursor: -webkit-grab;
    cursor: grab;
}

.stm_layout_company.stm_form_style_2 .stm_select,
.stm_layout_company.stm_form_style_2 .stm_cf7 .request_quote .wpcf7-form-control-wrap .wpcf7-form-control {
    border-color: #ffffff !important;
    transition: all 0.4s;
}
.stm_layout_company.stm_form_style_2 .stm_cf7 .request_quote.simple .wpcf7-form-control-wrap .wpcf7-form-control {
    padding-left: 15px;
}
.stm_layout_company.stm_form_style_2 .stm_cf7 .request_quote .wpcf7-form-control-wrap .wpcf7-form-control:focus,
.stm_layout_company.stm_form_style_2 .stm_cf7 .request_quote .wpcf7-form-control-wrap .wpcf7-form-control:active,
.stm_layout_company.stm_form_style_2 .stm_cf7 .request_quote .wpcf7-form-control-wrap .wpcf7-form-control:hover {
    box-shadow: 0px 4px 17px 0px rgba(34,34,34,0.1) !important;
}
.stm_layout_company.stm_form_style_2 .stm_select .wpcf7-select {
    cursor: pointer;
}
.stm_layout_company.stm_form_style_2 .stm_select:focus,
.stm_layout_company.stm_form_style_2 .stm_select:active,
.stm_layout_company.stm_form_style_2 .stm_select:hover {
    box-shadow: 0px 4px 17px 0px rgba(34,34,34,0.1) !important;
}
.stm_layout_company.stm_form_style_2 .stm_cf7_style_1 .email-input:before {
    font-size: 16px;
}

.stm_layout_company .stm_loop__single_list_style_2:last-child {
    margin-bottom: 0;
}

.stm_layout_company ul.comment-list .comment .comment-meta a .fa {
    margin-right: 10px;
}

.stm_layout_company .stm_posttimeline_style_1 .stm_posttimeline__post h5,
.stm_layout_company .stm_projects_carousel__name,
.stm_layout_company .stm_post_type_list_style_1 .stm_post_type_list__content h4,
.stm_layout_company .stm_schedule_style_1 .event_lesson_info_content_wrap .event_lesson_info_content .event_lesson_info_title,
.stm_layout_company .stm_single_stm_events .stm_markup__content .stm_single_event__title {
    text-transform: none !important;
}

.stm_layout_company .stm_projects_grid__sorting {
    display: flex;
    width: 100%;
    justify-content: center;
    flex-wrap: wrap;
}
.stm_layout_company .stm_projects_carousel__item .stm_projects_carousel__name {
    font-size: 20px;
}
.stm_layout_company .stm_projects_carousel__item:hover .stm_projects_carousel__name {
    bottom: 100px;
}
.stm_layout_company.stm_buttons_style_9 .stm_projects_carousel__item .btn {
    padding: 18px 26px !important;
}

.stm_form_style_2 [type=submit].btn_primary:after, .stm_form_style_2 .stm_wpcf7_submit.btn_primary:after {
    display: none !important;
}

@media (min-width: 1024px) {
    .stm_layout_company.stm_breadcrumbs_disabled .stm_mobile__header {
        margin-bottom: 70px;
    }
}

.stm_layout_company .stm_donation_style_1 .stm_donation__end {
    margin-bottom: 35px;
}

.stm_layout_company  .stm_loop__single_list_style_2 .h5 {
    letter-spacing: -1px;
}

.stm_layout_company .stm_iconbox_style_2 .stm_iconbox__text h5 {
    letter-spacing: 0;
    text-transform: uppercase;
    letter-spacing: 3.3px;
    font-weight: 600;
    font-size: 14px;
}

@media (min-width: 768px) {
    .company-video-margin-right {
        margin-right: 17px;
    }
}

.stm_page_bc .stm_breadcrumbs .container {
    padding-left: 0;
    padding-right: 0;
}

.stm_testimonials_style_13 .stm_testimonial__carousel .stm_testimonials__review {
    padding-top: 6px;
}

.stm_layout_company .stm_projects_grid_style_5 .stm_projects_carousel__name {
    top: 0;
    left: 58px;
    display: flex;
    align-items: center;
    height: 100%;
    font-weight: 600;
    line-height: 24px;
    font-size: 18px !important;
}
.stm_layout_company .stm_projects_grid_style_5 .stm_projects_carousel__btn {
    display: none !important;
}

.stm_lists_style_3 .wpb_text_column ul li {
    display: block !important;
}

stm_lists_style_3 .wpb_text_column ul li:before {
    margin-left: -18px;
}

.stm_flex_last>:last-child.stm_flex_last{
    margin-left: auto;
    padding-left: 15px;
}

@media (max-width: 991px) {
    .vc_custom_1519358271461 {
        padding-right: 0 !important;
        padding-left: 0 !important;
    }
}

@media (max-width: 768px) {
    .stm_layout_company .stm_slider_thumbs_container .stm_slider_thumbs_list {
        margin: 0 -25px;
    }
}

@media (max-width: 767px) {
    .stm_layout_company .stm_slider_style_10.stm_slider .stm_slide__title span{
        font-size: 29px;
        line-height: 1.5;
    }
}

@media (max-width: 320px) {
    .stm_layout_company .stm_slider_style_10.stm_slider .stm_slide__content, .stm_slider_style_10.stm_slider .stm_slide__overlay .stm_slide__title{
         padding-left: 30px;
    }
    .stm_layout_company .stm_slider_style_10.stm_slider .stm_slide__title span:after{
         left: -30px;
    }
}

.archive .stm_post_details{
    padding: 15px;
}
.archive .stm_post_details .comments_num a i{
    vertical-align: middle;
}
.archive .stm_post_details .comments_num a{
    color: #fff !important;
}
body.archive .stm_post_details>ul li{
    color: #fff;
}
.archive .stm_post_details ul li:before{
    font-size: 1.5rem;
}
.archive .stm_post_details .comments_num{
    margin: 0 0 0 auto;
}
@media(max-width:550px) {
    .archive .stm_post_details .post_date{
        align-items: start;
    }
    .archive .stm_post_details ul li{
        margin: 0;
    }
    .archive .stm_post_details .post_date{
        height: auto;
    }
    .archive .stm_post_details .comments_num {
        margin: 5px 0 0;
    }

    .stm_layout_company .stm_cta.style_3 {
        padding: 30px !important;
    }
}

body.stm_layout_company .stm_slider_style_10.stm_slider .stm_slide__button .btn {
    padding: 16px 31px !important;
}

.stm_layout_company .wpcf7-form.stm_cf7 .wpcf7-submit {
    line-height: 18px;
    display: block;
    width: 100%;
}
.stm_layout_company .wpcf7-form.stm_cf7 .wpcf7-submit::after {
    height: 50px;
    line-height: 50px;
    top: 0 !important;
}


.stm_layout_seoagency .stm_pricing-table-flip_style_2.stm_flipbox .stm_flipbox__back .inner .btn {
    border-color: <?php echo wp_kses_post($third_color); ?> !important;
    color: <?php echo wp_kses_post($third_color); ?> !important;
}
.stm_layout_seoagency .stm_pricing-table-flip_style_2.stm_flipbox .stm_flipbox__back .inner .btn span{
    color: <?php echo wp_kses_post($third_color); ?> !important;
}
.stm_layout_seoagency .stm_pricing-table-flip_style_2.stm_flipbox .stm_flipbox__back .inner .btn:hover {
    background-color: <?php echo wp_kses_post($secondary_color); ?> !important;
    border-color: <?php echo wp_kses_post($secondary_color); ?> !important;
    color: #fff !important;
}