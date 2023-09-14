<?php 

$custom_variables = get_query_var('custom_variable'); 
$cart_item_key = $custom_variables['cart_item_key'];
$cart_item = $custom_variables['cart_item'];

$_product   = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);

$product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

$variation_id = $cart_item['variation_id'];

$variation_attributes = $cart_item['variation'];

?>
<div class="cart-item" data-product-id="<?php echo $product_id; ?>" data-variant-id="<?php echo $variation_id; ?>" data-item-key="<?php echo $cart_item_key; ?>" data-item-qty="<?php echo $cart_item['quantity'] ?>">
  <div class="cart-item__item">
    <div class="cart-item__img-wrapper">

      <a class="cart-item__link" href="<?php echo get_permalink($product_id) ?>">
      <img class="cart-image" loading="lazy" src="<?php echo get_the_post_thumbnail_url($product_id, 'medium') ? get_the_post_thumbnail_url($product_id, 'medium') : wc_placeholder_img_src('full') ?>" width="100" height="90" alt="<?php echo $_product->get_title(); ?>" />
    </a>
    </div>
    <div class="cart-item__description">
      <div class="cart-item__top">
        <div class="cart-item__top-left">
          <div class="cart-item__title">
            <a href="<?php echo get_permalink($product_id) ?>" class="hs-product-title">
              <?php echo $_product->get_title(); ?></a>
            <?php foreach ($variation_attributes as $attribute_name => $attribute_value) { ?>
              <p class="cart-item__variant-title"><?php echo $attribute_value ?></p>
            <?php } ?>

          </div>
        </div>
        <div class="cart-item__close">
          <span class="remove-item"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 329.26933 329" width="16px" height="12px">
              <path d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"></path>
            </svg></span>
        </div>
      </div>
      <div class="cart-item__price-qty">
        <div class="cart-item__qty-wrapper">
          <div class="cart-item__qty">
            <div class="cart-item__qty-counter">
              <div class="cart-item__qty-btn cart-item__qty-btn--minus">
                <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" viewBox="0 -192 469.33333 469">
                  <path d="m437.332031.167969h-405.332031c-17.664062 0-32 14.335937-32 32v21.332031c0 17.664062 14.335938 32 32 32h405.332031c17.664063 0 32-14.335938 32-32v-21.332031c0-17.664063-14.335937-32-32-32zm0 0"></path>
                </svg>
              </div>
              <input type="number" min="1" max="100" value="<?php echo $cart_item['quantity'] ?>" data-value="<?php echo $cart_item['quantity'] ?>" class="cart-item__input" />
              <label for="40031513083969:db6c10d238536527c2122711449a0ae8" class="cart-item__qty-lbl">1</label>
              <div class="cart-item__qty-btn cart-item__qty-btn--plus">
                <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" version="1.1" x="0px" y="0px" viewBox="0 0 492 492" style="enable-background: new 0 0 492 492" xml:space="preserve">
                  <g>
                    <g>
                      <path d="M465.064,207.566l0.028,0H284.436V27.25c0-14.84-12.016-27.248-26.856-27.248h-23.116    c-14.836,0-26.904,12.408-26.904,27.248v180.316H26.908c-14.832,0-26.908,12-26.908,26.844v23.248    c0,14.832,12.072,26.78,26.908,26.78h180.656v180.968c0,14.832,12.064,26.592,26.904,26.592h23.116    c14.84,0,26.856-11.764,26.856-26.592V284.438h180.624c14.84,0,26.936-11.952,26.936-26.78V234.41    C492,219.566,479.904,207.566,465.064,207.566z"></path>
                    </g>
                  </g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                </svg>
              </div>
            </div>
          </div>
        </div>
        <?php

        $regular_price = $_product->get_regular_price();
        $formatted_price = wc_price($regular_price);

        $variation = wc_get_product($variation_id);
        $variation_price = $variation ? $variation->get_price() : '';

        ?>
        <div class="cart-item__price">
          <span class="compare-at"></span>
          <span class="money"><?php echo WC()->cart->get_product_price($_product); ?></span>
        </div>
      </div>
    </div>
  </div>
</div>
