
<?php get_header(); ?>

  <section class="slider" style="background-image: url(<?php the_field('slider')?>);">
    <div class="container">
      <div class="slider__inner">
        <div class="slider__item">
          <div class="slider__item-content">
            <div class="slider__title">
            <?php the_field('slider__title-1')?>
            </div>
            <div class="slider__text">
            <?php the_field('slider__text-1')?>
            </div>
            <a data-fancybox data-src="#modal" href="javascript:;" class="slider__btn default-btn">
            <?php the_field('slider__btn-1')?>
            </a>
          </div>
        </div>
        <div class="slider__item">
          <div class="slider__item-content">
            <div class="slider__title">
            <?php the_field('slider__title-2')?>
            </div>
            <div class="slider__text">
            <?php the_field('slider__text-2')?>
            </div>
            <a data-fancybox data-src="#modal" href="javascript:;" class="slider__btn default-btn">
            <?php the_field('slider__btn-2')?>
            </a>
          </div>
        </div>
        <div class="slider__item">
          <div class="slider__item-content">
            <div class="slider__title">
            <?php the_field('slider__title-3')?>
            </div>
            <div class="slider__text">
            <?php the_field('slider__text-3')?>
            </div>
            <a data-fancybox data-src="#modal" href="javascript:;" class="slider__btn default-btn">
            <?php the_field('slider__btn-3')?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="services">
    <div class="container">
      <div class="services__top">
        <div class="services__title-box">
          <div class="services__title">
          <?php the_field('services__title')?>
          </div>
          <div class="services__text">
          <?php the_field('services__text')?>
          </div>
        </div>
        <div class="services__btn">
          <a href="#">
          <?php the_field('services__btn')?>
          </a>
        </div>
      </div>
      <div class="services__items">
        <div class="services__item">
          <img src="<?php the_field('services__item-1')?>" alt="services">
          <div class="services__item-title">
          <?php the_field('services__item-title-1')?>
          </div>
          <div class="services__item-text">
          <?php the_field('services__item-text-1')?>
          </div>
          <div class="services__item-btn">
            <a class="services__item-link" href="#"><?php the_field('services__item-link-1')?></a>
            <a data-fancybox data-src="#modal" href="javascript:;" class="default-btn">
            <?php the_field('services__item-btn-1')?>
            </a>
          </div>
        </div>
        <div class="services__item">
          <img src="<?php the_field('services__item-2')?>" alt="services">
          <div class="services__item-title">
          <?php the_field('services__item-title-2')?>
          </div>
          <div class="services__item-text">
          <?php the_field('services__item-text-2')?>
          </div>
          <div class="services__item-btn">
            <a class="services__item-link" href="#"><?php the_field('services__item-link-2')?></a>
            <a data-fancybox data-src="#modal" href="javascript:;" class="default-btn">
            <?php the_field('services__item-btn-2')?>
            </a>
          </div>
        </div>
        <div class="services__item">
          <img src="<?php the_field('services__item-3')?>" alt="services">
          <div class="services__item-title">
          <?php the_field('services__item-title-3')?>
          </div>
          <div class="services__item-text">
          <?php the_field('services__item-text-3')?>
          </div>
          <div class="services__item-btn">
            <a class="services__item-link" href="#"><?php the_field('services__item-link-3')?></a>
            <a data-fancybox data-src="#modal" href="javascript:;" class="default-btn">
            <?php the_field('services__item-btn-3')?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="about" style="background-image: url(<?php the_field('about')?>);">
    <div class="container">
      <div class="about__inner">
        <div class="about__title">
        <?php the_field('about__title')?>
        </div>
        <div class="about__text">
        <?php the_field('about__text')?>
        </div>
        <a href="#" class="about_btn default-btn"><?php the_field('about_btn')?></a>
      </div>
    </div>
  </section>
  <section class="form">
    <div class="container">
      <div class="form__inner" style="background-image: url(<?php the_field('form__inner')?>);">
        <div class="form__content">
          <div class="form__title-box">
            <div class="form__title">
            <?php the_field('form__title')?>
            </div>
            <div class="form__text">
            <?php the_field('form__text')?>
            </div>
          </div>
          <div class="form__box">
            <form>
              <div class="form__box-inner">
                <div class="form__box-left">
                  <label>
                    <?php the_field('form__box-text-1')?>
                    <input type="text">
                  </label>
                  <label>
                  <?php the_field('form__box-text-2')?>
                    <input type="text">
                  </label>
                  <label>
                  <?php the_field('form__box-text-3')?>
                    <input type="text">
                  </label>
                  <label>
                  <?php the_field('form__box-text-4')?>
                    <select>
                      <option>
                      <?php the_field('form__box-text-5')?>
                      </option>
                      <option>
                      <?php the_field('form__box-text-6')?>
                      </option>
                      <option>
                      <?php the_field('form__box-text-7')?>
                      </option>
                      <option>
                      <?php the_field('form__box-text-8')?>
                      </option>
                    </select>
                  </label>
                </div>
                <div class="fomr__box-right">
                  <label>
                  <?php the_field('form__box-text-9')?>
                    <textarea></textarea>
                  </label>
                  <button class="default-btn" type="submit">
                  <?php the_field('form__box-btn')?></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="advantages" style="background-image: url(<?php the_field('advantages-img')?>);">
    <div class="container">
      <div class="advantages__inner">
        <div class="advantages-item">
          <div class="advantages__title">
          <?php the_field('advantages__title-1')?>
          </div>
          <div class="advantages__text">
          <?php the_field('advantages__text-1')?>
          </div>
        </div>
        <div class="advantages-item">
          <div class="advantages__title">
          <?php the_field('advantages__title-2')?>
          </div>
          <div class="advantages__text">
          <?php the_field('advantages__text-2')?>
          </div>
        </div>
        <div class="advantages-item">
          <div class="advantages__title">
          <?php the_field('advantages__title-3')?>
          </div>
          <div class="advantages__text">
          <?php the_field('advantages__text-3')?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="news">
    <div class="container">
      <div class="news__top">
        <div class="news__title-box">
          <div class="news__title">
          <?php the_field('news__title')?>
          </div>
          <div class="news__text">
          <?php the_field('news__text')?>
          </div>
        </div>
        <div class="news__btn">
          <a href="#">
          <?php the_field('news__btn')?>
          </a>
        </div>
      </div>
      <div class="news__inner">
        <div class="news__slider">
          <div class="news__slider-inner">
            <div class="news__slider-item">
              <div class="news__slider-title">
              <?php the_field('news__slider-title-1')?>
              </div>
              <div class="news__slider-text">
              <?php the_field('news__slider-text-1')?>
              </div>
              <div class="news__slider-author">
              <?php the_field('news__slider-author-1')?>
              </div>
            </div>
            <div class="news__slider-item">
              <div class="news__slider-title">
              <?php the_field('news__slider-title-2')?>
              </div>
              <div class="news__slider-text">
              <?php the_field('news__slider-text-2')?>
              </div>
              <div class="news__slider-author">
              <?php the_field('news__slider-author-2')?>
              </div>
            </div>
            <div class="news__slider-item">
              <div class="news__slider-title">
              <?php the_field('news__slider-title-3')?>
              </div>
              <div class="news__slider-text">
              <?php the_field('news__slider-text-3')?>
              </div>
              <div class="news__slider-author">
              <?php the_field('news__slider-author-3')?>
              </div>
            </div>
          </div>
        </div>
        <a href="#" class="news__blog">
          <div class="news__images">
            <img src="<?php the_field('news__images-1')?>" alt="">
            <div class="news__date"><?php the_field('news__date-1')?></div>
          </div>

          <div class="news__blog-title">
          <?php the_field('news__blog-title-1')?>
          </div>
          <div class="news__blog-text">
          <?php the_field('news__blog-text-1')?>
          </div>
        </a>
        <a href="#" class="news__blog">
          <div class="news__images">
            <img src="<?php the_field('news__images-2')?>" alt="">
            <div class="news__date"><?php the_field('news__date-2')?></div>
          </div>
          <div class="news__blog-title">
          <?php the_field('news__blog-title-2')?>
          </div>
          <div class="news__blog-text">
          <?php the_field('news__blog-text-2')?>
          </div>
        </a>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>