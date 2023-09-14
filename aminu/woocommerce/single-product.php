<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package aminu
 */

get_header();
$product = wc_get_product();

$product_id = $product->get_id();
$has_variants = false;
$product_var = new WC_Product_Variable($product_id);
if ($product->is_type('variable') && $variations = $product_var->get_available_variations()) {
	$has_variants = true;
	$defailt_attributes = $product_var->get_default_attributes();
	$available_attributes = $product_var->get_available_variations();
	$first_variation_price = $available_attributes[0]['display_price'];
}

?>

<style>
	#pagefooter {
		padding-bottom: 90px;
	}
</style>

<main id="content" class="page-content" role="main">
	<div class="container__wrap">
		<div id="section-main-product" class="main-product-section">
			<!-- Single Main Product  -->
			<div data-section-type="main-product" data-components="accordion,custom-select,modal">
				<div class="product-detail quickbuy-content container container__max">
					<div class="columns">
						<div class="column-12 column-md-6 gallery gallery--layout-carousel-beside gallery-size-medium product-column-left has-thumbnails" data-aos="fade-in" data-aos="fade-in" -delay="0.2s" data-variant-image-grouping="true" data-variant-image-grouping-option="Color,Colour,Couleur,Farbe" data-variant-image-grouping-option-index="">


							<div class="gallery__inner sticky-content-container">
								<!-- Product Image  -->
								<div class="product-media">
									<?php if (has_post_thumbnail()) : ?>
										<div class="slideshow product-slideshow">
											<div class="product-slideshow__wrapper swiper" data-swiper data-options='{
                          "slidesPerView": 1,
                          "spaceBetween": 0,
                          "loopedSlides": 6,
                          "navigation": {
                            "nextEl": ".swiper-button-next",
                            "prevEl": ".swiper-button-prev"
                          },
                          "thumbs": ".product-thumbnail__swiper"
                        }' id="my-gallery">
												<?php
												$featured_image_id = get_post_thumbnail_id($product->get_id());
												$gallery_image_ids = $product->get_gallery_image_ids();
												$gallery_image_ids = array_merge(array($featured_image_id), $gallery_image_ids);

												?>
												<div class="swiper-wrapper">
													<?php foreach ($gallery_image_ids as $image_id) {
														$image_url = wp_get_attachment_image_url($image_id, 'large');
													?>
														<div class="product-media__slide swiper-slide" aria-hidden="false" tabindex="0" role="tabpanel">
															<div id="FeaturedMedia-template--19075229352238__main-22355370573889-wrapper" class="product-media-wrapper" data-media-id="template--19075229352238__main-22355370573889">
																<a href="<?php echo $image_url; ?>" data-fancybox="gallery-product">
																	<div class="product-media__item product-media__item--image">
																		<div class="rimage-outer-wrapper">
																			<div class="rimage-wrapper">
																				<img width="358px" height="358px" class="rimage__image fade-in lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php echo $image_url; ?>" />
																			</div>
																		</div>
																	</div>
																</a>
															</div>
														</div>
													<?php } ?>

												</div>

											</div>
										</div>
									<?php else : ?>
										<img class="rimage__image fade-in lazyautosizes lazyloaded" src="<?php echo wc_placeholder_img_src('full'); ?>" alt="">
									<?php endif; ?>

									<?php if (!empty($gallery_image_ids)) : ?>
										<div class="slideshow-controls">
											<div class="slideshow-controls__arrows">
												<div class="swiper-button swiper-button-prev" aria-label="Previous" aria-disabled="true">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
														<title>Left</title>
														<polyline points="15 18 9 12 15 6"></polyline>
													</svg>
												</div>
												<div type="button" class="swiper-button swiper-button-next" aria-label="Next" aria-disabled="false">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
														<title>Right</title>
														<polyline points="9 18 15 12 9 6"></polyline>
													</svg>
												</div>
											</div>
										</div>
										<div thumbsSlider="" class="product-thumbnail__swiper swiper tw-flex" data-swiper data-options='{
                        "slidesPerView": 7,
                        "loop": true,
                        "spaceBetween": 10,
                        "freeMode": true,
                        "watchSlidesProgress": true
                      }'>
											<div class="swiper-wrapper">
												<?php foreach ($gallery_image_ids as $image_id) {
													$image_url = wp_get_attachment_image_url($image_id, 'thumbnail');
												?>
													<div class="product-thumbnail__slide swiper-slide">
														<div class="thumbnail product-thumbnail--media-image">
															<div class="rimage-outer-wrapper" style="max-width: 850px">
																<div class="rimage-wrapper">
																	<img width="358px" height="358px" class="rimage__image fade-in lazyautosizes lazyloaded" alt="<?php echo $product->get_title(); ?>" loading="lazy" src="<?php echo $image_url; ?>" />
																</div>
															</div>
														</div>
													</div>
												<?php } ?>

											</div>
										</div>
									<?php endif; ?>
								</div>

							</div>
						</div>
						<!-- COULUMN RIGHT  -->
						<div class="column-12 column-md-6 detail product-column-right" data-aos="fade-in" data-aos="fade-in" -delay="0.2s">
							<!-- Product Sticky  -->
							<div class="product-sticky-form">
								<div class="container">
									<div class="product-sticky-form__inner">
										<div class="product-sticky-form__content-wrapper desktop-only">
											<div class="product-sticky-form__image-wrapper">
												<img class="product-sticky-form__image" sizes="75px" src="<?php echo the_post_thumbnail_url('thumbnail') ?>" />
											</div>

											<div class="product-sticky-form__info">
												<div class="product-sticky-form__bottom-info">
													<span class="product-sticky-form__title"><?php echo $product->get_title(); ?></span>
													<span class="square-separator square-separator--subdued"></span>
													<span class="product-sticky-form__price">
														<div class="atc-price product-price__area">
															<span class="atc-money">
																<?php if ($has_variants) {
																	echo wc_price($first_variation_price);
																} else {
																	echo wc_price($product->get_price());
																} ?>
															</span>
														</div>
													</span>
												</div>
											</div>
										</div>
										<div class="product-sticky-form__form">

											<product-payment-container form-id="product-form-template--19075229352238__main-6839898734657" class="product-sticky-form__payment-container"><input type="hidden" name="id" value="40031513673793" />
												<button data-product-id="<?php echo get_the_ID(); ?>" class="btn ProductForm__AddToCart sticky-add" type="submit" data-add-to-cart-text="Add to cart">
													Add to cart
												</button>
												<div class="atc-price mobile-only">
													<span class="atc-money">
														<?php if ($has_variants) {
															echo wc_price($first_variation_price);
														} else {
															echo wc_price($product->get_price());
														} ?>
													</span>
												</div>
											</product-payment-container>
										</div>
									</div>
								</div>
							</div>
							<!-- / Product Sticky  -->
							<div class="product-form sticky-content-container" data-ajax-add-to-cart="true" data-product-id="6839898734657" data-enable-history-state="true" data-show-sale-price-label="true" data-show-preorder-label="false">
								<!-- Title  -->
								<div class="product-title">
									<div class="product-vendor"><?php the_field('vendor') ?></div>

									<div class="title">
										<h1 class="title__text">
											<?php echo $product->get_title(); ?>
											<span class="title__icon">
												<img src="<?php bloginfo('template_directory') ?>/assets/assets/images/am___pm.webp" alt="Icons" /></span>
										</h1>
									</div>
									<div class="product-subtitle">
										<div class="product-subtitle__text">
											<?php echo $product->get_short_description(); ?>
										</div>
										<span class="desktop-only">
											<?php $star_rating = $product->get_average_rating();
											$rating_count = $product->get_rating_count();
											$review_count = $product->get_review_count();
											?>
											<div class="product-rating">
												<div class="product-rating-badge" data-average-rating="<?php echo $star_rating; ?>" data-number-of-reviews="<?php echo $review_count; ?>" data-number-of-rating="<?php echo $rating_count; ?>">
													<span class="product-rating-badge__stars" data-score="<?php echo $star_rating; ?>" tabindex="0" aria-label="<?php echo $star_rating; ?> stars" role="button">
														<i class="ri-star-s-line"></i><i class="ri-star-s-line"></i><i class="ri-star-s-line"></i><i class="ri-star-s-line"></i><i class="ri-star-s-line"></i>
													</span>
													<span class="product-rating-badge__text">
														<?php if ($star_rating) {
															echo $review_count > 1 ? $review_count . ' reviews' : $review_count . ' review';
														} else {
															echo "No review yet";
														} ?>
													</span>
												</div>
											</div>
										</span>
									</div>
								</div>
								<!-- / Title  -->
								<!-- Price  -->
								<div style="flex-direction:column" class="product-price product-price__container">
									<div>
										<div class="product-price__area">
											<div class="price h4-style">
												<span class="current-price theme-money">
													<?php if ($has_variants) {
														echo wc_price($first_variation_price);
													} else {
														echo wc_price($product->get_price());
													} ?>
												</span>
											</div>
										</div>
									</div>

									<div class="product-price__descriptors">
										<p class="tax-notice">*inclusive of taxes</p>
										<div class="product__inventory-transfer"></div>
									</div>
								</div>
								<!-- / Price  -->
								<!-- Benefits  -->
								<?php if (have_rows('featured_icons')) : ?>
									<div class="product-benefits">
										<div class="product-benefits__list">
											<?php while (have_rows('featured_icons')) : the_row(); ?>
												<li class="product-benefits__item">
													<?php $icon_id = get_sub_field('icon')['ID'];
													$icon_url = wp_get_attachment_url($icon_id);
													?>
													<img width="70px" height="70px" class="product-benefits__icon" src="<?php echo $icon_url; ?>" />
													<p class="product-benefits__text"><?php the_sub_field('text') ?></p>
												</li>

											<?php endwhile; ?>
										</div>
									</div>
								<?php endif; ?>
								<!-- / Benefits  -->
								<!-- Description  -->
								<div class="product-description not-in-quickbuy">
									<?php echo $product->get_description(); ?>
								</div>
								<!-- / Description  -->

								<span class="mobile-only judgeme_mobile">
									<!-- Rating Mobile  -->
									<div class="product-rating">
										<div class="product-rating-badge" data-average-rating="<?php echo $star_rating; ?>" data-number-of-reviews="<?php echo $review_count; ?>" data-number-of-rating="<?php echo $rating_count; ?>">
											<span class="product-rating-badge__stars" data-score="<?php echo $star_rating; ?>" tabindex="0" aria-label="<?php echo $star_rating; ?> stars" role="button">
												<i class="ri-star-s-line"></i><i class="ri-star-s-line"></i><i class="ri-star-s-line"></i><i class="ri-star-s-line"></i><i class="ri-star-s-line"></i>
											</span>
											<span class="product-rating-badge__text">
												<?php if ($star_rating) {
													echo $review_count > 1 ? $review_count . ' reviews' : $review_count . ' review';
												} else {
													echo "No review yet";
												} ?>
											</span>
										</div>
									</div>
									<!-- / Rating Mobile  -->
								</span>

								<div class="product-offer-box">
									<p>₹1000 OFF on Purchase of ₹5999</p>
								</div>

								<div class="buy-buttons-row">


									<form method="post" action="" id="product-form-template" accept-charset="UTF-8" class="form product-purchase-form" enctype="multipart/form-data" data-product-id="6839898734657">
										<input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" />
										<?php if ($has_variants) : ?>
											<div data-selected-variant="<?php echo $available_attributes[0]['variation_id'] ?>" class="attr-radio__group">
												<?php $i = 1;
												foreach ($available_attributes as $variation_value) {
													foreach ($variation_value['attributes'] as $key => $attribute_value) :
														$attribute_name = str_replace('attribute_', '', $key);
														// echo $attribute_name . ': ' . $attribute_value . '<br>';
														if ($attribute_value) {

															$price_amount = $variation_value['display_price'];
															$formatted_price = $currency_symbol . ' ' . number_format($price_amount, 2, '.', ',');
															$formatted_price = preg_replace('/(\.\d*?)0+$/', '', $formatted_price);
												?>

															<label class="attr-radio__label">
																<input name="variant" <?php echo $i == 1 ? 'checked' : '' ?> type="radio" data-price="<?php echo esc_attr($formatted_price); ?>" value="<?php echo $variation_value['variation_id'] ?>" data-stock="<?php echo $variation_value['is_in_stock'] ? '1' : '0' ?>">
																<?php echo $attribute_value ?>
															</label>

												<?php $i++;
														};
													endforeach;
												} ?>


											</div>
										<?php endif; ?>

										<div class="quantity-submit-row input-row">
											<div class="quantity-submit-row__submit input-row">
												<button data-product-id="<?php echo get_the_ID(); ?>" class="button button--large ProductForm__AddToCart" type="submit">
													Add to cart
												</button>
											</div>

											<div class="backorder al-hidden">
												<p>
													<span class="backorder__variant"> A-HA Body Wash - 150 ML </span>
													is backordered and will ship as soon as it is back in stock.
												</p>
											</div>
										</div>

										<div class="store-availability-container-outer"></div>
									</form>
									<!-- / Add to Cart  -->

									<a class="button chatwithus" style="display:none" href="../index.html#quiz-QYHZ7V" target="_blank">Is This Right For Me?</a>
								</div>


								<!-- Accordion  -->
								<?php if (have_rows('product_accordion')) : ?>
									<div class="accordion desk-only">
										<?php while (have_rows('product_accordion')) : the_row(); ?>
											<div class="nm product-detail-accordion">
												<div class="accordion initialized" data-allow-multi-open="true">
													<div class="accordion-item">
														<div class="accordion-item__title" aria-expanded="false">
															<?php the_sub_field('heading') ?> <i class="ri-add-line"></i><i class="ri-subtract-line"></i>
														</div>
														<div class="accordion-item__panel">
															<div class="accordion-item__content rte cf">
																<?php the_sub_field('content') ?>
															</div>
														</div>
													</div>
												</div>
											</div>
										<?php endwhile; ?>
									</div> <!-- / Accordion  -->
								<?php endif; ?>

								<!-- Tabs  -->
								<div class="product-details-tabs mobile-only">
									<div class="tabs">
										<ul id="tabs-nav" class="tabs-nav__list">
											<li class="tabs-nav__item active">
												<a href="#tab-benefit-1">
													<div class="nav_itm">
														<h5 class="h5">Product Details</h5>
													</div>
												</a>
											</li>
											<li class="tabs-nav__item">
												<a href="#tab-benefit-2">
													<div class="nav_itm">
														<h5 class="h5">Ingredients & Facts</h5>
													</div>
												</a>
											</li>
										</ul>
										<div id="tabs-content" class="tabs-content">
											<div id="tab-benefit-1" class="tab-content" style="display: block;">
												<p>
													Good for - gentle exfoliation, beginners for AHA's, treats discoloration and
													rough texture, helps reduce existing tan & dark spots.
												</p>
												<p>
													Skin Type - Dry, Oily, Combination, Normal, also tanned, acne-prone, mature
													skin
												</p>
												<p>
													Skin Goals- De-Tanning, Spot-Correction, Body Acne-Clearing, Brightening,
													Deep-Cleansing
												</p>
												<p>
													Texture & Smell - Bouncy natural gel texture with natural uplifting notes of
													mint & pine, no added fragrance
												</p>
											</div>
											<div id="tab-benefit-2" class="tab-content">
												<p>
													<b>Full of List</b> - fruit-derived AHAs, plant surfactants, licorice,
													mulberry, charcoal, peppermint leaf oil, pine leaf oil, natural Vitamin E.
												</p>
												<p>
													Free of List - parabens, silicones, sulfates, and 1,350+ ingredients that
													have questionable data.
												</p>
												<p>
													Vegan & Cruelty-free | Dermatologically Tested | Medicert | MADE SAFE
													Certified | Zero Plastic Inside
												</p>
												<p>
													For External Use Only. Always do a patch test before use. Use only as
													directed on unbroken skin.
												</p>
											</div>

										</div>
									</div>
								</div>
								<!-- / Tabs  -->
							</div>
						</div>
					</div>
				</div>
				<!-- /.product-detail -->
			</div>
			<!-- / Single Main Product  -->
		</div>
		<div id="section-how-it-works" class="how-it-works-section">
			<!-- How It Works  -->
			<div class="how-it-works" data-section-type="video">
				<div class="how-it-works__inner">
					<div class="how-it-works__columns columns">
						<div class="how-it-works__image column-12 column-md-4">
							<div class="plyr__video-embed al-video-player" id="player" data-plyr='{ "title": "Example Title" }' data-thumbnail-url="./assets/images/homepage/Rectangle_358_180x.png" data-play-icon-svg='<svg        xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="1"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="feather feather-play-circle"
                        >
                          <title>Play</title>
                          <circle cx="12" cy="12" r="10"></circle>
                          <polygon points="10 8 16 12 10 16 10 8"></polygon>
                        </svg>'>
								<iframe class="video-container__video-element" id="theme-yt-video-1" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" title="Aminu Life | AHA Power Peel | The instant facial" width="640" height="360" src="https://www.youtube.com/embed/4iG0I9aZiUQ?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1" data-gtm-yt-inspected-10="true"></iframe>
							</div>
						</div>
						<div class="how-it-works__heading column-md-8">
							<div class="accordion">
								<h2 class="how-it-works__title">WHY &amp; HOW IT WORKS</h2>
							</div>

							<div class="panel">
								<div class="how-it-works__content">
									<p class="desktop-only stars">
										<i class="ri-star-fill"></i>
										<i class="ri-star-fill"></i>
										<i class="ri-star-fill"></i>
										<i class="ri-star-fill"></i>
										<i class="ri-star-fill"></i>
									</p>
									<p>
										The skin barrier is the protective layer of your skin, which is
										there primarily to keep moisture and hydration inside, and block
										external aggressors such as pollution from getting into your skin.
										The exfoliating gel formula works hard to fade discoloration while
										naturally restoring and replenishing your skin’s barrier.
										&nbsp;<br /><br />AHA's work by lifting off the build-up of dead
										cells on the skin's surface to reveal a brighter, smoother
										complexion. Fruit AHA complex helps improve moisturization while
										simultaneously increasing the production of structural components,
										such as collagen and glycosaminoglycan, as well as reversing
										cutaneous atrophy. Effective at treating mild pigmentation,
										enlarged pores, fine lines, wrinkles and uneven skin tone.
										&nbsp;<br /><br />Also helps other products better absorb into the
										skin. Thus, truly revealing a rejuvenated complexion! &nbsp;<br />•
										Decongest pores and remove pollutants &nbsp;<br />• Gently
										exfoliates and deeply cleans with every wash &nbsp;<br />•
										Brightens and ensures balanced, refreshed, radiant skin &nbsp;<br />•
										Helps fade blemishes and reduces tanning
									</p>
								</div>
							</div>

							<span class="show_hide" data-content="toggle-text">Read More</span>
						</div>
					</div>
				</div>
			</div>
			<!-- /How It Works  -->
		</div>
		<div id="section-benefits" class="product-benefits-section section-padding">
			<!-- Product Benefits  -->
			<div class="product-benefits" style="background: #ffffff">
				<div class="product-benefits__inner container">
					<div class="product-benefits__images al-relative">
						<div class="main-img image-wrapper">
							<img src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/Middle-Pannel_a7937cb5-6a98-4fd9-b245-11fa21c91eed_548x752.png?v=1659005123" />
						</div>

						<div class="al-absolute image-1">
							<div class="image-wrapper">
								<img src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/Left-Pannel_e6021996-7d91-476d-aa4a-dd4c9420c637_287x280.png?v=1659005139" />
							</div>
						</div>

						<div class="al-absolute image-2">
							<div class="image-wrapper">
								<img src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/Right-Pannel_d285b01f-202c-407e-b46a-587ea14841fa_287x280.png?v=1659005154" />
							</div>
						</div>

						<div class="al-absolute text-border text-box text-box--beige">
							<p>
								<b>Gentle exfoliation &amp; brightening right in the shower!</b><br />
								Formulated with an optimum acid level to treat rough, dull and tanned
								body skin. The low foaming, soap-free cleanser maintains the natural
								pH balance of the skin &amp; leaves skin super clean, soft and smooth.
							</p>
							<p></p>
							<p></p>
						</div>

						<div class="al-absolute text-border text-box text-box--pink">
							<p>
								<b>We love your skin &amp; planet in equal doses!!</b><br />
								Your skin is beautiful no matter what! If there are spots left behind
								by acne or tanned after a beach vacay, there’s always the A-ha moment
								with our microplastic-free AHA Body Wash &lt;3
							</p>
						</div>

						<div class="al-absolute text-border text-box text-box--green">
							<p>
								<b>Fruit AHA's + Patented Sugar Complex + Plant Cleansing Agents </b><br />
								Five natural AHAs boosts skin cell renewal. Plant extracts of
								Elderberry, Licorice, Uva ursi help brighten. Patented hydration
								technology reinforces the synthesis of ceramides.
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- /Product Benefits  -->
		</div>
		<div id="section-techonologies" class="technologies-section section-padding">
			<!-- Key Technologies  -->
			<div class="product-technologies container">
				<div class="product-technologies__heading section-header al-text-center">
					<h2 class="section-title al-uppercase align-center">Key Technologies</h2>
					<p class="section-subheading">
						We believe in the power of nature + advancements of science. We believe
						the best and safest formulas are made by tapping into both worlds
					</p>
				</div>
				<div class="columns align-middle">
					<div class="column-12 column-md-6">
						<div class="card product-technology-card card--no-border">
							<div class="card__inner">
								<div class="card__image-wrapper">
									<div class="card__image card__image--primary card__image--active">
										<div class="rimage-outer-wrapper">
											<div class="rimage-wrapper">
												<img class="rimage__image fade-in cover lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/1-AHA-Body-Wash-Key-Technology-copy_565x565.jpg" />
											</div>
										</div>
									</div>
								</div>

								<div class="card__info">
									<div class="card__info-text">
										<div class="card-title al-text-center">3D Hydration with Natural Sugar Complex</div>
										<div class="card-subtitle">The patented technology help create reservoirs of moisture in the skin by boosting the synthesis of hyaluronic acid. It helps ensure even hydration through different layers of skin, reinforces the synthesis of ceramides &amp; proteins that strengthen the natural moisturising factor (NMF) and effectively provides an “anti-dehydration shield”.</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="column-12 column-md-6">
						<div class="card product-technology-card card--no-border">
							<div class="card__inner">
								<div class="card__image-wrapper">
									<div class="card__image card__image--primary card__image--active">
										<div class="rimage-outer-wrapper">
											<div class="rimage-wrapper">
												<img class="rimage__image fade-in cover lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/2-AHA-Body-Wash-Key-Technology-copy_565x565.jpg" />
											</div>
										</div>
									</div>
								</div>

								<div class="card__info">
									<div class="card__info-text">
										<div class="card-title al-text-center">Apple Amino-Acid Wash</div>
										<div class="card-subtitle">Apple amino-acids derived surfactant help boost the cleansing power, working in synergy to gently whisk away dirt, toxins and oils with a hint of moisture. It supports the skin barrier function (TEWL), reduces dryness &amp; helps maintening the skin integrity.</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Key Technologies  -->
		</div>
		<div id="section-product-ingredients" class="product-ingredients-section">
			<!-- Product Ingredients  -->
			<div class="product-key-ingredients container container__max container__max--no-space">
				<div class="product-key-ingredients__haeding section-header al-text-center">
					<h2 class="section-titlte uppercase align-center">KEY INGREDIENTS</h2>
				</div>
				<div class="panel">
					<div class="ingredients">
						<div class="ingredients__top">
							<div class="subtitle al-text-center">
								<p>
									Our products are formulated with the highest-quality botanical,
									earth &amp; marine ingredients, combined with innovative scientific
									alternatives and technologies.
								</p>
							</div>
						</div>
						<div class="ingredients__blocks columns">
							<div class="ingredient column-12 column-md-4">
								<div class="ingredient__inner">
									<div class="ingredient__text">
										<h4 class="ingredient__title">Fruit AHA Complex</h4>
										<div class="ingredient__content">
											<p>The Lactic Acid (Bilberry), Glycolic Acid (Sugar Cane), Citric Acid (Orange &amp;amp; Lemon), Malic and Tartaric Acids (Sugar Maple) all work to renew skin cells, brings brightness to dull skin, break pore-clogging debris and treat uneven tone.</p>
										</div>
									</div>
									<div class="ingredient__img">
										<img src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/1_AHA_Fruit_Complex_f027ffc0-9dcd-4db7-bb90-201599e99982_220x218.webp" />
									</div>
								</div>
							</div>
							<div class="ingredient column-12 column-md-4">
								<div class="ingredient__inner">
									<div class="ingredient__text">
										<h4 class="ingredient__title">Charcoal</h4>
										<div class="ingredient__content">
											<p>Activated charcoal can unclog pores by adsorbing excess oil, impurities, and dead skin cells. We use bamboo-derived charcoal for its high surface area, which increases its potency as a cleanser..</p>
										</div>
									</div>
									<div class="ingredient__img">
										<img src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/2_Charcol_220x218.webp" />
									</div>
								</div>
							</div>
							<div class="ingredient column-12 column-md-4">
								<div class="ingredient__inner">
									<div class="ingredient__text">
										<h4 class="ingredient__title">Botanical Complex</h4>
										<div class="ingredient__content">
											<p>Anti-inflammatory plant extracts of Elderberry, Licorice, Uva ursi provide soothing properties to the skin. They help to reduce uneven skin tone and protect the skin from oxidative damage by fighting free radicals.</p>
										</div>
									</div>
									<div class="ingredient__img">
										<img src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/1_AHA_Fruit_Complex_f027ffc0-9dcd-4db7-bb90-201599e99982_220x218.webp" />
									</div>
								</div>
							</div>
						</div>
						<div class="ingredients__ctas al-text-center">
							<div class="popup-wrapper al-inline-block">
								<div class="popup-container">
									<a class="popup-trigger button" data-target="#popup1">All Ingredients</a>

									<a class="popup-trigger button" data-target="#popup2">More&nbsp;information</a>
								</div>

								<div id="popup1" class="popup">
									<div class="popup__content">
										<div class="popup__text">
											Aqua, Coco-Glucoside, Glycerine, Heptyl Glucoside
											(plant-derived), BilberryFruit/Leaf Extract, Sugar Cane Extract,
											Orange Fruit Extract, Lemon Fruit Extract, Sugar Maple Extract,
											Methylpropanediol (humectant), Caprylyl Glycol (humectant),
											Phenylpropanol, Hydroxypropyl Starch Phosphate (maize starch),
											Sodium Benzoate, Potassium Sorbate (food grade preservative),
											Acacia Senegal Gum, Xanthan Gum, Hydroxy Ethyl Cellulose
											(cellulose gum), Sodium Cocoyl Apple Amino Acids, Licorice Root
											Extract, Asafetida Gum Extract, Damiana Leaf Oil, Elderflower
											Extract, Mulberry Leaf Extract, Grape Seed Extract, Uva Ursi
											Leaf Extract, Charcoal Powder, Trisodium Ethylenediamine
											Disuccinate (antioxidant), Peppermint Leaf Oil, Pine Leaf Oil,
											Mixed Tocopherol/Natural Vitamin E. At Aminu, we constantly
											strive for transparency &amp; being at the forefront of
											innovation. We are dedicated to maintaining the accuracy of the
											ingredient lists on this website and on other third-party
											websites. However, because ingredients and regulatory guidelines
											are subject to change, for an accurate listing of ingredients,
											please refer to your product packaging. We will always keep
											evolving and improving!
										</div>
										<span class="popup__btn-close">×</span>
									</div>
								</div>

								<div id="popup2" class="popup">
									<div class="popup__content">
										<div class="popup__text">
											<p>Name - Aminu Wellness Pvt. Ltd.</p>
											<p>
												<br />Manufacturer/Importer/Brand: Aminu Wellness Pvt Ltd, 9/B
												Government Industrial Estate, Near Hindustan Naka, Charkop,
												Kandivali (W), Mumbai-400067, Maharashtra, India
											</p>
											<p>
												<br />Country of Origin: Proudly Made in India with a mix of
												hard work &amp; hysterical laughter.
											</p>
										</div>
										<span class="popup__btn-close">×</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Product Ingredients  -->
		</div>
		<div id="section-use-direction" class="use-direction-section">
			<!-- Use Direction  -->
			<div class="product-use-directions use-directions container container__max container__max--no-space">
				<div class="al-grid al-grid-cols-10 al-items-center">
					<div class="use-directions__content--left al-col-span-10 md:al-col-span-3">
						<div class="use-directions__heading">
							<h2>DIRECTIONS OF USE</h2>
							<p>
								<b>HOW:</b> Take a pump dose of wash, gently massage on damp body,
								rinse with water, pat dry. Follow up with oil/lotion. Use SPF in day.
								In some tingling and redness may occur. <br />

								<b>WHERE:</b> Entire Body <br />

								<b>WHEN:</b> AM and PM
							</p>
						</div>
					</div>
					<div class="use-directions__content--right al-col-span-10 md:al-col-span-7" style="background: #fff8ed">
						<div class="columns use-directions__list">
							<div class="use-direction column-12 column-md-4">
								<div class="use-direction__img">
									<img src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/1_How_To_Use_copy_34bf95aa-a096-4cca-9280-5e85b2bf574d_200x200.webp" />
								</div>
								<div class="use-direction__content">
									<p>New to exfoliants? Start Slow. Start out using A-HA Body Wash 3-4 times per week, gradually working up to daily or 2x a daily use.</p>
								</div>
							</div>
							<div class="use-direction column-12 column-md-4">
								<div class="use-direction__img">
									<img src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/2_How_To_Use_copy_30705348-25a8-4ea8-ad5e-617e95c7db17_200x200.webp" />
								</div>
								<div class="use-direction__content">
									<p>Multi-Tasking Tips Can be used as a gentle exfoliating mask by leaving on dry skin for 5-10mins, rinse and pat dry.</p>
								</div>
							</div>
							<div class="use-direction column-12 column-md-4">
								<div class="use-direction__img">
									<img src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/3_How_To_Use_copy_5bc378c3-6c15-4776-9ade-cc1b35ff5c21_200x200.webp" />
								</div>
								<div class="use-direction__content">
									<p>Good To Know AHA/BHAs, retinol and retinoids, scrubs, exfoliants can cause irritation if used incorrectly depending on your skin’s condition. If you are prone to reaction or have sensitive skin, avoid these.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- / Use Direction  -->
		</div>
		<div id="section-product-features" class="product-feature-section section-padding">
			<!-- Product Feature  -->
			<div class="container product-feature">
				<div class="section-header al-text-center">
					<h2 class="hometitle h4-style align-center cc-animate-init -in cc-animate-complete" data-aos="fade-in"="">
						DELIVERING SAFE &amp; EFFECTIVE RESULTS
					</h2>
				</div>

				<div class="icon-blurb__list icon-blurb--product-feature icon-blurb__list--columns-6">
					<div id="feature-icon-blurb" class="icon-blurb al-text-center cc-fade-in-up cc-animate-init -in cc-animate-complete" data-aos="fade-in"="cc-fade-in-up" data-aos="fade-in" -delay="0.15s">
						<div class="al-inline-block lightly-spaced-row image-wrapper">
							<img width="150px" height="150px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Vegan_150x.png" alt="Vegan" />
						</div>

						<h3 class="icon-blurb__title product-feature__title al-uppercase">
							Vegan
						</h3>

						<div class="icon-blurb__text al-text-left rte">
							<p>This products contain no animal ingredients or animal byproduct including honey, beeswax, milk, or eggs.</p>
						</div>
					</div>
					<div id="feature-icon-blurb" class="icon-blurb al-text-center cc-fade-in-up cc-animate-init -in cc-animate-complete" data-aos="fade-in"="cc-fade-in-up" data-aos="fade-in" -delay="0.15s">
						<div class="al-inline-block lightly-spaced-row image-wrapper">
							<img width="150px" height="150px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Dermatologically_tested_150x.png" alt="Dermatologically tested" />
						</div>

						<h3 class="icon-blurb__title product-feature__title al-uppercase">
							Dermatologically tested
						</h3>

						<div class="icon-blurb__text al-text-left rte">
							<p>This product is tested for its safety and is proven non-irritant, as per Methods of test for safety evaluation of cosmetics - 3rd Revision.</p>
						</div>
					</div>
					<div id="feature-icon-blurb" class="icon-blurb al-text-center cc-fade-in-up cc-animate-init -in cc-animate-complete" data-aos="fade-in"="cc-fade-in-up" data-aos="fade-in" -delay="0.15s">
						<div class="al-inline-block lightly-spaced-row image-wrapper">
							<img width="150px" height="150px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Australian_certified_150x.png" alt="Made Safe Certified" />
						</div>

						<h3 class="icon-blurb__title product-feature__title al-uppercase">
							Made Safe Certified
						</h3>

						<div class="icon-blurb__text al-text-left rte">
							<p>The Australian Made Safe® Certified logo represents safer, cleaner practices than any government standard.</p>
						</div>
					</div>
					<div id="feature-icon-blurb" class="icon-blurb al-text-center cc-fade-in-up cc-animate-init -in cc-animate-complete" data-aos="fade-in"="cc-fade-in-up" data-aos="fade-in" -delay="0.15s">
						<div class="al-inline-block lightly-spaced-row image-wrapper">
							<img width="150px" height="150px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/animal_test_free_150x.png" alt="Animal Test Free" />
						</div>

						<h3 class="icon-blurb__title product-feature__title al-uppercase">
							Animal Test Free
						</h3>

						<div class="icon-blurb__text al-text-left rte">
							<p>We do not conduct, commission or allow any tests on animals for our products anywhere in the world.</p>
						</div>
					</div>
					<div id="feature-icon-blurb" class="icon-blurb al-text-center cc-fade-in-up cc-animate-init -in cc-animate-complete" data-aos="fade-in"="cc-fade-in-up" data-aos="fade-in" -delay="0.15s">
						<div class="al-inline-block lightly-spaced-row image-wrapper">
							<img width="150px" height="150px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/zero_plastic_inside_150x.png" alt="Zero plastic inside" />
						</div>

						<h3 class="icon-blurb__title product-feature__title al-uppercase">
							Zero plastic inside
						</h3>

						<div class="icon-blurb__text al-text-left rte">
							<p>We are a signatory to Zero Plastic Inside, by Plastic Soup Foundation. None of our products contain micro plastics or beads.</p>
						</div>
					</div>
					<div id="feature-icon-blurb" class="icon-blurb al-text-center cc-fade-in-up cc-animate-init -in cc-animate-complete" data-aos="fade-in"="cc-fade-in-up" data-aos="fade-in" -delay="0.15s">
						<div class="al-inline-block lightly-spaced-row image-wrapper">
							<img width="150px" height="150px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/medicert_150x.png" alt="Medicert Awarded" />
						</div>

						<h3 class="icon-blurb__title product-feature__title al-uppercase">
							Medicert Awarded
						</h3>

						<div class="icon-blurb__text al-text-left rte">
							<p>The MediCERT® represents the expertise of specialists to test their product formulations for their intended use &amp;amp; marketing claims.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- /Product Feature  -->
		</div>

		<div class="container">
			<?php //comments_template(); 
			?>
		</div>


	</div>
</main>


<?php

get_footer();
