<?php
    $cart_subtotal = WC()->cart->get_subtotal();
    $subtotal_with_currency = wc_price($cart_subtotal);

?>

<div class="cart-drawer-co empty">
    <div class="cart-drawer-co__wrap">
        <div class="cart-drawer-co__content">
            <div class="cart-drawer-co__total-cart">
                <div class="cart-drawer-co__subtotal">
                    <div class="subtotal-text">Subtotal</div>
                    <div class="subtotal">
                        <span class="subtotal-compare-at"></span>
                        <span class="subtotal-amount"><span class="money"><?php echo $subtotal_with_currency; ?></span></span>
                        <span class="subtotal-discount"></span>
                    </div>
                </div>
            </div>
            <form action="/cart" method="post" novalidate="">
                <div class="cart-drawer-co__finalize-purchase">
                    <div class="cart-drawer-co__checkout-btn-wrap">
                        <button type="button" id="checkout" data-href="<?php echo home_url('/checkout') ?>" class="cart-drawer-co__checkout-btn" name="checkout">
                            CHECKOUT
                        </button>
                    </div>
                    <a href="<?php echo site_url('shop') ?>" class="cart-drawer-co__continue">Continue Shopping</a>
                </div>
            </form>
        </div>
    </div>
    <div class="hs-product-option"></div>
</div>