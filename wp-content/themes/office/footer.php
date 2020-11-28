<footer class="footer">
    <div class="footer__content">
      <div class="container">
        <div class="footer__inner">
        <div class="footer__info">
          <div class="footer__title">
          <?php the_field('footer__title')?>
          </div>
          <div class="footer__text">
          <?php the_field('footer__text')?>
          </div>
          <a data-fancybox data-src="#modal" href="javascript:;" class="header__btn" href="#"><?php the_field('header__btn')?></a>
          <ul class="footer__list">
            <li><a class="footer__phone" href="tel:<?php the_field('header__phone')?>"><?php the_field('header__phone')?></a></li>
            <li><a href="#"><?php the_field('header__email')?></a></li>
            <li><a class="footer__adress" href="#"><?php the_field('footer__adress')?></a></li>
          </ul>
        </div>
        <div class="footer__map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.124391996489!2d30.364922015731644!3d50.457408279476354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cc919501b4ef%3A0x71a476f68f4c8246!2z0YPQuy4g0KTQtdC-0LTQvtGA0Ysg0J_Rg9GI0LjQvdC-0LksIDEzLCDQmtC40LXQsiwg0KPQutGA0LDQuNC90LAsIDAyMDAw!5e0!3m2!1sru!2sru!4v1602767487031!5m2!1sru!2sru" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
    </div>
    </div>
    <div class="footer__copy">
      <div class="container">
        <div class="copy__text">
        <?php the_field('copy__text')?>
        </div>
      </div>
    </div>
  </footer>
  <div id="modal">
    <form>
      <input type="text" placeholder="<?php the_field('text-1')?>">
      <input type="text" placeholder="<?php the_field('text-2')?>">
      <input type="submit" value="<?php the_field('submit')?>">
    </form>
  </div>


<?php wp_footer(); ?>

</body>

</html>