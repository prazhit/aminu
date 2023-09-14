<?php



// Remove meta hook Woocommerce

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);



// Remove product sharing hook Woocommerce

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50);



remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);



remove_action('woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20);



/**

 * Change number of related products output

 */

add_filter('woocommerce_output_related_products_args', 'ecommerce_related_products_args', 20);

function ecommerce_related_products_args($args)

{



    $args['posts_per_page'] = 6; // 4 related products

    $args['columns'] = 6; // arranged in 2 columns



    return $args;

}





/**

 * integrate product sharing in product single page

 */

add_action('woocommerce_share', 'ecommerce_single_product_sharing');

function ecommerce_single_product_sharing()

{

    global $product;



    $facebook_url = "https://www.facebook.com/sharer.php?u=" . $product->get_permalink();



    $mail_body = $product->get_short_description() . " For details, link here : " . $product->get_permalink();



    $gmail_url = add_query_arg(

        [

            'view' => 'cm',

            'fs' => 1,

            'to' => '',

            'su' => urlencode($product->get_title()),

            'body' => urlencode($mail_body),

            'bcc' => ''

        ],

        "https://mail.google.com/mail/"

    );

    ?>

    <b>Share</b>:

    <span class="b-share_product">

                            <a href="<?= $facebook_url ?>" target="_blank" rel="noreferrer noopener"

                               class="fa fa-facebook"></a>

                            <a href="<?= $gmail_url ?>" target="_blank" rel="noreferrer noopener"

                               class="fa fa-envelope"></a>

                          </span>

    <?php

}



/**

 * adding additional delivery info tab to the product single page tabsg

 */

// add_filter('woocommerce_product_tabs', 'woo_custom_product_tabs');

function woo_custom_product_tabs($tabs)

{

    if (get_field('delivery_info', 'option')['detail']) {

        $tabs['additional_tab'] = [

            'title' => get_field('delivery_info', 'option')['title'],

            'priority' => 100,

            'callback' => 'woo_attrib_additional_tab_content'

        ];

    }



    return $tabs;

}



function woo_attrib_additional_tab_content()

{

    echo get_field('delivery_info', 'option')['detail'];

}



/**

 * adding additional Product video tab to the product single page tabsg

 */

add_filter('woocommerce_product_tabs', 'woo_custom_product_video_tab');

function woo_custom_product_video_tab($tabs)

{

    global $post;

    if (get_field('tutorial_video', $post->ID)) {

        $tabs['Product_video'] = [

            'title' => 'Tutorial Video',

            'priority' => 110,

            'callback' => 'woo_attrib_additional_product_video_content'

        ];

    }

    return $tabs;

}



function woo_attrib_additional_product_video_content()

{

    ?>

    <div class="mx-auto">

        <iframe width="560" height="315" src="<?php the_field('tutorial_video'); ?>" frameborder="0"

                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"

                allowfullscreen></iframe>

    </div>

<?php }





function woocommerce_template_loop_product_title()

{

    $product_title = get_the_title();



    if (strlen($product_title) > 60) {

        $product_title = substr($product_title, 0, 60) . "...";

    }



    echo '<h2 class="' . esc_attr(apply_filters('woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title')) . '">' . '<a href=">'. get_the_permalink() .'">'. $product_title . '</a></h2>';

}



