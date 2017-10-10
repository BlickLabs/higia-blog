<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php bloginfo(title) ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php bloginfo(stylesheet_url); ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>

  <div id="page">
    <nav class="site-navbar">
      <div class="site-navbar__desktop-logo-container">
        <a href="index.html"><h1 class="higia-font-gtamericatrial-medium ">Higia Technologies</h1></a>
      </div>
      <div class="site-navbar__menu-trigger">
        <span class="fa fa-bars"></span>
      </div>
      <div class="site-navbar__menu-container">
        <div class="site-navbar-icon-close">
          <a id="navbar-close"><img src="<? echo get_template_directory_uri() . '/close.png' ?>"></a>
        </div>
        <div class="site-navbar__menu">
          <a href="index-es.html" class="site-navbar__menu-link  higia-font-helveticaneue-thin ">Home</a>
          <a href="eva-es.html" class="site-navbar__menu-link  higia-font-helveticaneue-thin ">Eva</a>
          <a href="about_us-es.html" class="site-navbar__menu-link  higia-font-helveticaneue-thin ">About Us</a>
          <a href="team-es.html" class="site-navbar__menu-link  higia-font-helveticaneue-thin ">Team</a>
          <a href="allies-es.html" class="site-navbar__menu-link  higia-font-helveticaneue-thin ">Allies</a>
          <a href="news-es.html" class="site-navbar__menu-link  active higia-font-helveticaneue-bold ">News</a>
          <a href="press-es.html" class="site-navbar__menu-link  higia-font-helveticaneue-thin ">Press</a>
          <a href="contact-es.html" class="site-navbar__menu-link  higia-font-helveticaneue-thin ">Contact</a>
        </div>
      </div>
    </nav>
    <main>
      <div class="news-container">
        <div class="news-header-wrapper">
          <div class="news-header">
            <h1 class="news-header-title higia-font-helveticaneue-bold">Latest news</h1>
            <p class="news-header-description higia-font-helveticaneue-thin">Here you will be able to find out about the latest and interesting news about Higia; articles, achievements, goals, contests and more. You can find all the details here!</p>
          </div>
        </div>

  <script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>

  <script type="text/javascript">
    (function () {
      var mobile = window.matchMedia('(max-width: 876px)'); // Change

      function detectTouch(e) {
        if (!$(e.target).is('.site-navbar__menu-trigger') && !$(e.target).is('.site-navbar__menu-container') && !$(e.target).closest('.site-navbar__menu-container').length && $('.site-navbar__menu-container').hasClass('site-navbar__menu-container--show-menu')) {
          e.preventDefault();
          $('.site-navbar__menu-container').removeClass('site-navbar__menu-container--show-menu');
          $('body').removeClass('noscroll');
        }
      }

      function detectClick() {
        if ($('.site-navbar__menu-container').hasClass('site-navbar__menu-container--show-menu')) {
          $('.site-navbar__menu-container').removeClass('site-navbar__menu-container--show-menu');
          $('body').removeClass('noscroll');
        } else {
          $('.site-navbar__menu-container').addClass('site-navbar__menu-container--show-menu');
          $('body').addClass('noscroll');
          console.log("Te amo Cesiah. Eres el amor de mi vida... :(");
        }
      }

      if (mobile.matches) {
        $('body')[0].addEventListener('touchstart', detectTouch, {passive: false});
        $('.site-navbar__menu-trigger').click(detectClick);
      } else {
        $('body')[0].removeEventListener('touchstart', detectTouch, {passive: false});
        $('.site-navbar__menu-trigger').off('click');
        $('body').removeClass('noscroll');
      }

      $(window).resize(function () {
        $('body')[0].removeEventListener('touchmove', detectTouch, {passive: false});
        $('.site-navbar__menu-trigger').off('click');
        $('body').removeClass('noscroll');
        $('.site-navbar__menu-container').removeClass('show-menu');

        if (mobile.matches) {
          $('body')[0].addEventListener('touchmove', detectTouch, {passive: false});
          $('.site-navbar__menu-trigger').click(detectClick);
        }
      });

      $('#navbar-close').on('click touchstart', function(e) {
        e.preventDefault();
        $('.site-navbar__menu-container').removeClass('site-navbar__menu-container--show-menu');
        $('body').removeClass('noscroll');
      })
    })();

  </script>
  