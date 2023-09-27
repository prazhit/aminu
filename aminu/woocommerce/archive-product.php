<?php
get_header();
?>


<main id="content" class="page-content" role="main">
    <!-- Header  -->
    <div class="archive-header__wrapper">
        <div class="container">
            <div class="archive-header product-archive" data-ajax-container="" data-ajax-scroll-to="">
                <div class="archive-header__left">
                    <?php if (have_posts()) : ?>
                        <a href="#" class="toggle-btn archive-header__item toggle-btn--revealed-desktop" data-toggle-filters="">
                            <span class="button-icon"><svg width="23" height="19" viewBox="0 0 20 20" stroke-width="1.25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="1" y1="6" x2="19" y2="6" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></line>
                                    <line x1="1" y1="14" x2="19" y2="14" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></line>
                                    <circle cx="7" cy="6" r="3" fill="none" stroke="currentColor"></circle>
                                    <circle cx="13" cy="14" r="3" fill="none" stroke="currentColor"></circle>
                                </svg></span>
                            <span>Filter</span>

                            <span class="toggle-btn__chevron"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <title>Right</title>
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg></span>
                        </a>
                    <?php endif; ?>
                </div>
                <h1 class="pagetitle h3-style al-text-center">
                    <?php if (is_product_category()) {
                        echo single_term_title();
                    } else {
                        echo "Products";
                    } ?>
                </h1>

                <?php if (have_posts()) : ?>
                    <div class="archive-header__right">
                        <span class="archive-header__item desk-only al-text-right">
                            <div class="select-dropdown select-dropdown--right-aligned">
                                <div class="visually-hidden" id="sort-dropdown-heading">
                                    Sort by
                                </div>
                                <button class="select-dropdown__button button--select" aria-expanded="false" aria-controls="sort-dropdown-options" aria-describedby="sort-dropdown-heading">
                                    <span class="select-dropdown__button-text">Alphabetically, A-Z
                                    </span>
                                    <span class="select-dropdown__button-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                            <title>Down</title>
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg></span>
                                </button>
                                <div class="select-dropdown__options" id="sort-dropdown-options">
                                    <a href="?sort_by=manual" class="select-dropdown__link">Featured</a><a href="?sort_by=best-selling" class="select-dropdown__link">Best selling</a><a href="?sort_by=title-ascending" class="select-dropdown__link select-dropdown__link--active">Alphabetically, A-Z</a><a href="?sort_by=title-descending" class="select-dropdown__link">Alphabetically, Z-A</a><a href="?sort_by=price-ascending" class="select-dropdown__link">Price, low to high</a><a href="?sort_by=price-descending" class="select-dropdown__link">Price, high to low</a><a href="?sort_by=created-ascending" class="select-dropdown__link">Date, old to new</a><a href="?sort_by=created-descending" class="select-dropdown__link">Date, new to old</a>
                                </div>
                            </div>
                        </span>

                        <span class="archive-header__item mobile-only">
                            <div class="layout-switchers">
                                <a class="layout-switch layout-switch--two-columns" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                        <polyline points="2 2 10 2 10 10 2 10 2 2"></polyline>
                                        <polyline points="14 2 22 2 22 10 14 10 14 2"></polyline>
                                        <polyline points="14 14 22 14 22 22 14 22 14 14"></polyline>
                                        <polyline points="2 14 10 14 10 22 2 22 2 14"></polyline>
                                    </svg></a>
                                <a class="layout-switch layout-switch--one-column layout-switch--active" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                        <polyline points="2 2 22 2 22 22 2 22 2 2"></polyline>
                                    </svg></a>
                            </div>
                        </span>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- /Header  -->
    <!-- Content  -->
    <div class="b container">
        <div class="filter-container filter-container--side filter-container--mobile-initialised filter-container--show-filters-desktop active">
            <div class="product-filter">
                <div class="filters">
                    <div class="filters__inner sticky-content-container">
                        <div class="filters__heading">
                            <h4 class="filters__heading-text">Filter</h4>
                            <a class="filters__close" href="#" data-toggle-filters=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg></a>
                        </div>
                        <form id="filterForm">
                            <div class="filter-group filter-group--availability">
                                <div class="filter-toggle filter-toggle--inline">
                                    <span class="filter-toggle__label">Out of stock</span>
                                    <div class="filter-toggle__options">
                                        <label class="filter-toggle__input-label">
                                            <input class="filter-toggle__input" id="availability-show" type="radio" name="filter[availability]" value="" checked="" />
                                            <span class="filter-toggle__input-label-text">Show</span>
                                        </label>
                                        <label class="filter-toggle__input-label">
                                            <input class="filter-toggle__input" id="availability-hide" type="radio" name="filter[availability]" value="1" />
                                            <span class="filter-toggle__input-label-text">Hide</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-group">
                                <a href="#" class="filter-group__heading accordion-item__title" aria-expanded="true" data-toggle-target=".filter-group--3">
                                    <div class="filter-group__heading__text">Price</div>
                                    <span class="filter-group__heading__indicator"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                            <title>Down</title>
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg></span>
                                </a>
                                <div class="filter-group__items filter-group--3 toggle-target">
                                    <div class="toggle-container">
                                        <div class="filter-price-range cc-initialized">
                                            <div class="filter-price-range__input-row">
                                                <div class="filter-price-range__input-container">
                                                    <span class="filter-price-range__input-currency-symbol">₹</span>
                                                    <input type="number" min="0" max="9900" oninput="validity.valid||(value='0');" id="min_price" class="price-range-field filter-price-range__input" />
                                                </div>
                                                <div class="filter-price-range__input-container">
                                                    <span class="filter-price-range__input-currency-symbol">₹</span>
                                                    <input type="number" min="0" max="10000" oninput="validity.valid||(value='10000');" id="max_price" class="price-range-field filter-price-range__input" />
                                                </div>
                                            </div>
                                            <div id="slider-range" class="price-filter-range" name="rangeInput"></div>
                                            <button class="price-range-search" id="price-range-submit" style="display: none;">
                                                Search
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-group filter-group--layout-two-column">
                                <a href="#" class="filter-group__heading accordion-item__title" aria-expanded="true" data-toggle-target=".filter-group--4">
                                    <div class="filter-group__heading__text">Product type</div>
                                    <span class="filter-group__heading__indicator"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                            <title>Down</title>
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg></span>
                                </a>
                                <div class="filter-group__items filter-group--4 toggle-target">
                                    <div class="toggle-container">
                                        <label class="filter-group__item" data-tag="cleanse-wash-gels">
                                            <input class="filter-group__checkbox" id="Filter-filter.p.product_type-cleanse-wash-amp-gels" type="checkbox" name="filter.p.product_type" value="Cleanse - Wash &amp; Gels" />

                                            <span class="filter-group__item-text">Cleanse - Wash &amp; Gels</span> </label><label class="filter-group__item" data-tag="exfoliate-scrubs-peels">
                                            <input class="filter-group__checkbox" id="Filter-filter.p.product_type-exfoliate-scrubs-amp-peels" type="checkbox" name="filter.p.product_type" value="Exfoliate - Scrubs &amp; Peels" />

                                            <span class="filter-group__item-text">Exfoliate - Scrubs &amp; Peels</span> </label><label class="filter-group__item" data-tag="masks-clay-mud">
                                            <input class="filter-group__checkbox" id="Filter-filter.p.product_type-masks-clay-amp-mud" type="checkbox" name="filter.p.product_type" value="Masks - Clay &amp; Mud" />

                                            <span class="filter-group__item-text">Masks - Clay &amp; Mud</span> </label><label class="filter-group__item" data-tag="moisturize-creams-oils">
                                            <input class="filter-group__checkbox" id="Filter-filter.p.product_type-moisturize-creams-amp-oils" type="checkbox" name="filter.p.product_type" value="Moisturize - Creams &amp; Oils" />

                                            <span class="filter-group__item-text">Moisturize - Creams &amp; Oils</span> </label><label class="filter-group__item" data-tag="treate-serums-concentrates">
                                            <input class="filter-group__checkbox" id="Filter-filter.p.product_type-treate-serums-amp-concentrates" type="checkbox" name="filter.p.product_type" value="Treate - Serums &amp; Concentrates" />

                                            <span class="filter-group__item-text">Treate - Serums &amp; Concentrates</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-group filter-group--layout-two-column">
                                <a href="#" class="filter-group__heading accordion-item__title" aria-expanded="true" data-toggle-target=".filter-group--5">
                                    <div class="filter-group__heading__text">Skin Concerns</div>
                                    <span class="filter-group__heading__indicator"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                            <title>Down</title>
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg></span>
                                </a>
                                <div class="filter-group__items filter-group--5 toggle-target">
                                    <div class="toggle-container">
                                        <label class="filter-group__item" data-tag="blackheads-and-rough-texture">
                                            <input class="filter-group__checkbox" id="Filter-filter.p.m.custom.skin_concerns_-blackheads-and-rough-texture" type="checkbox" name="filter.p.m.custom.skin_concerns_" value="Blackheads and Rough texture" />

                                            <span class="filter-group__item-text">Blackheads and Rough texture</span> </label><label class="filter-group__item" data-tag="body-tan-and-dullness">
                                            <input class="filter-group__checkbox" id="Filter-filter.p.m.custom.skin_concerns_-body-tan-and-dullness" type="checkbox" name="filter.p.m.custom.skin_concerns_" value="Body Tan and Dullness  " />

                                            <span class="filter-group__item-text">Body Tan and Dullness
                                            </span> </label><label class="filter-group__item" data-tag="breakouts-and-acne-prone">
                                            <input class="filter-group__checkbox" id="Filter-filter.p.m.custom.skin_concerns_-breakouts-and-acne-prone" type="checkbox" name="filter.p.m.custom.skin_concerns_" value="Breakouts and Acne-Prone " />

                                            <span class="filter-group__item-text">Breakouts and Acne-Prone
                                            </span> </label><label class="filter-group__item" data-tag="dryness-and-tired-body">
                                            <input class="filter-group__checkbox" id="Filter-filter.p.m.custom.skin_concerns_-dryness-and-tired-body" type="checkbox" name="filter.p.m.custom.skin_concerns_" value="Dryness and Tired Body" />

                                            <span class="filter-group__item-text">Dryness and Tired Body</span> </label><label class="filter-group__item" data-tag="dullness-and-dehydration">
                                            <input class="filter-group__checkbox" id="Filter-filter.p.m.custom.skin_concerns_-dullness-and-dehydration" type="checkbox" name="filter.p.m.custom.skin_concerns_" value="Dullness and Dehydration" />

                                            <span class="filter-group__item-text">Dullness and Dehydration</span> </label><label class="filter-group__item" data-tag="firmness-lines-and-tired-skin">
                                            <input class="filter-group__checkbox" id="Filter-filter.p.m.custom.skin_concerns_-firmness-lines-and-tired-skin" type="checkbox" name="filter.p.m.custom.skin_concerns_" value="Firmness, Lines and Tired Skin" />

                                            <span class="filter-group__item-text">Firmness, Lines and Tired Skin</span> </label><label class="filter-group__item" data-tag="pores-and-congestion">
                                            <input class="filter-group__checkbox" id="Filter-filter.p.m.custom.skin_concerns_-pores-and-congestion" type="checkbox" name="filter.p.m.custom.skin_concerns_" value="Pores and Congestion" />

                                            <span class="filter-group__item-text">Pores and Congestion</span> </label><label class="filter-group__item" data-tag="protection-and-maintenance">
                                            <input class="filter-group__checkbox" id="Filter-filter.p.m.custom.skin_concerns_-protection-and-maintenance" type="checkbox" name="filter.p.m.custom.skin_concerns_" value="Protection and Maintenance" />

                                            <span class="filter-group__item-text">Protection and Maintenance</span> </label><label class="filter-group__item" data-tag="sensitised-and-redness-prone">
                                            <input class="filter-group__checkbox" id="Filter-filter.p.m.custom.skin_concerns_-sensitised-and-redness-prone" type="checkbox" name="filter.p.m.custom.skin_concerns_" value="Sensitised and Redness prone" />

                                            <span class="filter-group__item-text">Sensitised and Redness prone</span> </label><label class="filter-group__item" data-tag="uneven-tone-and-spots">
                                            <input class="filter-group__checkbox" id="Filter-filter.p.m.custom.skin_concerns_-uneven-tone-and-spots" type="checkbox" name="filter.p.m.custom.skin_concerns_" value="Uneven Tone and Spots" />

                                            <span class="filter-group__item-text">Uneven Tone and Spots</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-group filter-group--layout-two-column">
                                <a href="#" class="filter-group__heading accordion-item__title" aria-expanded="true" data-toggle-target=".filter-group--6">
                                    <div class="filter-group__heading__text">Skin Type</div>
                                    <span class="filter-group__heading__indicator"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                            <title>Down</title>
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg></span>
                                </a>
                                <div class="filter-group__items filter-group--6 toggle-target">
                                    <div class="toggle-container">
                                        <label class="filter-group__item" data-tag="combination-skin">
                                            <input class="filter-group__checkbox" id="Filter-filter.p.m.custom.skin_type_moods-combination-skin" type="checkbox" name="filter.p.m.custom.skin_type_moods" value="Combination Skin" />

                                            <span class="filter-group__item-text">Combination Skin</span> </label><label class="filter-group__item" data-tag="dry-skin">
                                            <input class="filter-group__checkbox" id="Filter-filter.p.m.custom.skin_type_moods-dry-skin" type="checkbox" name="filter.p.m.custom.skin_type_moods" value="Dry Skin" />

                                            <span class="filter-group__item-text">Dry Skin</span> </label><label class="filter-group__item" data-tag="normal-skin">
                                            <input class="filter-group__checkbox" id="Filter-filter.p.m.custom.skin_type_moods-normal-skin" type="checkbox" name="filter.p.m.custom.skin_type_moods" value="Normal Skin" />

                                            <span class="filter-group__item-text">Normal Skin</span> </label><label class="filter-group__item" data-tag="oily-skin">
                                            <input class="filter-group__checkbox" id="Filter-filter.p.m.custom.skin_type_moods-oily-skin" type="checkbox" name="filter.p.m.custom.skin_type_moods" value="Oily Skin" />

                                            <span class="filter-group__item-text">Oily Skin</span> </label><label class="filter-group__item" data-tag="sensitive-skin">
                                            <input class="filter-group__checkbox" id="Filter-filter.p.m.custom.skin_type_moods-sensitive-skin" type="checkbox" name="filter.p.m.custom.skin_type_moods" value="Sensitive Skin" />

                                            <span class="filter-group__item-text">Sensitive Skin</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-group filter-group--layout-two-column">
                                <a href="#" class="filter-group__heading accordion-item__title" aria-expanded="true" data-toggle-target=".filter-group--7">
                                    <div class="filter-group__heading__text">Collections</div>
                                    <span class="filter-group__heading__indicator"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                            <title>Down</title>
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg></span>
                                </a>
                                <div class="filter-group__items filter-group--7 toggle-target">
                                    <div class="toggle-container">
                                        <label class="filter-group__item" data-tag="all-collections">
                                            <input class="filter-group__checkbox" id="Filter-filter.p.m.custom.collections-all-collections" type="checkbox" name="filter.p.m.custom.collections" value="All Collections" />

                                            <span class="filter-group__item-text">All Collections</span> </label><label class="filter-group__item" data-tag="body-care">
                                            <input class="filter-group__checkbox" id="Filter-filter.p.m.custom.collections-body-care" type="checkbox" name="filter.p.m.custom.collections" value="Body Care" />

                                            <span class="filter-group__item-text">Body Care</span> </label><label class="filter-group__item" data-tag="face-care">
                                            <input class="filter-group__checkbox" id="Filter-filter.p.m.custom.collections-face-care" type="checkbox" name="filter.p.m.custom.collections" value="Face Care" />

                                            <span class="filter-group__item-text">Face Care</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-group mobile-only">
                                <a href="#" class="filter-group__heading accordion-item__title" aria-expanded="true" data-toggle-target=".filter-group--sort">
                                    <div class="filter-group__heading__text">Sort by</div>
                                    <span class="filter-group__heading__indicator"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                            <title>Down</title>
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg></span>
                                </a>
                                <div class="filter-group__items filter-group--sort toggle-target">
                                    <div class="toggle-container">
                                        <label class="filter-group__item">
                                            <input class="filter-group__checkbox" id="Filter-Sort-manual" type="radio" name="sort_by" value="manual" />

                                            <span class="filter-group__item-text">Featured</span> </label><label class="filter-group__item">
                                            <input class="filter-group__checkbox" id="Filter-Sort-best-selling" type="radio" name="sort_by" value="best-selling" />

                                            <span class="filter-group__item-text">Best selling</span> </label><label class="filter-group__item filter-group__item--active">
                                            <input class="filter-group__checkbox" id="Filter-Sort-title-ascending" type="radio" name="sort_by" value="title-ascending" checked="" />

                                            <span class="filter-group__item-text">Alphabetically, A-Z</span> </label><label class="filter-group__item">
                                            <input class="filter-group__checkbox" id="Filter-Sort-title-descending" type="radio" name="sort_by" value="title-descending" />

                                            <span class="filter-group__item-text">Alphabetically, Z-A</span> </label><label class="filter-group__item">
                                            <input class="filter-group__checkbox" id="Filter-Sort-price-ascending" type="radio" name="sort_by" value="price-ascending" />

                                            <span class="filter-group__item-text">Price, low to high</span> </label><label class="filter-group__item">
                                            <input class="filter-group__checkbox" id="Filter-Sort-price-descending" type="radio" name="sort_by" value="price-descending" />

                                            <span class="filter-group__item-text">Price, high to low</span> </label><label class="filter-group__item">
                                            <input class="filter-group__checkbox" id="Filter-Sort-created-ascending" type="radio" name="sort_by" value="created-ascending" />

                                            <span class="filter-group__item-text">Date, old to new</span> </label><label class="filter-group__item">
                                            <input class="filter-group__checkbox" id="Filter-Sort-created-descending" type="radio" name="sort_by" value="created-descending" />

                                            <span class="filter-group__item-text">Date, new to old</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <noscript>
                                <button type="submit" class="btn">Submit</button>
                            </noscript>
                        </form>
                    </div>
                </div>
            </div>
            <?php
            $args = new wp_query([
                'post_type' => 'product',
            ]);

            if (have_posts()) :
            ?>
                <div class="product-grid">
                    <div class="al-grid al-grid-cols-1 md:al-grid-cols-3 al-gap-8 product-list product-list--per-row-3 product-list--image-shape-shortest product-list--per-row-mob-2">

                        <?php while (have_posts()) : the_post();

                            $product_id = get_the_ID();
                            $product = wc_get_product($product_id);

                            $has_variants = false;
                            $product_var = new WC_Product_Variable($product_id);
                            if ($product->is_type('variable') && $variations = $product_var->get_available_variations()) {
                                $has_variants = true;
                                $defailt_attributes = $product_var->get_default_attributes();
                                $available_attributes = $product_var->get_available_variations();
                                $first_variation_price = $available_attributes[0]['display_price'];
                            }

                        ?>

                            <div class="product-list__item">
                                <div class="card product-card" data-aos="fade-in" data-aos-delay="150">
                                    <div class="card__inner">
                                        <a style="display:block" href="<?php the_permalink(); ?>" class="card__image-wrapper">

                                            <div class="card__image card__image--primary card__image--active">
                                                <div class="rimage-outer-wrapper">
                                                    <div class="rimage-wrapper">
                                                        <img class="rimage__image fade-in cover lazyautosizes lazyloaded" alt="<?php the_title() ?> - AMINU" loading="lazy" src="<?php echo has_post_thumbnail() ? the_post_thumbnail_url('medium') : wc_placeholder_img_src('full') ?>" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card__image card__image--reveal">
                                                <?php $gallery_image_ids = $product->get_gallery_image_ids(); ?>
                                                <div class="rimage-outer-wrapper">
                                                    <div class="rimage-wrapper">
                                                        <img class="rimage__image fade-in lazyautosizes lazyloaded" alt="<?php the_title() ?> - AMINU" loading="lazy" src="<?php echo $gallery_image_ids ? wp_get_attachment_image_url($gallery_image_ids[0], 'medium') : wc_placeholder_img_src('full'); ?>" />
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <div class="card__info">
                                            <div class="card__info-text">
                                                <a class="link" href="<?php the_permalink(); ?>" tabindex="0">
                                                    <div class="vendor"><?php the_field('vendor') ?></div>

                                                    <div class="card-title"><?php the_title() ?></div>
                                                    <div class="card-subtitle">
                                                        <?php if (has_excerpt()) {
                                                            echo get_the_excerpt();
                                                        } else {
                                                            echo wp_trim_words(get_the_content(), '10', '...');
                                                        } ?>
                                                    </div>
                                                    <div class="price-with-review">
                                                        <div class="price">
                                                            <span class="price__item price__amount theme-money">
                                                                <?php if ($has_variants) {
                                                                    echo wc_price($first_variation_price);
                                                                } else {
                                                                    echo wc_price($product->get_price());
                                                                } ?>
                                                            </span>
                                                        </div>
                                                        <?php if ($has_variants) : ?>
                                                            <div class="option-size">
                                                                <?php $i = 1;
                                                                foreach ($available_attributes as $variation_value) {
                                                                    foreach ($variation_value['attributes'] as $key => $attribute_value) :

                                                                        if ($attribute_value) {

                                                                ?>
                                                                            <p class="variant-name"><?php echo $attribute_value; ?></p>


                                                                <?php
                                                                            $i++;
                                                                            if ($i > 4) break 2;
                                                                        };
                                                                    endforeach;
                                                                } ?>


                                                            </div>
                                                        <?php endif; ?>

                                                    </div>

                                                    <?php $star_rating = $product->get_average_rating(); ?>
                                                    <div class="product-rating">
                                                        <div class="product-rating-badge" data-average-rating="4.56" data-number-of-reviews="54" data-number-of-questions="0">
                                                            <span class="product-rating-badge__stars" data-score="4.56" tabindex="0" aria-label="4.56 stars" role="button">
                                                                <i class="ri-star-s-line"></i><i class="ri-star-s-line"></i><i class="ri-star-s-line"></i><i class="ri-star-s-line"></i><i class="ri-star-s-line"></i>
                                                            </span>
                                                            <span class="product-rating-badge__text">
                                                                <?php if ($star_rating) {
                                                                } else {
                                                                    echo "No review yet";
                                                                } ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </a>
                                                <div class="card__btn">
                                                    <a href="<?php the_permalink(); ?>" class="button button--large" tabindex="0">
                                                        View Product</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?>
                    </div>
                </div>
            <?php else : ?>

                <h3 style="text-align: center;width:100%;margin-top:60px;">No products found in the category.</h3>

            <?php endif;
            wp_reset_query(); ?>
        </div>
    </div>
    <!-- /Content  -->
    <section class="feature-section-infinite_slider archive-section feature-marquee feature-marquee--3 feature-marquee__bg-white">
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
    <div class="product-chatnow cc-animate-init -in cc-animate-complete section-padding">
        <div class="container">
            <div class="align-center spaced-column al-text-center">
                <h2 class="majortitle in-content al-mb-8">
                    Confused? Chat with our Skin Experts!
                </h2>

                <div class="lightly-spaced-row-above">
                    <a class="btn btn--primary" href="https://api.whatsapp.com/send?phone=918591110603&amp;text=Hello,%20I%20would%20like%20to%20talk%20to%20your%20skin%20expert!">CHAT NOW</a>
                </div>
            </div>
        </div>
    </div>
</main>


<?php
get_footer();
?>