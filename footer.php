     </main>
     <footer class="site-footer ">
      <div class="footer-section_one">
        <h4 class="footer-title higia-font-helveticaneue-medium">Higia Technologies</h4>
      </div>
      <div class="footer-section_two">
        <a href="https://www.linkedin.com/company/higia-technologies" target="_blank">
          <img src="<?php echo get_template_directory_uri() . '/linkedin.svg" alt="Linkedin" class="social_media' ?>">
        </a>
        <a href="https://www.facebook.com/HigiaTech/" target="_blank">
          <img src="<?php echo get_template_directory_uri() . '/fb.svg' ?>" alt="Facebook" class="social_media">
        </a>
        <a href="https://twitter.com/Higia_Tech" target="_blank">
          <img src="<?php echo get_template_directory_uri() . '/twitter.svg' ?>" alt="Twitter" class="social_media">
        </a>
      </div>
      <div class="footer-section_three">
        <ul class="footer-nav_menu">
          <li class="nav_item  higia-font-helveticaneue-light ">
            <a href="eva.html">Eva</a>
          </li>
          <li class="nav_item  higia-font-helveticaneue-light ">
            <a href="about_us.html">About us</a>
          </li>
          <li class="nav_item  higia-font-helveticaneue-light ">
            <a href="team.html">Team</a>
          </li>
          <li class="nav_item  higia-font-helveticaneue-light ">
            <a href="allies.html">Allies</a>
          </li>
          <li class="nav_item  higia-font-helveticaneue-bold ">
            <a href="news.html">News</a>
          </li>
          <li class="nav_item  higia-font-helveticaneue-light ">
            <a href="press.html">Press</a>
          </li>
          <li class="nav_item  higia-font-helveticaneue-light ">
            <a href="contact.html">Contact</a>
          </li>
        </ul>
      </div>
      <div class="footer-section_four">
        <p class="footer-copy higia-font-helveticaneue-thin">© Copyright, Higia Technologies 2017<span id="license-year"></span></p>
      </div>
    </footer>
  </div>
</body>
<script type="text/javascript">
  var last_known_scroll_position = 0;
  var ticking = false;

  var siteNavbar = document.querySelector('.site-navbar');
  //navbar-fixed-top
  function doSomething(scroll_pos) {
    
    if (scroll_pos > 30) {
      siteNavbar.classList.add('nav-white-bg');
      siteNavbar.classList.remove('nav-transparent-bg');
    } else {
      siteNavbar.classList.add('nav-transparent-bg');
      siteNavbar.classList.remove('nav-white-bg');
    }

  }

  doSomething(window.scrollY);

  window.addEventListener('scroll', function(e) {
    if (e.view) {
      last_known_scroll_position = e.view.pageYOffset;
    }
    else {
      last_known_scroll_position = window.scrollY;
    }
    if (!ticking) {
      window.requestAnimationFrame(function() {
        doSomething(last_known_scroll_position);
        ticking = false
      });
    }
    ticking = true;
  });
</script>
</html>