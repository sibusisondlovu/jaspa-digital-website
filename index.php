<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Jaspa Digital | Mobile and Web App Developers in Pretoria</title>

    <meta
      name="description"
      content="Jaspa Digital - AI Powered Mobile and Web Apps Developers in Pretoria"
    />
    <meta
      name="keywords"
      content="app developer, mobile app developer, software developer, ai developer"
    />
   <?php include('inc/header.php'); ?>

      <section
        class="jarallax dark-mode bg-dark py-xxl-5"
        data-jarallax
        data-speed="0.4"
      >
        <span
          class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-dark-translucent"
        ></span>
        <div
          class="jarallax-img"
          style="
            background-image: url(assets/img/landing/software-company/hero-bg.jpg);
          "
        ></div>
        <div
          class="position-relative text-center zindex-5 overflow-hidden pt-4 py-md-5"
        >
          <!-- Slider controls (Prev / next) -->
          <button
            type="button"
            id="hero-prev"
            class="btn btn-prev btn-icon btn-xl bg-transparent shadow-none position-absolute top-50 start-0 translate-middle-y d-none d-md-inline-flex ms-n3 ms-lg-2"
          >
            <i class="bx bx-chevron-left fs-1"></i>
          </button>
          <button
            type="button"
            id="hero-next"
            class="btn btn-next btn-icon btn-xl bg-transparent shadow-none position-absolute top-50 end-0 translate-middle-y d-none d-md-inline-flex me-n3 me-lg-2"
          >
            <i class="bx bx-chevron-right fs-1"></i>
          </button>

          <!-- Slider -->
          <div class="container text-center py-xl-5">
            <div class="row justify-content-center pt-lg-5">
              <div class="col-xl-8 col-lg-9 col-md-10 col-11">
                <div
                  class="swiper pt-5 pb-4 py-md-5"
                  data-swiper-options='{
                  "effect": "fade",
                  "speed": 500,
                  "autoplay": {
                    "delay": 5500,
                    "disableOnInteraction": false
                  },
                  "pagination": {
                    "el": ".swiper-pagination",
                    "clickable": true
                  },
                  "navigation": {
                    "prevEl": "#hero-prev",
                    "nextEl": "#hero-next"
                  }
                }'
                >
                  <div class="swiper-wrapper">
                    <!-- Item -->
                    <div class="swiper-slide">
                      <h2 class="display-2 from-start mb-lg-4">
                        Pioneering Your Digital Evolution
                      </h2>
                      <div class="from-end">
                        <p class="fs-xl text-light opacity-70 pb-2 mb-lg-5">
                          We're dedicated to propelling your digital evolution,
                          ensuring you stay ahead of the curve and maintain a
                          competitive edge in today's dynamic landscape.
                        </p>
                      </div>
                      <div class="scale-up delay-1">
                        <a
                          href="#"
                          class="btn btn-primary shadow-primary btn-lg"
                          >Start your project</a
                        >
                      </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide">
                      <h2 class="display-2 from-start mb-lg-4">
                        Award-Winning Software Development
                      </h2>
                      <div class="from-end">
                        <p class="fs-xl text-light opacity-70 pb-2 mb-lg-5">
                          We build complex web, desktop and mobile applications.
                          With us you get quality software and perfect service
                          every time.
                        </p>
                      </div>
                      <div class="scale-up delay-1">
                        <a
                          href="#"
                          class="btn btn-primary shadow-primary btn-lg"
                          >View case studies</a
                        >
                      </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide">
                      <h2 class="display-2 from-start mb-lg-4">
                        24/7 Tech &amp; Business Support
                      </h2>
                      <div class="from-end">
                        <p class="fs-xl text-light opacity-70 pb-2 mb-lg-5">
                          We ensure lifetime support of all applications we've
                          built. Our support department is a team of
                          professionals who will assist you 24/7.
                        </p>
                      </div>
                      <div class="scale-up delay-1">
                        <a
                          href="#"
                          class="btn btn-primary shadow-primary btn-lg"
                          >Work with us</a
                        >
                      </div>
                    </div>
                  </div>

                  <!-- Pagination (bullets) -->
                  <div
                    class="swiper-pagination position-relative d-md-none pt-2 mt-5"
                  ></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="container d-flex flex-column flex-sm-row align-items-center justify-content-between position-relative zindex-5 pb-5"
        >
          <div class="d-flex mb-4 mb-sm-0">
            <a
              href="#"
              class="btn btn-icon btn-secondary btn-linkedin rounded-circle me-2"
            >
              <i class="bx bxl-linkedin"></i>
            </a>
            <a
              href="#"
              class="btn btn-icon btn-secondary btn-facebook rounded-circle me-2"
            >
              <i class="bx bxl-facebook"></i>
            </a>
            <a
              href="#"
              class="btn btn-icon btn-secondary btn-twitter rounded-circle me-2"
            >
              <i class="bx bxl-twitter"></i>
            </a>
            <a
              href="#"
              class="btn btn-icon btn-secondary btn-youtube rounded-circle me-2"
            >
              <i class="bx bxl-youtube"></i>
            </a>
          </div>
          <a href="#" class="nav-link px-0">
            Our case studies
            <i class="bx bx-right-arrow-circle fs-4 ms-2"></i>
          </a>
        </div>
      </section>

      <!-- About -->
      <section class="container pt-5 mt-2 mt-md-4 mt-lg-5">
        <div class="row pt-xl-3">
          <div class="col-md-5 text-center text-md-start pb-5">
            <h1 class="mb-4">Transformation that makes business sense</h1>
            <p class="fs-lg pb-lg-3 mb-4">
              Established in 2018, Jaspa Digital is a digital transformation
              company in the Pretoria, South Africa, empowering businesses in
              legal, healthcare, and fintech industries to transcend traditional
              boundaries and unlock their full digital potential.
            </p>
            <a
              href="about-v2.html"
              class="btn btn-primary shadow-primary btn-lg"
              >More About Us</a
            >
          </div>
        </div>
      </section>

      <!-- Services -->
      <section class="bg-secondary pb-md-2 pb-lg-5">
        <div
          class="d-none d-lg-block"
          style="margin-top: -60px; padding-top: 60px"
        ></div>
        <div class="container pb-4 pt-5">
          <h2 class="h1 text-center text-md-start mb-lg-4 pt-1 pt-md-4">
            Digital Transformation Services
          </h2>
          <div class="row align-items-center pb-5 mb-lg-2">
            <div class="col-md-8 text-center text-md-start">
              <p class="fs-lg text-muted mb-md-0">
                We are focused on helping brands grow through digital
                transformation services. We bring real solutions to each
                client's problems through a deep understanding of their market,
                solution, and vision.
              </p>
            </div>
            <div
              class="col-md-4 d-flex justify-content-center justify-content-md-end"
            >
              <a
                href="app-development-services.html"
                class="btn btn-outline-primary btn-lg"
                >See all services</a
              >
            </div>
          </div>
          <div class="row row-cols-1 row-cols-md-2">
            <!-- Item -->
            <div class="col py-4 my-2 my-sm-3">
              <a
                href="services-single-v1.html"
                class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 me-xl-2"
              >
                <div class="card-body pt-3">
                  <div
                    class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3"
                  >
                    <img
                      src="assets/img/services/icons/cms.svg"
                      class="d-block m-1"
                      width="40"
                      alt="Icon"
                    />
                  </div>
                  <h2 class="h4 d-inline-flex align-items-center">
                    UI/UX Prototype Design
                    <i
                      class="bx bx-right-arrow-circle text-primary fs-3 ms-2"
                    ></i>
                  </h2>
                  <p class="fs-sm text-body mb-0">
                    Transforming ideas into sleek, user-centric prototypes,
                    ensuring seamless experiences across platforms with our
                    UI/UX expertise
                  </p>
                </div>
              </a>
            </div>

            <!-- Item -->
            <div class="col py-4 my-2 my-sm-3">
              <a
                href="services-single-v1.html"
                class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2"
              >
                <div class="card-body pt-3">
                  <div
                    class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3"
                  >
                    <img
                      src="assets/img/services/icons/rocket.svg"
                      class="d-block m-1"
                      width="40"
                      alt="Icon"
                    />
                  </div>
                  <h2 class="h4 d-inline-flex align-items-center">
                    IoT Integrations
                    <i
                      class="bx bx-right-arrow-circle text-primary fs-3 ms-2"
                    ></i>
                  </h2>
                  <p class="fs-sm text-body mb-0">
                    Expertly integrating IoT technologies into your ecosystem,
                    optimizing efficiency, and unlocking new possibilities for
                    interconnected systems.
                  </p>
                </div>
              </a>
            </div>

            <!-- Item -->
            <div class="col py-4 my-2 my-sm-3">
              <a
                href="services-single-v1.html"
                class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2"
              >
                <div class="card-body pt-3">
                  <div
                    class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3"
                  >
                    <img
                      src="assets/img/services/icons/mobile-app.svg"
                      class="d-block m-1"
                      width="40"
                      alt="Icon"
                    />
                  </div>
                  <h2 class="h4 d-inline-flex align-items-center">
                    Mobile & Web App Development
                    <i
                      class="bx bx-right-arrow-circle text-primary fs-3 ms-2"
                    ></i>
                  </h2>
                  <p class="fs-sm text-body mb-0">
                    Tailored mobile and web applications crafted with precision,
                    delivering intuitive user experiences and driving engagement
                    for your brand's success
                  </p>
                </div>
              </a>
            </div>

            <!-- Item -->
            <div class="col py-4 my-2 my-sm-3">
              <a
                href="services-single-v1.html"
                class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2"
              >
                <div class="card-body pt-3">
                  <div
                    class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3"
                  >
                    <img
                      src="assets/img/services/icons/analytics.svg"
                      class="d-block m-1"
                      width="40"
                      alt="Icon"
                    />
                  </div>
                  <h2 class="h4 d-inline-flex align-items-center">
                    Business Data Analytics
                    <i
                      class="bx bx-right-arrow-circle text-primary fs-3 ms-2"
                    ></i>
                  </h2>
                  <p class="fs-sm text-body mb-0">
                    Harnessing the power of data to drive informed decisions,
                    optimize processes, and unlock growth opportunities,
                    transforming raw information into actionable insights for
                    your business.
                  </p>
                </div>
              </a>
            </div>

            <!-- Item -->
            <div class="col py-4 my-2 my-sm-3">
              <a
                href="services-single-v1.html"
                class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2"
              >
                <div class="card-body pt-3">
                  <div
                    class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3"
                  >
                    <img
                      src="assets/img/services/icons/web-search.svg"
                      class="d-block m-1"
                      width="40"
                      alt="Icon"
                    />
                  </div>
                  <h2 class="h4 d-inline-flex align-items-center">
                    AI & ML Development
                    <i
                      class="bx bx-right-arrow-circle text-primary fs-3 ms-2"
                    ></i>
                  </h2>
                  <p class="fs-sm text-body mb-0">
                    Leveraging cutting-edge AI and ML technologies to automate
                    tasks, enhance decision-making, and unlock the full
                    potential of data-driven innovation for your organization's
                    success.
                  </p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- Case studies -->
      <section class="bg-secondary pt-1">
        <div class="container">
          <h2 class="h1 text-center text-md-start mb-lg-4">Case Studies</h2>
          <div class="row align-items-center pb-5">
            <div class="col-md-8 col-lg-7 col-xl-6 text-center text-md-start">
              <p class="fs-lg text-muted mb-md-0">
                We bring real solutions to each client’s problems through a deep
                understanding of their market, solution, and vision.
              </p>
            </div>
            <div
              class="col-md-4 col-lg-5 col-xl-6 d-flex justify-content-center justify-content-md-end"
            >
              <a href="#" class="btn btn-outline-primary btn-lg"
                >See all case studies</a
              >
            </div>
          </div>
        </div>

        <div class="position-relative py-lg-4 py-xl-5">
          <!-- Swiper tabs -->
          <div class="swiper-tabs position-absolute top-0 start-0 w-100 h-100">
            <div
              id="image-1"
              class="jarallax position-absolute top-0 start-0 w-100 h-100 swiper-tab active"
              data-jarallax
              data-speed="0.4"
            >
              <span
                class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-35"
              ></span>
              <div
                class="jarallax-img"
                style="
                  background-image: url(assets/img/landing/software-company/case-study01.jpg);
                "
              ></div>
            </div>
            <div
              id="image-2"
              class="jarallax position-absolute top-0 start-0 w-100 h-100 swiper-tab"
              data-jarallax
              data-speed="0.4"
            >
              <span
                class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-35"
              ></span>
              <div
                class="jarallax-img"
                style="
                  background-image: url(assets/img/landing/software-company/case-study02.jpg);
                "
              ></div>
            </div>
          </div>

          <!-- Swiper slider -->
          <div class="container position-relative zindex-5 py-5">
            <div class="row py-2 py-md-3">
              <div class="col-xl-5 col-lg-7 col-md-9">
                <!-- Slider controls (Prev / next) -->
                <div
                  class="d-flex justify-content-center justify-content-md-start pb-3 mb-3"
                >
                  <button
                    type="button"
                    id="case-study-prev"
                    class="btn btn-prev btn-icon btn-sm bg-white me-2"
                  >
                    <i class="bx bx-chevron-left"></i>
                  </button>
                  <button
                    type="button"
                    id="case-study-next"
                    class="btn btn-next btn-icon btn-sm bg-white ms-2"
                  >
                    <i class="bx bx-chevron-right"></i>
                  </button>
                </div>

                <!-- Card -->
                <div class="card bg-white shadow-sm p-3">
                  <div class="card-body">
                    <div
                      class="swiper"
                      data-swiper-options='{
                      "spaceBetween": 30,
                      "loop": true,
                      "tabs": true,
                      "pagination": {
                        "el": "#case-study-pagination",
                        "clickable": true
                      },
                      "navigation": {
                        "prevEl": "#case-study-prev",
                        "nextEl": "#case-study-next"
                      }
                    }'
                    >
                      <div class="swiper-wrapper">
                        <!-- Item -->
                        <div class="swiper-slide" data-swiper-tab="#image-1">
                          <img
                            src="assets/img/landing/software-company/case-study-logo01.png"
                            class="d-block mb-3"
                            width="72"
                            alt="Logo"
                          />
                          <h3 class="mb-2">
                            Cashless School Kids Payment Solution
                          </h3>
                          <p class="fs-sm text-muted border-bottom pb-3 mb-3">
                            Payment Service Provider Company
                          </p>
                          <p class="pb-2 pb-lg-3 mb-3">
                            Jaspa Digital revolutionizes transactions, enhancing
                            cashless payment solutions for school kids,
                            fostering safety and efficiency in transactions.
                          </p>
                          <a href="#" class="btn btn-primary"
                            >View case study</a
                          >
                        </div>

                        <!-- Item -->
                        <div class="swiper-slide" data-swiper-tab="#image-2">
                          <img
                            src="assets/img/landing/software-company/case-study-logo02.png"
                            class="d-block mb-3"
                            width="72"
                            alt="Logo"
                          />
                          <h3 class="mb-2">Smart tech case study</h3>
                          <p class="fs-sm text-muted border-bottom pb-3 mb-3">
                            Data Analytics Company
                          </p>
                          <p class="pb-2 pb-lg-3 mb-3">
                            Adipiscing quis a at ligula. Gravida gravida diam
                            rhoncus cursus in. Turpis sagittis tempor gravida
                            phasellus sapien. Faucibus donec consectetur sed id
                            sit nisl.
                          </p>
                          <a href="#" class="btn btn-primary"
                            >View case study</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Pagination (bullets) -->
                <div class="dark-mode pt-4 mt-3">
                  <div
                    id="case-study-pagination"
                    class="swiper-pagination position-relative bottom-0"
                  ></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Features -->
      <section class="container py-5 my-2 my-md-4 my-lg-5">
        <h2 class="h1 text-center pt-1 pt-xl-2 mb-4">Why Choose Us?</h2>
        <p class="fs-lg text-muted text-center pb-4 mb-2 mb-lg-3">
          We personalize how we work to fit your project needs. Our approach
          helps augment innovation.
        </p>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 pb-xl-3">
          <div class="col text-center border-end">
            <div
              class="card d-table border-0 rounded-circle shadow-sm p-3 mx-auto mb-4"
            >
              <img
                src="assets/img/landing/software-company/features/01.svg"
                width="32"
                alt="Icon"
              />
            </div>
            <h3 class="h5 mb-2 mb-lg-0">
              Build a functional prototype in 24 hrs
            </h3>
          </div>
          <div class="col text-center border-end">
            <div
              class="card d-table border-0 rounded-circle shadow-sm p-3 mx-auto mb-4"
            >
              <img
                src="assets/img/landing/software-company/features/02.svg"
                width="32"
                alt="Icon"
              />
            </div>
            <h3 class="h5 mb-2 mb-lg-0">Create an MVP within two weeks</h3>
          </div>
          <div class="col text-center border-end">
            <div
              class="card d-table border-0 rounded-circle shadow-sm p-3 mx-auto mb-4"
            >
              <img
                src="assets/img/landing/software-company/features/03.svg"
                width="32"
                alt="Icon"
              />
            </div>
            <h3 class="h5 mb-2 mb-lg-0">Agile and Flexibile</h3>
          </div>
          <div class="col text-center">
            <div
              class="card d-table border-0 rounded-circle shadow-sm p-3 mx-auto mb-4"
            >
              <img
                src="assets/img/landing/software-company/features/04.svg"
                width="32"
                alt="Icon"
              />
            </div>
            <h3 class="h5 mb-2 mb-lg-0">Consultative Approach</h3>
          </div>
        </div>
      </section>

      <!-- Brands (Carousel) -->
      <section class="container pb-5">
        <div
          class="swiper mx-n2"
          data-swiper-options='{
          "slidesPerView": 2,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "500": {
              "slidesPerView": 3,
              "spaceBetween": 8
            },
            "650": {
              "slidesPerView": 4,
              "spaceBetween": 8
            },
            "900": {
              "slidesPerView": 5,
              "spaceBetween": 8
            },
            "1100": {
              "slidesPerView": 6,
              "spaceBetween": 8
            }
          }
        }'
        >
          <div class="swiper-wrapper">
            <!-- Item -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2">
                <img
                  src="assets/img/brands/01.svg"
                  class="d-block mx-auto my-2"
                  width="154"
                  alt="Brand"
                />
              </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2">
                <img
                  src="assets/img/brands/02.svg"
                  class="d-block mx-auto my-2"
                  width="154"
                  alt="Brand"
                />
              </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2">
                <img
                  src="assets/img/brands/03.svg"
                  class="d-block mx-auto my-2"
                  width="154"
                  alt="Brand"
                />
              </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2">
                <img
                  src="assets/img/brands/04.svg"
                  class="d-block mx-auto my-2"
                  width="154"
                  alt="Brand"
                />
              </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2">
                <img
                  src="assets/img/brands/05.svg"
                  class="d-block mx-auto my-2"
                  width="154"
                  alt="Brand"
                />
              </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2">
                <img
                  src="assets/img/brands/06.svg"
                  class="d-block mx-auto my-2"
                  width="154"
                  alt="Brand"
                />
              </a>
            </div>
          </div>

          <!-- Pagination (bullets) -->
          <div class="swiper-pagination position-relative pt-2 mt-4"></div>
        </div>
      </section>

      <!-- News slider -->
      <section class="bg-secondary border-bottom border-light py-5">
        <div class="container py-md-3 py-lg-5">
          <h2 class="h1 text-center pb-2">News &amp; Insights</h2>
          <div class="position-relative mx-md-2 px-md-5">
            <!-- Slider controls (Prev / next) -->
            <button
              type="button"
              id="news-prev"
              class="btn btn-prev btn-icon btn-sm position-absolute top-50 start-0 translate-middle-y mt-n4 d-none d-md-inline-flex"
            >
              <i class="bx bx-chevron-left"></i>
            </button>
            <button
              type="button"
              id="news-next"
              class="btn btn-next btn-icon btn-sm position-absolute top-50 end-0 translate-middle-y mt-n4 d-none d-md-inline-flex"
            >
              <i class="bx bx-chevron-right"></i>
            </button>

            <!-- Swiper slider -->
            <div
              class="swiper swiper-nav-onhover mx-n2"
              data-swiper-options='{
              "slidesPerView": 1,
              "loop": true,
              "spaceBetween": 8,
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
              },
              "navigation": {
                "prevEl": "#news-prev",
                "nextEl": "#news-next"
              },
              "breakpoints": {
                "0": {
                  "slidesPerView": 1
                },
                "560": {
                  "slidesPerView": 2
                },
                "992": {
                  "slidesPerView": 3
                }
              }
            }'
            >
              <div class="swiper-wrapper">
                <!-- Item -->
                <div class="swiper-slide h-auto py-3">
                  <article
                    class="card p-md-3 p-2 border-0 shadow-sm card-hover-primary h-100 mx-2"
                  >
                    <div class="card-body pb-0">
                      <div
                        class="d-flex align-items-center justify-content-between mb-3"
                      >
                        <a
                          href="#"
                          class="badge fs-sm text-nav bg-secondary text-decoration-none position-relative zindex-2"
                          >Tech</a
                        >
                        <span class="fs-sm text-muted">1 day ago</span>
                      </div>
                      <h3 class="h4">
                        <a href="blog-single.html" class="stretched-link"
                          >How the Millennial Lifestyle Changes as Service
                          Prices Rise</a
                        >
                      </h3>
                      <p class="mb-0">
                        Sit facilisis dolor arcu, fermentum vestibulum arcu
                        elementum imperdiet. Mauris duis eleifend faucibus amet
                        sagittis.
                      </p>
                    </div>
                    <div
                      class="card-footer d-flex align-items-center py-4 text-muted border-top-0"
                    >
                      <div class="d-flex align-items-center me-3">
                        <i class="bx bx-like fs-lg me-1"></i>
                        <span class="fs-sm">2</span>
                      </div>
                      <div class="d-flex align-items-center me-3">
                        <i class="bx bx-comment fs-lg me-1"></i>
                        <span class="fs-sm">0</span>
                      </div>
                      <div class="d-flex align-items-center">
                        <i class="bx bx-share-alt fs-lg me-1"></i>
                        <span class="fs-sm">3</span>
                      </div>
                    </div>
                  </article>
                </div>

                <!-- Item -->
                <div class="swiper-slide h-auto py-3">
                  <article
                    class="card p-md-3 p-2 border-0 shadow-sm card-hover-primary h-100 mx-2"
                  >
                    <div class="card-body pb-0">
                      <div
                        class="d-flex align-items-center justify-content-between mb-3"
                      >
                        <a
                          href="#"
                          class="badge fs-sm text-nav bg-secondary text-decoration-none position-relative zindex-2"
                          >Strategy</a
                        >
                        <span class="fs-sm text-muted">12 hours ago</span>
                      </div>
                      <h3 class="h4">
                        <a href="blog-single.html" class="stretched-link"
                          >Mobile App Generates Data for the Energy
                          Management</a
                        >
                      </h3>
                      <p class="mb-0">
                        Sociis sit risus id. Sit facilisis dolor arcu, fermentum
                        vestibulum arcu ele. Pulvinar at maecenas maecenas
                        pharetra, tincidunt sollicitudin in in.
                      </p>
                    </div>
                    <div
                      class="card-footer d-flex align-items-center py-4 text-muted border-top-0"
                    >
                      <div class="d-flex align-items-center me-3">
                        <i class="bx bx-like fs-lg me-1"></i>
                        <span class="fs-sm">8</span>
                      </div>
                      <div class="d-flex align-items-center me-3">
                        <i class="bx bx-comment fs-lg me-1"></i>
                        <span class="fs-sm">4</span>
                      </div>
                      <div class="d-flex align-items-center">
                        <i class="bx bx-share-alt fs-lg me-1"></i>
                        <span class="fs-sm">2</span>
                      </div>
                    </div>
                  </article>
                </div>

                <!-- Item -->
                <div class="swiper-slide h-auto py-3">
                  <article
                    class="card p-md-3 p-2 border-0 shadow-sm card-hover-primary h-100 mx-2"
                  >
                    <div class="card-body pb-0">
                      <div
                        class="d-flex align-items-center justify-content-between mb-3"
                      >
                        <a
                          href="#"
                          class="badge fs-sm text-nav bg-secondary text-decoration-none position-relative zindex-2"
                          >Software</a
                        >
                        <span class="fs-sm text-muted">May 24, 2021</span>
                      </div>
                      <h3 class="h4">
                        <a href="blog-single.html" class="stretched-link"
                          >What the Software Stock Slump Means for the Market</a
                        >
                      </h3>
                      <p class="mb-0">
                        Id mollis consectetur congue egestas egestas suspendisse
                        blandit justo. Tellus augue commodo id quis tempus etiam
                        pulvinar at maecenas.
                      </p>
                    </div>
                    <div
                      class="card-footer d-flex align-items-center py-4 text-muted border-top-0"
                    >
                      <div class="d-flex align-items-center me-3">
                        <i class="bx bx-like fs-lg me-1"></i>
                        <span class="fs-sm">6</span>
                      </div>
                      <div class="d-flex align-items-center me-3">
                        <i class="bx bx-comment fs-lg me-1"></i>
                        <span class="fs-sm">1</span>
                      </div>
                      <div class="d-flex align-items-center">
                        <i class="bx bx-share-alt fs-lg me-1"></i>
                        <span class="fs-sm">5</span>
                      </div>
                    </div>
                  </article>
                </div>

                <!-- Item -->
                <div class="swiper-slide h-auto py-3">
                  <article
                    class="card p-md-3 p-2 border-0 shadow-sm card-hover-primary h-100 mx-2"
                  >
                    <div class="card-body pb-0">
                      <div
                        class="d-flex align-items-center justify-content-between mb-3"
                      >
                        <a
                          href="#"
                          class="badge fs-sm text-nav bg-secondary text-decoration-none position-relative zindex-2"
                          >Startups</a
                        >
                        <span class="fs-sm text-muted">Sep 3, 2021</span>
                      </div>
                      <h3 class="h4">
                        <a href="blog-single.html" class="stretched-link"
                          >5 Bad Landing Page Examples & How We Would Fix
                          Them</a
                        >
                      </h3>
                      <p class="mb-0">
                        Totam, soluta placeat hic adipisci reprehenderit iusto
                        est nulla dolorum doloremque inventore suscipit
                        consequuntur distinctio id.
                      </p>
                    </div>
                    <div
                      class="card-footer d-flex align-items-center py-4 text-muted border-top-0"
                    >
                      <div class="d-flex align-items-center me-3">
                        <i class="bx bx-like fs-lg me-1"></i>
                        <span class="fs-sm">8</span>
                      </div>
                      <div class="d-flex align-items-center me-3">
                        <i class="bx bx-comment fs-lg me-1"></i>
                        <span class="fs-sm">7</span>
                      </div>
                      <div class="d-flex align-items-center">
                        <i class="bx bx-share-alt fs-lg me-1"></i>
                        <span class="fs-sm">3</span>
                      </div>
                    </div>
                  </article>
                </div>

                <!-- Item -->
                <div class="swiper-slide h-auto py-3">
                  <article
                    class="card p-md-3 p-2 border-0 shadow-sm card-hover-primary h-100 mx-2"
                  >
                    <div class="card-body pb-0">
                      <div
                        class="d-flex align-items-center justify-content-between mb-3"
                      >
                        <a
                          href="#"
                          class="badge fs-sm text-nav bg-secondary text-decoration-none position-relative zindex-2"
                          >Technology</a
                        >
                        <span class="fs-sm text-muted">Aug 19, 2021</span>
                      </div>
                      <h3 class="h4">
                        <a href="blog-single.html" class="stretched-link"
                          >Why UX Design Matters and How it Affects Ranking</a
                        >
                      </h3>
                      <p class="mb-0">
                        Quaerat quos assumenda numquam dolorem, repellendus est,
                        itaque sint et odio perferendis laudantium laboriosam.
                      </p>
                    </div>
                    <div
                      class="card-footer d-flex align-items-center py-4 text-muted border-top-0"
                    >
                      <div class="d-flex align-items-center me-3">
                        <i class="bx bx-like fs-lg me-1"></i>
                        <span class="fs-sm">5</span>
                      </div>
                      <div class="d-flex align-items-center me-3">
                        <i class="bx bx-comment fs-lg me-1"></i>
                        <span class="fs-sm">3</span>
                      </div>
                      <div class="d-flex align-items-center">
                        <i class="bx bx-share-alt fs-lg me-1"></i>
                        <span class="fs-sm">9</span>
                      </div>
                    </div>
                  </article>
                </div>
              </div>

              <!-- Pagination (bullets) -->
              <div
                class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4"
              ></div>
            </div>
          </div>
        </div>
      </section>

      <!-- CTA -->
      <section class="position-relative bg-dark py-5">
        <span
          class="position-absolute top-0 start-0 w-100 h-100"
          style="background-color: rgba(255, 255, 255, 0.05)"
        ></span>
        <div
          class="container position-relative zindex-5 text-center my-xl-3 py-1 py-md-4 py-lg-5"
        >
          <p class="lead text-light opacity-70 mb-3">Enough Talking.</p>
          <h2 class="h1 text-light pb-3 pb-lg-0 mb-lg-5">
            Let's Build Something Together
          </h2>
          <a href="#" class="btn btn-primary shadow-primary btn-lg"
            >Lets Talk</a
          >
        </div>
      </section>
    </main>

<?php include('inc/footer.php');
