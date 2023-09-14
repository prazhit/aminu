var $ = jQuery;

$(document).ready(function () {

    $(document).on("keypress", 'input[type="number"]', function (evt) {
        if (evt.which != 8 && evt.which != 0 && (evt.which < 48 || evt.which > 57)) {
            evt.preventDefault();
        }
    });

    $(document).on("input", 'input[type="number"]', function (evt) {
        var $this = $(this);
        var inputValue = parseInt($this.val());

        if (isNaN(inputValue) || inputValue < parseInt($this.attr("min"))) {
            $this.val($this.attr("min"));
        }

        if (inputValue > parseInt($this.attr("max"))) {
            $this.val($this.attr("max"));
        }
    });

    $('.product-purchase-form .attr-radio__group [name="variant"]').on("change", function () {
        var val = $(this).val();
        var price = $(this).attr("data-price");
        $(this).closest('.attr-radio__group').attr('data-selected-variant', val);
        $(".product-price__area bdi").html(price);
    });

    $(".cart-drawer-popup__overlay, .cart-drawer__bg-overlay").on("click", function () {
        $(this).removeClass("active");
        $(".cart-drawer-popup__overlay").removeClass("active");
        $("#cart-popup-wrapper .cart-drawer-popup").removeClass("active");
    })

    $(document).on("change", ".cart-drawer-popup .select-option-popup", function(){
        var selectedOption = $(this).find("option:selected");
        
        var optionval = selectedOption.val();
        var optionPrice = selectedOption.attr('data-price');
        var option = selectedOption.text();

        console.log(optionPrice)

        $(this).closest(".cart-drawer-popup").attr("data-variation-id",optionval);
        $(this).closest(".cart-drawer-popup").find(".cart-drawer-popup__variant").text(option);
        $(this).closest(".cart-drawer-popup").find(".woocommerce-Price-amount.amount").text(optionPrice);
    })

    // Checkout
    $(document).on("click", "button#checkout", function(){
        var url = $(this).attr("data-href");
        window.location.href = url;
    })

    $('form.checkout').on('change', 'input[name="payment_method"]', function () {
		// $(document.body).trigger('update_checkout');
		setTimeout(function(){
			$('#place_order').removeClass('yape_peru');
		},500)
	});

    setTimeout(function(){
        $('#place_order').removeClass('yape_peru');
    },2000)


    $(".stars span a").hover(function () {
        $(this).addClass("hover");
        $(this).prevAll().addClass("hover");
    }, function () {
        $(this).removeClass("hover");
        $(this).prevAll().removeClass("hover");
    });

    $(".stars span a").click(function () {
        $(this).addClass("s-active");
        $(this).prevAll().addClass("s-active");
        $(this).nextAll().removeClass("s-active");
    });

})