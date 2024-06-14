    <?php
    get_header();
    ?>
    <main class="layout__main">
        <section class="news-list">
          <div class="news-list__wrapper">
            <div class="news-list__item">
                      <div class="news-article">
                        <h3 class="news-article__title">Уважаемые налогоплательщики заплатите налоги!</h3>
                        <div class="news-article__image-wrapper">
                            <img class="news-article__image" src="<?php echo get_template_directory_uri(); ?>/images/beach.jpg" alt="">
                        </div>
                        <p class="news-article__text">Межрайонная ИФНС России № 6 по Пермскому краю сообщает, что в связи с Указом Президента Российской Федерации от 20.10.2021 № 595 «Об установлении на территории Российской Федерации нерабочих дней...</p>
                        <div class="news-article__button-wrapepr"><a class="news-article__read-more" href="#">Читать далее </a></div>
                      </div>
            </div>
            <div class="news-list__item">
                      <div class="news-article">
                        <h3 class="news-article__title">Уважаемые налогоплательщики заплатите налоги!</h3>
                          <div class="news-article__image-wrapper">
                              <img class="news-article__image" src="<?php echo get_template_directory_uri(); ?>/images/school.jpg" alt="">
                          </div>
                        <p class="news-article__text">Межрайонная ИФНС России № 6 по Пермскому краю сообщает, что в связи с Указом Президента Российской Федерации от 20.10.2021 № 595 «Об установлении на территории Российской Федерации нерабочих дней...</p>
                        <div class="news-article__button-wrapepr"><a class="news-article__read-more" href="#">Читать далее </a></div>
                      </div>
            </div>
            <div class="news-list__item">
                      <div class="news-article">
                        <h3 class="news-article__title">Уважаемые налогоплательщики заплатите налоги!</h3>
                          <div class="news-article__image-wrapper">
                              <img class="news-article__image" src="<?php echo get_template_directory_uri(); ?>/images/adm.jpg" alt="">
                          </div>
                        <p class="news-article__text">Межрайонная ИФНС России № 6 по Пермскому краю сообщает, что в связи с Указом Президента Российской Федерации от 20.10.2021 № 595 «Об установлении на территории Российской Федерации нерабочих дней...</p>
                        <div class="news-article__button-wrapepr"><a class="news-article__read-more" href="#">Читать далее </a></div>
                      </div>
            </div>
          </div><a class="news-list__all" href="#">Все новости</a>
        </section>
      </main>

      <aside class="layout__aside --left">
        <div class="layout__aside-switch">
          <div class="layout__aside-switch-wrapper js-aside-switch"> 
            <div class="layout__aside-switch-button js-aside-switch-button">Разделы</div>
            <div class="layout__aside-visually">
              <div class="visually-impaired"></div>
            </div>
          </div>
        </div>
        <div class="layout__aside-wrapper js-aside-wrapper --hide">

            <?php
            wp_nav_menu([
                'theme_location' => 'left-sidebar',
                'menu_class' => 'side-bar',
                'container' => false,
                'items_wrap' => '<ul class="side-bar">%3$s</ul>',
            ]);
            ?>

        </div>
      </aside>

      <aside class="layout__aside --right">
        <div class="layout__aside-wrapper js-aside-wrapper --hide">
            <?php
            wp_nav_menu([
                'theme_location' => 'right-sidebar',
                'menu_class' => 'side-bar',
                'container' => false,
                'items_wrap' => '<ul class="side-bar">%3$s</ul>',
            ]);
            ?>
        </div>
      </aside>

      <section class="layout__banners">
        <div class="banners-list swiper js-banner-slider">
          <div class="banners-list__wrapper swiper-wrapper">
            <div class="banners-list__item swiper-slide"><a class="banner" href="#"><img class="banner__img" src="<?php echo get_template_directory_uri(); ?>/images/banners/3.jpg" alt="баннер"></a>
            </div>
            <div class="banners-list__item swiper-slide"><a class="banner" href="#"><img class="banner__img" src="<?php echo get_template_directory_uri(); ?>/images/banners/1.jpg" alt="баннер"></a>
            </div>
            <div class="banners-list__item swiper-slide"><a class="banner" href="#"><img class="banner__img" src="<?php echo get_template_directory_uri(); ?>/images/banners/2.jpg" alt="баннер"></a>
            </div>
            <div class="banners-list__item swiper-slide"><a class="banner" href="#"><img class="banner__img" src="<?php echo get_template_directory_uri(); ?>/images/banners/4.jpg" alt="баннер"></a>
            </div>
            <div class="banners-list__item swiper-slide"><a class="banner" href="#"><img class="banner__img" src="<?php echo get_template_directory_uri(); ?>/images/banners/1.jpg" alt="баннер"></a>
            </div>
            <div class="banners-list__item swiper-slide"><a class="banner" href="#"><img class="banner__img" src="<?php echo get_template_directory_uri(); ?>/images/banners/2.jpg" alt="баннер"></a>
            </div>
            <div class="banners-list__item swiper-slide"><a class="banner" href="#"><img class="banner__img" src="<?php echo get_template_directory_uri(); ?>/images/banners/4.jpg" alt="баннер"></a>
            </div>
          </div>
          <div class="banners-list__next swiper-button-next"></div>
          <div class="banners-list__prev swiper-button-prev"></div>
        </div>
      </section>

    <?php
        get_footer();
    ?>