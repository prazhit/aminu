<?php get_header() ?>
<main id="content" class="page-content" role="main">
  <!-- Ingredient Banner  -->
  <div class="ingredient-banner" data-section-type="video">
    <div class="ingredient-banner__inner">
      <div class="ingredient-banner__columns al-grid al-grid-cols-1 md:al-grid-cols-5">
        <div class="ingredient-banner__content al-col-span-5 md:al-col-span-2 al-flex al-items-center">
          <div class="ingredient-text">
            <h4 class="ff-runwild ingredient-text__strapline">
              the treasure room
            </h4>
            <h1 class="ingredient-text__title">
              Our<br />
              Ingredients
            </h1>
            <div class="ingredient-text__content">
              <p>full of nutrients, full of efficacy.</p>
            </div>
          </div>
        </div>
        <div class="ingredient-banner__image al-col-span-5 md:al-col-span-3">
          <div class="image-banner">
            <img src="<?php echo get_template_directory_uri() ?>/assets/assets/images/our-ingredients/ingredient1.jpg" alt="Ingredients Banner" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="ingredient-details" class="ingredient-details section-padding">
    <div class="container">
      <div class="inside-row">
        <div class="box-content">
          <p>
            We put as many ingredients in one bottle as much it takes to heal the
            concern holistically and help improve overall health of the skin. We
            believe that one bottle should solve your primary &amp; secondary
            concerns and help keep your skin healthy and nourished. Thus can keep
            you regime minimalist and quick. Every day is different for your skin
            like the rest of our physical, mental and emotional self. Our
            self-care regime should reflect this natural flux.
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- /Ingredient Banner  -->
  <!-- Ingredient Infograph  -->
  <div class="ingredients-infograph container container__max container__max--no-space">
    <div class="panel">
      <div class="ingredients desk-only">
        <div class="columns">
          <div class="ingredient column-12 column-md-4">
            <div class="ingredient__inner">
              <div class="ingredient__text">
                <div class="ingredient__data">80+</div>
                <h4 class="ingredient__title">HIGH PERFORMANCE INGREDIENTS</h4>
                <div class="ingredient__content">
                  <p>We focus on multi-targeted solutions for your skin. Hence our products are filled with a unique blend of active nutrients. Experience the care, peptides, vitamins, botanical extracts, energizing minerals, amino-acids and many more powered with advanced technologies.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="ingredient column-12 column-md-4">
            <div class="ingredient__inner">
              <div class="ingredient__text">
                <div class="ingredient__data">40+</div>
                <h4 class="ingredient__title">COUNTRIES</h4>
                <div class="ingredient__content">
                  <p>We scout the world to source high quality ingredients, precious plant extracts, magical oils and unique molecules. Efficacy, safety and sustainability are our criteria of selection, ensuring that each formula improves the way your skin looks and feels good.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="ingredient column-12 column-md-4">
            <div class="ingredient__inner">
              <div class="ingredient__text">
                <div class="ingredient__data">200+</div>
                <h4 class="ingredient__title">RAW INGREDIENTS</h4>
                <div class="ingredient__content">
                  <p>Unique base ingredients with long lasting hydrating effect, nourishing seed oils, energizing essential oils, floral waters, et.al. We’re always innovating and upgrading with revolutionary ingredients, understanding the skin science to make suitable products and provide a feeling of wellbeing.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ingredients al-py-6 ingredients-infograph--mobile mobile-only">
        <div class="container">
          <div class="swiper" data-swiper data-options='{
                "slidesPerView": 1,
                "spaceBetween": 32,
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
                  "767": {
                    "slidesPerView": 3
                  }
                }
              }'>
            <div class="swiper-wrapper">
              <div class="ingredient swiper-slide">
                <div class="ingredient__inner">
                  <div class="ingredient__text">
                    <div class="ingredient__data">80+</div>
                    <h4 class="ingredient__title">HIGH PERFORMANCE INGREDIENTS</h4>
                    <div class="ingredient__content">
                      <p>We focus on multi-targeted solutions for your skin. Hence our products are filled with a unique blend of active nutrients. Experience the care, peptides, vitamins, botanical extracts, energizing minerals, amino-acids and many more powered with advanced technologies.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ingredient swiper-slide">
                <div class="ingredient__inner">
                  <div class="ingredient__text">
                    <div class="ingredient__data">40+</div>
                    <h4 class="ingredient__title">COUNTRIES</h4>
                    <div class="ingredient__content">
                      <p>We scout the world to source high quality ingredients, precious plant extracts, magical oils and unique molecules. Efficacy, safety and sustainability are our criteria of selection, ensuring that each formula improves the way your skin looks and feels good.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ingredient swiper-slide">
                <div class="ingredient__inner">
                  <div class="ingredient__text">
                    <div class="ingredient__data">200+</div>
                    <h4 class="ingredient__title">RAW INGREDIENTS</h4>
                    <div class="ingredient__content">
                      <p>Unique base ingredients with long lasting hydrating effect, nourishing seed oils, energizing essential oils, floral waters, et.al. We’re always innovating and upgrading with revolutionary ingredients, understanding the skin science to make suitable products and provide a feeling of wellbeing.</p>
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
  <!-- /Ingredient Infograph  -->
  <!-- Ingredient Nutrients  -->
  <div class="ingredients-nutrients">
    <div class="container al-py-6 md:al-py-8">
      <h1 class="heading">our featured nutrients.</h1>
    </div>

    <div class="ingredients-nutrients__wrapper container container__max container__max--no-space al-py-6 md:al-py-8">
      <div class="panel">
        <div class="ingredients desk-only">
          <div class="ingredients__blocks columns">
            <div class="ingredient column-12 column-md-4">
              <div class="ingredient__inner">
                <div class="ingredient__text">
                  <h4 class="ingredient__title">Manicouagan Clay</h4>
                  <div class="ingredient__image">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/assets/images/our-ingredients/featured-nutrients.webp" alt="Manicouagan Clay" />
                  </div>
                  <div class="ingredient__content">
                    <p>Located in the northern part of Canada, is one of the richest in minerals and trace elements in the world. Of the 102 known elements of the earth, we find more than 42 contents in this unique clay. Manicouagan Lake was born first by the impact of a meteorite more than 200 million years ago, which gives it its rounded shape visible from space.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="ingredient column-12 column-md-4">
              <div class="ingredient__inner">
                <div class="ingredient__text">
                  <h4 class="ingredient__title">Biden Pilosa</h4>
                  <div class="ingredient__image">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/assets/images/our-ingredients/featured-nutrients-2.webp" alt="Biden Pilosa" />
                  </div>
                  <div class="ingredient__content">
                    <p>BioRetinol is a super critical fluid apolar extract of Bidens pilosa. Rich phytochemical composition, standardized in phytol. It is with retinoids receptors activity, mimicking the same positive results that retinoids to fight against skin aging. Skin visibly younger, luminous and firm, reducing reduces wrinkles, improves skin elasticity and hydration.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="ingredient column-12 column-md-4">
              <div class="ingredient__inner">
                <div class="ingredient__text">
                  <h4 class="ingredient__title">Nordic Peat</h4>
                  <div class="ingredient__image">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/assets/images/our-ingredients/featured-nutrients-3.webp" alt="Nordic Peat" />
                  </div>
                  <div class="ingredient__content">
                    <p>Peat originates in swamp, where it naturally develops over hundreds of years. Finnish nature is unique due to its summers with long days and winters with freezing temperatures. Therefore the plants have a short but intense growth season and are richer in nutrients than plants grown elsewhere. Herbs, flowers and plants are naturally macerated by microbial action enriching the peat with high concentration of bio-active substances.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="ingredients ingredients--mobile mobile-only">
          <div class="swiper ingredients__blocks" data-swiper data-options='{
                    "slidesPerView": 1,
                    "spaceBetween": 32,
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
                      "767": {
                        "slidesPerView": 3
                      }
                    }
                  }'>
            <div class="swiper-wrapper">
              <div class="ingredient swiper-slide">
                <div class="ingredient__inner">
                  <div class="ingredient__text">
                    <h4 class="ingredient__title">Manicouagan Clay</h4>
                    <div class="ingredient__image">
                      <img src="<?php echo get_template_directory_uri() ?>/assets/assets/images/our-ingredients/featured-nutrients.webp" alt="Manicouagan Clay" />
                    </div>
                    <div class="ingredient__content">
                      <p>Located in the northern part of Canada, is one of the richest in minerals and trace elements in the world. Of the 102 known elements of the earth, we find more than 42 contents in this unique clay. Manicouagan Lake was born first by the impact of a meteorite more than 200 million years ago, which gives it its rounded shape visible from space.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ingredient swiper-slide">
                <div class="ingredient__inner">
                  <div class="ingredient__text">
                    <h4 class="ingredient__title">Biden Pilosa</h4>
                    <div class="ingredient__image">
                      <img src="<?php echo get_template_directory_uri() ?>/assets/assets/images/our-ingredients/featured-nutrients-2.webp" alt="Biden Pilosa" />
                    </div>
                    <div class="ingredient__content">
                      <p>BioRetinol is a super critical fluid apolar extract of Bidens pilosa. Rich phytochemical composition, standardized in phytol. It is with retinoids receptors activity, mimicking the same positive results that retinoids to fight against skin aging. Skin visibly younger, luminous and firm, reducing reduces wrinkles, improves skin elasticity and hydration.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ingredient swiper-slide">
                <div class="ingredient__inner">
                  <div class="ingredient__text">
                    <h4 class="ingredient__title">Nordic Peat</h4>
                    <div class="ingredient__image">
                      <img src="<?php echo get_template_directory_uri() ?>/assets/assets/images/our-ingredients/featured-nutrients-3.webp" alt="Nordic Peat" />
                    </div>
                    <div class="ingredient__content">
                      <p>Peat originates in swamp, where it naturally develops over hundreds of years. Finnish nature is unique due to its summers with long days and winters with freezing temperatures. Therefore the plants have a short but intense growth season and are richer in nutrients than plants grown elsewhere. Herbs, flowers and plants are naturally macerated by microbial action enriching the peat with high concentration of bio-active substances.</p>
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
  <!-- /Ingredient Nutrients  -->
  <!-- Ingredient Search  -->
  <section class="ingredients-filter">
    <header class="align-center al-py-4">
      <h2 class="heading al-text-center">Our ingredients</h2>
    </header>
    <div class="tab letter-search d-flex justify-content-around">
      <button type="button" class="tablink active" data-char="a" id="defaultOpen">
        A
      </button>
      <button type="button" class="tablink" data-char="b">B</button>
      <button type="button" class="tablink" data-char="c">C</button>
      <button type="button" class="tablink" data-char="d">D</button>
      <button type="button" class="tablink" data-char="e">E</button>
      <button type="button" class="tablink" data-char="f">F</button>
      <button type="button" class="tablink" data-char="g">G</button>
      <button type="button" class="tablink" data-char="h">H</button>
      <button type="button" class="tablink" data-char="i">I</button>
      <button type="button" class="tablink" data-char="j">J</button>
      <button type="button" class="tablink" data-char="k">K</button>
      <button type="button" class="tablink" data-char="l">L</button>
      <button type="button" class="tablink" data-char="m">M</button>
      <button type="button" class="tablink" data-char="n">N</button>
      <button type="button" class="tablink" data-char="o">O</button>
      <button type="button" class="tablink" data-char="p">P</button>
      <button type="button" class="tablink" data-char="q">Q</button>
      <button type="button" class="tablink" data-char="r">R</button>
      <button type="button" class="tablink" data-char="s">S</button>
      <button type="button" class="tablink" data-char="t">T</button>
      <button type="button" class="tablink" data-char="u">U</button>
      <button type="button" class="tablink" data-char="v">V</button>
      <button type="button" class="tablink" data-char="w">W</button>
      <button type="button" class="tablink" data-char="x">X</button>
      <button type="button" class="tablink" data-char="y">Y</button>
      <button type="button" class="tablink" data-char="z">Z</button>
    </div>

    <div id="ContentPlaceHolder1_ctl00" class="letter-search__letter-content">
      <div id="a" class="tabcontent ourIngredientTab" style="display: block">
        <input type="hidden" value="a" />
        <div class="al-flex">
          <div class="tab2">
            <button type="button" class="tablinks2">
              <h4>ACACIA SENEGAL GUM</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>ACAI BERRY (EUTERP OLERACEA)</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>ACETYL GLUCOSAMINE</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>ACETYL GLYCYL BETA-ALANINE</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>ACETYL HEXAPEPTIDE-8</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>ACTIVATED CHARCOAL</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>ALANINE</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>ALOE VERA (ALOE BARBADENSIS)</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>ANHYDROXYLITOL</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>APPLE (PYRUS MALUS FRUIT EXTRACT)</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>APRICOT KERNEL OIL (PRUNUS ARMENIACA SEED OIL)</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>AQUA</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>ARACHIDYL ALCOHOL</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>ARACHIDYL GLUCOSIDE</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>ARGAN OIL (ARGANIA SPINOSA KERNEL OIL)</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>ASAFETIDA GUM EXTRACT (FERULA ASSA FOETIDA)</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>ASCORBYL METHYLSILANOL PECTINATE</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>ASCORBYL TETRAISOPALMITATE</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>ASHWAGANDHA (WITHANIA SOMNIFERA)</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>AZELAMIDOPROPYL DIMETHYL AMINE</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>APHANIZOMENON FLOS-AQUAE EXTRACT (BLUE-GREEN ALGAE)</h4>
            </button>
          </div>

          <div id="cstm-1" class="tabcontent2" style="display: block">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/AcaciaSenegalGumimg109_06_2021_06_26_04_758.jpg?v=1659688423" id="" class="img-fluid" alt="ACACIA SENEGAL GUM" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Acacia_Senegal_Gum_2.jpg?v=1659688462" id="" class="img-fluid" alt="ACACIA SENEGAL GUM" />
                </div>
              </div>
            </div>

            <div class="columns mobile_ingredient_img">
              <h3 class="mobile_ingredient_name">ACACIA SENEGAL GUM</h3>
              <div class="swiper" data-swiper data-options='{
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
                <div class="ingredient_img swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="//www.aminu.life/cdn/shop/files/AcaciaSenegalGumimg109_06_2021_06_26_04_758_380x.jpg?v=1659688423" id="" class="img-fluid" alt="ACACIA SENEGAL GUM" />
                  </div>
                  <div class="swiper-slide">
                    <img src="//www.aminu.life/cdn/shop/files/Acacia_Senegal_Gum_2_380x.jpg?v=1659688462" id="" class="img-fluid" alt="ACACIA SENEGAL GUM" />
                  </div>
                </div>
                <div class="swiper-nav swiper-button-prev top-50 start-0 z-index-30 cursor-pointer transition-all bg-white px-3 py-4 position-absolute z-index-30 top-50 start-0 mt-n8 d-flex justify-content-center align-items-center opacity-50-hover">
                  <i class="ri-arrow-left-s-line ri-lg"></i>
                </div>
                <div class="swiper-nav swiper-button-next top-50 end-0 z-index-30 cursor-pointer transition-all bg-white px-3 py-4 position-absolute z-index-30 top-50 end-0 mt-n8 d-flex justify-content-center align-items-center opacity-50-hover">
                  <i class="ri-arrow-right-s-line ri-lg"></i>
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">ACACIA SENEGAL GUM</h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      Acacia Gum, also known as Arabic gum, is harvested from
                      Acacia Senegal trees found in Africa's sub-Saharan region.
                      Harvesting of acacia gum today provides sustainable
                      livelihood to local people and incentivizes local people to
                      preserve these trees and help fight deforestation in the
                      area.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>
                      It is a naturally occurring polysaccharide (complex molecule
                      of sugar) <br />with a mixture of potassium, magnesium, and
                      calcium salts.<br />
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      Acacia gum is a multi-purpose ingredient. As a
                      polysaccharide, it <br />provides deep moisturization for an
                      extended period when used topically.<br />
                      The minerals help keep skin cells young and healthy as they
                      play a <br />critical role in skin cells &amp; tissues'
                      normal functioning. It is <br />also a sustainable and
                      natural alternative to synthetic thickening
                      <br />polymers.<br />
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>Found in our creams and cleansers.<br /></p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-2" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Acai_Berry.png?v=1659688532" id="" class="img-fluid" alt="ACAI BERRY (EUTERP OLERACEA)" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Acai_berry_2.jpg?v=1659688571" id="" class="img-fluid" alt="ACAI BERRY (EUTERP OLERACEA)" />
                </div>
              </div>
            </div>

            <div class="columns mobile_ingredient_img">
              <h3 class="mobile_ingredient_name">ACAI BERRY (EUTERP OLERACEA)</h3>

              <div class="ingredient_img slick-initialized slick-slider">
                <div class="">
                  <div class="" style="width: 0px; transform: translate3d(0px, 0px, 0px)">
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Acai_berry_2_380x.jpg?v=1659688571" id="" class="img-fluid" alt="ACAI BERRY (EUTERP OLERACEA)" />
                    </div>
                    <div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Acai_Berry_380x.png?v=1659688532" id="" class="img-fluid" alt="ACAI BERRY (EUTERP OLERACEA)" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="0">
                      <img src="//www.aminu.life/cdn/shop/files/Acai_berry_2_380x.jpg?v=1659688571" id="" class="img-fluid" alt="ACAI BERRY (EUTERP OLERACEA)" />
                    </div>
                    <div class="slick-slide slick-cloned" data-slick-index="2" id="" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Acai_Berry_380x.png?v=1659688532" id="" class="img-fluid" alt="ACAI BERRY (EUTERP OLERACEA)" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Acai_berry_2_380x.jpg?v=1659688571" id="" class="img-fluid" alt="ACAI BERRY (EUTERP OLERACEA)" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">
                  ACAI BERRY (EUTERP OLERACEA)
                </h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      Pronounced as 'ah-sigh-ee', these nutrient-dense
                      purple-colored berries <br />are native to South and Central
                      America. Some research has shown that <br />acai berry is
                      richer than cranberries, raspberries, strawberries, or
                      <br />blueberries in antioxidants content. We use the oil
                      extracted from <br />premium quality sustainably harvested
                      acai berries grown in Brazil.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>
                      Acai berry oil is rich in Vitamins A &amp; E, anthocyanin
                      (flavonoid), <br />Omega 9, and other essential fatty acids.
                      It also contains phenolic <br />acids such as vanillic acid,
                      syringic acid, and ferulic acid, Vitamin <br />B1, B2, B3,
                      E, and C, and trace minerals such as Phosphorus, Calcium,
                      <br />and Potassium.<br />
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      We use acai berry oil because it seeps in the skin very
                      quickly, locks <br />in moisturizing, helps in skin
                      regeneration (Vitamin &amp; minerals,) <br />and protects
                      the skin from oxidative stress (phenolic compounds,
                      Vitamin<br />
                      A &amp; E). It is a natural emollient (fatty acids) and
                      <br />anti-inflammatory agent (flavonoids) as well.<br />
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>Radiance Face Oil<br /></p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-3" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Acetyl_Glucosamine_1.jpg?v=1659687199" id="" class="img-fluid" alt="ACETYL GLUCOSAMINE" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Hydration.jpg?v=1659687243" id="" class="img-fluid" alt="ACETYL GLUCOSAMINE" />
                </div>
              </div>
            </div>

            <div class="columns mobile_ingredient_img">
              <h3 class="mobile_ingredient_name">ACETYL GLUCOSAMINE</h3>

              <div class="ingredient_img slick-initialized slick-slider">
                <div class="">
                  <div class="" style="width: 0px; transform: translate3d(0px, 0px, 0px)">
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Hydration_380x.jpg?v=1659687243" id="" class="img-fluid" alt="ACETYL GLUCOSAMINE" />
                    </div>
                    <div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Acetyl_Glucosamine_1_380x.jpg?v=1659687199" id="" class="img-fluid" alt="ACETYL GLUCOSAMINE" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="0">
                      <img src="//www.aminu.life/cdn/shop/files/Hydration_380x.jpg?v=1659687243" id="" class="img-fluid" alt="ACETYL GLUCOSAMINE" />
                    </div>
                    <div class="slick-slide slick-cloned" data-slick-index="2" id="" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Acetyl_Glucosamine_1_380x.jpg?v=1659687199" id="" class="img-fluid" alt="ACETYL GLUCOSAMINE" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Hydration_380x.jpg?v=1659687243" id="" class="img-fluid" alt="ACETYL GLUCOSAMINE" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">ACETYL GLUCOSAMINE</h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      It is a “skin-identical ingredient”; in other words, it is
                      naturally found in our skin. It helps in the natural
                      production of hyaluronic acid and shows anti-pigmentation
                      properties when used in combination with niacinamide.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>
                      It is an amide derivative of monosaccharide glucose (sugar
                      molecule).
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      We have used this in combination with niacinamide to boost
                      the formula's pigmentation and dark spots fading prowess.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>
                      Nutrient Day Cream, Hand &amp; Neck Cream, Correcting
                      Concentrate
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-4" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Acetyl-glycyl-beta-alanine_1.jpg?v=1659687466" id="" class="img-fluid" alt="ACETYL GLYCYL BETA-ALANINE" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Acetyl-glycyl-beta-alanine_2.jpg?v=1659687504" id="" class="img-fluid" alt="ACETYL GLYCYL BETA-ALANINE" />
                </div>
              </div>
            </div>

            <div class="columns mobile_ingredient_img">
              <h3 class="mobile_ingredient_name">ACETYL GLYCYL BETA-ALANINE</h3>

              <div class="ingredient_img slick-initialized slick-slider">
                <div class="">
                  <div class="" style="width: 0px; transform: translate3d(0px, 0px, 0px)">
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Acetyl-glycyl-beta-alanine_2_380x.jpg?v=1659687504" id="" class="img-fluid" alt="ACETYL GLYCYL BETA-ALANINE" />
                    </div>
                    <div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Acetyl-glycyl-beta-alanine_1_380x.jpg?v=1659687466" id="" class="img-fluid" alt="ACETYL GLYCYL BETA-ALANINE" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="0">
                      <img src="//www.aminu.life/cdn/shop/files/Acetyl-glycyl-beta-alanine_2_380x.jpg?v=1659687504" id="" class="img-fluid" alt="ACETYL GLYCYL BETA-ALANINE" />
                    </div>
                    <div class="slick-slide slick-cloned" data-slick-index="2" id="" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Acetyl-glycyl-beta-alanine_1_380x.jpg?v=1659687466" id="" class="img-fluid" alt="ACETYL GLYCYL BETA-ALANINE" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Acetyl-glycyl-beta-alanine_2_380x.jpg?v=1659687504" id="" class="img-fluid" alt="ACETYL GLYCYL BETA-ALANINE" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">
                  ACETYL GLYCYL BETA-ALANINE
                </h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      This active ingredient helps control pigmentation in two
                      ways. First, it inhibits melanin generating enzymes –
                      Tyrosinase; as a result, less pigment is formed. Second, it
                      also blocks melanin's transportation to the skin's upper
                      layers, where it becomes visible.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>
                      It is a peptide - building blocks of skin cells such as
                      collagen &amp; elastin that give structure &amp; shape to
                      the skin.
                    </p>
                    <p></p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      It is a safe, potent, quickly penetrating, and unique
                      peptide known to help fade pigmentation and dark spots
                      through multiple pathways.<br /><br />
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>Regenerating Serum, Overnight Facial peel</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-5" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Acetyl_Hexapeptide_1.jpg?v=1659688042" id="" class="img-fluid" alt="ACETYL HEXAPEPTIDE-8" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Anti_wrinkle.jpg?v=1659688086" id="" class="img-fluid" alt="ACETYL HEXAPEPTIDE-8" />
                </div>
              </div>
            </div>

            <div class="columns mobile_ingredient_img">
              <h3 class="mobile_ingredient_name">ACETYL HEXAPEPTIDE-8</h3>

              <div class="ingredient_img slick-initialized slick-slider">
                <div class="">
                  <div class="" style="width: 0px; transform: translate3d(0px, 0px, 0px)">
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Anti_wrinkle_380x.jpg?v=1659688086" id="" class="img-fluid" alt="ACETYL HEXAPEPTIDE-8" />
                    </div>
                    <div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Acetyl_Hexapeptide_1_380x.jpg?v=1659688042" id="" class="img-fluid" alt="ACETYL HEXAPEPTIDE-8" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="0">
                      <img src="//www.aminu.life/cdn/shop/files/Anti_wrinkle_380x.jpg?v=1659688086" id="" class="img-fluid" alt="ACETYL HEXAPEPTIDE-8" />
                    </div>
                    <div class="slick-slide slick-cloned" data-slick-index="2" id="" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Acetyl_Hexapeptide_1_380x.jpg?v=1659688042" id="" class="img-fluid" alt="ACETYL HEXAPEPTIDE-8" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Anti_wrinkle_380x.jpg?v=1659688086" id="" class="img-fluid" alt="ACETYL HEXAPEPTIDE-8" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">ACETYL HEXAPEPTIDE-8</h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      Acetyl Hexapeptide-8 is a multifunctional molecule that
                      helps minimize and relax "expression wrinkles" that become a
                      permanent feature of our face with age and helps improve the
                      appearance of the skin. It also helps improve skin
                      roughness, fine lines, isotropy, radiance, firmness,
                      elasticity, skin fatigue and facial volume. It is designed
                      and produced per principles of green chemistry.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>It is a high-quality peptide.</p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      It topically targets the same wrinkle-formation mechanism
                      that Botox does in a very different way but with comparable
                      efficacy and without the risks, the injections, and the high
                      cost. The peptide also has a lifting and voluminous effect.
                      A 2012 study found the peptide as safe for long-term use and
                      effective in reducing wrinkles. Call it 'needle-free botox'
                      if you will.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>Regenerating Serum</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-6" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/ActivatedCharcoalimg102_19_2021_11_47_16_608.png?v=1659688767" id="" class="img-fluid" alt="ACTIVATED CHARCOAL" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Activated_Charcoal_2.jpg?v=1659688803" id="" class="img-fluid" alt="ACTIVATED CHARCOAL" />
                </div>
              </div>
            </div>

            <div class="columns mobile_ingredient_img">
              <h3 class="mobile_ingredient_name">ACTIVATED CHARCOAL</h3>

              <div class="ingredient_img slick-initialized slick-slider">
                <div class="">
                  <div class="" style="width: 0px; transform: translate3d(0px, 0px, 0px)">
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Activated_Charcoal_2_380x.jpg?v=1659688803" id="" class="img-fluid" alt="ACTIVATED CHARCOAL" />
                    </div>
                    <div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/ActivatedCharcoalimg102_19_2021_11_47_16_608_380x.png?v=1659688767" id="" class="img-fluid" alt="ACTIVATED CHARCOAL" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="0">
                      <img src="//www.aminu.life/cdn/shop/files/Activated_Charcoal_2_380x.jpg?v=1659688803" id="" class="img-fluid" alt="ACTIVATED CHARCOAL" />
                    </div>
                    <div class="slick-slide slick-cloned" data-slick-index="2" id="" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/ActivatedCharcoalimg102_19_2021_11_47_16_608_380x.png?v=1659688767" id="" class="img-fluid" alt="ACTIVATED CHARCOAL" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Activated_Charcoal_2_380x.jpg?v=1659688803" id="" class="img-fluid" alt="ACTIVATED CHARCOAL" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">ACTIVATED CHARCOAL</h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      Humans have used activated charcoal for more than 2000
                      years. Historically, it was used to treat poisoning and to
                      prevent infections on open wounds. In the skincare world,
                      they have become popular as an adsorber of oil &amp; dirt
                      rinse-off products.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>
                      Charcoal is essentially pure carbon, and it is made by
                      burning wood with very little oxygen. The quality depends on
                      the raw material (wood) and manufacturing process
                      (activation) to ensure it is free of volatile compounds such
                      as water, methane, hydrogen, and tar. Different charcoal
                      grades are defined based on surface area per gram of
                      charcoal, which determines its absorption capacity.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      Activated charcoal can unclog pores by adsorbing excess oil,
                      impurities, and dead skin cells. We use bamboo-derived
                      charcoal for its high surface area, which increases its
                      potency as a cleanser.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>AHA Body Wash</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-7" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Alanine_1.jpg?v=1659688991" id="" class="img-fluid" alt="ALANINE" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/AcetylGlucosamineimg202_20_2021_02_14_23_534.png?v=1659689041" id="" class="img-fluid" alt="ALANINE" />
                </div>
              </div>
            </div>

            <div class="columns mobile_ingredient_img">
              <h3 class="mobile_ingredient_name">ALANINE</h3>

              <div class="ingredient_img slick-initialized slick-slider">
                <div class="">
                  <div class="" style="width: 0px; transform: translate3d(0px, 0px, 0px)">
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/AcetylGlucosamineimg202_20_2021_02_14_23_534_380x.png?v=1659689041" id="" class="img-fluid" alt="ALANINE" />
                    </div>
                    <div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Alanine_1_380x.jpg?v=1659688991" id="" class="img-fluid" alt="ALANINE" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="0">
                      <img src="//www.aminu.life/cdn/shop/files/AcetylGlucosamineimg202_20_2021_02_14_23_534_380x.png?v=1659689041" id="" class="img-fluid" alt="ALANINE" />
                    </div>
                    <div class="slick-slide slick-cloned" data-slick-index="2" id="" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Alanine_1_380x.jpg?v=1659688991" id="" class="img-fluid" alt="ALANINE" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/AcetylGlucosamineimg202_20_2021_02_14_23_534_380x.png?v=1659689041" id="" class="img-fluid" alt="ALANINE" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">ALANINE</h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      Alanine is the third most abundant amino acid in the skin’s
                      Natural Moisturizing Factor (NMF) and is essential for
                      strengthening its natural hydration. What is NMF? NMFs are
                      water-absorbing materials found in the uppermost layer of
                      our skin. By absorbing atmospheric water, NMF components
                      keep our skin naturally hydrated. NMF contains sugars, amino
                      acids, PCA, urea.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>
                      It is a non-essential amino acid (important for the body
                      &amp; normally produced by the body, but with age, the
                      levels drop). It is one of the 20 building blocks of
                      proteins found in our body.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      Aging and environmental stressors reduce the NMF levels in
                      the skin, making it dry and scaly. One of the important
                      amino acids, Alanine, strengthens the NMF, and increases the
                      skin?s ability to stay moisturized even in harsh climatic
                      conditions.<br /><br />
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>
                      Hydrating Cream, Multivitamin Cream, Regenerating Serum,
                      Overnight Facial Peel
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-8" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Aloe_vera_1.jpg?v=1659689285" id="" class="img-fluid" alt="ALOE VERA (ALOE BARBADENSIS)" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Aloe_vera_2.jpg?v=1659689322" id="" class="img-fluid" alt="ALOE VERA (ALOE BARBADENSIS)" />
                </div>
              </div>
            </div>

            <div class="columns mobile_ingredient_img">
              <h3 class="mobile_ingredient_name">ALOE VERA (ALOE BARBADENSIS)</h3>

              <div class="ingredient_img slick-initialized slick-slider">
                <div class="">
                  <div class="" style="width: 0px; transform: translate3d(0px, 0px, 0px)">
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Aloe_vera_2_380x.jpg?v=1659689322" id="" class="img-fluid" alt="ALOE VERA (ALOE BARBADENSIS)" />
                    </div>
                    <div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Aloe_vera_1_380x.jpg?v=1659689285" id="" class="img-fluid" alt="ALOE VERA (ALOE BARBADENSIS)" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="0">
                      <img src="//www.aminu.life/cdn/shop/files/Aloe_vera_2_380x.jpg?v=1659689322" id="" class="img-fluid" alt="ALOE VERA (ALOE BARBADENSIS)" />
                    </div>
                    <div class="slick-slide slick-cloned" data-slick-index="2" id="" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Aloe_vera_1_380x.jpg?v=1659689285" id="" class="img-fluid" alt="ALOE VERA (ALOE BARBADENSIS)" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Aloe_vera_2_380x.jpg?v=1659689322" id="" class="img-fluid" alt="ALOE VERA (ALOE BARBADENSIS)" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">
                  ALOE VERA (ALOE BARBADENSIS)
                </h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      You can find this little succulent in tropical climates all
                      over the world. It’s a versatile plant. Our Aloe
                      powder&nbsp;is registered with IASC –
                      International&nbsp;Aloe&nbsp;Science Council and also has
                      the following certifications:-&nbsp;ECOCERT, FDA, USDA NOP
                      Organic, Halal, HACCP.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>
                      A host of biologically active substances, including vitamins
                      B1, B2, B6, C, choline, niacin amide, glycoprotein, enzymes,
                      phenolic compounds, a variety of amino acids, phytochemicals
                      and salicylic acids. &nbsp;Also contains emodin
                      and&nbsp;aloin&nbsp;that work as antivirals, antibacterial,
                      and analgesics. It supplies magnesium chromium, calcium,
                      copper-zinc, selenium manganese, potassium, and sodium.It
                      also contains 20 amino acids (of the 22) and 7 essential
                      amino acids (of the 8 your body needs). It contains 12
                      anthraquinones that are compounds that act as laxatives.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      "Besides the benefits of ingesting it (which is a whole
                      other post), it’s most well-known for its anti-inflammation,
                      healing and epidermal development properties for sunburn and
                      wounds. Thanks to its bioactive make-up it’s also been used
                      as an antifungal, antiviral, anti-parasitic and regenerative
                      treatment. It’s also effective in reducing progression and
                      itching of striae (i.e. stretch marks from pregnancy). From
                      skin diseases to infections to insect bites this is an
                      all-purpose super ingredient to look out for in skin."<br /><br />
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>Found mostly in our creams, oil and cleansers.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-9" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Anhydroxylitolimg103_05_2021_06_10_21_072.png?v=1659689513" id="" class="img-fluid" alt="ANHYDROXYLITOL" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Hydration_1.jpg?v=1659689546" id="" class="img-fluid" alt="ANHYDROXYLITOL" />
                </div>
              </div>
            </div>

            <div class="columns mobile_ingredient_img">
              <h3 class="mobile_ingredient_name">ANHYDROXYLITOL</h3>

              <div class="ingredient_img slick-initialized slick-slider">
                <div class="">
                  <div class="" style="width: 0px; transform: translate3d(0px, 0px, 0px)">
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Hydration_1_380x.jpg?v=1659689546" id="" class="img-fluid" alt="ANHYDROXYLITOL" />
                    </div>
                    <div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Anhydroxylitolimg103_05_2021_06_10_21_072_380x.png?v=1659689513" id="" class="img-fluid" alt="ANHYDROXYLITOL" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="0">
                      <img src="//www.aminu.life/cdn/shop/files/Hydration_1_380x.jpg?v=1659689546" id="" class="img-fluid" alt="ANHYDROXYLITOL" />
                    </div>
                    <div class="slick-slide slick-cloned" data-slick-index="2" id="" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Anhydroxylitolimg103_05_2021_06_10_21_072_380x.png?v=1659689513" id="" class="img-fluid" alt="ANHYDROXYLITOL" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Hydration_1_380x.jpg?v=1659689546" id="" class="img-fluid" alt="ANHYDROXYLITOL" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">ANHYDROXYLITOL</h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      It provides skin cells lasting moisture by promoting the
                      synthesis of hyaluronic acid in the skin. Second, it
                      strengthens epidermis' water reservoir, i.e., NMF (Natural
                      Moisturising Factor). Third, it redistributes water within
                      these reservoirs for more uniform availability.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>
                      It is a dehydrated derivative of Xylitol (good alcohol from
                      sugar).
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      Thanks to its bioactive make-up it’s also been used as an
                      antifungal, antiviral, anti-parasitic and regenerative
                      treatment. It’s also effective in reducing progression and
                      itching of striae (i.e. stretch marks from pregnancy). From
                      skin diseases to infections to insect bites this is an
                      all-purpose super ingredient to look out for in skin.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>Cream Cleanser, AHA Face Wash</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-10" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Appleimg102_19_2021_11_48_31_398.png?v=1659689660" id="" class="img-fluid" alt="APPLE (PYRUS MALUS FRUIT EXTRACT)" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Apple_2.jpg?v=1659689693" id="" class="img-fluid" alt="APPLE (PYRUS MALUS FRUIT EXTRACT)" />
                </div>
              </div>
            </div>

            <div class="columns mobile_ingredient_img">
              <h3 class="mobile_ingredient_name">
                APPLE (PYRUS MALUS FRUIT EXTRACT)
              </h3>

              <div class="ingredient_img slick-initialized slick-slider">
                <div class="">
                  <div class="" style="width: 0px; transform: translate3d(0px, 0px, 0px)">
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Apple_2_380x.jpg?v=1659689693" id="" class="img-fluid" alt="APPLE (PYRUS MALUS FRUIT EXTRACT)" />
                    </div>
                    <div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Appleimg102_19_2021_11_48_31_398_380x.png?v=1659689660" id="" class="img-fluid" alt="APPLE (PYRUS MALUS FRUIT EXTRACT)" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="0">
                      <img src="//www.aminu.life/cdn/shop/files/Apple_2_380x.jpg?v=1659689693" id="" class="img-fluid" alt="APPLE (PYRUS MALUS FRUIT EXTRACT)" />
                    </div>
                    <div class="slick-slide slick-cloned" data-slick-index="2" id="" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Appleimg102_19_2021_11_48_31_398_380x.png?v=1659689660" id="" class="img-fluid" alt="APPLE (PYRUS MALUS FRUIT EXTRACT)" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Apple_2_380x.jpg?v=1659689693" id="" class="img-fluid" alt="APPLE (PYRUS MALUS FRUIT EXTRACT)" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">
                  APPLE (PYRUS MALUS FRUIT EXTRACT)
                </h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      Native to Asia and Europe, apples are today grown across the
                      world. While ever-popular as a fruit, apple extract has
                      become popular as a natural skincare ingredient only in the
                      last few decades because of its exfoliation and anti-oxidant
                      properties. Did you know that the browning of cut apples
                      happens due to the oxidation of phenolic compounds called
                      flavonoids?
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>
                      Apple extract contains high concentrations of flavonoids
                      (quercetin, catechin). It is also rich in mallic acid, a
                      type of alpha-hydroxy acid or AHA.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      Apple extract helps brighten dull skin and then protect it
                      from oxidative stress. It can exfoliate (malic acid and
                      other AHAs) dead and dull skin cells, allowing younger,
                      brighter looking cells to come on the surface. It also helps
                      protects the skin from free radical damage (flavonoids).
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>
                      Mostly found in our cleansers, scrubs and in few of creams
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-11" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Apricot_kernel_seed_1.png?v=1659689882" id="" class="img-fluid" alt="APRICOT KERNEL OIL (PRUNUS ARMENIACA SEED OIL)" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Apricot_Kernel_seed_2.jpg?v=1659689916" id="" class="img-fluid" alt="APRICOT KERNEL OIL (PRUNUS ARMENIACA SEED OIL)" />
                </div>
              </div>
            </div>

            <div class="columns mobile_ingredient_img">
              <h3 class="mobile_ingredient_name">
                APRICOT KERNEL OIL (PRUNUS ARMENIACA SEED OIL)
              </h3>

              <div class="ingredient_img slick-initialized slick-slider">
                <div class="">
                  <div class="" style="width: 0px; transform: translate3d(0px, 0px, 0px)">
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Apricot_Kernel_seed_2_380x.jpg?v=1659689916" id="" class="img-fluid" alt="APRICOT KERNEL OIL (PRUNUS ARMENIACA SEED OIL)" />
                    </div>
                    <div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Apricot_kernel_seed_1_380x.png?v=1659689882" id="" class="img-fluid" alt="APRICOT KERNEL OIL (PRUNUS ARMENIACA SEED OIL)" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="0">
                      <img src="//www.aminu.life/cdn/shop/files/Apricot_Kernel_seed_2_380x.jpg?v=1659689916" id="" class="img-fluid" alt="APRICOT KERNEL OIL (PRUNUS ARMENIACA SEED OIL)" />
                    </div>
                    <div class="slick-slide slick-cloned" data-slick-index="2" id="" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Apricot_kernel_seed_1_380x.png?v=1659689882" id="" class="img-fluid" alt="APRICOT KERNEL OIL (PRUNUS ARMENIACA SEED OIL)" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Apricot_Kernel_seed_2_380x.jpg?v=1659689916" id="" class="img-fluid" alt="APRICOT KERNEL OIL (PRUNUS ARMENIACA SEED OIL)" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">
                  APRICOT KERNEL OIL (PRUNUS ARMENIACA SEED OIL)
                </h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      Apricot kernel oil is gaining popularity in the skin world
                      as a lightweight, quick-absorbing, and nutrient-rich oil.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>
                      The primary fatty acids found in apricot kernel oil are
                      oleic acid (Omega-9), linoleic acid, and palmitic acid. It
                      also contains Vitamin A, E &amp; K, two skin-identical
                      lipids - Glycolipids and phospholipids and minerals such as
                      copper, magnesium, and potassium.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      Apricot kernel is non-greasy and is easily absorbed by the
                      skin. Its high fatty acid, skin-identical lipid, mineral,
                      and vitamin content help revive tired and skin cells,
                      leading to an overall more luminous and softer skin. It also
                      helps protect skin from oxidative damage.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>
                      Face Scrub, Spa Body Scrub, Antioxidant Body Scrub, Sea Salt
                      Body Scrub, Radiance Face Oil
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-12" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Aqua_1.jpg?v=1659690140" id="" class="img-fluid" alt="AQUA" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Aquaimg201_07_2021_08_06_29_559.jpg?v=1659690166" id="" class="img-fluid" alt="AQUA" />
                </div>
              </div>
            </div>

            <div class="columns mobile_ingredient_img">
              <h3 class="mobile_ingredient_name">AQUA</h3>

              <div class="ingredient_img slick-initialized slick-slider">
                <div class="">
                  <div class="" style="width: 0px; transform: translate3d(0px, 0px, 0px)">
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Aquaimg201_07_2021_08_06_29_559_380x.jpg?v=1659690166" id="" class="img-fluid" alt="AQUA" />
                    </div>
                    <div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Aqua_1_380x.jpg?v=1659690140" id="" class="img-fluid" alt="AQUA" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="0">
                      <img src="//www.aminu.life/cdn/shop/files/Aquaimg201_07_2021_08_06_29_559_380x.jpg?v=1659690166" id="" class="img-fluid" alt="AQUA" />
                    </div>
                    <div class="slick-slide slick-cloned" data-slick-index="2" id="" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Aqua_1_380x.jpg?v=1659690140" id="" class="img-fluid" alt="AQUA" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Aquaimg201_07_2021_08_06_29_559_380x.jpg?v=1659690166" id="" class="img-fluid" alt="AQUA" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">AQUA</h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      Aqua is basically “Water” with zero impurities, free of
                      toxins, pollutants and microbes.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>TBD</p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      Water is commonly used in the formulation of products,
                      helping to dissolve ingredients that impart skin benefits,
                      such as conditioning and cleaning agents.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>TBD</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-13" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Arachidyl_Alcohol_1.jpg?v=1659692439" id="" class="img-fluid" alt="ARACHIDYL ALCOHOL" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/ArachidylAlcoholimg203_02_2021_06_12_43_430.png?v=1659692472" id="" class="img-fluid" alt="ARACHIDYL ALCOHOL" />
                </div>
              </div>
            </div>

            <div class="columns mobile_ingredient_img">
              <h3 class="mobile_ingredient_name">ARACHIDYL ALCOHOL</h3>

              <div class="ingredient_img slick-initialized slick-slider">
                <div class="">
                  <div class="" style="width: 0px; transform: translate3d(0px, 0px, 0px)">
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/ArachidylAlcoholimg203_02_2021_06_12_43_430_380x.png?v=1659692472" id="" class="img-fluid" alt="ARACHIDYL ALCOHOL" />
                    </div>
                    <div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Arachidyl_Alcohol_1_380x.jpg?v=1659692439" id="" class="img-fluid" alt="ARACHIDYL ALCOHOL" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="0">
                      <img src="//www.aminu.life/cdn/shop/files/ArachidylAlcoholimg203_02_2021_06_12_43_430_380x.png?v=1659692472" id="" class="img-fluid" alt="ARACHIDYL ALCOHOL" />
                    </div>
                    <div class="slick-slide slick-cloned" data-slick-index="2" id="" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Arachidyl_Alcohol_1_380x.jpg?v=1659692439" id="" class="img-fluid" alt="ARACHIDYL ALCOHOL" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/ArachidylAlcoholimg203_02_2021_06_12_43_430_380x.png?v=1659692472" id="" class="img-fluid" alt="ARACHIDYL ALCOHOL" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">ARACHIDYL ALCOHOL</h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      It is a natural emulsifier plus a thickening agent derived
                      from vegetables.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>
                      It is straight-chain fatty alcohol typically obtained by
                      hydrogenation of plant-derived arachidic acid or arachidonic
                      acid.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      We use it as a natural and sustainable alternative to
                      synthetic and environmentally harmful emulsifiers. As an
                      added benefit, it also acts as an emollient (soothes and
                      softens skin).
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>Found in all our creams and lotions</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-14" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Arachidyl_Glucoside_1.jpg?v=1659692627" id="" class="img-fluid" alt="ARACHIDYL GLUCOSIDE" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/ArachidylAlcoholimg203_02_2021_06_12_43_430_27556286-c4b9-4d4b-a9ff-0be17bf112c0.png?v=1659692651" id="" class="img-fluid" alt="ARACHIDYL GLUCOSIDE" />
                </div>
              </div>
            </div>

            <div class="columns mobile_ingredient_img">
              <h3 class="mobile_ingredient_name">ARACHIDYL GLUCOSIDE</h3>

              <div class="ingredient_img slick-initialized slick-slider">
                <div class="">
                  <div class="" style="width: 0px; transform: translate3d(0px, 0px, 0px)">
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/ArachidylAlcoholimg203_02_2021_06_12_43_430_27556286-c4b9-4d4b-a9ff-0be17bf112c0_380x.png?v=1659692651" id="" class="img-fluid" alt="ARACHIDYL GLUCOSIDE" />
                    </div>
                    <div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Arachidyl_Glucoside_1_380x.jpg?v=1659692627" id="" class="img-fluid" alt="ARACHIDYL GLUCOSIDE" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="0">
                      <img src="//www.aminu.life/cdn/shop/files/ArachidylAlcoholimg203_02_2021_06_12_43_430_27556286-c4b9-4d4b-a9ff-0be17bf112c0_380x.png?v=1659692651" id="" class="img-fluid" alt="ARACHIDYL GLUCOSIDE" />
                    </div>
                    <div class="slick-slide slick-cloned" data-slick-index="2" id="" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Arachidyl_Glucoside_1_380x.jpg?v=1659692627" id="" class="img-fluid" alt="ARACHIDYL GLUCOSIDE" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/ArachidylAlcoholimg203_02_2021_06_12_43_430_27556286-c4b9-4d4b-a9ff-0be17bf112c0_380x.png?v=1659692651" id="" class="img-fluid" alt="ARACHIDYL GLUCOSIDE" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">ARACHIDYL GLUCOSIDE</h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      Arachidyl glucoside is a natural emulsifier of vegetable
                      origin.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>
                      It is created by attaching a water-loving glucose molecule
                      derived from wheat or maize and an oil-loving fatty molecule
                      derived from rapeseed oil.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      It is a plant-origin emollient (soothes and softens skin)
                      and emulsifier (binds water and oil molecules in creams).
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>Found in all our creams and lotions</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-15" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/ArganOilimg102_19_2021_11_49_14_650.png?v=1659692922" id="" class="img-fluid" alt="ARGAN OIL (ARGANIA SPINOSA KERNEL OIL)" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Argan_oil_2.jpg?v=1659692953" id="" class="img-fluid" alt="ARGAN OIL (ARGANIA SPINOSA KERNEL OIL)" />
                </div>
              </div>
            </div>

            <div class="columns mobile_ingredient_img">
              <h3 class="mobile_ingredient_name">
                ARGAN OIL (ARGANIA SPINOSA KERNEL OIL)
              </h3>

              <div class="ingredient_img slick-initialized slick-slider">
                <div class="">
                  <div class="" style="width: 0px; transform: translate3d(0px, 0px, 0px)">
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Argan_oil_2_380x.jpg?v=1659692953" id="" class="img-fluid" alt="ARGAN OIL (ARGANIA SPINOSA KERNEL OIL)" />
                    </div>
                    <div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/ArganOilimg102_19_2021_11_49_14_650_380x.png?v=1659692922" id="" class="img-fluid" alt="ARGAN OIL (ARGANIA SPINOSA KERNEL OIL)" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="0">
                      <img src="//www.aminu.life/cdn/shop/files/Argan_oil_2_380x.jpg?v=1659692953" id="" class="img-fluid" alt="ARGAN OIL (ARGANIA SPINOSA KERNEL OIL)" />
                    </div>
                    <div class="slick-slide slick-cloned" data-slick-index="2" id="" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/ArganOilimg102_19_2021_11_49_14_650_380x.png?v=1659692922" id="" class="img-fluid" alt="ARGAN OIL (ARGANIA SPINOSA KERNEL OIL)" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Argan_oil_2_380x.jpg?v=1659692953" id="" class="img-fluid" alt="ARGAN OIL (ARGANIA SPINOSA KERNEL OIL)" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">
                  ARGAN OIL (ARGANIA SPINOSA KERNEL OIL)
                </h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      Argan oil is called the "liquid gold of Morocco" thanks to
                      its high nutritional content. It shot to global popularity
                      as a wellness ingredient in a short time. Given the high
                      demand for this super skin-food, the tree is protected by
                      UNESCO. It takes 30 kilos of fruit to extract one liter of
                      oil! We have sourced argan oil from sustainably harvested
                      argan fruits, and it features in most of our oil/emulsion
                      formulas.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>
                      It contains unsaturated fatty acids such as palmitic acid,
                      oleic acid, caffeic acid, oleuropein, vanillic acid, ferulic
                      acid (polyphenol compounds). It also contains tyrosol,
                      catechol, resorcinol, epicatechin, and catechin (phenolic
                      compounds). It contains squalene and Vitamin E.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      It is a treasure of beneficial phytochemicals. It improves
                      skin elasticity and promotes moisturization resulting in
                      softer and smoother skin (squalene and fatty acids). It also
                      has strong anti-oxidant properties (phenolic compounds &amp;
                      vitamin E).
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>Found in most of our creams, oils, and cleansers.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-16" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Asafoetida_1.jpg?v=1659693103" id="" class="img-fluid" alt="ASAFETIDA GUM EXTRACT (FERULA ASSA FOETIDA)" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Asafoetida_2.jpg?v=1659693138" id="" class="img-fluid" alt="ASAFETIDA GUM EXTRACT (FERULA ASSA FOETIDA)" />
                </div>
              </div>
            </div>

            <div class="columns mobile_ingredient_img">
              <h3 class="mobile_ingredient_name">
                ASAFETIDA GUM EXTRACT (FERULA ASSA FOETIDA)
              </h3>

              <div class="ingredient_img slick-initialized slick-slider">
                <div class="">
                  <div class="" style="width: 0px; transform: translate3d(0px, 0px, 0px)">
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Asafoetida_2_380x.jpg?v=1659693138" id="" class="img-fluid" alt="ASAFETIDA GUM EXTRACT (FERULA ASSA FOETIDA)" />
                    </div>
                    <div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Asafoetida_1_380x.jpg?v=1659693103" id="" class="img-fluid" alt="ASAFETIDA GUM EXTRACT (FERULA ASSA FOETIDA)" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="0">
                      <img src="//www.aminu.life/cdn/shop/files/Asafoetida_2_380x.jpg?v=1659693138" id="" class="img-fluid" alt="ASAFETIDA GUM EXTRACT (FERULA ASSA FOETIDA)" />
                    </div>
                    <div class="slick-slide slick-cloned" data-slick-index="2" id="" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Asafoetida_1_380x.jpg?v=1659693103" id="" class="img-fluid" alt="ASAFETIDA GUM EXTRACT (FERULA ASSA FOETIDA)" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Asafoetida_2_380x.jpg?v=1659693138" id="" class="img-fluid" alt="ASAFETIDA GUM EXTRACT (FERULA ASSA FOETIDA)" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">
                  ASAFETIDA GUM EXTRACT (FERULA ASSA FOETIDA)
                </h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      Asafoetida is a resin-like gum that originated in Iran. It
                      is a commonly used spice across the Indian subcontinent as
                      it helps digest protein and lends an onion-like flavor to
                      the food. In ancient times it was a prevalent spice and
                      herbal medicine in Europe but has gone out of fashion since
                      then, perhaps due to its pungent smell.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>
                      Asafoetida contains volatile oil, complex mixtures of
                      sesquiterpenes and monoterpenes and phenolic compounds such
                      as ammoresinol.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      With its powerful antioxidant properties (phenolic
                      compounds), it helps prevent free radical damage. It
                      promotes skin hydration. It also works as an
                      anti-inflammatory agent, improves the skin’s barrier
                      function, and may even shield skin from UV rays (terpenes).
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>Found is some of our Marine Clay Mask and few serums</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-17" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Ascorbyl_Methylsilanol_Pectinate_1.jpg?v=1659693310" id="" class="img-fluid" alt="ASCORBYL METHYLSILANOL PECTINATE" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Representative_picture.jpg?v=1659693345" id="" class="img-fluid" alt="ASCORBYL METHYLSILANOL PECTINATE" />
                </div>
              </div>
            </div>

            <div class="columns mobile_ingredient_img">
              <h3 class="mobile_ingredient_name">
                ASCORBYL METHYLSILANOL PECTINATE
              </h3>

              <div class="ingredient_img slick-initialized slick-slider">
                <div class="">
                  <div class="" style="width: 0px; transform: translate3d(0px, 0px, 0px)">
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Representative_picture_380x.jpg?v=1659693345" id="" class="img-fluid" alt="ASCORBYL METHYLSILANOL PECTINATE" />
                    </div>
                    <div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Ascorbyl_Methylsilanol_Pectinate_1_380x.jpg?v=1659693310" id="" class="img-fluid" alt="ASCORBYL METHYLSILANOL PECTINATE" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="0">
                      <img src="//www.aminu.life/cdn/shop/files/Representative_picture_380x.jpg?v=1659693345" id="" class="img-fluid" alt="ASCORBYL METHYLSILANOL PECTINATE" />
                    </div>
                    <div class="slick-slide slick-cloned" data-slick-index="2" id="" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Ascorbyl_Methylsilanol_Pectinate_1_380x.jpg?v=1659693310" id="" class="img-fluid" alt="ASCORBYL METHYLSILANOL PECTINATE" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Representative_picture_380x.jpg?v=1659693345" id="" class="img-fluid" alt="ASCORBYL METHYLSILANOL PECTINATE" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">
                  ASCORBYL METHYLSILANOL PECTINATE
                </h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      This molecule delivers Vitamin C &amp; silicium to deeper
                      layers of skin. The silicium stimulates the production of
                      collagen fibers Vitamin C delivered in the dermis helps
                      boost collagen production &amp; reduce oxidative stress in
                      the dermis, keeping it elastic, voluminous, and radiant. The
                      molecule also stimulates the growth of keratinocytes (cells
                      that make the epidermis – the top layer of skin) to increase
                      skin protection and its natural moisture level.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>
                      The molecule has three parts – a derivative of Vitamin C
                      (ascorbic acid), the silicium core, and the pectin
                      (water-soluble carbohydrates found in certain plants)
                      derivative.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      It is not enough to topically apply super ingredients such
                      as Vitamin C if you want to prevent oxidative damage to your
                      skin. It is also important that they penetrate and reach the
                      right place in your skin. The skin gets its shape and
                      structure from the dermis - the second layer of skin. To
                      prevent premature aging and maintain healthy glowing skin,
                      it is therefore vital to deliver active molecules such as
                      Vitamin C and silicium to the dermis. This is what this
                      superhero molecule does - fights causes of dull, tired,
                      aging skin at the root.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>Longevity Serum</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-18" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Ascorbyl_Methylsilanol_Pectinate_1.jpg?v=1659693310" id="" class="img-fluid" alt="ASCORBYL TETRAISOPALMITATE" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Representative_picture.jpg?v=1659693345" id="" class="img-fluid" alt="ASCORBYL TETRAISOPALMITATE" />
                </div>
              </div>
            </div>

            <div class="columns mobile_ingredient_img">
              <h3 class="mobile_ingredient_name">ASCORBYL TETRAISOPALMITATE</h3>

              <div class="ingredient_img slick-initialized slick-slider">
                <div class="">
                  <div class="" style="width: 0px; transform: translate3d(0px, 0px, 0px)">
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Representative_picture_380x.jpg?v=1659693345" id="" class="img-fluid" alt="ASCORBYL TETRAISOPALMITATE" />
                    </div>
                    <div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Ascorbyl_Methylsilanol_Pectinate_1_380x.jpg?v=1659693310" id="" class="img-fluid" alt="ASCORBYL TETRAISOPALMITATE" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="0">
                      <img src="//www.aminu.life/cdn/shop/files/Representative_picture_380x.jpg?v=1659693345" id="" class="img-fluid" alt="ASCORBYL TETRAISOPALMITATE" />
                    </div>
                    <div class="slick-slide slick-cloned" data-slick-index="2" id="" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Ascorbyl_Methylsilanol_Pectinate_1_380x.jpg?v=1659693310" id="" class="img-fluid" alt="ASCORBYL TETRAISOPALMITATE" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Representative_picture_380x.jpg?v=1659693345" id="" class="img-fluid" alt="ASCORBYL TETRAISOPALMITATE" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">
                  ASCORBYL TETRAISOPALMITATE
                </h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      All skincare products use some derivative of Vitamin C
                      because the pure form of Vit C is highly unstable. Ascorbyl
                      Tetraisopalmitate (ATP) is the most stable derivative of
                      ascorbic acid (Vitamin C) and with very high
                      bio-availability. It can be absorbed into deeper layers of
                      skin and effectively transformed into Vitamin C, the actual
                      form that the skin needs. Unlike other derivatives, it is
                      also oil soluble.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>It is an esterified derivative of ascorbic acid.</p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      ATP can reach deeper layers of skin, accelerate collagen
                      production, and prevent free radical damage in deeper
                      layers. Unlike L-Ascorbic acid (another potent derivative of
                      Vitamin C), ATP does not irritate the skin and is
                      comfortably taken by even the most sensitive skin types and
                      synergistically with the antioxidant Vitamin E. It can
                      produce better results even when used in doses 25 times
                      lower than ascorbic acid.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>Multivitamin Cream, Radiance Face Oil</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-19" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Ashwagandha_1.jpg?v=1659693575" id="" class="img-fluid" alt="ASHWAGANDHA (WITHANIA SOMNIFERA)" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Ashwagandha_Withania_WithaniaSomnifera_img201_07_2021_08_37_10_162.png?v=1659693614" id="" class="img-fluid" alt="ASHWAGANDHA (WITHANIA SOMNIFERA)" />
                </div>
              </div>
            </div>

            <div class="columns mobile_ingredient_img">
              <h3 class="mobile_ingredient_name">
                ASHWAGANDHA (WITHANIA SOMNIFERA)
              </h3>

              <div class="ingredient_img slick-initialized slick-slider">
                <div class="">
                  <div class="" style="width: 0px; transform: translate3d(0px, 0px, 0px)">
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Ashwagandha_Withania_WithaniaSomnifera_img201_07_2021_08_37_10_162_380x.png?v=1659693614" id="" class="img-fluid" alt="ASHWAGANDHA (WITHANIA SOMNIFERA)" />
                    </div>
                    <div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Ashwagandha_1_380x.jpg?v=1659693575" id="" class="img-fluid" alt="ASHWAGANDHA (WITHANIA SOMNIFERA)" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="0">
                      <img src="//www.aminu.life/cdn/shop/files/Ashwagandha_Withania_WithaniaSomnifera_img201_07_2021_08_37_10_162_380x.png?v=1659693614" id="" class="img-fluid" alt="ASHWAGANDHA (WITHANIA SOMNIFERA)" />
                    </div>
                    <div class="slick-slide slick-cloned" data-slick-index="2" id="" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Ashwagandha_1_380x.jpg?v=1659693575" id="" class="img-fluid" alt="ASHWAGANDHA (WITHANIA SOMNIFERA)" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Ashwagandha_Withania_WithaniaSomnifera_img201_07_2021_08_37_10_162_380x.png?v=1659693614" id="" class="img-fluid" alt="ASHWAGANDHA (WITHANIA SOMNIFERA)" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">
                  ASHWAGANDHA (WITHANIA SOMNIFERA)
                </h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      The use of Withania (Ashwagandha) goes back more than 3,000
                      years. In Ayurveda, it is considered a rejuvenating and
                      life-extending herb. This herb supports the skin &amp; body
                      like Siberian ginseng, Panax ginseng to fight stress.&nbsp;
                      Hence, it is known as Indian "Ginseng".
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>
                      It has a high concentration of alkaloids (skin tightening),
                      steroidal lactones (anti-stress), tannins (anti-bacterial),
                      and saponins (cleansing).
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      Ashwagandha works holistically on the entire body to restore
                      balance and help it to function efficiently. Similarly, it
                      works holistically on the skin. It protects the skin from
                      free radical damage, reduces stress in skin cells, slows
                      down the aging process, and gives skin a youthful look. It
                      inhibits excess oil secretion, dark spots, wrinkles, and
                      fine lines and makes the skin look more radiant and clear.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>Found in our phyto nutrient oil</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-20" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Molecule.jpg?v=1659693834" id="" class="img-fluid" alt="AZELAMIDOPROPYL DIMETHYL AMINE" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Anti_acne_icon_9cc2fbca-0b36-4889-b954-bd52289363d9.png?v=1659693855" id="" class="img-fluid" alt="AZELAMIDOPROPYL DIMETHYL AMINE" />
                </div>
              </div>
            </div>

            <div class="columns mobile_ingredient_img">
              <h3 class="mobile_ingredient_name">
                AZELAMIDOPROPYL DIMETHYL AMINE
              </h3>

              <div class="ingredient_img slick-initialized slick-slider">
                <div class="">
                  <div class="" style="width: 0px; transform: translate3d(0px, 0px, 0px)">
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Anti_acne_icon_9cc2fbca-0b36-4889-b954-bd52289363d9_380x.png?v=1659693855" id="" class="img-fluid" alt="AZELAMIDOPROPYL DIMETHYL AMINE" />
                    </div>
                    <div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Molecule_380x.jpg?v=1659693834" id="" class="img-fluid" alt="AZELAMIDOPROPYL DIMETHYL AMINE" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="0">
                      <img src="//www.aminu.life/cdn/shop/files/Anti_acne_icon_9cc2fbca-0b36-4889-b954-bd52289363d9_380x.png?v=1659693855" id="" class="img-fluid" alt="AZELAMIDOPROPYL DIMETHYL AMINE" />
                    </div>
                    <div class="slick-slide slick-cloned" data-slick-index="2" id="" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Molecule_380x.jpg?v=1659693834" id="" class="img-fluid" alt="AZELAMIDOPROPYL DIMETHYL AMINE" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Anti_acne_icon_9cc2fbca-0b36-4889-b954-bd52289363d9_380x.png?v=1659693855" id="" class="img-fluid" alt="AZELAMIDOPROPYL DIMETHYL AMINE" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">
                  AZELAMIDOPROPYL DIMETHYL AMINE
                </h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      It inhibits p-acne bacteria's growth, normalizes
                      bacteria-induced skin inflammation, controls facial sebum
                      excretion, and accelerates wound healing. It helps the skin
                      recover from post-acne scars by accelerating tissue repair
                      mechanism.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>It is a patented azelaic acid derivative molecule.</p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      It is a multi-dimensional specialty ingredient made for
                      acne-affected skin and helps cure and prevent acne from
                      multiple pathways. It is also known to show a visible
                      reduction in pore size and congestion in just a couple of
                      weeks.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>Clarifying Concentrate, Skin Perfecting Serum</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-21" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Blue-GreenAlgaeimg102_19_2021_11_59_18_540.png?v=1659694195" id="" class="img-fluid" alt="APHANIZOMENON FLOS-AQUAE EXTRACT (BLUE-GREEN ALGAE)" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Blue-GreenAlgae_AphanizomenonFlos-Aquae_img201_09_2021_02_10_41_596.jpg?v=1659694226" id="" class="img-fluid" alt="APHANIZOMENON FLOS-AQUAE EXTRACT (BLUE-GREEN ALGAE)" />
                </div>
              </div>
            </div>

            <div class="columns mobile_ingredient_img">
              <h3 class="mobile_ingredient_name">
                APHANIZOMENON FLOS-AQUAE EXTRACT (BLUE-GREEN ALGAE)
              </h3>

              <div class="ingredient_img slick-initialized slick-slider">
                <div class="">
                  <div class="" style="width: 0px; transform: translate3d(0px, 0px, 0px)">
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Blue-GreenAlgae_AphanizomenonFlos-Aquae_img201_09_2021_02_10_41_596_380x.jpg?v=1659694226" id="" class="img-fluid" alt="APHANIZOMENON FLOS-AQUAE EXTRACT (BLUE-GREEN ALGAE)" />
                    </div>
                    <div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Blue-GreenAlgaeimg102_19_2021_11_59_18_540_380x.png?v=1659694195" id="" class="img-fluid" alt="APHANIZOMENON FLOS-AQUAE EXTRACT (BLUE-GREEN ALGAE)" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="0">
                      <img src="//www.aminu.life/cdn/shop/files/Blue-GreenAlgae_AphanizomenonFlos-Aquae_img201_09_2021_02_10_41_596_380x.jpg?v=1659694226" id="" class="img-fluid" alt="APHANIZOMENON FLOS-AQUAE EXTRACT (BLUE-GREEN ALGAE)" />
                    </div>
                    <div class="slick-slide slick-cloned" data-slick-index="2" id="" aria-hidden="true" tabindex="-1" style="width: 0px">
                      <img src="//www.aminu.life/cdn/shop/files/Blue-GreenAlgaeimg102_19_2021_11_59_18_540_380x.png?v=1659694195" id="" class="img-fluid" alt="APHANIZOMENON FLOS-AQUAE EXTRACT (BLUE-GREEN ALGAE)" />
                    </div>
                    <div style="border-left: 1px solid rgb(0, 0, 0); width: 0.8px" class="slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" tabindex="-1">
                      <img src="//www.aminu.life/cdn/shop/files/Blue-GreenAlgae_AphanizomenonFlos-Aquae_img201_09_2021_02_10_41_596_380x.jpg?v=1659694226" id="" class="img-fluid" alt="APHANIZOMENON FLOS-AQUAE EXTRACT (BLUE-GREEN ALGAE)" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">
                  APHANIZOMENON FLOS-AQUAE EXTRACT (BLUE-GREEN ALGAE)
                </h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      One of the few edible micro plants, it is considered one of
                      the highest nutrient food (by weight) in the world. It is
                      wild-harvested from Klamath Lake in Northwest USA and then
                      purified using micro-filtration technology.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>
                      It contains several quinones, carotenoids (epidermal
                      regeneration), amino acids such as glycine, histidine,
                      alanine, lysine, and vitamin B12, E &amp; K. It is the only
                      vegetable source of Vitamin B12.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      It is a potent natural alternative to retinol that works
                      through a similar mechanism without the side effects of
                      synthetic retinol. It is known to show clinically proven
                      wrinkle reduction after only 21 days.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>
                      Night Repair Cream, Bio-Retinol Cream, Hand &amp; Neck Cream
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="b" class="tabcontent ourIngredientTab" style="display: none">
        <input type="hidden" value="b" />
        <div class="al-flex">
          <div class="tab2">
            <button type="button" class="tablinks2">
              <h4>BAKUCHIOL</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>BEHENYL ALCOHOL</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>BERGAMOT (CITRUS BERGAMIA)</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>BILLBERRY (VACCINIUM MYRTILLUS)</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>
                BIOFERM RED OIL (SACCHAROMYCES/LITHOSPERMUM ERYTHRORHIZON ROOT OIL
                FERMENT FILTERATE)
              </h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>BISABOLOL (ALPHA-BISABOLOL)</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>BLACK CUMIN (NIGELLA SATIVA)</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>BLACK MULBERRY (MORUS NIGRA)</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>BLACK SILT</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>BLACKBERRY (MORUS NIGRA)</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>BLUE TANSY (TANACETUM ANNUUM)</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>BORAGE OIL (BORAGO OFFICINALIS)</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>BROMELIN</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>BROUSSONETIA KAZINOKI ROOT EXTRACT</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>BROWN SUGAR</h4>
            </button>

            <button type="button" class="tablinks2">
              <h4>BUTYLENE GLYCOL</h4>
            </button>
          </div>

          <div id="cstm-22" class="tabcontent2" style="display: block">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Bakuchiol_1.jpg?v=1659694490" id="" class="img-fluid" alt="BAKUCHIOL" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Bakuchiolimg203_02_2021_06_26_16_302.png?v=1659694495" id="" class="img-fluid" alt="BAKUCHIOL" />
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">BAKUCHIOL</h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      Bakuchiol has always been a center-piece of Ayurveda and has
                      taken the world of anti-aging skincare by storm in the last
                      few years. The jury is still out there whether it is more
                      effective than retinol or not. However, more importantly, it
                      has shown collagen boosting activity and much less
                      irritation than retinol, and thus with more frequent use, it
                      can give similar results without major side effects. Dubbed
                      as a natural alternative to retinol, it is derived from the
                      Indian Babchi tree.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>Bakuchiol is a meroterpene in the class terpenophenol.</p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      Bakuchiol possesses antioxidant, anti-inflammatory, and
                      anti-bacterial properties. It has been known that bakuchiol
                      shows retinoic acid (a bio-active form of retinol that is
                      used by skin) like properties in boosting collagen
                      production but without being as irritating as retinol
                      (precursor of retinoic acid).
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>
                      Bio-Retinol Cream, Night Repair Cream, Radiance Face Oil
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-23" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Behenyl_Alcohol_1.jpg?v=1659694651" id="" class="img-fluid" alt="BEHENYL ALCOHOL" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Hydration_2.jpg?v=1659694653" id="" class="img-fluid" alt="BEHENYL ALCOHOL" />
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">BEHENYL ALCOHOL</h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      A widely used as a humectant and solvent in skin care
                      products. US FDA considers it safe even as a food additive.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>It is an organic alcohol molecule.</p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      A (good) alcohol, it attracts water molecules and thus keeps
                      the skin hydrated. It acts as a solubilize - improves the
                      spreadability and effectiveness of the entire product.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>Found in all our creams</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-24" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Bergamotimg102_20_2021_02_28_01_227.png?v=1659694870" id="" class="img-fluid" alt="BERGAMOT (CITRUS BERGAMIA)" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Bergamotimg212_13_2021_07_14_13_113.jpg?v=1659694871" id="" class="img-fluid" alt="BERGAMOT (CITRUS BERGAMIA)" />
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">
                  BERGAMOT (CITRUS BERGAMIA)
                </h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      Bergamot is a fragrant citrus fruit and is often considered
                      the most delicate of the citrus plants. To be honest, I
                      drink Earl Grey tea only because of the hint of bergamot in
                      it, which is so refreshing on a dreary afternoon.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>
                      The main compounds in the oil are limonene (anti-oxidant),
                      linalyl acetate (anti-inflammatory), linalool (analgesic),
                      ?-terpinene (free radical scavenging property), and ß-pinene
                      (anti-depressant, anti-microbial).
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      Bergamot peel oil exhibits anti-bacterial, anti-inflammatory
                      and analgesic properties, making it a highly effective
                      ingredient to cure acne especially painful cystic acne. This
                      calming and uplifting aroma adds to the sensory experience.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>Antioxidant Body Scrub</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-25" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Billberry_1.png?v=1659695040" id="" class="img-fluid" alt="BILLBERRY (VACCINIUM MYRTILLUS)" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Billberry_2.jpg?v=1659695041" id="" class="img-fluid" alt="BILLBERRY (VACCINIUM MYRTILLUS)" />
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">
                  BILLBERRY (VACCINIUM MYRTILLUS)
                </h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      A native of Northern Europe &amp; North America, these
                      delightful little berries are considered a superfood and
                      have unique benefits as a skincare ingredient as well.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>
                      Bilberries contain high concentrations of anthocyanins
                      (flavonoids), hydroquinone, triterpenoids such as oleanolic
                      acid, ursolic acid, tannins, and resveratrol. It is also a
                      rich source of Vitamins A, B, C, and E.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      It protects against the skin from UV damage (flavonoids) and
                      skin permeation enhancer (terpenoids). Hydroquinone helps
                      lighten freckles, age spots, and decreases the formation of
                      melanin in the skin. Bilberry extract also helps remove
                      excess oil (vitamins and tannins) from the skin.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>AHA Power Peel, AHA Face Wash, AHA Body Wash</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-26" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/BiofermRedOilimg102_19_2021_11_50_44_433.png?v=1659695957" id="" class="img-fluid" alt="BIOFERM RED OIL (SACCHAROMYCES/LITHOSPERMUM ERYTHRORHIZON ROOT OIL FERMENT FILTERATE)" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/BiofermRedOilimg212_13_2021_06_33_40_570.jpg?v=1659695959" id="" class="img-fluid" alt="BIOFERM RED OIL (SACCHAROMYCES/LITHOSPERMUM ERYTHRORHIZON ROOT OIL FERMENT FILTERATE)" />
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">
                  BIOFERM RED OIL (SACCHAROMYCES/LITHOSPERMUM ERYTHRORHIZON ROOT
                  OIL FERMENT FILTERATE)
                </h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      Lithospermum Erythrorhizon Root is popular as a medicinal
                      herb for ages in Korea. It is a versatile botanical gem that
                      has anti-irritation, antibacterial effect, antioxidant, and
                      moisture-locking properties. It has also been known that its
                      effectiveness surpasses wild ginseng as a multi-nutrient.
                      The oil extracted from the route is red in color because of
                      a pigment called Shikonin.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>
                      It has a high content of fatty acids such as linoleic,
                      linolenic, oleic, palmitic, and stearic acid.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      It has been claimed that bio-ferm red is more effective than
                      wild ginseng as a multi-nutrient. Further, the decomposition
                      of large oil molecules into smaller molecules by patented
                      fermentation technology makes the phytochemical compounds
                      more readily available for the skin. It is beneficial for
                      improving skin texture, skin barrier function, and hydrating
                      skin.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>
                      Nutrient Day Cream, Radiance Face Oil, Hand &amp; Neck Cream
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-27" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Bisabololimg102_19_2021_11_54_46_120.png?v=1659696353" id="" class="img-fluid" alt="BISABOLOL (ALPHA-BISABOLOL)" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Bisabol_2.jpg?v=1659696354" id="" class="img-fluid" alt="BISABOLOL (ALPHA-BISABOLOL)" />
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">
                  BISABOLOL (ALPHA-BISABOLOL)
                </h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      Alpha-bisabolol is one of the two components that makes
                      chamomile such a potent soothing agent (the other being
                      azulene). On their own, both of them are highly unstable,
                      and therefore the key is to stabilize them without losing
                      their efficacy.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>It is a natural terpenoid, also known as levomenol.</p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      We use it for its well-proven healing, soothing and
                      moisturizing properties. Further, it has also been shown
                      that it improves the penetration of other active
                      ingredients. In our formulations, we use naturally occurring
                      and stable alpha-bisabolol derived from German chamomile
                      oil.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>
                      Nutrient Day Cream, Night Repair Cream, Bio-Retinol Cream,
                      Nourishing Sleep Oil, Radiance Face Oil
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-28" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/BlackCuminimg102_19_2021_11_51_41_343.png?v=1659696520" id="" class="img-fluid" alt="BLACK CUMIN (NIGELLA SATIVA)" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/BlackCuminimg203_02_2021_06_29_39_453.png?v=1659696524" id="" class="img-fluid" alt="BLACK CUMIN (NIGELLA SATIVA)" />
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">
                  BLACK CUMIN (NIGELLA SATIVA)
                </h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      Black Cumin is a herbaceous plant with white flowers grown
                      throughout Asia, including the Arabian Peninsula. It is
                      extensively used as a spice and traditional medicine across
                      Asia.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>
                      Thymoquinone is the most useful phytochemical found in black
                      cumin.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      We have incorporated black cumin extract for its excellent
                      anti-inflammatory and anti-bacterial properties
                      (thymoquinone) as part of our anti-acne cohort.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>Clarifying Serum</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-29" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/BlackMulberryimg102_19_2021_11_55_59_546.png?v=1659696689" id="" class="img-fluid" alt="BLACK MULBERRY (MORUS NIGRA)" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Black_mulberry_2.jpg?v=1659696691" id="" class="img-fluid" alt="BLACK MULBERRY (MORUS NIGRA)" />
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">
                  BLACK MULBERRY (MORUS NIGRA)
                </h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      Black mulberry is a flowering plant native to Southwest Asia
                      and the Iberian (Spain &amp; Portugal) peninsula and today
                      widely grows from Portugal to India. Its edible fruit is
                      used to make jams, sherbets, and the leaf extract is a
                      useful ingredient in skincare.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>
                      The primary fatty acids found in mulberry fruits are
                      linoleic acid, palmitic acid, and oleic acid (omega 9). It
                      also contains high concentrations of phenols (anti-oxidant),
                      flavonoids, and ascorbic acid (skin lightening).
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      The black mulberry leaf extract effectively reduces
                      inflammation, pore size and controlling melanin production
                      (pigmentation) in the skin. These three activities help
                      prevent acne scarring and make it a potent ingredient for
                      the anti-acne or post-acne regime.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>Found in most of our cleansers and serums</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-30" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Black_silt_1.jpg?v=1660036380" id="" class="img-fluid" alt="BLACK SILT" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Black_silt_2.jpg?v=1659696855" id="" class="img-fluid" alt="BLACK SILT" />
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">BLACK SILT</h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      Silt is a finely dispersed hydrated organic multi-component
                      colloid of fresh water sediments, chock full of rich humic
                      acids and other bioactive compounds. Glaciers and winds
                      would transport rock fragments into rivers that had been
                      grinding over time to create finer particles into powdery,
                      smaller than individual grains of sand yet larger than clay
                      particles. Being at just about less than .002 inch across,
                      the Silt settles in still water, containing mineral
                      intrinsic to its structure that enhances water retention and
                      air circulation. Silt’s absorbent nature helps it function
                      to absorb excess surface oil.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>
                      Black Silt, because its unique molecular composition of
                      magnesium, calcium, potassium, strontium, boron, and iron
                      pulls out toxins and impurities while nourishing the skin
                      with rich nutrients and minerals.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      Black Silt is a finely structured colloid that spreads
                      easily and leaves a fresh after-feel. It improves the
                      surface characteristics of the skin, creating a more even
                      skin tone and increasing moisture levels while
                      simultaneously reducing sebum content. Regular use helps
                      promote cell oxygenation which imparts freshness, firmness
                      and uniformity to the skin.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>Nordic Mud Mask</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-31" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Black_berry_1.jpg?v=1659697015" id="" class="img-fluid" alt="BLACKBERRY (MORUS NIGRA)" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Blackberry_MorusNigra_img201_09_2021_01_25_26_271.png?v=1659697054" id="" class="img-fluid" alt="BLACKBERRY (MORUS NIGRA)" />
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">BLACKBERRY (MORUS NIGRA)</h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      These edible berries have been known to humankind for more
                      than 2500 years and have a long history in the western world
                      as folk medicine. Fun fact, the little black fruit is
                      technically not a berry. Botanically it is called an
                      aggregate fruit, composed of small drupelets.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>
                      Blackberry fruit extract contains high levels of
                      anthocyanins, phenolic compounds. It is also a rich source
                      of Vitamin A, B, C, E, and K. It also contains trace
                      minerals such as potassium, magnesium, and calcium.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      We have used blackberry extract in several of our nourishing
                      formulas for their strong anti-oxidative (phenolic
                      compounds), anti-aging &amp; anti-pigmentation properties,
                      and skin repair functions (Vitamin A &amp; K). It may also
                      help reduce the appearance of stretch marks.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>Found in most of our cleansers and serums</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-32" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/BlueTansyimg102_19_2021_11_58_09_287.png?v=1659697171" id="" class="img-fluid" alt="BLUE TANSY (TANACETUM ANNUUM)" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Blue_tansy_2.jpg?v=1659697172" id="" class="img-fluid" alt="BLUE TANSY (TANACETUM ANNUUM)" />
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">
                  BLUE TANSY (TANACETUM ANNUUM)
                </h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      Originally wild-harvested in the Mediterranean region, the
                      blue tansy flower is yellow. Known as the gentle cousin of
                      German Chamomile, today, it is mostly cultivated in Morocco
                      and known as Moroccan Chamomile. The oil gets its blue color
                      from azulene and has been used in traditional medicine and
                      aromatherapy. It has a sweet herbaceous note.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>
                      It has a high concentration of chamazulene (azulene
                      derivative), which exhibits excellent soothing activity.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      Blue Tansy oil is a powerful soothing agent and has powerful
                      anti-inflammatory activity due to high azulene content. We
                      have used it on our soothing skin targeted formulas.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>Nourishing Sleep Oil, Antioxidant Body Scrub</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-33" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Borage_oil_1.jpg?v=1659697314" id="" class="img-fluid" alt="BORAGE OIL (BORAGO OFFICINALIS)" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Borage_oil_2.jpg?v=1659697318" id="" class="img-fluid" alt="BORAGE OIL (BORAGO OFFICINALIS)" />
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">
                  BORAGE OIL (BORAGO OFFICINALIS)
                </h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      Known for its star-shaped blue flowers, this herb is native
                      to the Western Mediterranean region. Borage Oil, derived
                      from the plant's seeds, is said to have the highest GLA
                      content compared to other essential oils. In traditional
                      medicine, it has also been used to provide relief to eczema
                      and atopic dermatitis patients.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>
                      It contains fatty acids such as gamma-linolenic acid (GLA),
                      linoleic acid, oleic acid, palmitic acid, stearic acid,
                      eicosenoic acid, erucic acid, ALA and.d-tocopherol (vitamin
                      E), and several phenolic compounds.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      It is a botanical secret to healthy skin. It not only
                      restores moisture and smooths dry and damaged skin, but it
                      is also very effective in treating redness, inflammation and
                      is thus a boon for broken skin.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>Nourishing Sleep Oil</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-34" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Bromelinimg102_20_2021_02_38_24_709.png?v=1659697441" id="" class="img-fluid" alt="BROMELIN" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Bromelin_2.jpg?v=1659697443" id="" class="img-fluid" alt="BROMELIN" />
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">BROMELIN</h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      It is an enzyme extract naturally found in pineapple. It has
                      been traditionally used as medicine to relieve pain, aiding
                      digestion, and a food additive to tenderize meat. Though a
                      newcomer in the modern skincare world, it is gaining
                      popularity as a gentle exfoliator.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>
                      Bromelin is a protein-digesting (proteolytic) enzyme. It
                      contains thiol endopeptidases, phosphatases, glycosidase,
                      peroxidases, celluloses, glycoproteins, carbohydrates, and
                      several protease inhibitors.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      We have used bromelin in synergy with other plant-derived
                      enzymes for their exfoliation prowess. Natural enzymes
                      gently exfoliate dead and dull skin cells even below the
                      skin's surface, helping increase radiance, fade
                      pigmentation, and increase cell turnover rate.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>Vit B Enzyme Scrub</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-35" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/BroussonetiaKazinokiRootExtractimg102_20_2021_02_38_40_260.png?v=1659697557" id="" class="img-fluid" alt="BROUSSONETIA KAZINOKI ROOT EXTRACT" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Broussonetia_Kazinoki_Root_2.jpg?v=1659697558" id="" class="img-fluid" alt="BROUSSONETIA KAZINOKI ROOT EXTRACT" />
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">
                  BROUSSONETIA KAZINOKI ROOT EXTRACT
                </h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      Also known as paper mulberry, the Koreans traditionally used
                      its bark to make handmade paper. It is known to have
                      anti-inflammatory and depigmentation properties.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>
                      It has a high concentration of fatty acids such as linoleic
                      acid and palmitic acid, minerals, phenolic compounds such as
                      gallic, hydroxybenzoic, vanillic, chlorogenic, caffeic,
                      ferulic, flavonoids such as rutin, quercetin.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      We use it for its tyrosine inhibiting properties, which help
                      fade dark spots, make even the skin tone, strengthen the
                      skin's natural oil barrier. It is also a powerful
                      antioxidant.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>
                      Nutrient Day Cream, Correcting Concentrate, Hand &amp; Neck
                      Cream
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-36" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/BrownSugarimg102_19_2021_11_59_57_109.png?v=1659697668" id="" class="img-fluid" alt="BROWN SUGAR" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Brown_sugar_2.jpg?v=1659697662" id="" class="img-fluid" alt="BROWN SUGAR" />
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">BROWN SUGAR</h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      Sugar was first extracted from sugarcane plants in northern
                      India around 2000 years ago, and today sugarcane is the
                      largest source of sweetener in the world. Sugar derived from
                      sugarcane is brown due to the presence of molasses before it
                      is treated with chemicals to get white sugar. The untreated
                      or partially treated pre-cursor of white sugar that contains
                      brown molasses is known as brown sugar.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>
                      Brown sugar is 95% sucrose and 5% molasses. Brown sugar
                      contains more minerals such as calcium, iron, magnesium,
                      zinc, phosphorus than white sugar. It also contains Vitamin
                      B1, B2, B3, and B9.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      Brown sugar serves a dual purpose in our body exfoliators.
                      Its granulated particles gently exfoliate your skin,
                      clearing away dry and dead skin cells creating smoother
                      skin, and lends a youthful glow. As you run sugar crystals
                      on your body, the warmth melts the crystals and sugar
                      molecules, trace minerals &amp; vitamins seep into your
                      skin, helping it stay hydrated, healthy, and radiant
                      looking.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>Antioxidant Body Scrub</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cstm-37" class="tabcontent2" style="display: none">
            <div class="columns no-gutter desktop_ingredient_img">
              <div class="column-12">
                <div class="tabcontent2-img" style="border-right: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Butylene_Glycol.png?v=1659697777" id="" class="img-fluid" alt="BUTYLENE GLYCOL" />
                </div>
              </div>
              <div class="column-12">
                <div class="tabcontent2-img" style="border-left: 1px solid #000">
                  <img src="//www.aminu.life/cdn/shop/files/Humectant.jpg?v=1659697780" id="" class="img-fluid" alt="BUTYLENE GLYCOL" />
                </div>
              </div>
            </div>
            <div id="contentOurIng">
              <div class="tabcontent-text">
                <h3 class="desktop_ingredient_name">BUTYLENE GLYCOL</h3>

                <div class="tabcontent-text-box">
                  <h4 class="t">DESCRIPTION</h4>
                  <div class="">
                    <p>
                      A widely used as a humectant and solvent in skin care
                      products. US FDA considers it safe even as a food additive.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHAT IT CONTAINS</h4>
                  <div class="rte">
                    <p>It is an organic alcohol molecule.</p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">WHY WE CHOSE IT</h4>
                  <div class="rte">
                    <p>
                      A (good) alcohol, it attracts water molecules and thus keeps
                      the skin hydrated. It acts as a solubilize - improves the
                      spreadability and effectiveness of the entire product.
                    </p>
                  </div>
                </div>

                <div class="tabcontent-text-box">
                  <h4 class="t">FOUND INSIDE THE FORMULA OF</h4>
                  <div class="rte">
                    <p>Found mainly in our creams and serums</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Ingredient Search  -->
  <!-- Ingredient footer  -->
  <div id="the-shop" class="the-shop al-py-6 md:al-py-14">
    <div class="container">
      <div class="the-shop__content">
        <div class="section-heading">
          <h2 class="h1">The Shop //</h2>
        </div>

        <h2 class="ff-shadows">
          a green online shop dedicated to heal skin and<br />
          make you glow inside out
        </h2>

        <div class="the-shop__collection">
          <a class="feature-link" href="./collection.html">CHECK OUR COLLECTION
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- /Ingredient footer  -->
</main>



<?php get_footer() ?>