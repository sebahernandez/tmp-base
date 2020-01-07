<!--cargamos nuestro header  -->
<?php get_header(); ?>
  <!-- Main -->
  <section id="main">
    <header>
      <span class="avatar">
        <div class="slider_avatar">
          <div class="slider_avatar-item">
            <img src="<?= get_template_directory_uri() ?>/images/avatar.jpg" alt="Andersson Mesa" />
          </div>
          <div class="slider_avatar-item">
            <img src="<?= get_template_directory_uri() ?>/images/avatar2.jpg" alt="Andersson Mesa" />
          </div>
        </div>
        
      </span>
      <h1>Andersson Mesa</h1>
      <p>Desarrolador Frontend</p>
    </header>
    <footer>
      <ul class="icons">
        <li><a target="_black" href="https://twitter.com/andercard" class="fa-twitter">Twitter</a></li>
        <li><a target="_black" href="https://www.instagram.com/andercard/" class="fa-instagram">Instagram</a></li>
        <li><a target="_black" href="https://www.facebook.com/andercard22" class="fa-facebook">Facebook</a></li>
      </ul>
    </footer>
  </section>



<!--cargamos nuestro footer  -->
<?php get_footer(); ?>