<?php require_once("snippets/header.php"); ?>

<nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="img/logo.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Testimonials</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">faq</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">contact</a>
        </li>
      </ul>
      <button type="button" class="rounded-pill btn-rounded border-0">+0700 6660434
        <span>
          <i class="fas fa-phone-alt"></i>
        </span>
      </button>
    </div>
  </div>
</nav>

<section id="home" class="intro-section">
  <div class="container">
    <div class="row aligin-items-center text-white">
      <div class="col-md-6 intros text-start">
        <h1 class="display-2">
          <span class="display-2--intro">RESURRECTION</span>
          <span class="display-2--description lh-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
          <!-- lh odpowiada ze odleglosc miedzy liniami -->
        </h1>
        <button type="button" class="rounded-pill btn-rounded border-0">START
        <span>
          <i class="fas fa-arrow-right"></i>
        </span>
      </button>
      </div>

      <div class="col-md-6 intros text-end">
      <div class="video-box">
        <img src="img/1.1.png" alt="" class="img-fluid">
        <a href="#" class="position-absolute top-50 start-50 translate-middle">
          <span>
          </span>
        </a>
        </div>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,256L48,250.7C96,245,192,235,288,202.7C384,171,480,117,576,122.7C672,128,768,192,864,202.7C960,213,1056,171,1152,154.7C1248,139,1344,149,1392,154.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
  <!-- po skopiowaniu kodu ze strony get waves zmieniasz jedynie nazwe koloru w index.php na fff -->
</section>
<!-- szybszy sposob zapisania: section#home.intro-section>.container>.row>(.col-md-6.intros)*2 -->
<section id="campanies" class="campanies">
  <div class="container">
    <div class="row text-center">
      <h4 class="fw-blod lead mb-3">Sponsors</h4>
      <div class="heading-line mb-5"></div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <!-- elementy znajduja sie w rzedzie -->
      <div class="col-md-4 col-lg-2">
        <!-- kolumny maja rozmiar 2 dopoki nie dojdzie do przelamania w md, wowczas maja rozmiar 4 -->
        <div class="campanies__logo-box shadow-sm"><i class="fab fa-playstation"></i></div>
      </div>
      <div class="col-md-4 col-lg-2">
        <div class="campanies__logo-box shadow-sm"><i class="fab fa-xbox"></i></div>
      </div>
      <div class="col-md-4 col-lg-2">
        <div class="campanies__logo-box shadow-sm"><i class="fab fa-twitch"></i></div>
      </div>
      <div class="col-md-4 col-lg-2">
        <div class="campanies__logo-box shadow-sm"><i class="fab fa-google"></i></div>
      </div>
      <div class="col-md-4 col-lg-2">
        <div class="campanies__logo-box shadow-sm"><i class="fab fa-apple"></i></div>
      </div>
      <div class="col-md-4 col-lg-2">
        <div class="campanies__logo-box shadow-sm"><i class="fab fa-steam"></i></div>
      </div>
    </div>
  </div>
</section>


<section id="services" class="services">
  <div class="container">
    <div class="row text-center">
      <h1 class="display-3 fw-bold">SERVER</h1>
      <div class="heading-line mb-1"></div>
    </div>


    <div class="row pt-2 pb-2 mt-0 mb-3">
      <div class="col-md-6 border-right">
        <div class="bg-white p-3">
          <h2 class="fw-bold text-center">
            Conect to server of RESURRECTION
          </h2>
        </div>
      </div>
      <div class="col-md-6">
        <div class="bg-white p-4 text-start">
          <p class="fw-light">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
        </div>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content">
        <div class="icon fas fa-paper-plane"></div>
        <!-- jezeli chcemy aby ikonka znajdowala sie nad tytulem a tytul pod nia wystarczy dodac do klasy: d-block -->
          <h3 class="display-3--title mt-1">Marketing</h3>
          <p class="lh-lg">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus praesentium mollitia quam, sequi deleniti quibusdam distinctio repudiandae tempore iure molesti as provident temporibus, repellendus eligendi sed voluptates est! Quo.
            <!-- Istnieje opcja lorem oraz wpisania numeru slow np.: lorem28 -->
          </p>
          <button type="button" class="rounded-pill btn-rounded border-dark">RUN
        <span>
          <i class="fas fa-arrow-right"></i>
        </span>
      </button>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
        <div class="services__pic">
          <img src="img/2.1.jpg" alt="" class="img-fluid">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start">
        <div class="services__pic"><img src="img/2.2.jpg" alt="" class="img-fluid"></div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content">
        <div class="icon fas fa-bolt"></div>
          <h3 class="display-3--title mt-1">Hosting</h3>
          <p class="lh-lg">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus praesentium mollitia quam, sequi deleniti quibusdam distinctio repudiandae tempore iure molesti as provident temporibus, repellendus eligendi sed voluptates est! Quo.
          </p>
          <button type="button" class="rounded-pill btn-rounded border-dark">RUN
        <span>
          <i class="fas fa-arrow-right"></i>
        </span>
      </button>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content">
        <div class="icon fas fa-skull"></div>
          <h3 class="display-3--title mt-1">Programing</h3>
          <p class="lh-lg">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus praesentium mollitia quam, sequi deleniti quibusdam distinctio repudiandae tempore iure molesti as provident temporibus, repellendus eligendi sed voluptates est! Quo.
          </p>
          <button type="button" class="rounded-pill btn-rounded border-dark">RUN
        <span>
          <i class="fas fa-arrow-right"></i>
        </span>
      </button>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
        <div class="services__pic"><img src="img/2.3.jpg" alt="" class="img-fluid"></div>
      </div>
    </div>
  </div>
  
  <!-- szybszy sposob zapisania: .container>(.row>(.col-lg-6.col-md-6.col-sm-12.col-xs-12.services.mt-4>.services__content)*2)*3
  NAWIASY SA PO TO JESLI BEDZIEMY CHCIELI SWTORZYC WIECEJ TAKICH SAMYCH ELEMENTOW -->

  <!-- gdy zostawimy jeden blok pusty:

  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content"></div>
      </div>

  to zostawi nam puste pole -->
</section>

<section id="testimonials" class="testimonials">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,128L48,133.3C96,139,192,149,288,154.7C384,160,480,160,576,133.3C672,107,768,53,864,58.7C960,64,1056,128,1152,144C1248,160,1344,128,1392,112L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
<!-- tutaj wklejasz fale na dol! -->
  <div class="container">
    <div class="row text-center text-white">
      <!-- text jest na srodku strony -->
      <h1 class="display-3 fw-bold">TESTIMONIAL</h1>
      <!-- szybszy sposob zapisania: h1.display-3.fw-blod{Testimonials} -->
      <hr style="width: 100px; heigh= 3px" class="mx-auto">
      <!-- linia pod slowem Testimonial -->
      <p class="lead pt-1">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
    </div>

    <div class="row aligin-items-center">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">  
  <div class="carousel-inner">
    <div class="carousel-item active">

      <div class="testimonials__card">
      <p class="lh-lg">
        <i class="fas fa-quote-left"></i>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quam minima fuga cupiditate dolorum velit nulla, blanditiis soluta aperiam! Quod, similique?
        <i class="fas fa-quote-right"></i>
        <div class="ratings">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
      </p>
      </div>
      <div class="testimonials__picture">
        <img src="img/aku1.jpg" alt="" class="rounded-circle img-fluid change-ratio">
      </div>
      <div class="testimonials__name">
      <h3>MARTHA</h3>
      <p class="fw-light">Nightmare</p>
      </div>
    </div>

    <div class="carousel-item">

      <div class="testimonials__card">
      <p class="lh-lg">
        <i class="fas fa-quote-left"></i>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quam minima fuga cupiditate dolorum velit nulla, blanditiis soluta aperiam! Quod, similique?
        <i class="fas fa-quote-right"></i>
        <div class="ratings">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
      </p>
      </div>
      <div class="testimonials__picture">
        <img src="img/aku2.jpg" alt="" class="rounded-circle img-fluid">
      </div>
      <div class="testimonials__name">
      <h3>NICOLE</h3>
      <p class="fw-light">Queen</p>
      </div>
    </div>
    <div class="carousel-item">

      <div class="testimonials__card">
      <p class="lh-lg">
        <i class="fas fa-quote-left"></i>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quam minima fuga cupiditate dolorum velit nulla, blanditiis soluta aperiam! Quod, similique?
        <i class="fas fa-quote-right"></i>
        <div class="ratings">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
      </p>
      </div>
      <div class="testimonials__picture">
        <img src="img/aku3.jpg" alt="" class=" rounded-circle img-fluid">
      </div>
      <div class="testimonials__name">
      <h3>ANNA</h3>
      <p class="fw-light">Boss</p>
      </div>
    </div>

    <div class="carousel-item">

      <div class="testimonials__card">
      <p class="lh-lg">
        <i class="fas fa-quote-left"></i>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quam minima fuga cupiditate dolorum velit nulla, blanditiis soluta aperiam! Quod, similique?
        <i class="fas fa-quote-right"></i>
        <div class="ratings">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
      </p>
      </div>
      <div class="testimonials__picture">
        <img src="img/aku4.jpg" alt="" class="rounded-circle img-fluid">
      </div>
      <div class="testimonials__name">
      <h3>SOPHIE</h3>
      <p class="fw-light">Warrior</p>
      </div>
    </div>
    
    <div class="carousel-item">

      <div class="testimonials__card">
      <p class="lh-lg">
        <i class="fas fa-quote-left"></i>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quam minima fuga cupiditate dolorum velit nulla, blanditiis soluta aperiam! Quod, similique?
        <i class="fas fa-quote-right"></i>
        <div class="ratings">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
      </p>
      </div>
      <div class="testimonials__picture">
        <img src="img/aku5.jpg" alt="" class="rounded-circle img-fluid">
      </div>
      <div class="testimonials__name">
      <h3>AVRIL</h3>
      <p class="fw-light">Star</p>
      </div>
    </div>
  </div>
  <div class="text-center">
  <button class="btn btn-outline-light fas fa-long-arrow-alt-left" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
  </button>
  <button class="btn btn-outline-light fas fa-long-arrow-alt-right" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
  </button>
  </div>
</div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,128L48,144C96,160,192,192,288,176C384,160,480,96,576,96C672,96,768,160,864,181.3C960,203,1056,181,1152,165.3C1248,149,1344,139,1392,133.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
  <!-- tutaj wklejasz fale do gory! -->
</section>


<section id="faq" class="faq">
  <div class="container">
    <div class="row text-center">
      <h1 class="display-3 fw-bold">FAQ</h1>
      <div class="heading-line"></div>
      <p class="lead">Lorem ipsum dolor sit amet consectetur.</p>
    </div>
<div class="row mt-5">
  <div class="col-md-12">
  <div class="accordion" id="accordionExample">
  <div class="accordion-item shadow mb-3">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item shadow mb-3">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item shadow mb-3">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item shadow mb-3">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseFour">
        Accordion Item #4
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
  </div>
</div>
  </div>
</section>


<section id="portfolio" class="portfolio">
  <div class="container">
    <div class="row text-center mt-5">
      <h1 class="display-3 fw-bold">TESTS</h1>
      <div class="heading-line"></div>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati nostrum tempora quam.</p>
    </div>

    <div class="row mt-5 mb-4 g-3 text-center">
      <div class="col-md-12">
        <button class="btn btn-outline-dark" type="button">All</button>
        <button class="btn btn-outline-dark" type="button">Evil</button>
        <button class="btn btn-outline-dark" type="button">Good</button>
        <button class="btn btn-outline-dark" type="button">Other</button>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-box shadow">
          <img src="img/3.1.jpg" alt="" title="portfolio 1 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>project name 1</h4>
              <p>category project</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-box shadow">
          <img src="img/3.2.jpg" alt="" title="portfolio 2 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>project name 2</h4>
              <p>category project</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-box shadow">
          <img src="img/3.3.jpg" alt="" title="portfolio 3 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>project name 3</h4>
              <p>category project</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-box shadow">
          <img src="img/3.4.jpg" alt="" title="portfolio 4 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>project name 4</h4>
              <p>category project</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-box shadow">
          <img src="img/3.5.jpg" alt="" title="portfolio 5 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>project name 5</h4>
              <p>category project</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-box shadow">
          <img src="img/3.6.jpg" alt="" title="portfolio 6 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>project name 6</h4>
              <p>category project</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-box shadow">
          <img src="img/3.7.jpg" alt="" title="portfolio 7 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>project name 7</h4>
              <p>category project</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-box shadow">
          <img src="img/3.8.jpg" alt="" title="portfolio 8 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>project name 8</h4>
              <p>category project</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-box shadow">
          <img src="img/3.9.jpg" alt="" title="portfolio 9 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>project name 9</h4>
              <p>category project</p>
            </div>
          </div>
        </div>
      </div>
      <!-- szybszy zapis:   
      .row>(.col-lg-4.col-md-6>.portfolio-box.shadow>(img[src="img/3.$.jpg"][title="portfolio $ picture"].img-fluid)>div.portfolio-info>div.caption>h4{project name $}p{category project})*9 -->

      <!-- przy zapisywaniu wielokrotnosci liczb uzywamy znaku $ -->
    </div>
  </div>
</section>


<section id="contact" class="get-started">
  <div class="container">
    <div class="row text-center">
      <h1 class="display-3 fw-bold text-capitalize">START</h1>
      <div class="heading-line"></div>
      <!-- wystarczy skopowiac linie:
      <div class="heading-line"></div>
      by pojawila sie linia ktora wczesniej napisalismy -->
      <p class="lh-lg">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum cum quasi odit?
      </p>
    </div>

    <div class="row">
    <div class="col-12 col-lg-6 gardient shadow p-3 text-white">
      <div class="cta-info w-100">
        <h4 class="display-4 fw-bold">100% Downloding Proces</h4>
        <p class="lh-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis, quibusdam, nulla, consequuntur quaerat ratione corrupti nobis nostrum quod porro odio debitis.</p>
        <h3 class="display-3--brief">What will be your next step?</h3>
        <ul class="cta-info__list">
          <li>Join to club!</li>
          <li>Update my client</li>
          <li>Back to our site</li>
        </ul>
        </div>
      </div>
    <div class="col-12 col-lg-6 bg-white shadow p-3">
      <div class="form w-100 pb-2">
        <h4 class="display-3--title mb-5">START OUR PROJECT</h4>
        <form action="#" class="row">
          <div class="col-lg-6 col-md-6 mb-3">
            <input type="text" placeholder="First Name" id="inputFirstName" class="shadow form-control from-control-lg">
        </div>
        <div class="col-lg-6 col-md-6 mb-3">
            <input type="text" placeholder="Last Name" id="inputLastName" class="shadow form-control from-control-lg">
        </div>
        <div class="col-lg-12 mb-3">
            <input type="mail" placeholder="email address" id="inputEmail" class="shadow form-control from-control-lg">
        </div>
        <div class="col-lg-12 mb-3">
            <textarea name="mesage" placeholder="message" id="message" rows="8" class="shadow form-control from-control-lg"></textarea>
        </div>
        <div class="text-center d-grid mt-1">
          <button type="button" class="btn btn-dark rounded-pill pt-3 pb-3">
            <!-- d-grid sprawia ze przycisk jest na cala szerokosc siatki -->
            submit
            <i class="fas fa-paper-plane"></i>
          </button>
        </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</section>


<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
        <div class="contact-box__icon">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-call" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
  <path d="M15 7a2 2 0 0 1 2 2" />
  <path d="M15 3a6 6 0 0 1 6 6" />
</svg>
        </div>
        <div class="contact-box__info">
          <a href="" class="contact-box__info--title">+0700 6660434</a>
          <p class="contact-box__info--subtitle">Mon-Fri 9am-6pm</p>
        </div>
      </div>
      <div class="col-md-6 col-lg contact-box pt-1 d-md-block d-lg-flex d-flex">
        <div class="contact-box__icon">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-opened" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <polyline points="3 9 12 15 21 9 12 3 3 9" />
  <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
  <line x1="3" y1="19" x2="9" y2="13" />
  <line x1="15" y1="13" x2="21" y2="19" />
</svg>
        </div>
        <div class="contact-box__info">
          <a href="" class="contact-box__info--title">      karol.komorowski@yahoo.com</a>
          <p class="contact-box__info--subtitle">Online support</p>
        </div>
      </div>
      <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
        <div class="contact-box__icon">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-2" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <line x1="18" y1="6" x2="18" y2="6.01" />
  <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
  <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />
  <line x1="9" y1="4" x2="9" y2="17" />
  <line x1="15" y1="15" x2="15" y2="20" />
</svg>
        </div>
        <div class="contact-box__info">
          <a href="" class="contact-box__info--title">Gdynia, PL</a>
          <p class="contact-box__info--subtitle">GDA 81-417, PL</p>
        </div>
      </div>
    </div>
  </div>


  <div class="footer-sm" style="background-color: #212121;">
    <div class="container">
      <div class="row py-4 text-center text-white">
        <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
          social media
        </div>
        <div class="col-lg-7 col-md-6">
        <a href=""><i class="fab fa-facebook"></i></a>
        <a href=""><i class="fab fa-twitter"></i></a>
        <a href=""><i class="fab fa-instagram"></i></a>
        <a href=""><i class="fab fa-linkedin"></i></a>
        <a href=""><i class="fab fa-github"></i></a>
        </div>
      </div>
    </div>
  </div>


  <div class="container mt-5">
    <div class="row text-white justify-content-center mt-3 pb-3">
      <div class="col-12 col-sm-6 col-lg-6">
        <h5 class="text-capitalize fw-bold">Campany name</h5>
        <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
        <p class="lh-lg">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores itaque sint fugiat, sed optio aspernatur architecto excepturi.
        </p>
      </div>
      <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
      <h5 class="text-capitalize fw-bold">Products</h5>
        <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
        <ul class="list-inline campany-list">
          <li><a href="#">Lorem ipsum</a></li>
          <li><a href="#">Lorem ipsum</a></li>
          <li><a href="#">Lorem ipsum</a></li>
          <li><a href="#">Lorem ipsum</a></li>
        </ul>
      </div>
      <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
      <h5 class="text-capitalize fw-bold">Links</h5>
        <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
        <ul class="list-inline campany-list">
          <li><a href="#">Lorem ipsum</a></li>
          <li><a href="#">Lorem ipsum</a></li>
          <li><a href="#">Lorem ipsum</a></li>
          <li><a href="#">Lorem ipsum</a></li>
        </ul>
      </div>
      <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
      <h5 class="text-capitalize fw-bold">Contact</h5>
        <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
        <ul class="list-inline campany-list">
          <li><a href="#">Lorem ipsum</a></li>
          <li><a href="#">Lorem ipsum</a></li>
          <li><a href="#">Lorem ipsum</a></li>
          <li><a href="#">Lorem ipsum</a></li>
        </ul>
      </div>
    </div>
  </div>


  <div class="footer-bottom pt-5 pb-5">
    <div class="container">
      <div class="row text-center text-white">
        <div class="col-12">
          <div class="footer-bottom__copyright">
            &COPY; Copyright 2021 <a href="#">Multi-prupose Company</a> | Created by <a href="">FLaMe REVENGE </a> 
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>


<a href="#" class="shadow btn-dark rounded-circle back-to-top">
  <i class="fas fa-chevron-up"></i>
</a>

<?php require_once("snippets/footer.php"); ?>