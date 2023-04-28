


<style>
  /*
  Theme Name: BizPage
  Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  Author: BootstrapMade.com
  License: https://bootstrapmade.com/license/
*/
/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
body {
    color: #666666;
    font-family: "Open Sans", sans-serif;
  }
  
  a {
    color: #18d26e;
    transition: 0.5s;
  }
  
  a:hover, a:active, a:focus {
    color: #18d36e;
    outline: none;
    text-decoration: none;
  }
  
  p {
    padding: 0;
    margin: 0 0 30px 0;
  }
  
  h1, h2, h3, h4, h5, h6 {
    font-family: "Montserrat", sans-serif;
    font-weight: 400;
    margin: 0 0 20px 0;
    padding: 0;
  }
  
  /* Back to top button */
  .back-to-top {
    position: fixed;
    display: none;
    background: #18d26e;
    color: #fff;
    display: inline-block;
    width: 44px;
    height: 44px;
    text-align: center;
    line-height: 1;
    font-size: 16px;
    border-radius: 50%;
    right: 15px;
    bottom: 15px;
    transition: background 0.5s;
    z-index: 11;
  }
  
  .back-to-top i {
    padding-top: 12px;
    color: #fff;
  }
  
  @media (max-width: 768px) {
    .back-to-top {
      bottom: 15px;
    }
  }
  
  /*--------------------------------------------------------------
  # Header
  --------------------------------------------------------------*/
  #header {
    padding: 30px 0;
    height: 92px;
    position: fixed;
    left: 0;
    top: 0;
    right: 0;
    transition: all 0.5s;
    z-index: 997;
  }
  
  #header.header-scrolled {
    background: rgba(0, 0, 0, 0.9);
    padding: 20px 0;
    height: 72px;
    transition: all 0.5s;
  }
  
  #header #logo {
    float: left;
  }
  
  @media (min-width: 1024px) {
    #header #logo {
      padding-left: 60px;
    }
  }
  
  #header #logo h1 {
    font-size: 34px;
    margin: 0;
    padding: 0;
    line-height: 1;
    font-family: "Montserrat", sans-serif;
    font-weight: 700;
    letter-spacing: 3px;
  }
  
  #header #logo h1 a, #header #logo h1 a:hover {
    color: #fff;
    padding-left: 10px;
    border-left: 4px solid #18d26e;
  }
  
  #header #logo img {
    padding: 0;
    margin: 0;
  }
  
  @media (max-width: 768px) {
    #header #logo h1 {
      font-size: 28px;
    }
    #header #logo img {
      max-height: 40px;
    }
  }
  
  /*--------------------------------------------------------------
  # Intro Section
  --------------------------------------------------------------*/
  #intro {
    display: table;
    width: 100%;
    height: 100vh;
    background: #000;
  }
  
  #intro .carousel-item {
    width: 100%;
    height: 100vh;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }
  
  #intro .carousel-item::before {
    content: '';
    background-color: rgba(0, 0, 0, 0.7);
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
  }
  
  #intro .carousel-container {
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
  }
  
  #intro .carousel-content {
    text-align: center;
  }
  
  #intro h2 {
    color: #fff;
    margin-bottom: 30px;
    font-size: 48px;
    font-weight: 700;
  }
  
  @media (max-width: 768px) {
    #intro h2 {
      font-size: 28px;
    }
  }
  
  #intro p {
    width: 80%;
    margin: 0 auto 30px auto;
    color: #fff;
  }
  
  @media (min-width: 1024px) {
    #intro p {
      width: 60%;
    }
  }
  
  #intro .carousel-fade .carousel-inner .carousel-item {
    -webkit-transition-property: opacity;
    transition-property: opacity;
  }
  
  #intro .carousel-fade .carousel-inner .carousel-item,
  #intro .carousel-fade .carousel-inner .active.carousel-item-left,
  #intro .carousel-fade .carousel-inner .active.carousel-item-right {
    opacity: 0;
  }
  
  #intro .carousel-fade .carousel-inner .active,
  #intro .carousel-fade .carousel-inner .carousel-item-next.carousel-item-left,
  #intro .carousel-fade .carousel-inner .carousel-item-prev.carousel-item-right {
    opacity: 1;
    transition: 0.5s;
  }
  
  #intro .carousel-fade .carousel-inner .carousel-item-next,
  #intro .carousel-fade .carousel-inner .carousel-item-prev,
  #intro .carousel-fade .carousel-inner .active.carousel-item-left,
  #intro .carousel-fade .carousel-inner .active.carousel-item-right {
    left: 0;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  
  #intro .carousel-control-prev, #intro .carousel-control-next {
    width: 10%;
  }
  
  @media (min-width: 1024px) {
    #intro .carousel-control-prev, #intro .carousel-control-next {
      width: 5%;
    }
  }
  
  #intro .carousel-control-next-icon, #intro .carousel-control-prev-icon {
    background: none;
    font-size: 32px;
    line-height: 1;
  }
  
  #intro .carousel-indicators li {
    cursor: pointer;
  }
  
  #intro .btn-get-started {
    font-family: "Montserrat", sans-serif;
    font-weight: 500;
    font-size: 16px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 8px 32px;
    border-radius: 50px;
    transition: 0.5s;
    margin: 10px;
    color: #fff;
    background: #18d26e;
  }
  
  #intro .btn-get-started:hover {
    background: #fff;
    color: #18d26e;
  }
  
  /*--------------------------------------------------------------
  # Navigation Menu
  --------------------------------------------------------------*/
  /* Nav Menu Essentials */
  .nav-menu, .nav-menu * {
    margin: 0;
    padding: 0;
    list-style: none;
  }
  
  .nav-menu ul {
    position: absolute;
    display: none;
    top: 100%;
    left: 0;
    z-index: 99;
  }
  
  .nav-menu li {
    position: relative;
    white-space: nowrap;
  }
  
  .nav-menu > li {
    float: left;
  }
  
  .nav-menu li:hover > ul,
  .nav-menu li.sfHover > ul {
    display: block;
  }
  
  .nav-menu ul ul {
    top: 0;
    left: 100%;
  }
  
  .nav-menu ul li {
    min-width: 80px;
  }
  
  /* Nav Menu Arrows */
  .sf-arrows .sf-with-ul {
    padding-right: 30px;
  }
  
  .sf-arrows .sf-with-ul:after {
    content: "\f107";
    position: absolute;
    right: 15px;
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
  }
  
  .sf-arrows ul .sf-with-ul:after {
    content: "\f105";
  }
  
  /* Nav Meu Container */
  #nav-menu-container {
    float: right;
    margin: 0;
  }
  
  @media (min-width: 1024px) {
    #nav-menu-container {
      padding-right: 60px;
    }
  }
  
  @media (max-width: 768px) {
    #nav-menu-container {
      display: none;
    }
  }
  
  /* Nav Meu Styling */
  .nav-menu a {
    padding: 0 8px 10px 8px;
    text-decoration: none;
    display: inline-block;
    color: #fff;
    font-family: "Montserrat", sans-serif;
    font-weight: 700;
    font-size: 13px;
    text-transform: uppercase;
    outline: none;
  }
  
  .nav-menu li:hover > a, .nav-menu > .menu-active > a {
    color: #18d26e;
  }
  
  .nav-menu > li {
    margin-left: 10px;
  }
  
  .nav-menu ul {
    margin: 4px 0 0 0;
    padding: 10px;
    box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
    background: #fff;
  }
  
  .nav-menu ul li {
    transition: 0.3s;
  }
  
  .nav-menu ul li a {
    padding: 10px;
    color: #333;
    transition: 0.3s;
    display: block;
    font-size: 13px;
    text-transform: none;
  }
  
  .nav-menu ul li:hover > a {
    color: #18d26e;
  }
  
  .nav-menu ul ul {
    margin: 0;
  }
  
  /* Mobile Nav Toggle */
  #mobile-nav-toggle {
    position: fixed;
    right: 0;
    top: 0;
    z-index: 999;
    margin: 20px 20px 0 0;
    border: 0;
    background: none;
    font-size: 24px;
    display: none;
    transition: all 0.4s;
    outline: none;
    cursor: pointer;
  }
  
  #mobile-nav-toggle i {
    color: #fff;
  }
  
  @media (max-width: 768px) {
    #mobile-nav-toggle {
      display: inline;
    }
  }
  
  /* Mobile Nav Styling */
  #mobile-nav {
    position: fixed;
    top: 0;
    padding-top: 18px;
    bottom: 0;
    z-index: 998;
    background: rgba(0, 0, 0, 0.8);
    left: -260px;
    width: 260px;
    overflow-y: auto;
    transition: 0.4s;
  }
  
  #mobile-nav ul {
    padding: 0;
    margin: 0;
    list-style: none;
  }
  
  #mobile-nav ul li {
    position: relative;
  }
  
  #mobile-nav ul li a {
    color: #fff;
    font-size: 13px;
    text-transform: uppercase;
    overflow: hidden;
    padding: 10px 22px 10px 15px;
    position: relative;
    text-decoration: none;
    width: 100%;
    display: block;
    outline: none;
    font-weight: 700;
    font-family: "Montserrat", sans-serif;
  }
  
  #mobile-nav ul li a:hover {
    color: #fff;
  }
  
  #mobile-nav ul li li {
    padding-left: 30px;
  }
  
  #mobile-nav ul .menu-has-children i {
    position: absolute;
    right: 0;
    z-index: 99;
    padding: 15px;
    cursor: pointer;
    color: #fff;
  }
  
  #mobile-nav ul .menu-has-children i.fa-chevron-up {
    color: #18d26e;
  }
  
  #mobile-nav ul .menu-has-children li a {
    text-transform: none;
  }
  
  #mobile-nav ul .menu-item-active {
    color: #18d26e;
  }
  
  #mobile-body-overly {
    width: 100%;
    height: 100%;
    z-index: 997;
    top: 0;
    left: 0;
    position: fixed;
    background: rgba(0, 0, 0, 0.7);
    display: none;
  }
  
  /* Mobile Nav body classes */
  body.mobile-nav-active {
    overflow: hidden;
  }
  
  body.mobile-nav-active #mobile-nav {
    left: 0;
  }
  
  body.mobile-nav-active #mobile-nav-toggle {
    color: #fff;
  }
  
  /*--------------------------------------------------------------
  # Sections
  --------------------------------------------------------------*/
  /* Sections Header
  --------------------------------*/
  .section-header h3 {
    font-size: 32px;
    color: #111;
    text-transform: uppercase;
    text-align: center;
    font-weight: 700;
    position: relative;
    padding-bottom: 15px;
  }
  
  .section-header h3::before {
    content: '';
    position: absolute;
    display: block;
    width: 120px;
    height: 1px;
    background: #ddd;
    bottom: 1px;
    left: calc(50% - 60px);
  }
  
  .section-header h3::after {
    content: '';
    position: absolute;
    display: block;
    width: 40px;
    height: 3px;
    background: #18d26e;
    bottom: 0;
    left: calc(50% - 20px);
  }
  
  .section-header p {
    text-align: center;
    padding-bottom: 30px;
    color: #333;
  }
  
  /* Section with background
  --------------------------------*/
  .section-bg {
    background: #f7f7f7;
  }
  
  /* Featured Services Section
  --------------------------------*/
  #featured-services {
    background: #000;
  }
  
  #featured-services .box {
    padding: 30px 20px;
  }
  
  #featured-services .box-bg {
    background-image: linear-gradient(0deg, #000000 0%, #242323 50%, #000000 100%);
  }
  
  #featured-services i {
    color: #18d26e;
    font-size: 48px;
    display: inline-block;
    line-height: 1;
  }
  
  #featured-services h4 {
    font-weight: 400;
    margin: 15px 0;
    font-size: 18px;
  }
  
  #featured-services h4 a {
    color: #fff;
  }
  
  #featured-services h4 a:hover {
    color: #18d26e;
  }
  
  #featured-services p {
    font-size: 14px;
    line-height: 24px;
    color: #fff;
    margin-bottom: 0;
  }
  
  /* About Us Section
  --------------------------------*/
  #about {
    background: url("img/about-bg.jpg") center top no-repeat fixed;
    background-size: cover;
    padding: 60px 0 40px 0;
    position: relative;
  }
  
  #about::before {
    content: '';
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background: rgba(255, 255, 255, 0.92);
    z-index: 9;
  }
  
  #about .container {
    position: relative;
    z-index: 10;
  }
  
  #about .about-col {
    background: #fff;
    border-radius: 0 0 4px 4px;
    box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.08);
    margin-bottom: 20px;
  }
  
  #about .about-col .img {
    position: relative;
  }
  
  #about .about-col .img img {
    border-radius: 4px 4px 0 0;
  }
  
  #about .about-col .icon {
    width: 64px;
    height: 64px;
    padding-top: 8px;
    text-align: center;
    position: absolute;
    background-color: #18d26e;
    border-radius: 50%;
    text-align: center;
    border: 4px solid #fff;
    left: calc( 50% - 32px);
    bottom: -30px;
    transition: 0.3s;
  }
  
  #about .about-col i {
    font-size: 36px;
    line-height: 1;
    color: #fff;
    transition: 0.3s;
  }
  
  #about .about-col:hover .icon {
    background-color: #fff;
  }
  
  #about .about-col:hover i {
    color: #18d26e;
  }
  
  #about .about-col h2 {
    color: #000;
    text-align: center;
    font-weight: 700;
    font-size: 20px;
    padding: 0;
    margin: 40px 0 12px 0;
  }
  
  #about .about-col h2 a {
    color: #000;
  }
  
  #about .about-col h2 a:hover {
    color: #18d26e;
  }
  
  #about .about-col p {
    font-size: 14px;
    line-height: 24px;
    color: #333;
    margin-bottom: 0;
    padding: 0 20px 20px 20px;
  }
  
  /* Services Section
  --------------------------------*/
  #services {
    background: #fff;
    background-size: cover;
    padding: 60px 0 40px 0;
  }
  
  #services .box {
    margin-bottom: 30px;
  }
  
  #services .icon {
    float: left;
  }
  
  #services .icon i {
    color: #18d26e;
    font-size: 36px;
    line-height: 1;
    transition: 0.5s;
  }
  
  #services .title {
    margin-left: 60px;
    font-weight: 700;
    margin-bottom: 15px;
    font-size: 18px;
  }
  
  #services .title a {
    color: #111;
  }
  
  #services .box:hover .title a {
    color: #18d26e;
  }
  
  #services .description {
    font-size: 14px;
    margin-left: 60px;
    line-height: 24px;
    margin-bottom: 0;
  }
  
  /* Call To Action Section
  --------------------------------*/
  #call-to-action {
    background: linear-gradient(rgba(0, 142, 99, 0.1), rgba(0, 0, 0, 0.1)), url(../img/call-to-action-bg.jpg) fixed center center;
    background-size: cover;
    padding: 60px 0;
  }
  
  #call-to-action h3 {
    color: #fff;
    font-size: 28px;
    font-weight: 700;
  }
  
  #call-to-action p {
    color: #fff;
  }
  
  #call-to-action .cta-btn {
    font-family: "Montserrat", sans-serif;
    text-transform: uppercase;
    font-weight: 500;
    font-size: 16px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 8px 28px;
    border-radius: 25px;
    transition: 0.5s;
    margin-top: 10px;
    border: 2px solid #fff;
    color: #fff;
  }
  
  #call-to-action .cta-btn:hover {
    background: #18d26e;
    border: 2px solid #18d26e;
  }
  
  /* Call To Action Section
  --------------------------------*/
  #skills {
    padding: 60px 0;
  }
  
  #skills .progress {
    height: 35px;
    margin-bottom: 10px;
  }
  
  #skills .progress .skill {
    font-family: "Open Sans", sans-serif;
    line-height: 35px;
    padding: 0;
    margin: 0 0 0 20px;
    text-transform: uppercase;
  }
  
  #skills .progress .skill .val {
    float: right;
    font-style: normal;
    margin: 0 20px 0 0;
  }
  
  #skills .progress-bar {
    width: 1px;
    text-align: left;
    transition: .9s;
  }
  
  /* Facts Section
  --------------------------------*/
  #facts {
    background: url("../img/facts-bg.jpg") center top no-repeat fixed;
    background-size: cover;
    padding: 60px 0 0 0;
    position: relative;
  }
  
  #facts::before {
    content: '';
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background: rgba(255, 255, 255, 0.88);
    z-index: 9;
  }
  
  #facts .container {
    position: relative;
    z-index: 10;
  }
  
  #facts .counters span {
    font-family: "Montserrat", sans-serif;
    font-weight: bold;
    font-size: 48px;
    display: block;
    color: #18d26e;
  }
  
  #facts .counters p {
    padding: 0;
    margin: 0 0 20px 0;
    font-family: "Montserrat", sans-serif;
    font-size: 14px;
    color: #111;
  }
  
  #facts .facts-img {
    text-align: center;
    padding-top: 30px;
  }
  
  /* Portfolio Section
  --------------------------------*/
  #portfolio {
    padding: 60px 0;
  }
  
  #portfolio #portfolio-flters {
    padding: 0;
    margin: 5px 0 35px 0;
    list-style: none;
    text-align: center;
  }
  
  #portfolio #portfolio-flters li {
    cursor: pointer;
    margin: 15px 15px 15px 0;
    display: inline-block;
    padding: 10px 20px;
    font-size: 12px;
    line-height: 20px;
    color: #666666;
    border-radius: 4px;
    text-transform: uppercase;
    background: #fff;
    margin-bottom: 5px;
    transition: all 0.3s ease-in-out;
  }
  
  #portfolio #portfolio-flters li:hover, #portfolio #portfolio-flters li.filter-active {
    background: #18d26e;
    color: #fff;
  }
  
  #portfolio #portfolio-flters li:last-child {
    margin-right: 0;
  }
  
  #portfolio .portfolio-wrap {
    box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.08);
    transition: 0.3s;
  }
  
  #portfolio .portfolio-wrap:hover {
    box-shadow: 0px 4px 14px rgba(0, 0, 0, 0.16);
  }
  
  #portfolio .portfolio-item {
    position: relative;
    height: 360px;
    overflow: hidden;
  }
  
  #portfolio .portfolio-item figure {
    background: #000;
    overflow: hidden;
    height: 240px;
    position: relative;
    border-radius: 4px 4px 0 0;
    margin: 0;
  }
  
  #portfolio .portfolio-item figure:hover img {
    opacity: 0.4;
    transition: 0.3s;
  }
  
  #portfolio .portfolio-item figure .link-preview, #portfolio .portfolio-item figure .link-details {
    position: absolute;
    display: inline-block;
    opacity: 0;
    line-height: 1;
    text-align: center;
    width: 36px;
    height: 36px;
    background: #fff;
    border-radius: 50%;
    transition: 0.2s linear;
  }
  
  #portfolio .portfolio-item figure .link-preview i, #portfolio .portfolio-item figure .link-details i {
    padding-top: 6px;
    font-size: 22px;
    color: #333;
  }
  
  #portfolio .portfolio-item figure .link-preview:hover, #portfolio .portfolio-item figure .link-details:hover {
    background: #18d26e;
  }
  
  #portfolio .portfolio-item figure .link-preview:hover i, #portfolio .portfolio-item figure .link-details:hover i {
    color: #fff;
  }
  
  #portfolio .portfolio-item figure .link-preview {
    left: calc(50% - 38px);
    top: calc(50% - 18px);
  }
  
  #portfolio .portfolio-item figure .link-details {
    right: calc(50% - 38px);
    top: calc(50% - 18px);
  }
  
  #portfolio .portfolio-item figure:hover .link-preview {
    opacity: 1;
    left: calc(50% - 44px);
  }
  
  #portfolio .portfolio-item figure:hover .link-details {
    opacity: 1;
    right: calc(50% - 44px);
  }
  
  #portfolio .portfolio-item .portfolio-info {
    background: #fff;
    text-align: center;
    padding: 30px;
    height: 90px;
    border-radius: 0 0 3px 3px;
  }
  
  #portfolio .portfolio-item .portfolio-info h4 {
    font-size: 18px;
    line-height: 1px;
    font-weight: 700;
    margin-bottom: 18px;
    padding-bottom: 0;
  }
  
  #portfolio .portfolio-item .portfolio-info h4 a {
    color: #333;
  }
  
  #portfolio .portfolio-item .portfolio-info h4 a:hover {
    color: #18d26e;
  }
  
  #portfolio .portfolio-item .portfolio-info p {
    padding: 0;
    margin: 0;
    color: #b8b8b8;
    font-weight: 500;
    font-size: 14px;
    text-transform: uppercase;
  }
  
  /* Clients Section
  --------------------------------*/
  #clients {
    padding: 60px 0;
  }
  
  #clients img {
    max-width: 100%;
    opacity: 0.5;
    transition: 0.3s;
    padding: 15px 0;
  }
  
  #clients img:hover {
    opacity: 1;
  }
  
  #clients .owl-nav, #clients .owl-dots {
    margin-top: 5px;
    text-align: center;
  }
  
  #clients .owl-dot {
    display: inline-block;
    margin: 0 5px;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background-color: #ddd;
  }
  
  #clients .owl-dot.active {
    background-color: #18d26e;
  }
  
  /* Testimonials Section
  --------------------------------*/
  #testimonials {
    padding: 60px 0;
  }
  
  #testimonials .section-header {
    margin-bottom: 40px;
  }
  
  #testimonials .testimonial-item {
    text-align: center;
  }
  
  #testimonials .testimonial-item .testimonial-img {
    width: 120px;
    border-radius: 50%;
    border: 4px solid #fff;
    margin: 0 auto;
  }
  
  #testimonials .testimonial-item h3 {
    font-size: 20px;
    font-weight: bold;
    margin: 10px 0 5px 0;
    color: #111;
  }
  
  #testimonials .testimonial-item h4 {
    font-size: 14px;
    color: #999;
    margin: 0 0 15px 0;
  }
  
  #testimonials .testimonial-item .quote-sign-left {
    margin-top: -15px;
    padding-right: 10px;
    display: inline-block;
    width: 37px;
  }
  
  #testimonials .testimonial-item .quote-sign-right {
    margin-bottom: -15px;
    padding-left: 10px;
    display: inline-block;
    max-width: 100%;
    width: 37px;
  }
  
  #testimonials .testimonial-item p {
    font-style: italic;
    margin: 0 auto 15px auto;
  }
  
  @media (min-width: 992px) {
    #testimonials .testimonial-item p {
      width: 80%;
    }
  }
  
  #testimonials .owl-nav, #testimonials .owl-dots {
    margin-top: 5px;
    text-align: center;
  }
  
  #testimonials .owl-dot {
    display: inline-block;
    margin: 0 5px;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background-color: #ddd;
  }
  
  #testimonials .owl-dot.active {
    background-color: #18d26e;
  }
  
  /* Team Section
  --------------------------------*/
  #team {
    background: #fff;
    padding: 60px 0;
  }
  
  #team .member {
    text-align: center;
    margin-bottom: 20px;
    background: #000;
    position: relative;
  }
  
  #team .member .member-info {
    opacity: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
    transition: 0.2s;
  }
  
  #team .member .member-info-content {
    margin-top: -50px;
    transition: margin 0.2s;
  }
  
  #team .member:hover .member-info {
    background: rgba(0, 0, 0, 0.7);
    opacity: 1;
    transition: 0.4s;
  }
  
  #team .member:hover .member-info-content {
    margin-top: 0;
    transition: margin 0.4s;
  }
  
  #team .member h4 {
    font-weight: 700;
    margin-bottom: 2px;
    font-size: 18px;
    color: #fff;
  }
  
  #team .member span {
    font-style: italic;
    display: block;
    font-size: 13px;
    color: #fff;
  }
  
  #team .member .social {
    margin-top: 15px;
  }
  
  #team .member .social a {
    transition: none;
    color: #fff;
  }
  
  #team .member .social a:hover {
    color: #18d26e;
  }
  
  #team .member .social i {
    font-size: 18px;
    margin: 0 2px;
  }
  
  /* Contact Section
  --------------------------------*/
  #contact {
    padding: 60px 0;
  }
  
  #contact .contact-info {
    margin-bottom: 20px;
    text-align: center;
  }
  
  #contact .contact-info i {
    font-size: 48px;
    display: inline-block;
    margin-bottom: 10px;
    color: #18d26e;
  }
  
  #contact .contact-info address, #contact .contact-info p {
    margin-bottom: 0;
    color: #000;
  }
  
  #contact .contact-info h3 {
    font-size: 18px;
    margin-bottom: 15px;
    font-weight: bold;
    text-transform: uppercase;
    color: #999;
  }
  
  #contact .contact-info a {
    color: #000;
  }
  
  #contact .contact-info a:hover {
    color: #18d26e;
  }
  
  #contact .contact-address, #contact .contact-phone, #contact .contact-email {
    margin-bottom: 20px;
  }
  
  @media (min-width: 768px) {
    #contact .contact-address, #contact .contact-phone, #contact .contact-email {
      padding: 20px 0;
    }
  }
  
  @media (min-width: 768px) {
    #contact .contact-phone {
      border-left: 1px solid #ddd;
      border-right: 1px solid #ddd;
    }
  }
  
  #contact .form #sendmessage {
    color: #18d26e;
    border: 1px solid #18d26e;
    display: none;
    text-align: center;
    padding: 15px;
    font-weight: 600;
    margin-bottom: 15px;
  }
  
  #contact .form #errormessage {
    color: red;
    display: none;
    border: 1px solid red;
    text-align: center;
    padding: 15px;
    font-weight: 600;
    margin-bottom: 15px;
  }
  
  #contact .form #sendmessage.show, #contact .form #errormessage.show, #contact .form .show {
    display: block;
  }
  
  #contact .form .validation {
    color: red;
    display: none;
    margin: 0 0 20px;
    font-weight: 400;
    font-size: 13px;
  }
  
  #contact .form input, #contact .form textarea {
    padding: 10px 14px;
    border-radius: 0;
    box-shadow: none;
    font-size: 15px;
  }
  
  #contact .form button[type="submit"] {
    background: #18d26e;
    border: 0;
    padding: 10px 30px;
    color: #fff;
    transition: 0.4s;
    cursor: pointer;
  }
  
  #contact .form button[type="submit"]:hover {
    background: #13a456;
  }
  
  /*--------------------------------------------------------------
  # Footer
  --------------------------------------------------------------*/
  #footer {
    background: #000;
    padding: 0 0 30px 0;
    color: #eee;
    font-size: 14px;
  }
  
  #footer .footer-top {
    background: #111;
    padding: 60px 0 30px 0;
  }
  
  #footer .footer-top .footer-info {
    margin-bottom: 30px;
  }
  
  #footer .footer-top .footer-info h3 {
    font-size: 34px;
    margin: 0 0 20px 0;
    padding: 2px 0 2px 10px;
    line-height: 1;
    font-family: "Montserrat", sans-serif;
    font-weight: 700;
    letter-spacing: 3px;
    border-left: 4px solid #18d26e;
  }
  
  #footer .footer-top .footer-info p {
    font-size: 14px;
    line-height: 24px;
    margin-bottom: 0;
    font-family: "Montserrat", sans-serif;
    color: #eee;
  }
  
  #footer .footer-top .social-links a {
    font-size: 18px;
    display: inline-block;
    background: #333;
    color: #eee;
    line-height: 1;
    padding: 8px 0;
    margin-right: 4px;
    border-radius: 50%;
    text-align: center;
    width: 36px;
    height: 36px;
    transition: 0.3s;
  }
  
  #footer .footer-top .social-links a:hover {
    background: #18d26e;
    color: #fff;
  }
  
  #footer .footer-top h4 {
    font-size: 14px;
    font-weight: bold;
    color: #fff;
    text-transform: uppercase;
    position: relative;
    padding-bottom: 12px;
  }
  
  #footer .footer-top h4::before, #footer .footer-top h4::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 2px;
  }
  
  #footer .footer-top h4::before {
    right: 0;
    background: #555;
  }
  
  #footer .footer-top h4::after {
    background: #18d26e;
    width: 60px;
  }
  
  #footer .footer-top .footer-links {
    margin-bottom: 30px;
  }
  
  #footer .footer-top .footer-links ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  
  #footer .footer-top .footer-links ul i {
    padding-right: 8px;
    color: #ddd;
  }
  
  #footer .footer-top .footer-links ul li {
    border-bottom: 1px solid #333;
    padding: 10px 0;
  }
  
  #footer .footer-top .footer-links ul li:first-child {
    padding-top: 0;
  }
  
  #footer .footer-top .footer-links ul a {
    color: #eee;
  }
  
  #footer .footer-top .footer-links ul a:hover {
    color: #18d26e;
  }
  
  #footer .footer-top .footer-contact {
    margin-bottom: 30px;
  }
  
  #footer .footer-top .footer-contact p {
    line-height: 26px;
  }
  
  #footer .footer-top .footer-newsletter {
    margin-bottom: 30px;
  }
  
  #footer .footer-top .footer-newsletter input[type="email"] {
    border: 0;
    padding: 6px 8px;
    width: 65%;
  }
  
  #footer .footer-top .footer-newsletter input[type="submit"] {
    background: #18d26e;
    border: 0;
    width: 35%;
    padding: 6px 0;
    text-align: center;
    color: #fff;
    transition: 0.3s;
    cursor: pointer;
  }
  
  #footer .footer-top .footer-newsletter input[type="submit"]:hover {
    background: #13a456;
  }
  
  #footer .copyright {
    text-align: center;
    padding-top: 30px;
  }
  
  #footer .credits {
    text-align: center;
    font-size: 13px;
    color: #ddd;
  }
  
  </style>
  
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
	
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/bootstrap-v3/css/bootstrap.css">
  <link rel="stylesheet" href="assets/bootstrap-v3/css/bootstrap.css">
  <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons" />

  
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
	
	
  <link href="css/style.css" rel="stylesheet">
	
	<style>
		
		h1,h2,h3,h4{
   		font-family: "Montserrat", sans-serif;
  		font-weight: 400;
  		margin: 0 0 20px 0;
 	    padding: 0;
	    text-align: center;
		color: crimson;
}
		
		
	
    .login-box{
    width: 360px;
    height: 420px;
    background: rgba(0,0,0,0.6);
    color: #fff;
    top: 455%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box; 
    padding: 70px 40px;
}

.avatar{
    width: 185px;
    height: 170px;
    border-radius: 50%;
    position: absolute;
    top:-28%;
    left: calc(50% - 91px);
}
		
		
	.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, "sans-serif";
	color: crimson;;
}

.login-box input{
    width: 100%;
    margin-bottom: 20px;
}
.login-box input[type="text"],input[type="password"]
{
    border: :none;
    border-bottom: 1px solid #fff;
    border-top: 0;
    border-left: 0;
    border-right: 0;
    background: transparent;
    outline: none;
    height: 25px;
    color: #fff;
    font-size: 16px;
}

.login-box input[type="submit"]
{
    border:none;
    outline: none;
    height: 40px;
    background: crimson; 
    color:#fff;
    font-size: 18px;
    border-radius: 20px;
	top: 30px;
}

.login-box input[type="submit"]:hover
{
    cursor: pointer;
    background: #30DC59;
    color: #1c8adb;
}

.login-box a
{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}

.login-box a:hover
{
    color:#1c8adb;
}
		
.modal
{
 	top: 180px;
}		
	
	</style>

	
	
</head>	
<body>
	
	
	
	
	<header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Login</a></h1>
        
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="index.php">Home</a></li>
          
			
      
			<li class="menu-active"><a href="#intro">Login</a></li>
		 </ul>
      </nav>
    </div>
			<div class="login-box">
		<img src="https://www.shareicon.net/data/2016/05/26/771190_people_512x512.png" class="avatar" alt="Image Not Found">
    
      
    
        <form action="llogin.php" method="POST">
    
			<br>
            <p> email</p> 
            <input type="text" name="email" id="email" placeholder="email" autocomplete="off" required>
			<br><br>
            <p> Password </p>
            <input data-toggle="password"
       				 data-placement="after"
       				 class="form-control"
        				type="password"
        				placeholder="Enter Password"
        				data-eye-class="material-icons"
        				data-eye-open-class="visibility"
       				    data-eye-close-class="visibility_off"
       					 data-eye-class-position-inside="true" name="psw" id="psw" required>
					<br><br>
            <input type="submit" id="btn" name="submit" value="Login" required>
			
			
            <!--<u><a href="#" data-toggle="modal" data-target="#myModal"> Have you forgotten your password</u> ? </a>-->
      <u><a href="signup.php" data-toggle="modal" data-target="#myModal"> Don't have an account register?</u></a>
			
			
			
  
			
			
			<script src="assets/jquery.min.js"></script>
  <script src="assets/bootstrap-v3/js/bootstrap.js"></script>
  <script src="bootstrap-show-password.js"></script>
  <script>
    $('[data-attr="show-password"]').password({
      placement: 'before',
      eyeClass: 'material-icons',
      eyeOpenClass: 'visibility',
      eyeCloseClass: 'visibility_off',
      eyeClassPositionInside: true
    })
  </script>
       
				</form>      
			</div>	
		
  </header>
	

	<div class="modal fade" id="myModal" role="dialog">
		
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-titel">Enter Your Username, And We Will Send Your Password To Your Email Address.</h4>
        </div>
        <div class="modal-body" align="center">
          <form method="POST">
			<input type="text" name="email" id="email" placeholder="Enter Your Username" style="width: 220px; text-align: center;height: 30px;border-radius: 6px;outline: none; border-bottom-color: lightgreen; border-top-color: lightgreen; border-right-color: lightgreen; border-left-color: lightgreen;">
			  <br>
			  <br>
				<button type="submit" class="btn btn-success" name="btn">Send Password</button>
			</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
	
	
	
	<section id="intro">
		
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
			
          <div class="carousel-item active">
			 
            <div class="carousel-background"><img src="img/intro-carousel/9.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/10.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
               
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/16.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/20.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/24.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
	</section>
	
	
	
	
	
	
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
	

</body>
</html>



