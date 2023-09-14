jQuery(document).ready(function ($) {

    var blocker = `<div class="site-blocker">
            <div class="aminu-spinner"></div>
        </div>`;

    var itemBlocker = `<div class="item-blocker">
            <div class="aminu-spinner"></div>
        </div>`;

    function add_to_cart(data, $this) {
        $.ajax({
            type: 'POST',
            url: ajax_object.ajax_url,
            dataType: 'json',
            data: data,
            beforeSend: function () {
                if ($this.hasClass('ProductForm__AddToCart')) {
                    $("body").append(blocker);
                } else if ($this.hasClass('cart-item__input')) {
                    $this.closest('.cart-item').append(itemBlocker);
                } else if ( $this.hasClass('btn add-to-cart') || $this.hasClass('hs-upsell-add-to-cart' )) {
                    $this.html('<span class="aminu-spinner"></span>');
                    $this.attr('disabled', 'disabled');
                }
                
            },
            success: function (response) {
                console.log(response);
                if (response.success) {
                    let cart_count = response.data.cart_count;
                    let cart_totals = response.data.cart_totals;
                    let cart_items = response.data.cart_items;
                    let cart_key = response.data.cart_item_key;
                    let product_qty = response.data.product_qty;

                    $(".cart-drawer-header__count").text('(' + cart_count + ')');
                    if (cart_items) {
                        $(".js-dynamic-cart").html(cart_items);
                    }
                    if (cart_key) {
                        $(`.cart-item[data-item-key="${cart_key}"] .cart-item__input`).val(product_qty);
                    }
                    $(".cart-drawer__popup, .cart-drawer__bg-overlay").addClass('active');

                    if (response.data.hasOwnProperty('checkout_box')) {
                        let checkout_box = response.data.checkout_box;
                        $("#checkout-box").html(checkout_box);
                    } else {
                        $("#checkout-box .subtotal-amount .money").html(cart_totals);
                    }
                }

            },
            error: function (err) {
                console.log(err);
            },
            complete: function () {
                $(".site-blocker").remove();
                $(".cart-drawer-popup").removeClass("active");
                $(".cart-drawer-popup__overlay").removeClass("active");
                $this.closest('.cart-item').find(".item-blocker").remove();
                $(".hs-upsell-add-to-cart").html('<span class="hs-add--to--cart">ADD</span>').removeAttr('disabled');
            }
        });
    }


    $(document).on('click', '.ProductForm__AddToCart', function (e) {
        e.preventDefault();
        var $this = $(this);
        var data;
        var product_id = $(this).data('product-id');
        var variation_id = $('.buy-buttons-row .form').find('.attr-radio__group').attr('data-selected-variant');
        if (variation_id !== 'undefined') {
            data = {
                action: 'add_to_cart',
                product_id: product_id,
                variation_id: variation_id,
                nonce: ajax_object.nonce
            }
        } else {
            data = {
                action: 'add_to_cart',
                product_id: product_id,
                nonce: ajax_object.nonce
            }
        }

        add_to_cart(data,$this);
    });

    // Cart Update
    var prev_qty = [];
    $(document).on('focus','.cart-item__item .cart-item__input',function() {
        var qty = $(this).val();
        var cart_key = $(this).closest('.cart-item').data('item-key');
        prev_qty[cart_key] = qty;
    })
    $(document).on('blur','.cart-item__item .cart-item__input',function() {
        var $this = $(this);
        var qty = $this.val();
        var data;
        var product_id = $this.closest('.cart-item').data('product-id');
        var variation_id = $this.closest('.cart-item').data('variant-id');
        var cart_key = $this.closest('.cart-item').data('item-key');
        
        if (variation_id !== 'undefined') {
            data = {
                action: 'add_to_cart',
                product_id: product_id,
                quantity: qty,
                variation_id: variation_id,
                nonce: ajax_object.nonce
            }
        } else {
            data = {
                action: 'add_to_cart',
                product_id: product_id,
                quantity: qty,
                nonce: ajax_object.nonce
            }
        }

        console.log(data);
        if ( qty != prev_qty[cart_key]) {
            add_to_cart(data, $this);
            prev_qty[cart_key] = qty;
        }
        
    });

    $(document).on("click", ".cart-item__qty-btn", function () {
        $this = $(this);
        var inputField = $(this).siblings(".cart-item__input");
        var currentValue = parseInt(inputField.val());
        if ($this.hasClass('cart-item__qty-btn--plus')) {
            inputField.val(currentValue + 1);
        } else {
            inputField.val(currentValue - 1);
        }
        inputField.trigger('input');
        inputField.trigger('blur');
        
    });


    // Mini cart popup
    $('.upsell-product__add [data-cart-popup]').on('click', function (e) {

        var data;
        var $this = $(this);
        var product_id = $(this).data('product-id');
        var variation_id = $(this).data('variant-id');

        if ( $this.attr("data-variant-id") !== undefined ) {
            data = {
                action: 'get_mini_popup',
                product_id: product_id,
                variation_id: variation_id,
                nonce: ajax_object.nonce
            };

            $.ajax({
                type: 'POST',
                url: ajax_object.ajax_url,
                dataType: 'json',
                data: data,
                beforeSend: function () {
                    $this.html('<span class="aminu-spinner"></span>');
                    $this.attr('disabled', 'disabled');
                },
                success: function (response) {
                    if (response.success) {
                        $("#cart-popup-wrapper").html(response.data.mini_popup)
                        $(".cart-drawer-popup__overlay").addClass('active');
                        $(".cart-drawer-popup").addClass('active');
                    }

                },
                error: function (err) {
                    console.log(err);
                },
                complete: function () {
                    $this.html('<span class="hs-add--to--cart">ADD</span>');
                    $this.removeAttr('disabled');
                }
            });

        } else {
            data = {
                action: 'add_to_cart',
                product_id: product_id,
                nonce: ajax_object.nonce
            }
            console.log("Else:" , data)
            add_to_cart(data, $this);
        }

    })

    // Cart Drawer Popup Add to cart
    $(document).on("click", ".cart-drawer-popup .btn.add-to-cart", function (e) {
        e.preventDefault();
        var $this = $(this);
        var data;
        var product_id = $this.closest('.cart-drawer-popup').attr('data-product-id');
        var variation_id = $this.closest('.cart-drawer-popup').attr('data-variation-id');
        data = {
            action: 'add_to_cart',
            product_id: product_id,
            variation_id: variation_id,
            nonce: ajax_object.nonce
        }
        add_to_cart(data, $this);

    })

    // Remove from cart
    $(document).on('click', '.cart-item .cart-item__close', function (e) {
        var key = $(this).closest('.cart-item').data('item-key');
        var $this = $(this);
        $.ajax({
            type: 'POST',
            url: ajax_object.ajax_url,
            data: {
                action: 'remove_from_cart',
                cart_item_key: key,
                nonce: ajax_object.nonce
            },
            beforeSend: function () {
                $this.closest('.cart-item').append(itemBlocker);
            },
            success: function (response) {
                if (response.success) {
                    let cart_count = response.data.cart_count;
                    let cart_items = response.data.cart_items;
                    let cart_totals = response.data.cart_totals;
                    $(".js-dynamic-cart").html(cart_items);
                    $(".cart-drawer-header__count").text('(' + cart_count + ')');

                    if (cart_count == 0) {
                        $(".cart-drawer-co.empty").remove();
                    } else {
                        $("#checkout-box .subtotal-amount .money").html(cart_totals);
                    }
                }

            },
            error: function (err) {
                console.log(err);
            },
            complete: function () {
                $this.closest('.cart-item').find(".item-blocker").remove();
            }
        });
    })


});