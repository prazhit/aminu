<?php get_header(); ?>


<main id="content" class="page-content" role="main">
    <!-- Banner  -->
    <div id="banner-section" class="home-section section-banner">
        <div class="banner banner--full-page">
            <div class="image-overlay image-overlay--bg-shadow">
                <a class="image-overlay__image-link" href="<?php echo site_url('/shop') ?>">
                    <div class="banner-background-wrapper lazyload--placeholder desktop-only">
                        <div class="banner-outer-wrapper banner-background lazyload--manual fade-in">
                            <img src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Website-Banner-20_-off_8adf3cd8-4da2-4e82-bed6-a863431f0a67_1512x.webp" alt="homepage banner" />
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- / Banner  -->
    <!-- Home Routine Slideshow  -->
    <div id="section-home-routine" class="home-routine-slideshow home-routine-section section-border">
        <div class="container">
            <div class="home-routine-section__header section-header">
                <h2 class="heading" data-aos="fade-in">from routine to rituals</h2>

                <div class="subheading subheading--over">
                    Enhance the efficacy of what we use by "breathing, reflecting & honoring
                    the intelligence of ingredients & the application techniques of
                    products.
                </div>
            </div>
            <div class="home-routine-section__slides mob_slide">
                <div class="swiper" data-swiper data-options='{
                "slidesPerView": 1,
                "spaceBetween": 32,
                "breakpoints": {
                  "767": {
                    "slidesPerView": 3
                  }
                }
              }'>
                    <div class="swiper-wrapper">
                        <!-- Your HTML code for each slide here -->
                        <div class="swiper-slide">
                            <div id="card-routine" class="al-relative al-flex-col content-card" data-aos="fade-in-up" data-aos-delay="150">
                                <div class="content-card--border">
                                    <div class="content-card__image">
                                        <a href="<?php echo site_url('/shop') ?>">
                                            <div class="image-outer-wrapper">
                                                <div class="image-wrapper lazyload--placeholder">
                                                    <img width="358px" height="358px" class="image__image lazyload fade-in" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/double-cleansing_85ac5ad9-47a7-4f7c-8761-4b855e9e5d2d_460x.png" data-widths="[180, 220, 300, 360, 460, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]" data-aspectratio="1.0" data-sizes="auto" alt="" />
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="content-card__button-row content-card__button-row--primary">
                                        <a class="content-card__button btn btn--primary" href="<?php echo site_url('/shop') ?>">VIEW MORE</a>
                                    </div>

                                    <div class="al-absolute right_text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div id="card-routine" class="al-relative al-flex-col content-card" data-aos="fade-in-up" data-aos-delay="300">
                                <div class="content-card--border">
                                    <div class="content-card__image">
                                        <a href="<?php echo site_url('/shop') ?>">
                                            <div class="image-outer-wrapper">
                                                <div class="image-wrapper lazyload--placeholder">
                                                    <img width="358px" height="358px" class="image__image lazyload fade-in" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/moisture-sandwich_460x.png" data-widths="[180, 220, 300, 360, 460, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]" data-aspectratio="1.0" data-sizes="auto" alt="" />
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="content-card__button-row content-card__button-row--primary">
                                        <a class="content-card__button btn btn--primary" href="<?php echo site_url('/shop') ?>">VIEW MORE</a>
                                    </div>

                                    <div class="al-absolute right_text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div id="card-routine" class="al-relative al-flex-col content-card" data-aos="fade-in-up" data-aos-delay="450">
                                <div class="content-card--border">
                                    <div class="content-card__image">
                                        <a href="<?php echo site_url('/shop') ?>">
                                            <div class="image-outer-wrapper">
                                                <div class="image-wrapper lazyload--placeholder">
                                                    <img width="358px" height="358px" class="image__image lazyload fade-in" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/masking-sundays_460x.png" data-widths="[180, 220, 300, 360, 460, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]" data-aspectratio="1.0" data-sizes="auto" alt="" />
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="content-card__button-row content-card__button-row--primary">
                                        <a class="content-card__button btn btn--primary" href="<?php echo site_url('/shop') ?>">VIEW MORE</a>
                                    </div>

                                    <div class="al-absolute right_text"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Add navigation buttons (optional) -->
                    <!-- <div class="swiper-button swiper-button-next"></div>
              <div class="swiper-button swiper-button-prev"></div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- /Home Routine Slideshow  -->

    <!-- Blurb Skin Concern  -->
    <div id="section-home-skin" class="section-border home-skin-section">
        <div class="container four_grid_list">
            <div class="al-text-center">
                <div class="section-header al-inline-block">
                    <div class="al-mb-6 al-text-left">
                        <span class="strapline">skin-goals</span>
                    </div>
                    <h2 class="heading align-center spaced-row" data-aos="fade-in" data-aos="fade-in" data-aos-delay="150">
                        Shop by skin concern
                    </h2>
                </div>
            </div>
            <div class="logo-list__container">
                <div class="logo-list logo-list--count-8 al-grid al-grid-cols-2 md:al-grid-cols-4">
                    <div class="logo-list__logo logo-list__logo-1 al-text-center">
                        <a id="logo_1" class="logo-list__link" href="<?php echo site_url('/shop') ?>" data-aos="fade-in" data-aos-delay="150">
                            <div class="logo-list__logo-image active">
                                <div class="image-outer-wrapper">
                                    <div class="image-wrapper al-inline-block al-align-middle">
                                        <img class="image__image lazyload fade-in" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/1880-moon-outline_f300a8bd-64fc-4094-a5d6-e25b0dcefb08_120x.gif" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="logo-list__logo-title">Breakouts &amp; Acne-Prone</div>
                        </a>
                    </div>
                    <div class="logo-list__logo logo-list__logo-1 al-text-center">
                        <a id="logo_1" class="logo-list__link" href="<?php echo site_url('/shop') ?>" data-aos="fade-in" data-aos-delay="300">
                            <div class="logo-list__logo-image ">
                                <div class="image-outer-wrapper">
                                    <div class="image-wrapper al-inline-block al-align-middle">
                                        <img class="image__image lazyload fade-in" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/1439-brightness-outline_8b652029-94e5-4f92-8509-33da5861f8a9_120x.gif" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="logo-list__logo-title">Uneven Tone &amp; Spots</div>
                        </a>
                    </div>
                    <div class="logo-list__logo logo-list__logo-1 al-text-center">
                        <a id="logo_1" class="logo-list__link" href="<?php echo site_url('/shop') ?>" data-aos="fade-in" data-aos-delay="450">
                            <div class="logo-list__logo-image ">
                                <div class="image-outer-wrapper">
                                    <div class="image-wrapper al-inline-block al-align-middle">
                                        <img class="image__image lazyload fade-in" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/45-clock-time-outline_120x.gif" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="logo-list__logo-title">Firmness &amp; Fine Lines</div>
                        </a>
                    </div>
                    <div class="logo-list__logo logo-list__logo-1 al-text-center">
                        <a id="logo_1" class="logo-list__link" href="<?php echo site_url('/shop') ?>" data-aos="fade-in" data-aos-delay="600">
                            <div class="logo-list__logo-image ">
                                <div class="image-outer-wrapper">
                                    <div class="image-wrapper al-inline-block al-align-middle">
                                        <img class="image__image lazyload fade-in" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/447-water-drop-outline_20743c2c-276e-420d-a472-0b89488cceaa_120x.gif" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="logo-list__logo-title">Dullness &amp; Dehydration</div>
                        </a>
                    </div>
                    <div class="logo-list__logo logo-list__logo-1 al-text-center">
                        <a id="logo_1" class="logo-list__link" href="<?php echo site_url('/shop') ?>" data-aos="fade-in" data-aos-delay="750">
                            <div class="logo-list__logo-image ">
                                <div class="image-outer-wrapper">
                                    <div class="image-wrapper al-inline-block al-align-middle">
                                        <img class="image__image lazyload fade-in" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Heal_c4975dd9-c8bd-43ae-997f-ebeb7ae4b5f6_120x.gif" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="logo-list__logo-title">Sensitised &amp; Redness</div>
                        </a>
                    </div>
                    <div class="logo-list__logo logo-list__logo-1 al-text-center">
                        <a id="logo_1" class="logo-list__link" href="<?php echo site_url('/shop') ?>" data-aos="fade-in" data-aos-delay="900">
                            <div class="logo-list__logo-image ">
                                <div class="image-outer-wrapper">
                                    <div class="image-wrapper al-inline-block al-align-middle">
                                        <img class="image__image lazyload fade-in" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Soften_f79188e3-d24a-4684-b16c-48107f3ea633_120x.gif" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="logo-list__logo-title">Blackheads &amp; Rough Skin</div>
                        </a>
                    </div>
                    <div class="logo-list__logo logo-list__logo-1 al-text-center">
                        <a id="logo_1" class="logo-list__link" href="<?php echo site_url('/shop') ?>" data-aos="fade-in" data-aos-delay="1050">
                            <div class="logo-list__logo-image ">
                                <div class="image-outer-wrapper">
                                    <div class="image-wrapper al-inline-block al-align-middle">
                                        <img class="image__image lazyload fade-in" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Protection_care-outline_d7641835-fd53-4044-84d7-265c7f1bb816_120x.gif" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="logo-list__logo-title">Protection &amp; Maintenance</div>
                        </a>
                    </div>
                    <div class="logo-list__logo logo-list__logo-1 al-text-center">
                        <a id="logo_1" class="logo-list__link" href="<?php echo site_url('/shop') ?>" data-aos="fade-in" data-aos-delay="1200">
                            <div class="logo-list__logo-image ">
                                <div class="image-outer-wrapper">
                                    <div class="image-wrapper al-inline-block al-align-middle">
                                        <img class="image__image lazyload fade-in" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Balance_758bc9a2-a70a-412e-ae3d-4f517f9bca38_120x.gif" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="logo-list__logo-title">Pores &amp; Congestion</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Blurb Skin Concern  -->

    <!-- Home Solution Slideshow  -->
    <div class="section-home-solution section-border">
        <div class="home-solution-slideshow home-solution-section section-spacing">
            <div class="container">
                <div class="home-solution-section__header section-header">
                    <h4 class="subheading subheading--h4 align-center ff-display">
                        clean. clinical. w-holistic. skin treatments expertly crafted for all
                        tones, moods &amp; gender
                    </h4>
                </div>

                <div class="home-solution-section__slides">
                    <div class="swiper" data-swiper data-options='
              {
          "slidesPerView": 1,
          "spaceBetween": 32,
          "navigation": {
            "nextEl": ".swiper-button-next",
            "prevEl": ".swiper-button-prev"
          },
          "breakpoints": {
            "767": {
              "slidesPerView": 3
            }
          }
        }'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="column content-card al-relative" data-aos="fade-in" data-aos-delay="150">
                                    <div class="content-card--border">
                                        <div class="content-card__image lightly-spaced-row">
                                            <img width="346px" height="296px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/illustration_1_1_346x296.png" alt="The “Skin-Now” Solutions" />
                                        </div>
                                        <div class="al-absolute top_text_logo cstm_txt">
                                            Knowing skin everyday
                                        </div>
                                    </div>
                                    <div class="content-card__content al-text-center">
                                        <h3 class="content-card__title">The “Skin-Now” Solutions</h3>

                                        <div class="content-card__text rte">
                                            <div class="content al-text-left" data-block="skin-now">
                                                <p>
                                                    Our skin and its needs are constantly changing Our
                                                    treatment products are based on the physiology of skin,
                                                    its mood (skin type)<span class="dots">..</span><span class="more">
                                                        and concerns which are constantly changing for every
                                                        individual and its lifestyle which we call "SkinNOW".
                                                        We formulate highly effective, multitasking, clean
                                                        skincare that works and is bio-compatible.</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="column content-card al-relative" data-aos="fade-in" data-aos-delay="300">
                                    <div class="content-card--border">
                                        <div class="content-card__image lightly-spaced-row">
                                            <img width="346px" height="296px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/illustration_2_1_346x296.png" alt="The “Skin-Now” Solutions" />
                                        </div>
                                        <div class="al-absolute top_text_logo cstm_txt">
                                            Knowing skin everyday
                                        </div>
                                    </div>
                                    <div class="content-card__content al-text-center">
                                        <h3 class="content-card__title">The “Skin-Now” Solutions</h3>

                                        <div class="content-card__text rte">
                                            <div class="content al-text-left" data-block="skin-now">
                                                <p>
                                                    Our skin and its needs are constantly changing Our
                                                    treatment products are based on the physiology of skin,
                                                    its mood (skin type)<span class="dots">..</span><span class="more">
                                                        and concerns which are constantly changing for every
                                                        individual and its lifestyle which we call "SkinNOW".
                                                        We formulate highly effective, multitasking, clean
                                                        skincare that works and is bio-compatible.</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="column content-card al-relative" data-aos="fade-in" data-aos-delay="450">
                                    <div class="content-card--border">
                                        <div class="content-card__image lightly-spaced-row">
                                            <img width="346px" height="296px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/illustration_3_1_346x296.png" alt="The “Skin-Now” Solutions" />
                                        </div>
                                        <div class="al-absolute top_text_logo cstm_txt">
                                            Knowing skin everyday
                                        </div>
                                    </div>
                                    <div class="content-card__content al-text-center">
                                        <h3 class="content-card__title">The “Skin-Now” Solutions</h3>

                                        <div class="content-card__text rte">
                                            <div class="content al-text-left" data-block="skin-now">
                                                <p>
                                                    Our skin and its needs are constantly changing Our
                                                    treatment products are based on the physiology of skin,
                                                    its mood (skin type)<span class="dots">..</span><span class="more">
                                                        and concerns which are constantly changing for every
                                                        individual and its lifestyle which we call "SkinNOW".
                                                        We formulate highly effective, multitasking, clean
                                                        skincare that works and is bio-compatible.</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Home Solution Slideshow  -->

    <!-- Marquee Home Middle  -->
    <section class="feature-section-infinite_slider home-section feature-marquee feature-marquee--3 feature-marquee__bg-pale">
        <div class="feature__marquee">
            <div class="icon-marquee">
                <div class="icon-marquee__marquee" data-icon-marquee="">
                    <div class="icon-marquee__marquee-inner">
                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/SkinNow_50x.png" alt="" />

                            <span class="marquee__title">Skin Now</span>
                        </div>
                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Untitled_design_47_50x.png" alt="" />

                            <span class="marquee__title">Botanicals and Biocompatible</span>
                        </div>
                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/formula_first_50x.png" alt="" />

                            <span class="marquee__title">Formula First</span>
                        </div>
                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Planet-_-pet-Friendly_50x.png" alt="" />

                            <span class="marquee__title">Planet &amp;amp; Pet Friendly</span>
                        </div>
                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Untitled_design_39_5af7e80e-b57c-4465-b2dd-9ec31d40bedf_50x.png" alt="" />

                            <span class="marquee__title">Purposeful</span>
                        </div>

                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/SkinNow_50x.png" alt="" />

                            <span class="marquee__title">Skin Now</span>
                        </div>

                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Untitled_design_47_50x.png" alt="" />

                            <span class="marquee__title">Botanicals and Biocompatible</span>
                        </div>

                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/formula_first_50x.png" alt="" />

                            <span class="marquee__title">Formula First</span>
                        </div>

                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Planet-_-pet-Friendly_50x.png" alt="" />

                            <span class="marquee__title">Planet &amp;amp; Pet Friendly</span>
                        </div>

                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Untitled_design_39_5af7e80e-b57c-4465-b2dd-9ec31d40bedf_50x.png" alt="" />

                            <span class="marquee__title">Purposeful</span>
                        </div>

                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/SkinNow_50x.png" alt="" />

                            <span class="marquee__title">Skin Now</span>
                        </div>

                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Untitled_design_47_50x.png" alt="" />

                            <span class="marquee__title">Botanicals and Biocompatible</span>
                        </div>

                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/formula_first_50x.png" alt="" />

                            <span class="marquee__title">Formula First</span>
                        </div>

                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Planet-_-pet-Friendly_50x.png" alt="" />

                            <span class="marquee__title">Planet &amp;amp; Pet Friendly</span>
                        </div>

                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Untitled_design_39_5af7e80e-b57c-4465-b2dd-9ec31d40bedf_50x.png" alt="" />

                            <span class="marquee__title">Purposeful</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Marquee Home Middle  -->

    <!-- Product Tabs  -->
    <div id="section-home-products" class="home-products-section section-padding">
        <div class="container">
            <div class="al-text-center">
                <div class="section-header al-inline-block">
                    <h2 class="heading align-center spaced-row" data-aos="fade-in" data-aos="fade-in" data-aos-delay="150">
                        Shop all products
                    </h2>
                </div>
            </div>
            <div class="tabs">
                <ul id="tabs-nav" class="tabs-nav__list">
                    <li class="tabs-nav__item">
                        <a href="#tab1">
                            <div class="nav-item">
                                <h5 class="h5">CLEAN BEAUTY FAVOURITES</h5>
                            </div>
                        </a>
                    </li>

                    <li class="tabs-nav__item active">
                        <a href="#tab2">
                            <div class="nav-item">
                                <h5 class="h5">BODY CARE</h5>
                            </div>
                        </a>
                    </li>

                    <li class="tabs-nav__item">
                        <a href="#tab3">
                            <div class="nav-item">
                                <h5 class="h5">CLEANSERS</h5>
                            </div>
                        </a>
                    </li>

                    <li class="tabs-nav__item">
                        <a href="#tab4">
                            <div class="nav-item">
                                <h5 class="h5">SERUMS</h5>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="tabs-content" id="tabs-content">
                    <div id="tab1" class="tab-content">
                        <div class="swiper product-slider" data-swiper data-options='{
              "spaceBetween": 30,
              "loop": true,
              "autoplay": {
                "delay": 5000,
                "disableOnInteraction": false
              },
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              },   
              "breakpoints": {
                "600": {
                  "slidesPerView": 2
                },
                "1024": {
                  "slidesPerView": 3
                },       
                "1400": {
                  "slidesPerView": 3
                }
              }
            }'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="card product-card" data-aos="fade-in-up" data-aos-delay="150">
                                        <div class="card__inner">
                                            <div class="card__image-wrapper">
                                                <a class="link" href="/products/copper-peptide-serum" aria-label="Copper Peptide Serum" tabindex="0">
                                                </a>
                                                <div class="card__image card__image--primary card__image--active">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in cover lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-1.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__image card__image--reveal">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-3.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card__info">
                                                <div class="card__info-text">
                                                    <a class="link" href="/products/copper-peptide-serum" tabindex="0">
                                                        <div class="vendor">Hydro Boost</div>

                                                        <div class="card-title">Moisturizing Gel</div>
                                                        <div class="card-subtitle">
                                                            Provides long-lasting hydration without a greasy feel
                                                        </div>
                                                        <div class="price-with-review">
                                                            <div class="price">
                                                                <span class="price__item price__amount theme-money">Rs. 900
                                                                </span>
                                                            </div>
                                                            <div class="option-size">
                                                                <p class="variant-name">10 ml</p>

                                                                <p class="variant-name">30 ml</p>
                                                            </div>
                                                        </div>

                                                        <div class="product-rating">
                                                            <div class="product-rating-badge" data-average-rating="4.56" data-number-of-reviews="54" data-number-of-questions="0">
                                                                <span class="product-rating-badge__stars" data-score="4.56" tabindex="0" aria-label="4.56 stars" role="button">
                                                                    <i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-half-s-fill"></i>
                                                                </span>
                                                                <span class="product-rating-badge__text"> 54 reviews </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="card__btn">
                                                        <a href="/products/copper-peptide-serum" class="button button--large" tabindex="0">
                                                            View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="card product-card" data-aos="fade-in-up" data-aos-delay="300">
                                        <div class="card__inner">
                                            <div class="card__image-wrapper">
                                                <a class="link" href="/products/copper-peptide-serum" aria-label="Copper Peptide Serum" tabindex="0">
                                                </a>
                                                <div class="card__image card__image--primary card__image--active">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in cover lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-2.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__image card__image--reveal">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-4.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card__info">
                                                <div class="card__info-text">
                                                    <a class="link" href="/products/copper-peptide-serum" tabindex="0">
                                                        <div class="vendor">Skincare Essentials</div>

                                                        <div class="card-title">Hydrating Serum</div>
                                                        <div class="card-subtitle">
                                                            Intensive hydration for dry and dull skin
                                                        </div>
                                                        <div class="price-with-review">
                                                            <div class="price">
                                                                <span class="price__item price__amount theme-money">Rs. 850
                                                                </span>
                                                            </div>
                                                            <div class="option-size">
                                                                <p class="variant-name">10 ml</p>

                                                                <p class="variant-name">30 ml</p>
                                                            </div>
                                                        </div>

                                                        <div class="product-rating">
                                                            <div class="product-rating-badge" data-average-rating="4.56" data-number-of-reviews="54" data-number-of-questions="0">
                                                                <span class="product-rating-badge__stars" data-score="4.56" tabindex="0" aria-label="4.56 stars" role="button">
                                                                    <i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-half-s-fill"></i>
                                                                </span>
                                                                <span class="product-rating-badge__text"> 54 reviews </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="card__btn">
                                                        <a href="/products/copper-peptide-serum" class="button button--large" tabindex="0">
                                                            View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="card product-card" data-aos="fade-in-up" data-aos-delay="450">
                                        <div class="card__inner">
                                            <div class="card__image-wrapper">
                                                <a class="link" href="/products/copper-peptide-serum" aria-label="Copper Peptide Serum" tabindex="0">
                                                </a>
                                                <div class="card__image card__image--primary card__image--active">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in cover lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-3.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__image card__image--reveal">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-2.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card__info">
                                                <div class="card__info-text">
                                                    <a class="link" href="/products/copper-peptide-serum" tabindex="0">
                                                        <div class="vendor">Beauty Glow</div>

                                                        <div class="card-title">Brightening Cream</div>
                                                        <div class="card-subtitle">
                                                            Illuminates and evens skin tone
                                                        </div>
                                                        <div class="price-with-review">
                                                            <div class="price">
                                                                <span class="price__item price__amount theme-money">Rs. 1200
                                                                </span>
                                                            </div>
                                                            <div class="option-size">
                                                                <p class="variant-name">10 ml</p>

                                                                <p class="variant-name">30 ml</p>
                                                            </div>
                                                        </div>

                                                        <div class="product-rating">
                                                            <div class="product-rating-badge" data-average-rating="4.56" data-number-of-reviews="54" data-number-of-questions="0">
                                                                <span class="product-rating-badge__stars" data-score="4.56" tabindex="0" aria-label="4.56 stars" role="button">
                                                                    <i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-half-s-fill"></i>
                                                                </span>
                                                                <span class="product-rating-badge__text"> 54 reviews </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="card__btn">
                                                        <a href="/products/copper-peptide-serum" class="button button--large" tabindex="0">
                                                            View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="card product-card" data-aos="fade-in-up" data-aos-delay="600">
                                        <div class="card__inner">
                                            <div class="card__image-wrapper">
                                                <a class="link" href="/products/copper-peptide-serum" aria-label="Copper Peptide Serum" tabindex="0">
                                                </a>
                                                <div class="card__image card__image--primary card__image--active">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in cover lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-4.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__image card__image--reveal">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-3.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card__info">
                                                <div class="card__info-text">
                                                    <a class="link" href="/products/copper-peptide-serum" tabindex="0">
                                                        <div class="vendor">Organic Beauty</div>

                                                        <div class="card-title">Nourishing Facial Oil</div>
                                                        <div class="card-subtitle">
                                                            Deeply nourishes and restores skin&#x27;s radiance
                                                        </div>
                                                        <div class="price-with-review">
                                                            <div class="price">
                                                                <span class="price__item price__amount theme-money">Rs. 950
                                                                </span>
                                                            </div>
                                                            <div class="option-size">
                                                                <p class="variant-name">10 ml</p>

                                                                <p class="variant-name">30 ml</p>
                                                            </div>
                                                        </div>

                                                        <div class="product-rating">
                                                            <div class="product-rating-badge" data-average-rating="4.56" data-number-of-reviews="54" data-number-of-questions="0">
                                                                <span class="product-rating-badge__stars" data-score="4.56" tabindex="0" aria-label="4.56 stars" role="button">
                                                                    <i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-half-s-fill"></i>
                                                                </span>
                                                                <span class="product-rating-badge__text"> 54 reviews </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="card__btn">
                                                        <a href="/products/copper-peptide-serum" class="button button--large" tabindex="0">
                                                            View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Add Arrows -->
                            <div class="swiper-prev top-50 start-0 z-index-30 cursor-pointer transition-all bg-white px-3 py-4 position-absolute z-index-30 top-50 start-0 mt-n8 d-flex justify-content-center align-items-center opacity-50-hover">
                                <i class="ri-arrow-left-s-line ri-lg"></i>
                            </div>
                            <div class="swiper-next top-50 end-0 z-index-30 cursor-pointer transition-all bg-white px-3 py-4 position-absolute z-index-30 top-50 end-0 mt-n8 d-flex justify-content-center align-items-center opacity-50-hover">
                                <i class="ri-arrow-right-s-line ri-lg"></i>
                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="tab-content" style="display: block">
                        <div class="swiper product-slider" data-swiper data-options='{
              "spaceBetween": 30,
              "loop": true,
              "autoplay": {
                "delay": 5000,
                "disableOnInteraction": false
              },
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              },   
              "breakpoints": {
                "600": {
                  "slidesPerView": 2
                },
                "1024": {
                  "slidesPerView": 3
                },       
                "1400": {
                  "slidesPerView": 3
                }
              }
            }'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="card product-card" data-aos="fade-in-up" data-aos-delay="150">
                                        <div class="card__inner">
                                            <div class="card__image-wrapper">
                                                <a class="link" href="/products/copper-peptide-serum" aria-label="Copper Peptide Serum" tabindex="0">
                                                </a>
                                                <div class="card__image card__image--primary card__image--active">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in cover lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-1.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__image card__image--reveal">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-3.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card__info">
                                                <div class="card__info-text">
                                                    <a class="link" href="/products/copper-peptide-serum" tabindex="0">
                                                        <div class="vendor">Hydro Boost</div>

                                                        <div class="card-title">Moisturizing Gel</div>
                                                        <div class="card-subtitle">
                                                            Provides long-lasting hydration without a greasy feel
                                                        </div>
                                                        <div class="price-with-review">
                                                            <div class="price">
                                                                <span class="price__item price__amount theme-money">Rs. 900
                                                                </span>
                                                            </div>
                                                            <div class="option-size">
                                                                <p class="variant-name">10 ml</p>

                                                                <p class="variant-name">30 ml</p>
                                                            </div>
                                                        </div>

                                                        <div class="product-rating">
                                                            <div class="product-rating-badge" data-average-rating="4.56" data-number-of-reviews="54" data-number-of-questions="0">
                                                                <span class="product-rating-badge__stars" data-score="4.56" tabindex="0" aria-label="4.56 stars" role="button">
                                                                    <i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-half-s-fill"></i>
                                                                </span>
                                                                <span class="product-rating-badge__text"> 54 reviews </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="card__btn">
                                                        <a href="/products/copper-peptide-serum" class="button button--large" tabindex="0">
                                                            View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="card product-card" data-aos="fade-in-up" data-aos-delay="300">
                                        <div class="card__inner">
                                            <div class="card__image-wrapper">
                                                <a class="link" href="/products/copper-peptide-serum" aria-label="Copper Peptide Serum" tabindex="0">
                                                </a>
                                                <div class="card__image card__image--primary card__image--active">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in cover lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-2.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__image card__image--reveal">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-4.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card__info">
                                                <div class="card__info-text">
                                                    <a class="link" href="/products/copper-peptide-serum" tabindex="0">
                                                        <div class="vendor">Skincare Essentials</div>

                                                        <div class="card-title">Hydrating Serum</div>
                                                        <div class="card-subtitle">
                                                            Intensive hydration for dry and dull skin
                                                        </div>
                                                        <div class="price-with-review">
                                                            <div class="price">
                                                                <span class="price__item price__amount theme-money">Rs. 850
                                                                </span>
                                                            </div>
                                                            <div class="option-size">
                                                                <p class="variant-name">10 ml</p>

                                                                <p class="variant-name">30 ml</p>
                                                            </div>
                                                        </div>

                                                        <div class="product-rating">
                                                            <div class="product-rating-badge" data-average-rating="4.56" data-number-of-reviews="54" data-number-of-questions="0">
                                                                <span class="product-rating-badge__stars" data-score="4.56" tabindex="0" aria-label="4.56 stars" role="button">
                                                                    <i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-half-s-fill"></i>
                                                                </span>
                                                                <span class="product-rating-badge__text"> 54 reviews </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="card__btn">
                                                        <a href="/products/copper-peptide-serum" class="button button--large" tabindex="0">
                                                            View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="card product-card" data-aos="fade-in-up" data-aos-delay="450">
                                        <div class="card__inner">
                                            <div class="card__image-wrapper">
                                                <a class="link" href="/products/copper-peptide-serum" aria-label="Copper Peptide Serum" tabindex="0">
                                                </a>
                                                <div class="card__image card__image--primary card__image--active">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in cover lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-3.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__image card__image--reveal">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-2.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card__info">
                                                <div class="card__info-text">
                                                    <a class="link" href="/products/copper-peptide-serum" tabindex="0">
                                                        <div class="vendor">Beauty Glow</div>

                                                        <div class="card-title">Brightening Cream</div>
                                                        <div class="card-subtitle">
                                                            Illuminates and evens skin tone
                                                        </div>
                                                        <div class="price-with-review">
                                                            <div class="price">
                                                                <span class="price__item price__amount theme-money">Rs. 1200
                                                                </span>
                                                            </div>
                                                            <div class="option-size">
                                                                <p class="variant-name">10 ml</p>

                                                                <p class="variant-name">30 ml</p>
                                                            </div>
                                                        </div>

                                                        <div class="product-rating">
                                                            <div class="product-rating-badge" data-average-rating="4.56" data-number-of-reviews="54" data-number-of-questions="0">
                                                                <span class="product-rating-badge__stars" data-score="4.56" tabindex="0" aria-label="4.56 stars" role="button">
                                                                    <i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-half-s-fill"></i>
                                                                </span>
                                                                <span class="product-rating-badge__text"> 54 reviews </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="card__btn">
                                                        <a href="/products/copper-peptide-serum" class="button button--large" tabindex="0">
                                                            View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="card product-card" data-aos="fade-in-up" data-aos-delay="600">
                                        <div class="card__inner">
                                            <div class="card__image-wrapper">
                                                <a class="link" href="/products/copper-peptide-serum" aria-label="Copper Peptide Serum" tabindex="0">
                                                </a>
                                                <div class="card__image card__image--primary card__image--active">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in cover lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-4.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__image card__image--reveal">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-3.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card__info">
                                                <div class="card__info-text">
                                                    <a class="link" href="/products/copper-peptide-serum" tabindex="0">
                                                        <div class="vendor">Organic Beauty</div>

                                                        <div class="card-title">Nourishing Facial Oil</div>
                                                        <div class="card-subtitle">
                                                            Deeply nourishes and restores skin&#x27;s radiance
                                                        </div>
                                                        <div class="price-with-review">
                                                            <div class="price">
                                                                <span class="price__item price__amount theme-money">Rs. 950
                                                                </span>
                                                            </div>
                                                            <div class="option-size">
                                                                <p class="variant-name">10 ml</p>

                                                                <p class="variant-name">30 ml</p>
                                                            </div>
                                                        </div>

                                                        <div class="product-rating">
                                                            <div class="product-rating-badge" data-average-rating="4.56" data-number-of-reviews="54" data-number-of-questions="0">
                                                                <span class="product-rating-badge__stars" data-score="4.56" tabindex="0" aria-label="4.56 stars" role="button">
                                                                    <i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-half-s-fill"></i>
                                                                </span>
                                                                <span class="product-rating-badge__text"> 54 reviews </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="card__btn">
                                                        <a href="/products/copper-peptide-serum" class="button button--large" tabindex="0">
                                                            View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Add Arrows -->
                            <div class="swiper-nav swiper-button-prev top-50 start-0 z-index-30 cursor-pointer transition-all bg-white px-3 py-4 position-absolute z-index-30 top-50 start-0 mt-n8 d-flex justify-content-center align-items-center opacity-50-hover">
                                <i class="ri-arrow-left-s-line ri-lg"></i>
                            </div>
                            <div class="swiper-nav swiper-button-next top-50 end-0 z-index-30 cursor-pointer transition-all bg-white px-3 py-4 position-absolute z-index-30 top-50 end-0 mt-n8 d-flex justify-content-center align-items-center opacity-50-hover">
                                <i class="ri-arrow-right-s-line ri-lg"></i>
                            </div>
                        </div>
                    </div>
                    <div id="tab3" class="tab-content">
                        <div class="swiper product-slider" data-swiper data-options='{
              "spaceBetween": 30,
              "loop": true,
              "autoplay": {
                "delay": 5000,
                "disableOnInteraction": false
              },
              "navigation": {
                "nextEl": ".swiper-next",
                "prevEl": ".swiper-prev"
              },   
              "breakpoints": {
                "600": {
                  "slidesPerView": 2
                },
                "1024": {
                  "slidesPerView": 3
                },       
                "1400": {
                  "slidesPerView": 3
                }
              }
            }'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="card product-card" data-aos="fade-in-up" data-aos-delay="150">
                                        <div class="card__inner">
                                            <div class="card__image-wrapper">
                                                <a class="link" href="/products/copper-peptide-serum" aria-label="Copper Peptide Serum" tabindex="0">
                                                </a>
                                                <div class="card__image card__image--primary card__image--active">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in cover lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-1.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__image card__image--reveal">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-3.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card__info">
                                                <div class="card__info-text">
                                                    <a class="link" href="/products/copper-peptide-serum" tabindex="0">
                                                        <div class="vendor">Hydro Boost</div>

                                                        <div class="card-title">Moisturizing Gel</div>
                                                        <div class="card-subtitle">
                                                            Provides long-lasting hydration without a greasy feel
                                                        </div>
                                                        <div class="price-with-review">
                                                            <div class="price">
                                                                <span class="price__item price__amount theme-money">Rs. 900
                                                                </span>
                                                            </div>
                                                            <div class="option-size">
                                                                <p class="variant-name">10 ml</p>

                                                                <p class="variant-name">30 ml</p>
                                                            </div>
                                                        </div>

                                                        <div class="product-rating">
                                                            <div class="product-rating-badge" data-average-rating="4.56" data-number-of-reviews="54" data-number-of-questions="0">
                                                                <span class="product-rating-badge__stars" data-score="4.56" tabindex="0" aria-label="4.56 stars" role="button">
                                                                    <i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-half-s-fill"></i>
                                                                </span>
                                                                <span class="product-rating-badge__text"> 54 reviews </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="card__btn">
                                                        <a href="/products/copper-peptide-serum" class="button button--large" tabindex="0">
                                                            View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="card product-card" data-aos="fade-in-up" data-aos-delay="300">
                                        <div class="card__inner">
                                            <div class="card__image-wrapper">
                                                <a class="link" href="/products/copper-peptide-serum" aria-label="Copper Peptide Serum" tabindex="0">
                                                </a>
                                                <div class="card__image card__image--primary card__image--active">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in cover lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-2.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__image card__image--reveal">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-4.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card__info">
                                                <div class="card__info-text">
                                                    <a class="link" href="/products/copper-peptide-serum" tabindex="0">
                                                        <div class="vendor">Skincare Essentials</div>

                                                        <div class="card-title">Hydrating Serum</div>
                                                        <div class="card-subtitle">
                                                            Intensive hydration for dry and dull skin
                                                        </div>
                                                        <div class="price-with-review">
                                                            <div class="price">
                                                                <span class="price__item price__amount theme-money">Rs. 850
                                                                </span>
                                                            </div>
                                                            <div class="option-size">
                                                                <p class="variant-name">10 ml</p>

                                                                <p class="variant-name">30 ml</p>
                                                            </div>
                                                        </div>

                                                        <div class="product-rating">
                                                            <div class="product-rating-badge" data-average-rating="4.56" data-number-of-reviews="54" data-number-of-questions="0">
                                                                <span class="product-rating-badge__stars" data-score="4.56" tabindex="0" aria-label="4.56 stars" role="button">
                                                                    <i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-half-s-fill"></i>
                                                                </span>
                                                                <span class="product-rating-badge__text"> 54 reviews </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="card__btn">
                                                        <a href="/products/copper-peptide-serum" class="button button--large" tabindex="0">
                                                            View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="card product-card" data-aos="fade-in-up" data-aos-delay="450">
                                        <div class="card__inner">
                                            <div class="card__image-wrapper">
                                                <a class="link" href="/products/copper-peptide-serum" aria-label="Copper Peptide Serum" tabindex="0">
                                                </a>
                                                <div class="card__image card__image--primary card__image--active">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in cover lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-3.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__image card__image--reveal">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-2.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card__info">
                                                <div class="card__info-text">
                                                    <a class="link" href="/products/copper-peptide-serum" tabindex="0">
                                                        <div class="vendor">Beauty Glow</div>

                                                        <div class="card-title">Brightening Cream</div>
                                                        <div class="card-subtitle">
                                                            Illuminates and evens skin tone
                                                        </div>
                                                        <div class="price-with-review">
                                                            <div class="price">
                                                                <span class="price__item price__amount theme-money">Rs. 1200
                                                                </span>
                                                            </div>
                                                            <div class="option-size">
                                                                <p class="variant-name">10 ml</p>

                                                                <p class="variant-name">30 ml</p>
                                                            </div>
                                                        </div>

                                                        <div class="product-rating">
                                                            <div class="product-rating-badge" data-average-rating="4.56" data-number-of-reviews="54" data-number-of-questions="0">
                                                                <span class="product-rating-badge__stars" data-score="4.56" tabindex="0" aria-label="4.56 stars" role="button">
                                                                    <i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-half-s-fill"></i>
                                                                </span>
                                                                <span class="product-rating-badge__text"> 54 reviews </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="card__btn">
                                                        <a href="/products/copper-peptide-serum" class="button button--large" tabindex="0">
                                                            View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="card product-card" data-aos="fade-in-up" data-aos-delay="600">
                                        <div class="card__inner">
                                            <div class="card__image-wrapper">
                                                <a class="link" href="/products/copper-peptide-serum" aria-label="Copper Peptide Serum" tabindex="0">
                                                </a>
                                                <div class="card__image card__image--primary card__image--active">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in cover lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-4.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__image card__image--reveal">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-3.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card__info">
                                                <div class="card__info-text">
                                                    <a class="link" href="/products/copper-peptide-serum" tabindex="0">
                                                        <div class="vendor">Organic Beauty</div>

                                                        <div class="card-title">Nourishing Facial Oil</div>
                                                        <div class="card-subtitle">
                                                            Deeply nourishes and restores skin&#x27;s radiance
                                                        </div>
                                                        <div class="price-with-review">
                                                            <div class="price">
                                                                <span class="price__item price__amount theme-money">Rs. 950
                                                                </span>
                                                            </div>
                                                            <div class="option-size">
                                                                <p class="variant-name">10 ml</p>

                                                                <p class="variant-name">30 ml</p>
                                                            </div>
                                                        </div>

                                                        <div class="product-rating">
                                                            <div class="product-rating-badge" data-average-rating="4.56" data-number-of-reviews="54" data-number-of-questions="0">
                                                                <span class="product-rating-badge__stars" data-score="4.56" tabindex="0" aria-label="4.56 stars" role="button">
                                                                    <i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-half-s-fill"></i>
                                                                </span>
                                                                <span class="product-rating-badge__text"> 54 reviews </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="card__btn">
                                                        <a href="/products/copper-peptide-serum" class="button button--large" tabindex="0">
                                                            View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Add Arrows -->
                            <div class="swiper-prev top-50 start-0 z-index-30 cursor-pointer transition-all bg-white px-3 py-4 position-absolute z-index-30 top-50 start-0 mt-n8 d-flex justify-content-center align-items-center opacity-50-hover">
                                <i class="ri-arrow-left-s-line ri-lg"></i>
                            </div>
                            <div class="swiper-next top-50 end-0 z-index-30 cursor-pointer transition-all bg-white px-3 py-4 position-absolute z-index-30 top-50 end-0 mt-n8 d-flex justify-content-center align-items-center opacity-50-hover">
                                <i class="ri-arrow-right-s-line ri-lg"></i>
                            </div>
                        </div>
                    </div>
                    <div id="tab4" class="tab-content">
                        <div class="swiper product-slider" data-swiper data-options='{
              "spaceBetween": 30,
              "loop": true,
              "autoplay": {
                "delay": 5000,
                "disableOnInteraction": false
              },
              "navigation": {
                "nextEl": ".swiper-next",
                "prevEl": ".swiper-prev"
              },   
              "breakpoints": {
                "600": {
                  "slidesPerView": 2
                },
                "1024": {
                  "slidesPerView": 3
                },       
                "1400": {
                  "slidesPerView": 3
                }
              }
            }'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="card product-card" data-aos="fade-in-up" data-aos-delay="150">
                                        <div class="card__inner">
                                            <div class="card__image-wrapper">
                                                <a class="link" href="/products/copper-peptide-serum" aria-label="Copper Peptide Serum" tabindex="0">
                                                </a>
                                                <div class="card__image card__image--primary card__image--active">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in cover lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-1.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__image card__image--reveal">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-3.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card__info">
                                                <div class="card__info-text">
                                                    <a class="link" href="/products/copper-peptide-serum" tabindex="0">
                                                        <div class="vendor">Hydro Boost</div>

                                                        <div class="card-title">Moisturizing Gel</div>
                                                        <div class="card-subtitle">
                                                            Provides long-lasting hydration without a greasy feel
                                                        </div>
                                                        <div class="price-with-review">
                                                            <div class="price">
                                                                <span class="price__item price__amount theme-money">Rs. 900
                                                                </span>
                                                            </div>
                                                            <div class="option-size">
                                                                <p class="variant-name">10 ml</p>

                                                                <p class="variant-name">30 ml</p>
                                                            </div>
                                                        </div>

                                                        <div class="product-rating">
                                                            <div class="product-rating-badge" data-average-rating="4.56" data-number-of-reviews="54" data-number-of-questions="0">
                                                                <span class="product-rating-badge__stars" data-score="4.56" tabindex="0" aria-label="4.56 stars" role="button">
                                                                    <i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-half-s-fill"></i>
                                                                </span>
                                                                <span class="product-rating-badge__text"> 54 reviews </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="card__btn">
                                                        <a href="/products/copper-peptide-serum" class="button button--large" tabindex="0">
                                                            View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="card product-card" data-aos="fade-in-up" data-aos-delay="150">
                                        <div class="card__inner">
                                            <div class="card__image-wrapper">
                                                <a class="link" href="/products/copper-peptide-serum" aria-label="Copper Peptide Serum" tabindex="0">
                                                </a>
                                                <div class="card__image card__image--primary card__image--active">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in cover lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-2.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__image card__image--reveal">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-4.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card__info">
                                                <div class="card__info-text">
                                                    <a class="link" href="/products/copper-peptide-serum" tabindex="0">
                                                        <div class="vendor">Skincare Essentials</div>

                                                        <div class="card-title">Hydrating Serum</div>
                                                        <div class="card-subtitle">
                                                            Intensive hydration for dry and dull skin
                                                        </div>
                                                        <div class="price-with-review">
                                                            <div class="price">
                                                                <span class="price__item price__amount theme-money">Rs. 850
                                                                </span>
                                                            </div>
                                                            <div class="option-size">
                                                                <p class="variant-name">10 ml</p>

                                                                <p class="variant-name">30 ml</p>
                                                            </div>
                                                        </div>

                                                        <div class="product-rating">
                                                            <div class="product-rating-badge" data-average-rating="4.56" data-number-of-reviews="54" data-number-of-questions="0">
                                                                <span class="product-rating-badge__stars" data-score="4.56" tabindex="0" aria-label="4.56 stars" role="button">
                                                                    <i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-half-s-fill"></i>
                                                                </span>
                                                                <span class="product-rating-badge__text"> 54 reviews </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="card__btn">
                                                        <a href="/products/copper-peptide-serum" class="button button--large" tabindex="0">
                                                            View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="card product-card" data-aos="fade-in-up" data-aos-delay="150">
                                        <div class="card__inner">
                                            <div class="card__image-wrapper">
                                                <a class="link" href="/products/copper-peptide-serum" aria-label="Copper Peptide Serum" tabindex="0">
                                                </a>
                                                <div class="card__image card__image--primary card__image--active">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in cover lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-3.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__image card__image--reveal">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-2.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card__info">
                                                <div class="card__info-text">
                                                    <a class="link" href="/products/copper-peptide-serum" tabindex="0">
                                                        <div class="vendor">Beauty Glow</div>

                                                        <div class="card-title">Brightening Cream</div>
                                                        <div class="card-subtitle">
                                                            Illuminates and evens skin tone
                                                        </div>
                                                        <div class="price-with-review">
                                                            <div class="price">
                                                                <span class="price__item price__amount theme-money">Rs. 1200
                                                                </span>
                                                            </div>
                                                            <div class="option-size">
                                                                <p class="variant-name">10 ml</p>

                                                                <p class="variant-name">30 ml</p>
                                                            </div>
                                                        </div>

                                                        <div class="product-rating">
                                                            <div class="product-rating-badge" data-average-rating="4.56" data-number-of-reviews="54" data-number-of-questions="0">
                                                                <span class="product-rating-badge__stars" data-score="4.56" tabindex="0" aria-label="4.56 stars" role="button">
                                                                    <i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-half-s-fill"></i>
                                                                </span>
                                                                <span class="product-rating-badge__text"> 54 reviews </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="card__btn">
                                                        <a href="/products/copper-peptide-serum" class="button button--large" tabindex="0">
                                                            View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="card product-card" data-aos="fade-in-up" data-aos-delay="150">
                                        <div class="card__inner">
                                            <div class="card__image-wrapper">
                                                <a class="link" href="/products/copper-peptide-serum" aria-label="Copper Peptide Serum" tabindex="0">
                                                </a>
                                                <div class="card__image card__image--primary card__image--active">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in cover lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-4.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__image card__image--reveal">
                                                    <div class="rimage-outer-wrapper">
                                                        <div class="rimage-wrapper">
                                                            <img class="rimage__image fade-in lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="<?php bloginfo('template_directory') ?>/assets/assets/images/product/product-3.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card__info">
                                                <div class="card__info-text">
                                                    <a class="link" href="/products/copper-peptide-serum" tabindex="0">
                                                        <div class="vendor">Organic Beauty</div>

                                                        <div class="card-title">Nourishing Facial Oil</div>
                                                        <div class="card-subtitle">
                                                            Deeply nourishes and restores skin&#x27;s radiance
                                                        </div>
                                                        <div class="price-with-review">
                                                            <div class="price">
                                                                <span class="price__item price__amount theme-money">Rs. 950
                                                                </span>
                                                            </div>
                                                            <div class="option-size">
                                                                <p class="variant-name">10 ml</p>

                                                                <p class="variant-name">30 ml</p>
                                                            </div>
                                                        </div>

                                                        <div class="product-rating">
                                                            <div class="product-rating-badge" data-average-rating="4.56" data-number-of-reviews="54" data-number-of-questions="0">
                                                                <span class="product-rating-badge__stars" data-score="4.56" tabindex="0" aria-label="4.56 stars" role="button">
                                                                    <i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i class="ri-star-half-s-fill"></i>
                                                                </span>
                                                                <span class="product-rating-badge__text"> 54 reviews </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="card__btn">
                                                        <a href="/products/copper-peptide-serum" class="button button--large" tabindex="0">
                                                            View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Add Arrows -->
                            <div class="swiper-nav swiper-button-prev top-50 start-0 z-index-30 cursor-pointer transition-all bg-white px-3 py-4 position-absolute z-index-30 top-50 start-0 mt-n8 d-flex justify-content-center align-items-center opacity-50-hover">
                                <i class="ri-arrow-left-s-line ri-lg"></i>
                            </div>
                            <div class="swiper-nav swiper-button-next top-50 end-0 z-index-30 cursor-pointer transition-all bg-white px-3 py-4 position-absolute z-index-30 top-50 end-0 mt-n8 d-flex justify-content-center align-items-center opacity-50-hover">
                                <i class="ri-arrow-right-s-line ri-lg"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Product Tabs  -->

    <!-- Blurb Skin Type  -->
    <div id="section-home-skin" class="section-border home-skin-section">
        <div class="container four_grid_list">
            <div class="al-text-center">
                <div class="section-header al-inline-block">
                    <div class="al-mb-6 al-text-left">
                        <span class="strapline">skin-moods</span><span class="strapline">skin-now</span>
                    </div>
                    <h2 class="heading align-center spaced-row" data-aos="fade-in" data-aos="fade-in" data-aos-delay="150">
                        Shop by skin type
                    </h2>
                </div>
            </div>
            <div class="logo-list__container">
                <div class="logo-list logo-list--count-5 al-flex al-items-center al-overflow-y-auto md:al-grid al-grid-cols-3 md:al-grid-cols-5 al-max-w-5xl al-mx-auto">
                    <div class="logo-list__logo logo-list__logo-1 al-text-center">
                        <a id="logo_1" class="logo-list__link" href="<?php echo site_url('/shop') ?>" data-aos="fade-in-up" data-aos-delay="150">
                            <div class="logo-list__logo-image active">
                                <div class="image-outer-wrapper">
                                    <div class="image-wrapper al-inline-block al-align-middle">
                                        <img class="image__image lazyload fade-in" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Dry-Skin_1_90x.png" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="logo-list__logo-title al-uppercase">Dry</div>
                        </a>
                    </div>
                    <div class="logo-list__logo logo-list__logo-1 al-text-center">
                        <a id="logo_1" class="logo-list__link" href="<?php echo site_url('/shop') ?>" data-aos="fade-in-up" data-aos-delay="300">
                            <div class="logo-list__logo-image ">
                                <div class="image-outer-wrapper">
                                    <div class="image-wrapper al-inline-block al-align-middle">
                                        <img class="image__image lazyload fade-in" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Normal-Skin_752a7639-dbba-45d8-84c7-1436684a2c42_90x.png" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="logo-list__logo-title al-uppercase">Normal</div>
                        </a>
                    </div>
                    <div class="logo-list__logo logo-list__logo-1 al-text-center">
                        <a id="logo_1" class="logo-list__link" href="<?php echo site_url('/shop') ?>" data-aos="fade-in-up" data-aos-delay="450">
                            <div class="logo-list__logo-image ">
                                <div class="image-outer-wrapper">
                                    <div class="image-wrapper al-inline-block al-align-middle">
                                        <img class="image__image lazyload fade-in" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Combination-Skin_38bc8c26-abc7-46b5-8486-de3b86cd322a_90x.png" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="logo-list__logo-title al-uppercase">Combination</div>
                        </a>
                    </div>
                    <div class="logo-list__logo logo-list__logo-1 al-text-center">
                        <a id="logo_1" class="logo-list__link" href="<?php echo site_url('/shop') ?>" data-aos="fade-in-up" data-aos-delay="600">
                            <div class="logo-list__logo-image ">
                                <div class="image-outer-wrapper">
                                    <div class="image-wrapper al-inline-block al-align-middle">
                                        <img class="image__image lazyload fade-in" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Oily-Skin_9a51ecb0-3e0d-4069-b172-bcf13365741e_90x.png" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="logo-list__logo-title al-uppercase">Oily</div>
                        </a>
                    </div>
                    <div class="logo-list__logo logo-list__logo-1 al-text-center">
                        <a id="logo_1" class="logo-list__link" href="<?php echo site_url('/shop') ?>" data-aos="fade-in-up" data-aos-delay="750">
                            <div class="logo-list__logo-image ">
                                <div class="image-outer-wrapper">
                                    <div class="image-wrapper al-inline-block al-align-middle">
                                        <img class="image__image lazyload fade-in" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Sensitive-Skin_083cbfea-a5f8-4e8e-add6-f918cc3085c7_90x.png" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="logo-list__logo-title al-uppercase">Sensitive</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Blurb Skin Type  -->

    <!-- Home Video  -->
    <div class="featured-video-section section-padding" data-section-type="video">
        <div class="container">
            <div class="mobile-only">
                <h2 class="majortitle in-content h1-style">
                    The elements of science + nature!
                </h2>
            </div>
            <div class="columns valign-middle">
                <div class="column-12 column-md-6">
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

                <div class="column-12 column-md-6 cc-animate-init -in cc-animate-complete" data-aos="fade-in">
                    <div class="featured-video">
                        <h2 class="featured-video__title in-content h1-style">
                            The elements of science + nature!
                        </h2>

                        <div class="featured-video__content rte">
                            <p>
                                We understand that our skin is an intricate communication system
                                and its needs are constantly changing. With a clear understanding
                                of skin biology, its functions and changes to physical well-being,
                                environmental and daily changes, all our products are formulated
                                to understand your skin, its need for replenishment, hydration,
                                recovery and protection.
                            </p>
                            <p>
                                Our products heal your skin, with its potent clean ingredients and
                                unique delivery mechanisms to meet your skin needs - now.
                            </p>
                            <p>
                                <a href="https://calendly.com/skincoach" title="https://calendly.com/skincoach">SCHEDULE OUR CLEAN CONSULTATION</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Home Video  -->

    <!-- Blurb Skin Type  -->
    <div class="home-thoughtfullness-section section-border">
        <div class="container orig_multi_col btm_mlt">
            <div class="section-header al-text-center">
                <h4 class="subheading subheading--uppercase al-align-center">
                    OUR THOUGHTFULNESS &amp; CARE
                </h4>
                <h2 class="hometitle h4-style align-center cc-animate-init -in cc-animate-complete" data-aos="fade-in">
                    DELIVERING SAFE &amp; EFFECTIVE RESULTS
                </h2>
            </div>

            <div class="icon-blurb__list icon-blurb--thoughfulness icon-blurb__list--columns-3">
                <div id="feature-icon-blurb" class="icon-blurb al-text-center cc-fade-in-up cc-animate-init -in cc-animate-complete" data-aos="fade-in" data-aos-delay="150">
                    <div class="al-inline-block lightly-spaced-row image-wrapper">
                        <img width="150px" height="150px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Vegan_150x.png" alt="Vegan" />
                    </div>

                    <h3 class="icon-blurb__title al-uppercase">Vegan</h3>

                    <div class="icon-blurb__text al-text-left rte">
                        <p>This products contain no animal ingredients or animal byproduct including honey, beeswax, milk, or eggs.</p>
                    </div>
                </div>
                <div id="feature-icon-blurb" class="icon-blurb al-text-center cc-fade-in-up cc-animate-init -in cc-animate-complete" data-aos="fade-in" data-aos-delay="300">
                    <div class="al-inline-block lightly-spaced-row image-wrapper">
                        <img width="150px" height="150px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Dermatologically_tested_150x.png" alt="Dermatologically tested" />
                    </div>

                    <h3 class="icon-blurb__title al-uppercase">Dermatologically tested</h3>

                    <div class="icon-blurb__text al-text-left rte">
                        <p>This product is tested for its safety and is proven non-irritant, as per Methods of test for safety evaluation of cosmetics - 3rd Revision.</p>
                    </div>
                </div>
                <div id="feature-icon-blurb" class="icon-blurb al-text-center cc-fade-in-up cc-animate-init -in cc-animate-complete" data-aos="fade-in" data-aos-delay="450">
                    <div class="al-inline-block lightly-spaced-row image-wrapper">
                        <img width="150px" height="150px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Australian_certified_150x.png" alt="Made Safe Certified" />
                    </div>

                    <h3 class="icon-blurb__title al-uppercase">Made Safe Certified</h3>

                    <div class="icon-blurb__text al-text-left rte">
                        <p>The Australian Made Safe® Certified logo represents safer, cleaner practices than any government standard.</p>
                    </div>
                </div>
                <div id="feature-icon-blurb" class="icon-blurb al-text-center cc-fade-in-up cc-animate-init -in cc-animate-complete" data-aos="fade-in" data-aos-delay="600">
                    <div class="al-inline-block lightly-spaced-row image-wrapper">
                        <img width="150px" height="150px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/animal_test_free_150x.png" alt="Animal Test Free" />
                    </div>

                    <h3 class="icon-blurb__title al-uppercase">Animal Test Free</h3>

                    <div class="icon-blurb__text al-text-left rte">
                        <p>We do not conduct, commission or allow any tests on animals for our products anywhere in the world.</p>
                    </div>
                </div>
                <div id="feature-icon-blurb" class="icon-blurb al-text-center cc-fade-in-up cc-animate-init -in cc-animate-complete" data-aos="fade-in" data-aos-delay="750">
                    <div class="al-inline-block lightly-spaced-row image-wrapper">
                        <img width="150px" height="150px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/zero_plastic_inside_150x.png" alt="Zero plastic inside" />
                    </div>

                    <h3 class="icon-blurb__title al-uppercase">Zero plastic inside</h3>

                    <div class="icon-blurb__text al-text-left rte">
                        <p>We are a signatory to Zero Plastic Inside, by Plastic Soup Foundation. None of our products contain micro plastics or beads.</p>
                    </div>
                </div>
                <div id="feature-icon-blurb" class="icon-blurb al-text-center cc-fade-in-up cc-animate-init -in cc-animate-complete" data-aos="fade-in" data-aos-delay="900">
                    <div class="al-inline-block lightly-spaced-row image-wrapper">
                        <img width="150px" height="150px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/medicert_150x.png" alt="Medicert Awarded" />
                    </div>

                    <h3 class="icon-blurb__title al-uppercase">Medicert Awarded</h3>

                    <div class="icon-blurb__text al-text-left rte">
                        <p>The MediCERT® represents the expertise of specialists to test their product formulations for their intended use &amp;amp; marketing claims.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Blurb Skin Type  -->

    <!-- Article Slider  -->
    <div id="section-home-articles" class="home-articles-section section-padding">
        <div class="container">
            <div class="al-text-center">
                <div class="section-header al-inline-block">
                    <h2 class="align-center spaced-row heading">the journal</h2>
                </div>
            </div>
            <div class="container article-slider swiper" data-swiper data-options='{
          "spaceBetween": 30,
          "loop": true,
          "autoplay": {
            "delay": 5000,
            "disableOnInteraction": false
          },
          "navigation": {
            "nextEl": ".swiper-next",
            "prevEl": ".swiper-prev"
          },   
          "breakpoints": {
            "600": {
              "slidesPerView": 2
            },
            "1024": {
              "slidesPerView": 3
            },       
            "1400": {
              "slidesPerView": 3
            }
          }
        }'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="card article-card" data-aos="fade-in" data-aos-delay="150">
                            <div class="card__inner">
                                <div class="card__image-wrapper">
                                    <a class="link" href="<?php echo site_url('/shop') ?>" aria-label="Copper Peptide Serum" tabindex="0">
                                    </a>
                                    <div class="card__image card__image--primary card__image--active">
                                        <div class="rimage-outer-wrapper">
                                            <div class="rimage-wrapper">
                                                <img class="rimage__image fade-in cover lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card__info">
                                    <div class="card__info-text">
                                        <a class="link" href="<?php echo site_url('/shop') ?>" tabindex="0">
                                            <div class="card-title">Burning question this summer - Is your skin getting drier?</div>
                                            <div class="card-subtitle">So many of you have reached out to us recently about your skin feeling increasingly dry in the last few weeks. You are not alone. Dry skin in summe...</div>
                                        </a>
                                        <div class="card__btn">
                                            <a href="<?php echo site_url('/shop') ?>" class="button button--clear" tabindex="0">
                                                Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card article-card" data-aos="fade-in" data-aos-delay="300">
                            <div class="card__inner">
                                <div class="card__image-wrapper">
                                    <a class="link" href="<?php echo site_url('/shop') ?>" aria-label="Copper Peptide Serum" tabindex="0">
                                    </a>
                                    <div class="card__image card__image--primary card__image--active">
                                        <div class="rimage-outer-wrapper">
                                            <div class="rimage-wrapper">
                                                <img class="rimage__image fade-in cover lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card__info">
                                    <div class="card__info-text">
                                        <a class="link" href="<?php echo site_url('/shop') ?>" tabindex="0">
                                            <div class="card-title">How to treat Melasma at home?</div>
                                            <div class="card-subtitle">In this article, we will explore the causes of melasma, the available treatments, and how our product can help.</div>
                                        </a>
                                        <div class="card__btn">
                                            <a href="<?php echo site_url('/shop') ?>" class="button button--clear" tabindex="0">
                                                Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card article-card" data-aos="fade-in" data-aos-delay="450">
                            <div class="card__inner">
                                <div class="card__image-wrapper">
                                    <a class="link" href="<?php echo site_url('/shop') ?>" aria-label="Copper Peptide Serum" tabindex="0">
                                    </a>
                                    <div class="card__image card__image--primary card__image--active">
                                        <div class="rimage-outer-wrapper">
                                            <div class="rimage-wrapper">
                                                <img class="rimage__image fade-in cover lazyautosizes lazyloaded" alt="Copper Peptide Serum - AMINU" loading="lazy" src="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card__info">
                                    <div class="card__info-text">
                                        <a class="link" href="<?php echo site_url('/shop') ?>" tabindex="0">
                                            <div class="card-title">Is Body Care The Next Skin Care?</div>
                                            <div class="card-subtitle">Ria Bhatia, beauty columnist, believes so. Here’s why. The beauty industry has seen a metamorphosis of sorts lately. Blame the pandemic or simply ...</div>
                                        </a>
                                        <div class="card__btn">
                                            <a href="<?php echo site_url('/shop') ?>" class="button button--clear" tabindex="0">
                                                Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- / Article Slider  -->

    <!-- Marquee Home Bottom  -->
    <section class="feature-section-infinite_slider home-section feature-marquee feature-marquee--3 feature-marquee__bg-pale">
        <div class="bundle-callout__marquee">
            <div class="icon-marquee">
                <div class="icon-marquee__marquee" data-icon-marquee="">
                    <div class="icon-marquee__marquee-inner">
                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Rare_7025811b-1a03-4464-90d8-daf0b08dd36e_50x.png" alt="" />

                            <span class="marquee__title">You are Rare</span>
                        </div>
                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Untitled_design_40_a2cfdfaa-639d-4563-87a4-50c63ad914be_50x.png" alt="" />

                            <span class="marquee__title">You are Beautiful</span>
                        </div>
                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Untitled_design_41_412b129b-7d08-4425-bdf1-f82af83c6009_50x.png" alt="" />

                            <span class="marquee__title">You are Cared</span>
                        </div>
                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Untitled_design_39_2e85f907-3674-4843-9f9a-b24ce7f87dfb_50x.png" alt="" />

                            <span class="marquee__title">You are Heard</span>
                        </div>
                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Untitled_design_39_e449539f-35ad-4a45-b14b-8b0759cd0156_50x.png" alt="" />

                            <span class="marquee__title">You are Loved</span>
                        </div>
                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Untitled_design_40_faa56ce2-ec11-4bc8-942b-58e28f118d2d_50x.png" alt="" />

                            <span class="marquee__title">You are Now</span>
                        </div>
                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Untitled_design_39_d9be436a-d2fa-4fa5-91f8-f6a073e24f13_50x.png" alt="" />

                            <span class="marquee__title">You are Precious</span>
                        </div>

                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Rare_7025811b-1a03-4464-90d8-daf0b08dd36e_50x.png" alt="" />

                            <span class="marquee__title">You are Rare</span>
                        </div>

                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Untitled_design_40_a2cfdfaa-639d-4563-87a4-50c63ad914be_50x.png" alt="" />

                            <span class="marquee__title">You are Beautiful</span>
                        </div>

                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Untitled_design_41_412b129b-7d08-4425-bdf1-f82af83c6009_50x.png" alt="" />

                            <span class="marquee__title">You are Cared</span>
                        </div>

                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Untitled_design_39_2e85f907-3674-4843-9f9a-b24ce7f87dfb_50x.png" alt="" />

                            <span class="marquee__title">You are Heard</span>
                        </div>

                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Untitled_design_39_e449539f-35ad-4a45-b14b-8b0759cd0156_50x.png" alt="" />

                            <span class="marquee__title">You are Loved</span>
                        </div>

                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Untitled_design_40_faa56ce2-ec11-4bc8-942b-58e28f118d2d_50x.png" alt="" />

                            <span class="marquee__title">You are Now</span>
                        </div>

                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Untitled_design_39_d9be436a-d2fa-4fa5-91f8-f6a073e24f13_50x.png" alt="" />

                            <span class="marquee__title">You are Precious</span>
                        </div>

                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Rare_7025811b-1a03-4464-90d8-daf0b08dd36e_50x.png" alt="" />

                            <span class="marquee__title">You are Rare</span>
                        </div>

                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Untitled_design_40_a2cfdfaa-639d-4563-87a4-50c63ad914be_50x.png" alt="" />

                            <span class="marquee__title">You are Beautiful</span>
                        </div>

                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Untitled_design_41_412b129b-7d08-4425-bdf1-f82af83c6009_50x.png" alt="" />

                            <span class="marquee__title">You are Cared</span>
                        </div>

                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Untitled_design_39_2e85f907-3674-4843-9f9a-b24ce7f87dfb_50x.png" alt="" />

                            <span class="marquee__title">You are Heard</span>
                        </div>

                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Untitled_design_39_e449539f-35ad-4a45-b14b-8b0759cd0156_50x.png" alt="" />

                            <span class="marquee__title">You are Loved</span>
                        </div>

                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Untitled_design_40_faa56ce2-ec11-4bc8-942b-58e28f118d2d_50x.png" alt="" />

                            <span class="marquee__title">You are Now</span>
                        </div>

                        <div class="icon-marquee__icon features-icon" data-icon>
                            <img width="50px" height="50px" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Untitled_design_39_d9be436a-d2fa-4fa5-91f8-f6a073e24f13_50x.png" alt="" />

                            <span class="marquee__title">You are Precious</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Marquee Home Bottom  -->

    <!-- Testimonial Slider  -->
    <div class="home-testimonal-section section-padding">
        <div class="container cc-fade-in-up cc-animate-init -in cc-animate-complete" data-aos="fade-in" -delay="0.2s">
            <div class="testimonial-list testimonial-list--no-image testimonial-list--without-images" data-testimonial-count="6" data-autoplay="true" data-autoplay-speed="5000">
                <div class="testimonial-list__inner swiper" data-swiper data-options='{
              "slidesPerView": 1,
              "spaceBetween": 32,
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              }
            }'>
                    <div class="swiper-wrapper">
                        <div class="testimonial testimonial-6 swiper-slide" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 1200px">
                            <div class="testimonial__column testimonial__column--text">
                                <img width="200px" height="200px" class="logo_img" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Vogue_200x.png" alt="" loading="lazy" />

                                <div class="testimonial__content al-relative">
                                    <img class="al-absolute top-left-quote" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/1.png" width="41px" height="29px" alt="quote" loading="lazy" />
                                    <div class="testimonial__text">
                                        <blockquote class="testimonial__blockquote heading-font">
                                            If its&#x27; spicy-citrusy aroma doesn&#x27;t get you hooked, the after-glow most definitely will. This beauty bottle is a must-have for firm, softer and brighter skin.
                                        </blockquote>
                                    </div>
                                    <img class="al-absolute bottom-right-quote" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/222e726b3c8486e0ba0d167e814a3ea1.png" alt="Quote" width="41px" height="29px" loading="lazy" />
                                </div>
                            </div>
                        </div>
                        <div class="testimonial testimonial-6 swiper-slide" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 1200px">
                            <div class="testimonial__column testimonial__column--text">
                                <img width="200px" height="200px" class="logo_img" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Grazia_200x.png" alt="" loading="lazy" />

                                <div class="testimonial__content al-relative">
                                    <img class="al-absolute top-left-quote" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/1.png" width="41px" height="29px" alt="quote" loading="lazy" />
                                    <div class="testimonial__text">
                                        <blockquote class="testimonial__blockquote heading-font">
                                            Aminu’s Longevity Serum is your best bet if you’re not into extensive routines. This serum could be an excellent addition to your skincare stash to protect &amp;amp; nourish your skin.
                                        </blockquote>
                                    </div>
                                    <img class="al-absolute bottom-right-quote" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/222e726b3c8486e0ba0d167e814a3ea1.png" alt="Quote" width="41px" height="29px" loading="lazy" />
                                </div>
                            </div>
                        </div>
                        <div class="testimonial testimonial-6 swiper-slide" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 1200px">
                            <div class="testimonial__column testimonial__column--text">
                                <img width="200px" height="200px" class="logo_img" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Business_traveller_200x.png" alt="" loading="lazy" />

                                <div class="testimonial__content al-relative">
                                    <img class="al-absolute top-left-quote" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/1.png" width="41px" height="29px" alt="quote" loading="lazy" />
                                    <div class="testimonial__text">
                                        <blockquote class="testimonial__blockquote heading-font">
                                            The Marine Clay mask by Aminu is must-try for the season.
                                        </blockquote>
                                    </div>
                                    <img class="al-absolute bottom-right-quote" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/222e726b3c8486e0ba0d167e814a3ea1.png" alt="Quote" width="41px" height="29px" loading="lazy" />
                                </div>
                            </div>
                        </div>
                        <div class="testimonial testimonial-6 swiper-slide" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 1200px">
                            <div class="testimonial__column testimonial__column--text">
                                <img width="200px" height="200px" class="logo_img" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Elle_200x.png" alt="" loading="lazy" />

                                <div class="testimonial__content al-relative">
                                    <img class="al-absolute top-left-quote" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/1.png" width="41px" height="29px" alt="quote" loading="lazy" />
                                    <div class="testimonial__text">
                                        <blockquote class="testimonial__blockquote heading-font">
                                            The Copper Peptide serum helps in refining pores and enhancing skin barrier function, elasticity and skin integrity.
                                        </blockquote>
                                    </div>
                                    <img class="al-absolute bottom-right-quote" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/222e726b3c8486e0ba0d167e814a3ea1.png" alt="Quote" width="41px" height="29px" loading="lazy" />
                                </div>
                            </div>
                        </div>
                        <div class="testimonial testimonial-6 swiper-slide" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 1200px">
                            <div class="testimonial__column testimonial__column--text">
                                <img width="200px" height="200px" class="logo_img" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Femina_200x.png" alt="" loading="lazy" />

                                <div class="testimonial__content al-relative">
                                    <img class="al-absolute top-left-quote" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/1.png" width="41px" height="29px" alt="quote" loading="lazy" />
                                    <div class="testimonial__text">
                                        <blockquote class="testimonial__blockquote heading-font">
                                            Looking for a cleanser that doesn’t strip off the moisture but replenishes it instead? Try Aminu&#x27;s Cream Cleanser
                                        </blockquote>
                                    </div>
                                    <img class="al-absolute bottom-right-quote" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/222e726b3c8486e0ba0d167e814a3ea1.png" alt="Quote" width="41px" height="29px" loading="lazy" />
                                </div>
                            </div>
                        </div>
                        <div class="testimonial testimonial-6 swiper-slide" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 1200px">
                            <div class="testimonial__column testimonial__column--text">
                                <img width="200px" height="200px" class="logo_img" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Lifestyle_asia_200x.png" alt="" loading="lazy" />

                                <div class="testimonial__content al-relative">
                                    <img class="al-absolute top-left-quote" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/1.png" width="41px" height="29px" alt="quote" loading="lazy" />
                                    <div class="testimonial__text">
                                        <blockquote class="testimonial__blockquote heading-font">
                                            This high-performance, luxe label targets inflammations, environmental damage, uneven tones, spots, premature ageing concerns, their main focus is preventive skincare.
                                        </blockquote>
                                    </div>
                                    <img class="al-absolute bottom-right-quote" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/222e726b3c8486e0ba0d167e814a3ea1.png" alt="Quote" width="41px" height="29px" loading="lazy" />
                                </div>
                            </div>
                        </div>
                        <div class="testimonial testimonial-6 swiper-slide" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 1200px">
                            <div class="testimonial__column testimonial__column--text">
                                <img width="200px" height="200px" class="logo_img" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/Elle_200x.png" alt="" loading="lazy" />

                                <div class="testimonial__content al-relative">
                                    <img class="al-absolute top-left-quote" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/1.png" width="41px" height="29px" alt="quote" loading="lazy" />
                                    <div class="testimonial__text">
                                        <blockquote class="testimonial__blockquote heading-font">
                                            The Copper Peptide serum helps in refining pores and enhancing skin barrier function, elasticity and skin integrity.
                                        </blockquote>
                                    </div>
                                    <img class="al-absolute bottom-right-quote" src="<?php bloginfo('template_directory') ?>/assets/assets/images/homepage/222e726b3c8486e0ba0d167e814a3ea1.png" alt="Quote" width="41px" height="29px" loading="lazy" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add navigation buttons (optional) -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Testimonial Slider  -->

    <!-- Instagram Feed  -->
    <div class="home-instagram-section">
        <div class="instagram container">
            <div class="instagram__row columns">
                <div class="instagram__text column-12 column-md-6  section-padding">
                    <div class="half_wth">
                        <div class="instagram__headings">
                            <p class="follow-us"><span class="strapline">Follow us</span></p>
                            <h3 class="heading h1 al-uppercase">Meet our community</h3>
                            <div class="insta-text">
                                <p>Join the #AminuLife and share your voice with us</p>
                            </div>
                        </div>
                        <div class="instagram__info">
                            <div class="instagram__icon">
                                <!--           <img src="//cdn.shopify.com/shopifycloud/shopify/assets/no-image-50-3d8cc48bd078edcd544c8d60f929ed2d8800a3fc52e0f602e84b1767e392bfcd_50x.gif"/> -->
                                <svg width="48px" height="48px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>Instagram</title>
                                    <defs></defs>
                                    <g stroke="none" stroke-width="1" fill="#000" fill-rule="evenodd">
                                        <g transform="translate(-642.000000, -295.000000)" fill="#000">
                                            <path d="M666.000048,295 C659.481991,295 658.664686,295.027628 656.104831,295.144427 C653.550311,295.260939 651.805665,295.666687 650.279088,296.260017 C648.700876,296.873258 647.362454,297.693897 646.028128,299.028128 C644.693897,300.362454 643.873258,301.700876 643.260017,303.279088 C642.666687,304.805665 642.260939,306.550311 642.144427,309.104831 C642.027628,311.664686 642,312.481991 642,319.000048 C642,325.518009 642.027628,326.335314 642.144427,328.895169 C642.260939,331.449689 642.666687,333.194335 643.260017,334.720912 C643.873258,336.299124 644.693897,337.637546 646.028128,338.971872 C647.362454,340.306103 648.700876,341.126742 650.279088,341.740079 C651.805665,342.333313 653.550311,342.739061 656.104831,342.855573 C658.664686,342.972372 659.481991,343 666.000048,343 C672.518009,343 673.335314,342.972372 675.895169,342.855573 C678.449689,342.739061 680.194335,342.333313 681.720912,341.740079 C683.299124,341.126742 684.637546,340.306103 685.971872,338.971872 C687.306103,337.637546 688.126742,336.299124 688.740079,334.720912 C689.333313,333.194335 689.739061,331.449689 689.855573,328.895169 C689.972372,326.335314 690,325.518009 690,319.000048 C690,312.481991 689.972372,311.664686 689.855573,309.104831 C689.739061,306.550311 689.333313,304.805665 688.740079,303.279088 C688.126742,301.700876 687.306103,300.362454 685.971872,299.028128 C684.637546,297.693897 683.299124,296.873258 681.720912,296.260017 C680.194335,295.666687 678.449689,295.260939 675.895169,295.144427 C673.335314,295.027628 672.518009,295 666.000048,295 Z M666.000048,299.324317 C672.40826,299.324317 673.167356,299.348801 675.69806,299.464266 C678.038036,299.570966 679.308818,299.961946 680.154513,300.290621 C681.274771,300.725997 682.074262,301.246066 682.91405,302.08595 C683.753934,302.925738 684.274003,303.725229 684.709379,304.845487 C685.038054,305.691182 685.429034,306.961964 685.535734,309.30194 C685.651199,311.832644 685.675683,312.59174 685.675683,319.000048 C685.675683,325.40826 685.651199,326.167356 685.535734,328.69806 C685.429034,331.038036 685.038054,332.308818 684.709379,333.154513 C684.274003,334.274771 683.753934,335.074262 682.91405,335.91405 C682.074262,336.753934 681.274771,337.274003 680.154513,337.709379 C679.308818,338.038054 678.038036,338.429034 675.69806,338.535734 C673.167737,338.651199 672.408736,338.675683 666.000048,338.675683 C659.591264,338.675683 658.832358,338.651199 656.30194,338.535734 C653.961964,338.429034 652.691182,338.038054 651.845487,337.709379 C650.725229,337.274003 649.925738,336.753934 649.08595,335.91405 C648.246161,335.074262 647.725997,334.274771 647.290621,333.154513 C646.961946,332.308818 646.570966,331.038036 646.464266,328.69806 C646.348801,326.167356 646.324317,325.40826 646.324317,319.000048 C646.324317,312.59174 646.348801,311.832644 646.464266,309.30194 C646.570966,306.961964 646.961946,305.691182 647.290621,304.845487 C647.725997,303.725229 648.246066,302.925738 649.08595,302.08595 C649.925738,301.246066 650.725229,300.725997 651.845487,300.290621 C652.691182,299.961946 653.961964,299.570966 656.30194,299.464266 C658.832644,299.348801 659.59174,299.324317 666.000048,299.324317 Z M666.000048,306.675683 C659.193424,306.675683 653.675683,312.193424 653.675683,319.000048 C653.675683,325.806576 659.193424,331.324317 666.000048,331.324317 C672.806576,331.324317 678.324317,325.806576 678.324317,319.000048 C678.324317,312.193424 672.806576,306.675683 666.000048,306.675683 Z M666.000048,327 C661.581701,327 658,323.418299 658,319.000048 C658,314.581701 661.581701,311 666.000048,311 C670.418299,311 674,314.581701 674,319.000048 C674,323.418299 670.418299,327 666.000048,327 Z M681.691284,306.188768 C681.691284,307.779365 680.401829,309.068724 678.811232,309.068724 C677.22073,309.068724 675.931276,307.779365 675.931276,306.188768 C675.931276,304.598171 677.22073,303.308716 678.811232,303.308716 C680.401829,303.308716 681.691284,304.598171 681.691284,306.188768 Z"></path>
                                        </g>
                                    </g>
                                </svg>
                                <p>
                                    INSTAGRAM<br /><a href="https://www.instagram.com/aminu.life/" title="https://www.instagram.com/aminu.life/"><strong>@aminu.life</strong></a>
                                </p>
                            </div>

                            <div class="instagram__newsletter newsletter">
                                <p class="newsletter-title">
                                    Let’s be friends, over the internet!!
                                </p>
                                <div class="signup-form al-relative">
                                    <form method="post" action="/contact#footer_newsletter_signup" id="footer_newsletter_signup" accept-charset="UTF-8" class="contact-form">
                                        <input type="hidden" name="form_type" value="customer" /><input type="hidden" name="utf8" value="✓" />

                                        <input type="hidden" name="contact[tags]" value="prospect,newsletter" />
                                        <p>
                                            <input type="email" placeholder="Email ID Please. Won’t spam you" class="signup-form__email" value="" name="contact[email]" aria-label="Email" required="" />
                                            <button class="al-absolute btn btn-- signup-form__button" type="submit"></button>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="instagram__content column-12 column-md-6">
                    <div id="instagram-feed"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Instagram Feed  -->
</main>

<?php get_footer(); ?>