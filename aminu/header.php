<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aminu
 */
global $aminu;
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/assets/css/libs.css" />
	<!-- Main CSS -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/assets/css/theme.css" />

	<?php 
	if (is_cart() || is_checkout() || is_wc_endpoint_url('order-received') ) { ?>
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/woocommerce/assets/css/woo.css" />
	<?php } 
	?>

	<!-- Fix for custom scrollbar if JS is disabled-->
	<noscript>
		<style>
			/**
            * Reinstate scrolling for non-JS clients
            */
			.simplebar-content-wrapper {
				overflow: auto;
			}
		</style>
	</noscript>


	<?php wp_head(); ?>
</head>

<?php 
	//Globals
	global $currency_symbol;

	$currency_symbol = get_woocommerce_currency_symbol(); 
?>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>


	<!-- Announcement -->
	<div id="section-announcement-bar" class="header-section section-announcement-bar">
		<div id="section-id-announcement-bar" class="announcement-bar" data-section-type="announcement-bar" data-aos="fade-in">
			<div class="container container__max">
				<div class="announcement-bar__left desk-only">
					<div class="mob"></div>

					<div class="social-links">
						<span class="follow-text mobile-only"> Follow AMINU</span>

						<ul class="social-links__list">
							<li>
								<a aria-label="Facebook" class="facebook" target="_blank" rel="noopener" href="https://www.facebook.com/aminu.life"><svg width="48px" height="48px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<title>Facebook</title>
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<g transform="translate(-325.000000, -295.000000)" fill="currentColor">
												<path d="M350.638355,343 L327.649232,343 C326.185673,343 325,341.813592 325,340.350603 L325,297.649211 C325,296.18585 326.185859,295 327.649232,295 L370.350955,295 C371.813955,295 373,296.18585 373,297.649211 L373,340.350603 C373,341.813778 371.813769,343 370.350955,343 L358.119305,343 L358.119305,324.411755 L364.358521,324.411755 L365.292755,317.167586 L358.119305,317.167586 L358.119305,312.542641 C358.119305,310.445287 358.701712,309.01601 361.70929,309.01601 L365.545311,309.014333 L365.545311,302.535091 C364.881886,302.446808 362.604784,302.24957 359.955552,302.24957 C354.424834,302.24957 350.638355,305.625526 350.638355,311.825209 L350.638355,317.167586 L344.383122,317.167586 L344.383122,324.411755 L350.638355,324.411755 L350.638355,343 L350.638355,343 Z"></path>
											</g>
										</g>
									</svg></a>
							</li>

							<li>
								<a aria-label="Instagram" class="instagram" target="_blank" rel="noopener" href="https://www.instagram.com/aminu.life/?igshid=37u75edqcu7y"><svg width="48px" height="48px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<title>Instagram</title>
										<defs></defs>
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<g transform="translate(-642.000000, -295.000000)" fill="currentColor">
												<path d="M666.000048,295 C659.481991,295 658.664686,295.027628 656.104831,295.144427 C653.550311,295.260939 651.805665,295.666687 650.279088,296.260017 C648.700876,296.873258 647.362454,297.693897 646.028128,299.028128 C644.693897,300.362454 643.873258,301.700876 643.260017,303.279088 C642.666687,304.805665 642.260939,306.550311 642.144427,309.104831 C642.027628,311.664686 642,312.481991 642,319.000048 C642,325.518009 642.027628,326.335314 642.144427,328.895169 C642.260939,331.449689 642.666687,333.194335 643.260017,334.720912 C643.873258,336.299124 644.693897,337.637546 646.028128,338.971872 C647.362454,340.306103 648.700876,341.126742 650.279088,341.740079 C651.805665,342.333313 653.550311,342.739061 656.104831,342.855573 C658.664686,342.972372 659.481991,343 666.000048,343 C672.518009,343 673.335314,342.972372 675.895169,342.855573 C678.449689,342.739061 680.194335,342.333313 681.720912,341.740079 C683.299124,341.126742 684.637546,340.306103 685.971872,338.971872 C687.306103,337.637546 688.126742,336.299124 688.740079,334.720912 C689.333313,333.194335 689.739061,331.449689 689.855573,328.895169 C689.972372,326.335314 690,325.518009 690,319.000048 C690,312.481991 689.972372,311.664686 689.855573,309.104831 C689.739061,306.550311 689.333313,304.805665 688.740079,303.279088 C688.126742,301.700876 687.306103,300.362454 685.971872,299.028128 C684.637546,297.693897 683.299124,296.873258 681.720912,296.260017 C680.194335,295.666687 678.449689,295.260939 675.895169,295.144427 C673.335314,295.027628 672.518009,295 666.000048,295 Z M666.000048,299.324317 C672.40826,299.324317 673.167356,299.348801 675.69806,299.464266 C678.038036,299.570966 679.308818,299.961946 680.154513,300.290621 C681.274771,300.725997 682.074262,301.246066 682.91405,302.08595 C683.753934,302.925738 684.274003,303.725229 684.709379,304.845487 C685.038054,305.691182 685.429034,306.961964 685.535734,309.30194 C685.651199,311.832644 685.675683,312.59174 685.675683,319.000048 C685.675683,325.40826 685.651199,326.167356 685.535734,328.69806 C685.429034,331.038036 685.038054,332.308818 684.709379,333.154513 C684.274003,334.274771 683.753934,335.074262 682.91405,335.91405 C682.074262,336.753934 681.274771,337.274003 680.154513,337.709379 C679.308818,338.038054 678.038036,338.429034 675.69806,338.535734 C673.167737,338.651199 672.408736,338.675683 666.000048,338.675683 C659.591264,338.675683 658.832358,338.651199 656.30194,338.535734 C653.961964,338.429034 652.691182,338.038054 651.845487,337.709379 C650.725229,337.274003 649.925738,336.753934 649.08595,335.91405 C648.246161,335.074262 647.725997,334.274771 647.290621,333.154513 C646.961946,332.308818 646.570966,331.038036 646.464266,328.69806 C646.348801,326.167356 646.324317,325.40826 646.324317,319.000048 C646.324317,312.59174 646.348801,311.832644 646.464266,309.30194 C646.570966,306.961964 646.961946,305.691182 647.290621,304.845487 C647.725997,303.725229 648.246066,302.925738 649.08595,302.08595 C649.925738,301.246066 650.725229,300.725997 651.845487,300.290621 C652.691182,299.961946 653.961964,299.570966 656.30194,299.464266 C658.832644,299.348801 659.59174,299.324317 666.000048,299.324317 Z M666.000048,306.675683 C659.193424,306.675683 653.675683,312.193424 653.675683,319.000048 C653.675683,325.806576 659.193424,331.324317 666.000048,331.324317 C672.806576,331.324317 678.324317,325.806576 678.324317,319.000048 C678.324317,312.193424 672.806576,306.675683 666.000048,306.675683 Z M666.000048,327 C661.581701,327 658,323.418299 658,319.000048 C658,314.581701 661.581701,311 666.000048,311 C670.418299,311 674,314.581701 674,319.000048 C674,323.418299 670.418299,327 666.000048,327 Z M681.691284,306.188768 C681.691284,307.779365 680.401829,309.068724 678.811232,309.068724 C677.22073,309.068724 675.931276,307.779365 675.931276,306.188768 C675.931276,304.598171 677.22073,303.308716 678.811232,303.308716 C680.401829,303.308716 681.691284,304.598171 681.691284,306.188768 Z"></path>
											</g>
										</g>
									</svg></a>
							</li>
						</ul>
					</div>
				</div>

				<div class="announcement-bar__middle">
					<div class="announcement-bar__announcements">
						<div class="announcement">
							<div class="announcement__text">
								<p><strong>Free Shipping </strong>anywhere in Nepal</p>
							</div>
						</div>
						<div class="announcement announcement--inactive">
							<div class="announcement__text">
								<p>
									Flat <strong>Rs.1000/- off </strong>on order of Rs.5999/- or
									above
								</p>
							</div>
						</div>
						<div class="announcement announcement--inactive">
							<div class="announcement__text">
								<p><strong>Free Expert SkinNow Consultation</strong></p>
							</div>
						</div>
					</div>
				</div>

				<div class="announcement-bar__right desk-only">
					<div class="header-currencies country-dd">
						<form method="post" action="https://www.aminu.life/localization" id="localization_form_annbar" accept-charset="UTF-8" class="selectors-form" enctype="multipart/form-data">
							<input type="hidden" name="form_type" value="localization" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="_method" value="put" /><input type="hidden" name="return_to" value="/" />
							<div class="selectors-form__item">
								<h2 class="visually-hidden" id="link-dropdown link-dropdown--left-aligned link-dropdown--with-icon country-dd__heading">
									Currency
								</h2>

								<div class="currency" data-currency-country>
									<button type="button" class="link-dropdown__button notabutton country-dd__toggle currency__toggle" aria-expanded="false" aria-controls="country-list-annbar" aria-describedby="country-heading-annbar" data-currency-toggle>
										India (INR&nbsp;₹)
										<span class="currency__toggle-arrow" role="presentation"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
												<title>Down</title>
												<polyline points="6 9 12 15 18 9"></polyline>
											</svg></span>
									</button>
									<ul id="country-list-annbar" class="link-dropdown__options country-dd__list" data-currency-list>
										<li class="link-dropdown__option-item country-dd__item">
											<a class="currency-list__option currency-option-with-parts" href="index.html#" data-value="AU" data-currency-option>
												<span class="currency-option-with-parts__part">Australia</span>
												<span class="currency-option-with-parts__part">(INR&nbsp;₹)</span>
											</a>
										</li>
										<li class="link-dropdown__option-item country-dd__item">
											<a class="currency-list__option currency-option-with-parts" href="index.html#" data-value="AT" data-currency-option>
												<span class="currency-option-with-parts__part">Austria</span>
												<span class="currency-option-with-parts__part">(INR&nbsp;₹)</span>
											</a>
										</li>
										<li class="link-dropdown__option-item country-dd__item">
											<a class="currency-list__option currency-option-with-parts" href="index.html#" data-value="BD" data-currency-option>
												<span class="currency-option-with-parts__part">Bangladesh</span>
												<span class="currency-option-with-parts__part">(INR&nbsp;₹)</span>
											</a>
										</li>
										<li class="link-dropdown__option-item country-dd__item">
											<a class="currency-list__option currency-option-with-parts" href="index.html#" data-value="BE" data-currency-option>
												<span class="currency-option-with-parts__part">Belgium</span>
												<span class="currency-option-with-parts__part">(INR&nbsp;₹)</span>
											</a>
										</li>
										<li class="link-dropdown__option-item country-dd__item">
											<a class="currency-list__option currency-option-with-parts" href="index.html#" data-value="CA" data-currency-option>
												<span class="currency-option-with-parts__part">Canada</span>
												<span class="currency-option-with-parts__part">(INR&nbsp;₹)</span>
											</a>
										</li>
										<li class="link-dropdown__option-item country-dd__item">
											<a class="currency-list__option currency-option-with-parts" href="index.html#" data-value="CZ" data-currency-option>
												<span class="currency-option-with-parts__part">Czechia</span>
												<span class="currency-option-with-parts__part">(INR&nbsp;₹)</span>
											</a>
										</li>
										<li class="link-dropdown__option-item country-dd__item">
											<a class="currency-list__option currency-option-with-parts" href="index.html#" data-value="CZ" data-currency-option>
												<span class="currency-option-with-parts__part">Czechia</span>
												<span class="currency-option-with-parts__part">(INR&nbsp;₹)</span>
											</a>
										</li>
										<li class="link-dropdown__option-item country-dd__item">
											<a class="currency-list__option currency-option-with-parts" href="index.html#" data-value="CZ" data-currency-option>
												<span class="currency-option-with-parts__part">Czechia</span>
												<span class="currency-option-with-parts__part">(INR&nbsp;₹)</span>
											</a>
										</li>
										<li class="link-dropdown__option-item country-dd__item">
											<a class="currency-list__option currency-option-with-parts" href="index.html#" data-value="CZ" data-currency-option>
												<span class="currency-option-with-parts__part">Czechia</span>
												<span class="currency-option-with-parts__part">(INR&nbsp;₹)</span>
											</a>
										</li>
										<li class="link-dropdown__option-item country-dd__item">
											<a class="currency-list__option currency-option-with-parts" href="index.html#" data-value="CZ" data-currency-option>
												<span class="currency-option-with-parts__part">Czechia</span>
												<span class="currency-option-with-parts__part">(INR&nbsp;₹)</span>
											</a>
										</li>
										<li class="link-dropdown__option-item country-dd__item">
											<a class="currency-list__option currency-option-with-parts" href="index.html#" data-value="CZ" data-currency-option>
												<span class="currency-option-with-parts__part">Czechia</span>
												<span class="currency-option-with-parts__part">(INR&nbsp;₹)</span>
											</a>
										</li>
									</ul>
									<input type="hidden" name="country_code" value="IN" data-currency-input />
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- / Announcement -->
	<!-- Navbar -->
	<!-- Search  -->
	<div id="main-search" class="main-search main-search--with-suggestions" data-live-search="true" data-live-search-price="true" data-live-search-vendor="false" data-live-search-meta="true" data-per-row-mob="1">
		<div class="main-search__container container">
			<button class="main-search__close button button--clear" aria-label="Close">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
					<line x1="18" y1="6" x2="6" y2="18"></line>
					<line x1="6" y1="6" x2="18" y2="18"></line>
				</svg>
			</button>

			<form class="main-search__form" action="<?php echo home_url() ?>" method="get" autocomplete="off">
				<input type="hidden" name="type" value="product" />
				<input type="hidden" name="options[prefix]" value="last" />
				<div class="main-search__input-container">
					<input class="main-search__input" type="text" name="s" autocomplete="off" placeholder="Search..." aria-label="Search Store" />
				</div>
				<button class="main-search__button button button--clear" type="submit" aria-label="Submit">
					<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<g transform="translate(3.000000, 3.000000)" stroke="currentColor" stroke-width="1.5" fill="none" fill-rule="evenodd">
							<circle cx="7.82352941" cy="7.82352941" r="7.82352941"></circle>
							<line x1="13.9705882" y1="13.9705882" x2="18.4411765" y2="18.4411765" stroke-linecap="square"></line>
						</g>
					</svg>
				</button>
			</form>

			<div class="main-search__results"></div>

			<div class="main-search__track">
				<a class="track__link" href="#">TRACK ORDER</a>
			</div>
		</div>
	</div>
	<!-- /Search  -->
	<div id="section-header" class="header-section section-page-header">
		<div class="border_space_btm" data-section-type="header">
			<div id="site-header" class="site-header site-header--sticky">
				<div class="header-main container">
					<div class="header-main__left">
						<!-- Menu  -->
						<div class="header-main__left__inner">
							<button class="btn btn--clear nav-toggle" aria-label="Toggle menu" aria-controls="main-nav">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
									<line x1="3" y1="12" x2="21" y2="12"></line>
									<line x1="3" y1="6" x2="21" y2="6"></line>
									<line x1="3" y1="18" x2="21" y2="18"></line>
								</svg>
							</button>
							<div class="desk-only">
								<div class="header-navi header-navi--left" role="header-navi" aria-label="Primary header-navi">
									<div class="header-navi-container">
										<nav class="custom-menu">
											<ul class="parent header-navi">
												<li class="header-navi__item dropdown header-navi__item--with-children">
													<a class="header-navi__link" href="<?php echo site_url('shop') ?>">Shop</a>
													<?php $product_categories = get_terms(array(
														'taxonomy' => 'product_cat',
														'hide_empty' => false, 
													));
													if ($product_categories) :
													?>
														<!-- Dropdown  -->
														<ul class="dropdown-menu">
															<?php foreach ($product_categories as $category) {
																$category_name = $category->name;
																$category_url = get_term_link($category);
																if ($category_name != 'Uncategorized'):
															?>
																<li class="navigation__item sub-menu">
																	<a class="navigation__link" href="<?php echo $category_url; ?>"><?php echo $category_name; ?></a>
																</li>
															<?php endif; }; ?>

														</ul>
														<!-- / Dropdown  -->
													<?php endif; ?>
												</li>

												<li class="header-navi__item">
													<a class="header-navi__link" href="<?php echo site_url('/journal') ?>">JOURNAL</a>
												</li>

												<li class="header-navi__item">
													<a class="header-navi__link" href="#">Take the Skin Quiz</a>
												</li>
											</ul>
										</nav>


										<ul class="header-navi" style="display: none">
											<li class="header-navi__item header-navi__item--with-children header-navi__item--with-small-menu">
												<a href="index.html#" class="header-navi__link" aria-haspopup="true" aria-expanded="false" aria-controls="header-naviTier2-1">Shop</a>
											</li>

											<li class="header-navi__item">
												<a href="./single.html" class="header-navi__link">JOURNAL</a>
											</li>

											<li class="header-navi__item">
												<a href="#" class="header-navi__link">Take the Skin Quiz</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- /Menu  -->
					</div>
					<div class="header-main__center header-main__center--logo-image">
						<div class="header-main__center__inner">
							<!-- Logo  -->
							<?php
							$id = get_theme_mod('custom_logo');
							$logo = wp_get_attachment_image_src($id, 'medium');
							if (has_custom_logo()) {
							?>
								<div class="header-logo">
									<a class="header-logo__link" href="<?php echo home_url(); ?>" title="AMINU"><img class="header-logo__image" src="<?php echo $logo[0]; ?>" alt="Aminu Life" itemprop="logo" width="1000" height="500" /></a>
								</div>
							<?php } ?>
							<!-- / Logo  -->
						</div>
					</div>

					<div class="header-main__right">
						<!-- HeaderRight  -->
						<div class="header-main__right__inner">
							<a class="header-search-link" href="#">
								<span class="header-search-link__text">Search</span>
								<span class="header-search-link__icon"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<g transform="translate(3.000000, 3.000000)" stroke="currentColor" stroke-width="1.5" fill="none" fill-rule="evenodd">
											<circle cx="7.82352941" cy="7.82352941" r="7.82352941"></circle>
											<line x1="13.9705882" y1="13.9705882" x2="18.4411765" y2="18.4411765" stroke-linecap="square"></line>
										</g>
									</svg></span>
							</a>

							<a class="header-account-link" href="<?php echo site_url('/login') ?>" aria-label="Account">
								<span class="header-account-link__text desk-only">Account</span>
								<span class="header-account-link__icon mobile-only"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<path d="M12,2 C14.7614237,2 17,4.23857625 17,7 C17,9.76142375 14.7614237,12 12,12 C9.23857625,12 7,9.76142375 7,7 C7,4.23857625 9.23857625,2 12,2 Z M12,3.42857143 C10.0275545,3.42857143 8.42857143,5.02755446 8.42857143,7 C8.42857143,8.97244554 10.0275545,10.5714286 12,10.5714286 C13.2759485,10.5714286 14.4549736,9.89071815 15.0929479,8.7857143 C15.7309222,7.68071045 15.7309222,6.31928955 15.0929479,5.2142857 C14.4549736,4.10928185 13.2759485,3.42857143 12,3.42857143 Z" fill="currentColor"></path>
											<path d="M3,18.25 C3,15.763979 7.54216175,14.2499656 12.0281078,14.2499656 C16.5140539,14.2499656 21,15.7636604 21,18.25 C21,19.9075597 21,20.907554 21,21.2499827 L3,21.2499827 C3,20.9073416 3,19.9073474 3,18.25 Z" stroke="currentColor" stroke-width="1.5"></path>
											<circle stroke="currentColor" stroke-width="1.5" cx="12" cy="7" r="4.25"></circle>
										</g>
									</svg></span>
							</a>

							<a class="cart-link">
								<span class="cart-link__label  desk-only">Cart</span>
								<span class="cart-link__icon mobile-only"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<path d="M3.5,2.75 C4.87766445,2.75 5.56649668,2.75 5.56649668,2.75 C5.56649668,2.75 6.03257795,7.25 6.96474049,16.25 L19.5,16.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="square"></path>
											<path d="M6.22627526,6.67553191 C14.8659742,6.67553191 19.1858237,6.67553191 19.1858237,6.67553191 C19.1858237,6.67553191 18.9160351,8.71453901 18.376458,12.7925532 L7.62925996,13.9095745" stroke="currentColor" stroke-width="1.5" stroke-linecap="square"></path>
											<circle stroke="currentColor" stroke-width="1.25" cx="8.875" cy="20.005" r="1.375"></circle>
											<circle stroke="currentColor" stroke-width="1.25" cx="17.375" cy="20.005" r="1.375"></circle>
										</g>
									</svg></span>
							</a>
						</div>
						<!-- / HeaderRight  -->
					</div>
				</div>
			</div>
			<a href="index.html#" class="header-shade mobile-nav-toggle" aria-label="general.navigation_menu.toggle_aria_label"></a>
		</div>
	</div>
	<!-- Mobile Nav  -->
	<div class="mobile-nav-drawer">
		<div class="nav nav--main" role="nav" aria-label="Primary nav" data-mobile-expand-with-entire-link="true">
			<div class="nav__tier-1-container">
				<div class="mobile-only nav__mobile-header">
					<a href="#" class="mobile-nav-back"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
							<title>Left</title>
							<polyline points="15 18 9 12 15 6"></polyline>
						</svg></a>
					<span class="mobile-nav-title">Skin Concern</span>
					<a href="#" class="mobile-nav-toggle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
							<line x1="18" y1="6" x2="6" y2="18"></line>
							<line x1="6" y1="6" x2="18" y2="18"></line>
						</svg></a>
				</div>
				<div class="mobile-only">
					<ul class="nav__tier-1">
						<li class="nav__item nav__item--with-children">
							<a href="#" class="nav__link" aria-haspopup="true" aria-expanded="false" aria-controls="navTier2-1-mob">Skin Concern</a>

							<a class="nav__children-toggle" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
									<title>Toggle menu</title>
									<polyline points="6 9 12 15 18 9"></polyline>
								</svg></a>

							<div id="navTier2-1-mob" class="nav__tier-2-container nav__child-tier" style="top: 52px">
								<ul class="nav__tier-2">
									<li class="nav__item">
										<a href="/collections/breakouts-and-acne-prone" class="nav__link">Breakouts and Acne-Prone</a>
									</li>

									<li class="nav__item">
										<a href="/collections/uneven-tone-and-spots" class="nav__link">Uneven Tone and Spots</a>
									</li>

									<li class="nav__item">
										<a href="/collections/firmness-lines-and-tired-skin" class="nav__link">Firmness, Lines and Tired Skin</a>
									</li>

									<li class="nav__item">
										<a href="/collections/dullness-and-dehydration" class="nav__link">Dullness and Dehydration</a>
									</li>

									<li class="nav__item">
										<a href="/collections/sensitised-and-redness-prone" class="nav__link">Sensitised and Redness prone</a>
									</li>

									<li class="nav__item">
										<a href="/collections/blackheads-and-rough-texture" class="nav__link">Blackheads and Rough texture</a>
									</li>

									<li class="nav__item">
										<a href="/collections/protection-and-maintenance" class="nav__link">Protection and Maintenance</a>
									</li>

									<li class="nav__item">
										<a href="/collections/pores-and-congestion" class="nav__link">Pores and Congestion</a>
									</li>

									<li class="nav__item">
										<a href="/collections/dryness-and-tired-body" class="nav__link">Dryness and Tired Body</a>
									</li>

									<li class="nav__item">
										<a href="/collections/body-tan-and-dullness" class="nav__link">Body Tan and Dullness</a>
									</li>
								</ul>
							</div>
						</li>

						<li class="nav__item nav__item--with-children">
							<a href="#" class="nav__link" aria-haspopup="true" aria-expanded="false" aria-controls="navTier2-2-mob">Products</a>

							<a class="nav__children-toggle" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
									<title>Toggle menu</title>
									<polyline points="6 9 12 15 18 9"></polyline>
								</svg></a>

							<div id="navTier2-2-mob" class="nav__tier-2-container nav__child-tier" style="top: 52px">
								<div class="container">
									<ul class="nav__tier-2">
										<li class="nav__item">
											<a href="/collections/all" class="nav__link">Shop All</a>
										</li>

										<li class="nav__item">
											<a href="/collections/face-care" class="nav__link">Face Care</a>
										</li>

										<li class="nav__item">
											<a href="/collections/body-care" class="nav__link">Body Care</a>
										</li>

										<li class="nav__item">
											<a href="/collections/cleansers" class="nav__link">Cleanse</a>
										</li>

										<li class="nav__item">
											<a href="/collections/exfoliate" class="nav__link">Exfoliate</a>
										</li>

										<li class="nav__item">
											<a href="/collections/moisturizers" class="nav__link">Moisturize</a>
										</li>

										<li class="nav__item">
											<a href="/collections/serum" class="nav__link">Serums</a>
										</li>

										<li class="nav__item">
											<a href="/collections/masks" class="nav__link">Mask</a>
										</li>
									</ul>
								</div>
							</div>
						</li>

						<li class="nav__item nav__item--with-children">
							<a href="#" class="nav__link" aria-haspopup="true" aria-expanded="false" aria-controls="navTier2-3-mob">Skin Type</a>

							<a class="nav__children-toggle" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
									<title>Toggle menu</title>
									<polyline points="6 9 12 15 18 9"></polyline>
								</svg></a>

							<div id="navTier2-3-mob" class="nav__tier-2-container nav__child-tier">
								<div class="container">
									<ul class="nav__tier-2">
										<li class="nav__item">
											<a href="/collections/dry-skin" class="nav__link">Dry Skin</a>
										</li>

										<li class="nav__item">
											<a href="/collections/combination-skin" class="nav__link">Combination Skin</a>
										</li>

										<li class="nav__item">
											<a href="/collections/normal-skin" class="nav__link">Normal Skin</a>
										</li>

										<li class="nav__item">
											<a href="/collections/oily-skin" class="nav__link">Oily Skin</a>
										</li>

										<li class="nav__item">
											<a href="/collections/sensitive-skin" class="nav__link">Sensitive Skin</a>
										</li>
									</ul>
								</div>
							</div>
						</li>

						<li class="nav__item nav__item--with-children">
							<a href="#" class="nav__link" aria-haspopup="true" aria-expanded="false" aria-controls="navTier2-4-mob">Info</a>

							<a class="nav__children-toggle" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
									<title>Toggle menu</title>
									<polyline points="6 9 12 15 18 9"></polyline>
								</svg></a>

							<div id="navTier2-4-mob" class="nav__tier-2-container nav__child-tier">
								<div class="container">
									<ul class="nav__tier-2">
										<li class="nav__item">
											<a href="/pages/about-us" class="nav__link">About Us</a>
										</li>

										<li class="nav__item">
											<a href="/pages/insidelab" class="nav__link">Inside The Lab</a>
										</li>

										<li class="nav__item">
											<a href="/pages/our-ingredients" class="nav__link">Our Ingredients</a>
										</li>

										<li class="nav__item">
											<a href="https://calendly.com/skincoach" class="nav__link">Skin Consultation</a>
										</li>
									</ul>
								</div>
							</div>
						</li>

						<li class="nav__item">
							<a href="#quiz-QYHZ7V" class="nav__link">Skin quiz</a>
						</li>

						<li class="nav__item">
							<a href="/blogs/journal" class="nav__link">Journal</a>
						</li>

						<li class="nav__item">
							<a href="/pages/faq" class="nav__link">FAQ</a>
						</li>

						<li class="nav__item">
							<a href="https://aminu-life.myshopify.com/account/login" class="nav__link">Login</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="mobile-only navigation-mobile__contact">
			<div class="need-help">
				<p class="">Need Help?</p>
				<ul class="need-help__info">
					<li>
						<a href="#" target="_blank">
							<svgxmlns="http: //www.w3.org/2000/svg" id="Capa_1-mob" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512">
								<g>
									<g>
										<path d="m393.926 237.559c0-93.502-98.562-154.79-196.963-154.79-98.794 0-196.963 61.576-196.963 154.79 0 35.265 15.445 69.75 43.491 97.104 1.073 1.047 1.484 2.636 1.072 4.146-8.809 32.271-29.673 61.423-38.234 72.459-2.663 3.433-3.101 7.973-1.142 11.85 1.915 3.791 5.701 6.113 9.931 6.113.096 0 .191-.001.287-.003 41.893-1.045 90.452-12.869 120.468-42.379 1.049-1.032 2.554-1.44 4.028-1.089 18.442 4.374 37.641 6.591 57.062 6.591 98.765-.002 196.963-61.553 196.963-154.792zm-250.564 133.604c-6.521-1.549-13.254.317-18.005 4.988-30.017 29.513-79.032 36.222-102.235 37.713 10.599-14.631 27.832-41.502 35.912-71.106 1.847-6.766-.096-13.982-5.07-18.834-25.49-24.861-38.964-54.726-38.964-86.365 0-77.08 81.628-139.79 181.963-139.79s181.963 62.709 181.963 139.79-81.628 139.79-181.963 139.79c-18.257 0-36.29-2.082-53.601-6.186z"></path>
										<path d="m442.165 362.18c43.729-22.099 69.835-59.764 69.835-100.754 0-57.931-52.367-107.431-124.518-117.702-4.095-.582-7.898 2.267-8.481 6.368-.584 4.101 2.267 7.898 6.368 8.482 64.684 9.208 111.631 52.463 111.631 102.852 0 35.212-23.028 67.873-61.601 87.367-7.5 3.791-11.519 12.171-9.772 20.381 3.657 17.185 11.442 33.098 17.669 43.884-44.291-7.372-61.078-28.624-66.386-37.822-3.277-5.678-9.405-9.198-16.018-9.198-.02 0-.039 0-.058 0l-.55.001c-8.317 0-16.645-.577-24.75-1.716-4.091-.575-7.894 2.282-8.47 6.384s2.282 7.894 6.384 8.47c8.794 1.235 17.823 1.861 26.836 1.861l.61-.001h.011c1.255 0 2.407.649 3.012 1.696 20.313 35.203 67.008 44.191 86.141 46.421 4.226.492 8.252-1.439 10.507-5.05 2.249-3.603 2.221-8.063-.075-11.64-5.763-8.976-16.048-26.94-20.191-46.412-.331-1.556.436-3.149 1.866-3.872z"></path>
										<path d="m80.258 210.733c-14.333 0-25.993 11.661-25.993 25.993s11.66 25.993 25.993 25.993 25.993-11.661 25.993-25.993-11.66-25.993-25.993-25.993zm0 36.987c-6.062 0-10.993-4.932-10.993-10.993s4.932-10.993 10.993-10.993 10.993 4.932 10.993 10.993-4.932 10.993-10.993 10.993z"></path>
										<path d="m154.411 210.733c-14.333 0-25.993 11.661-25.993 25.993s11.66 25.993 25.993 25.993 25.993-11.661 25.993-25.993-11.66-25.993-25.993-25.993zm0 36.987c-6.062 0-10.993-4.932-10.993-10.993s4.932-10.993 10.993-10.993 10.993 4.932 10.993 10.993-4.931 10.993-10.993 10.993z"></path>
										<path d="m228.563 210.733c-14.333 0-25.993 11.661-25.993 25.993s11.66 25.993 25.993 25.993 25.993-11.661 25.993-25.993-11.66-25.993-25.993-25.993zm0 36.987c-6.062 0-10.993-4.932-10.993-10.993s4.932-10.993 10.993-10.993 10.993 4.932 10.993 10.993-4.931 10.993-10.993 10.993z"></path>
										<path d="m302.717 210.733c-14.333 0-25.993 11.661-25.993 25.993s11.66 25.993 25.993 25.993 25.993-11.661 25.993-25.993-11.66-25.993-25.993-25.993zm0 36.987c-6.062 0-10.993-4.932-10.993-10.993s4.932-10.993 10.993-10.993 10.993 4.932 10.993 10.993-4.932 10.993-10.993 10.993z"></path>
									</g>
								</g>
								</svg>
								start a chat
						</a>
					</li>
					<li>
						<a href="tel:+91 8591110603" class="phone-icon">
							<svgxmlns="http: //www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1-mob" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background: new 0 0 512.001 512.001" xml:space="preserve">
								<g>
									<g>
										<path d="M324.259,0c-4.71,0-8.533,3.823-8.533,8.533s3.823,8.533,8.533,8.533c94.106,0,170.667,76.561,170.667,170.667    c0,4.71,3.823,8.533,8.533,8.533c4.719,0,8.533-3.823,8.533-8.533C511.992,84.216,427.777,0,324.259,0z"></path>
									</g>
								</g>
								<g>
									<g>
										<path d="M324.259,51.2c-4.71,0-8.533,3.823-8.533,8.533s3.823,8.533,8.533,8.533c65.877,0,119.467,53.589,119.467,119.467    c0,4.71,3.823,8.533,8.533,8.533c4.719,0,8.533-3.823,8.533-8.533C460.792,112.453,399.548,51.2,324.259,51.2z"></path>
									</g>
								</g>
								<g>
									<g>
										<path d="M324.259,102.4c-4.71,0-8.533,3.823-8.533,8.533s3.823,8.533,8.533,8.533c37.641,0,68.267,30.626,68.267,68.267    c0,4.71,3.823,8.533,8.533,8.533c4.719,0,8.533-3.823,8.533-8.533C409.592,140.681,371.311,102.4,324.259,102.4z"></path>
									</g>
								</g>
								<g>
									<g>
										<path d="M461.765,320.214c-23.219-3.055-46.114-8.755-68.045-16.922c-21.239-7.962-45.372-2.825-61.534,13.124l-26.974,26.914    c-56.559-33.348-103.808-80.503-137.233-136.951l26.991-26.931c15.957-16.102,21.111-40.209,13.133-61.397    c-8.183-21.896-13.892-44.74-16.964-67.994C187.051,21.231,162.091-0.111,132.916,0H58.258c-1.741,0-3.482,0.085-5.205,0.239    C37.547,1.639,23.51,8.986,13.534,20.916C3.559,32.854-1.169,47.958,0.248,63.582c8.269,77.722,35.149,153.472,77.688,219.008    c38.622,60.655,91.162,113.092,151.876,151.595c65.417,42.342,140.962,69.163,218.641,77.585c1.758,0.154,3.524,0.23,5.299,0.23    c0.051,0,0.102,0,0.162,0c32.154-0.137,58.197-26.351,58.069-58.411v-74.402C512.658,349.688,491.119,324.344,461.765,320.214z     M494.917,378.88c0,0.068,0,0.145,0,0.213v74.539c0.085,22.682-18.338,41.216-41.062,41.31c-1.331-0.051-2.611-0.051-3.738-0.154    c-74.871-8.124-147.849-34.031-211.106-74.974c-58.675-37.214-109.397-87.834-146.722-146.458    C51.166,210.006,25.208,136.841,17.229,61.91c-0.99-10.94,2.347-21.606,9.404-30.046s16.981-13.636,27.955-14.626    c1.22-0.111,2.441-0.171,3.669-0.171h74.735c0.137,0,0.273,0,0.41,0c20.446,0,37.965,15.147,40.823,35.302    c3.234,24.448,9.25,48.563,17.894,71.68c5.641,14.984,1.997,32.017-9.242,43.358l-31.607,31.539    c-2.731,2.722-3.294,6.921-1.391,10.266c36.164,63.488,88.909,116.122,152.508,152.209c3.345,1.903,7.526,1.323,10.24-1.382    l31.573-31.505c11.409-11.255,28.501-14.882,43.537-9.25c23.142,8.619,47.3,14.635,71.714,17.843    C480.188,340.045,495.437,357.991,494.917,378.88z"></path>
									</g>
								</g>
								<g>
									<g>
										<path d="M128.001,34.134H58.258c-0.717,0-1.425,0.034-2.133,0.102c-8.695,0.785-14.012,5.717-16.401,8.576    c-1.92,2.295-6.306,8.559-5.538,17.161c3.226,30.268,9.062,59.716,17.365,87.535c1.109,3.695,4.497,6.093,8.175,6.093    c0.811,0,1.63-0.111,2.449-0.358c4.514-1.348,7.083-6.101,5.734-10.615c-8.004-26.812-13.636-55.228-16.734-84.318    c-0.196-2.167,1.212-4.036,1.647-4.565c0.7-0.836,2.261-2.278,5.436-2.543h69.726c0.009,0,0.009,0,0.009,0    c4.71,0,8.533-3.814,8.533-8.525C136.534,37.965,132.711,34.134,128.001,34.134z"></path>
									</g>
								</g>
								<g>
									<g>
										<path d="M469.325,375.467c-4.71,0-8.533,3.823-8.533,8.533l-0.009,69.623c0.009,1.92-0.725,3.729-2.065,5.077    c-1.34,1.348-3.115,2.091-4.804,2.099l-0.785-0.017c-29.158-3.166-57.335-8.781-83.746-16.691    c-4.497-1.357-9.267,1.212-10.624,5.726c-1.357,4.514,1.212,9.267,5.726,10.624c27.401,8.209,56.61,14.029,86.955,17.323    c0.7,0.068,2.125,0.102,2.33,0.102c6.46-0.026,12.518-2.56,17.067-7.142c4.548-4.591,7.04-10.684,7.014-17.135L477.859,384    C477.859,379.29,474.036,375.467,469.325,375.467z"></path>
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
								call +91 8591110603
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="mobile-nav-drawer__footer">
			<div class="social-links">
				<span class="follow-text mobile-only"> Follow AMINU</span>

				<ul class="social-links__list">
					<li>
						<a aria-label="Facebook" class="facebook" target="_blank" rel="noopener" href="https://www.facebook.com/aminu.life">
							<svgwidth="48px" height="48px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<title>Facebook</title>
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<g transform="translate(-325.000000, -295.000000)" fill="currentColor">
										<path d="M350.638355,343 L327.649232,343 C326.185673,343 325,341.813592 325,340.350603 L325,297.649211 C325,296.18585 326.185859,295 327.649232,295 L370.350955,295 C371.813955,295 373,296.18585 373,297.649211 L373,340.350603 C373,341.813778 371.813769,343 370.350955,343 L358.119305,343 L358.119305,324.411755 L364.358521,324.411755 L365.292755,317.167586 L358.119305,317.167586 L358.119305,312.542641 C358.119305,310.445287 358.701712,309.01601 361.70929,309.01601 L365.545311,309.014333 L365.545311,302.535091 C364.881886,302.446808 362.604784,302.24957 359.955552,302.24957 C354.424834,302.24957 350.638355,305.625526 350.638355,311.825209 L350.638355,317.167586 L344.383122,317.167586 L344.383122,324.411755 L350.638355,324.411755 L350.638355,343 L350.638355,343 Z"></path>
									</g>
								</g></svg>
						</a>
					</li>

					<li>
						<a aria-label="Instagram" class="instagram" target="_blank" rel="noopener" href="https://www.instagram.com/aminu.life/?igshid=37u75edqcu7y">
							<svgwidth="48px" height="48px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<title>Instagram</title>
								<defs></defs>
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<g transform="translate(-642.000000, -295.000000)" fill="currentColor">
										<path d="M666.000048,295 C659.481991,295 658.664686,295.027628 656.104831,295.144427 C653.550311,295.260939 651.805665,295.666687 650.279088,296.260017 C648.700876,296.873258 647.362454,297.693897 646.028128,299.028128 C644.693897,300.362454 643.873258,301.700876 643.260017,303.279088 C642.666687,304.805665 642.260939,306.550311 642.144427,309.104831 C642.027628,311.664686 642,312.481991 642,319.000048 C642,325.518009 642.027628,326.335314 642.144427,328.895169 C642.260939,331.449689 642.666687,333.194335 643.260017,334.720912 C643.873258,336.299124 644.693897,337.637546 646.028128,338.971872 C647.362454,340.306103 648.700876,341.126742 650.279088,341.740079 C651.805665,342.333313 653.550311,342.739061 656.104831,342.855573 C658.664686,342.972372 659.481991,343 666.000048,343 C672.518009,343 673.335314,342.972372 675.895169,342.855573 C678.449689,342.739061 680.194335,342.333313 681.720912,341.740079 C683.299124,341.126742 684.637546,340.306103 685.971872,338.971872 C687.306103,337.637546 688.126742,336.299124 688.740079,334.720912 C689.333313,333.194335 689.739061,331.449689 689.855573,328.895169 C689.972372,326.335314 690,325.518009 690,319.000048 C690,312.481991 689.972372,311.664686 689.855573,309.104831 C689.739061,306.550311 689.333313,304.805665 688.740079,303.279088 C688.126742,301.700876 687.306103,300.362454 685.971872,299.028128 C684.637546,297.693897 683.299124,296.873258 681.720912,296.260017 C680.194335,295.666687 678.449689,295.260939 675.895169,295.144427 C673.335314,295.027628 672.518009,295 666.000048,295 Z M666.000048,299.324317 C672.40826,299.324317 673.167356,299.348801 675.69806,299.464266 C678.038036,299.570966 679.308818,299.961946 680.154513,300.290621 C681.274771,300.725997 682.074262,301.246066 682.91405,302.08595 C683.753934,302.925738 684.274003,303.725229 684.709379,304.845487 C685.038054,305.691182 685.429034,306.961964 685.535734,309.30194 C685.651199,311.832644 685.675683,312.59174 685.675683,319.000048 C685.675683,325.40826 685.651199,326.167356 685.535734,328.69806 C685.429034,331.038036 685.038054,332.308818 684.709379,333.154513 C684.274003,334.274771 683.753934,335.074262 682.91405,335.91405 C682.074262,336.753934 681.274771,337.274003 680.154513,337.709379 C679.308818,338.038054 678.038036,338.429034 675.69806,338.535734 C673.167737,338.651199 672.408736,338.675683 666.000048,338.675683 C659.591264,338.675683 658.832358,338.651199 656.30194,338.535734 C653.961964,338.429034 652.691182,338.038054 651.845487,337.709379 C650.725229,337.274003 649.925738,336.753934 649.08595,335.91405 C648.246161,335.074262 647.725997,334.274771 647.290621,333.154513 C646.961946,332.308818 646.570966,331.038036 646.464266,328.69806 C646.348801,326.167356 646.324317,325.40826 646.324317,319.000048 C646.324317,312.59174 646.348801,311.832644 646.464266,309.30194 C646.570966,306.961964 646.961946,305.691182 647.290621,304.845487 C647.725997,303.725229 648.246066,302.925738 649.08595,302.08595 C649.925738,301.246066 650.725229,300.725997 651.845487,300.290621 C652.691182,299.961946 653.961964,299.570966 656.30194,299.464266 C658.832644,299.348801 659.59174,299.324317 666.000048,299.324317 Z M666.000048,306.675683 C659.193424,306.675683 653.675683,312.193424 653.675683,319.000048 C653.675683,325.806576 659.193424,331.324317 666.000048,331.324317 C672.806576,331.324317 678.324317,325.806576 678.324317,319.000048 C678.324317,312.193424 672.806576,306.675683 666.000048,306.675683 Z M666.000048,327 C661.581701,327 658,323.418299 658,319.000048 C658,314.581701 661.581701,311 666.000048,311 C670.418299,311 674,314.581701 674,319.000048 C674,323.418299 670.418299,327 666.000048,327 Z M681.691284,306.188768 C681.691284,307.779365 680.401829,309.068724 678.811232,309.068724 C677.22073,309.068724 675.931276,307.779365 675.931276,306.188768 C675.931276,304.598171 677.22073,303.308716 678.811232,303.308716 C680.401829,303.308716 681.691284,304.598171 681.691284,306.188768 Z"></path>
									</g>
								</g></svg>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /Mobile Nav  -->
	<!-- Marquee Header  -->
	<div class="mobile-only">
		<div id="feature-section-infinite_slider" class="feature-marquee-section">
			<section class="featureicon_rotating features-area isolate">
				<div class="container"></div>

				<div class="feature__marquee">
					<div class="icon-marquee">
						<div class="icon-marquee__marquee" data-icon-marquee>
							<div class="icon-marquee__marquee-inner">
								<div class="icon-marquee__icon features-icon" data-icon>
									<img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Vitamins_f599e156-6fbd-4a62-a84e-c4477e782566_50x.png" alt="" />

									<span>Vitamins</span>
								</div>
								<div class="icon-marquee__icon features-icon" data-icon>
									<img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/traditional_herbs_ec94b8ad-ca6f-4d78-af23-fa996ba2f8de_50x.png" alt="" />

									<span>Traditional Herbs</span>
								</div>
								<div class="icon-marquee__icon features-icon" data-icon>
									<img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/peptides_05e957df-8258-45a4-b34b-48e0cdd55d63_50x.png" alt="" />

									<span>Peptides</span>
								</div>
								<div class="icon-marquee__icon features-icon" data-icon>
									<img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/minerals_0dffdcf6-80cc-4b06-89b7-11f17dd12ade_50x.png" alt="" />

									<span>Minerals</span>
								</div>
								<div class="icon-marquee__icon features-icon" data-icon>
									<img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/marine_algae_d99c4b83-c566-41c9-b22b-d0df73256f2b_50x.png" alt="" />

									<span>Marine Algae</span>
								</div>
								<div class="icon-marquee__icon features-icon" data-icon>
									<img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/wildharvested_boticals_65629185-7030-4868-936e-5958148f79d4_50x.png" alt="" />

									<span>Wildharvested Botanicals</span>
								</div>
								<div class="icon-marquee__icon features-icon" data-icon>
									<img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/essential_fatty_acids_50x.png" alt="" />

									<span>Essential Fatty Acids</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
	<!-- /Marquee Header  -->
	<!-- / Navbar-->