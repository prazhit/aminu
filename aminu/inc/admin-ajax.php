<?php

// Add to cart
add_action('wp_ajax_add_to_cart', 'add_to_cart_callback');
add_action('wp_ajax_nopriv_add_to_cart', 'add_to_cart_callback');

function add_to_cart_callback()
{
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'xiuer2332sduy3629ws8sd8s9sdy')) {
        echo '<script>alert("Please refresh the page")</script>';
        die('Permission denied');
    }

    $product_id = $_POST['product_id'];
    $variation_id = null;

    if (isset($_POST['variation_id'])) {
        $variation_id = $_POST['variation_id'];
    }

    $already_in_cart = false;
    $empty_cart = false;
    if (WC()->cart->is_empty()) {
        $empty_cart = true;
    }

    $cart = WC()->cart->get_cart();

    foreach ($cart as $cart_item_key => $cart_item) {

        if ($cart_item['product_id'] == $product_id && $cart_item['variation_id'] == $variation_id) {

            $already_in_cart = true;
            if (isset($_POST['quantity'])) {
                $quantity = $_POST['quantity'];
            } else {
                $quantity = WC()->cart->cart_contents[$cart_item_key]['quantity'] + 1;
            };
            WC()->cart->set_quantity($cart_item_key, $quantity);
            break;
        }
    }

    if (!$already_in_cart) {

        if (isset($_POST['variation_id'])) {
            $variant_id = $_POST['variation_id'];

            WC()->cart->add_to_cart($product_id, 1, $variant_id);
        } else {
            WC()->cart->add_to_cart($product_id);
        }
    }

    $cart = WC()->cart->get_cart();
    ob_start();
    echo '<div class="cart-drawer-product cart-drawer-product--cart-item">';
    foreach ($cart as $cart_item_key => $cart_item) {

        $product['cart_item_key'] =  $cart_item_key;
        $product['cart_item'] = $cart_item;

        set_query_var('custom_variable', $product);
        get_template_part('template-parts/content', 'minicart-item');
        set_query_var('custom_variable', null);
    };
    echo '</div>';
    echo get_template_part('template-parts/content', 'discount-box');
    $remaining_items = ob_get_clean();

    if ($remaining_items) {

        $cart_count = WC()->cart->get_cart_contents_count();
        $cart_subtotal = WC()->cart->get_subtotal();
        $cart_totals = wc_price($cart_subtotal);

        $response_data = [
            'already_in_cart' => $already_in_cart,
            'cart_count' => $cart_count,
            'cart_totals' => $cart_totals,
            'cart_items' => $remaining_items,
            'product_id' => $product_id,
            'variation_id' => $variation_id,
        ];

        if ( $empty_cart ) {
            ob_start();
            get_template_part('template-parts/content', 'checkout-box');
            $checkout_box = ob_get_clean();
            $response_data['checkout_box'] = $checkout_box;
        }

        wp_send_json_success($response_data);
    } else {
        echo 'Failed to add to cart';
    }

    wp_die();
}


// Remove from cart
add_action('wp_ajax_remove_from_cart', 'remove_from_cart_callback');
add_action('wp_ajax_nopriv_remove_from_cart', 'remove_from_cart_callback');

function remove_from_cart_callback()
{
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'xiuer2332sduy3629ws8sd8s9sdy')) {
        die('Permission denied');
    }

    $cart_item_key = $_POST['cart_item_key'];

    $remove_item = WC()->cart->remove_cart_item($cart_item_key);

    $cart_subtotal = WC()->cart->get_subtotal();
    $cart_totals = wc_price($cart_subtotal);

    if ($remove_item) {
        $items = WC()->cart->get_cart();
        $cart_count = WC()->cart->get_cart_contents_count();

        if (!empty($items)) :
            ob_start();
            echo '<div class="cart-drawer-product cart-drawer-product--cart-item">';
            foreach ($items as $cart_item_key => $cart_item) {

                $product['cart_item_key'] =  $cart_item_key;
                $product['cart_item'] = $cart_item;

                set_query_var('custom_variable', $product);
                get_template_part('template-parts/content', 'minicart-item');
                set_query_var('custom_variable', null);
            };
            echo '</div>';
            echo get_template_part('template-parts/content', 'discount-box');
            $remaining_items = ob_get_clean();
        else :
            ob_start(); ?>
            <div class="cart-drawer-empty">
                <p class="cart-drawer-empty__title">YOUR CART IS EMPTY!</p>

                <p class="cart-drawer-empty__button">
                    <?php $product_listing_page_id = wc_get_page_id('shop');
                    $product_listing_page_url = get_permalink($product_listing_page_id);
                    ?>
                    <a href="<?php echo esc_url($product_listing_page_url) ?>">SHOP NOW</a>
                </p>
            </div>
    <?php $remaining_items = ob_get_clean();
        endif;
        wp_send_json_success([
            'cart_count' => $cart_count,
            'cart_totals' => $cart_totals,
            'cart_items' => $remaining_items
        ]);
    } else {
        echo 'Failed to remove from cart';
    }

    wp_die();
}


// Mini Cart upsell popup
add_action('wp_ajax_get_mini_popup', 'get_mini_popup_callback');
add_action('wp_ajax_nopriv_get_mini_popup', 'get_mini_popup_callback');


function get_mini_popup_callback()
{
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'xiuer2332sduy3629ws8sd8s9sdy')) {
        die('Permission denied');
    }

    $product_id = $_POST['product_id'];
    $variation_id = $_POST['variation_id'];

    $product = wc_get_product($product_id);

    $product_title = $product->get_title();
    $product_image = get_the_post_thumbnail_url($product_id, 'thumbnail');
    $product_url = get_the_permalink($product_id);

    $product_var = new WC_Product_Variable($product_id);

    $available_attributes = $product_var->get_available_variations();
    $first_variation_price = $available_attributes[0]['display_price'];

    $variants = $available_attributes[0]['attributes'];
    $variant_values = array_values($variants);

    ob_start();
    $variation_attributes = $product->get_attributes();
    foreach ($variation_attributes as $attr) {
        $option = $attr->get_name();
        break;
    }
    ?>
    <span><?php echo $option; ?></span>
    <select class="select-option-popup" name="none">

        <?php $i = 1;
        foreach ($available_attributes as $variation_value) {
            foreach ($variation_value['attributes'] as $key => $attribute_value) :

                if ($attribute_value) {
                    $currency_symbol = get_woocommerce_currency_symbol();
                    $price_amount = $variation_value['display_price'];
                    $formatted_price = $currency_symbol . ' ' . number_format($price_amount, 2, '.', ',');
                    $formatted_price = preg_replace('/(\.\d*?)0+$/', '', $formatted_price);
        ?>

                    <option name="variant" <?php echo $i == 1 ? 'checked' : '' ?> data-price="<?php echo esc_attr($formatted_price); ?>" value="<?php echo $variation_value['variation_id'] ?>" data-stock="<?php echo $variation_value['is_in_stock'] ? '1' : '0' ?>"><?php echo $attribute_value ?></option>

        <?php $i++;
                };
            endforeach;
        } ?>
    </select>
<?php
    $variant_selectors = ob_get_clean();
    $minipopup = '<div class="cart-drawer-popup" data-product-id="' . $product_id . '" data-variation-id="' . $variation_id . '" >
        <header class="cart-drawer-popup__header">
        <div class="cart-drawer-popup__image">
            <a href="' . $product_url . '">
            <img alt="10 ML" src=" ' . $product_image . ' " />
            </a>
        </div>
        <div class="cart-drawer-popup__text">
            <div class="cart-drawer-popup__title">
            <h2>
                <a href="' . $product_url . '" class="cart-drawer-popup__link-image">' .
        $product_title .
        '</a>
            </h2>
            <p class="cart-drawer-popup__variant">' . $variant_values[0] . '</p>
            </div>
            <div class="cart-drawer-popup__price">
            <div class="cart-drawer-popup__options-prices">
                <div class="compare-price"></div>
                <div class="price"><span class="money">' .  wc_price($first_variation_price) . '</span></div>
            </div>
            </div>
        </div>
        </header>

        <div class="cart-drawer-popup__options">
        <div class="cart-drawer-popup__select-box-load">
            ' . $variant_selectors . '
        </div>
        </div>

        <div class="cart-drawer-popup__button">
        <button class="btn add-to-cart">
            <span class="hs-add--to--cart">ADD TO CART</span><span class="loading">
            <div class="hs-spinner"></div>
            </span>
        </button>
        </div>
    </div>';

    wp_send_json_success([
        'mini_popup' => $minipopup
    ]);

    wp_die();
}


?>