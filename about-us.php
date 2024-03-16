<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Silicon | About v.1</title>

    <!-- SEO Meta Tags -->
    <meta
      name="description"
      content="Silicon - Multipurpose Technology Bootstrap Template"
    />
    <meta
      name="keywords"
      content="bootstrap, business, creative agency, mobile app showcase, saas, fintech, finance, online courses, software, medical, conference landing, services, e-commerce, shopping cart, multipurpose, shop, ui kit, marketing, seo, landing, blog, portfolio, html5, css3, javascript, gallery, slider, touch, creative"
    />
    <?php include('inc/header.php'); ?>
      <!-- Hero -->
      <section class="position-relative pt-5">
        <!-- Background -->
        <div
          class="position-absolute top-0 start-0 w-100 bg-position-bottom-center bg-size-cover bg-repeat-0"
          style="background-image: url(assets/img/about/hero-bg.svg)"
        >
          <div class="d-lg-none" style="height: 960px"></div>
          <div class="d-none d-lg-block" style="height: 768px"></div>
        </div>

        <!-- Content -->
        <div class="container position-relative zindex-5 pt-5">
          <div class="row">
            <div class="col-lg-6">
              <!-- Breadcrumb -->
              <nav
                class="pt-md-2 pt-lg-3 pb-4 pb-md-5 mb-xl-4"
                aria-label="breadcrumb"
              >
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item">
                    <a href="index.html"
                      ><i class="bx bx-home-alt fs-lg me-1"></i>Home</a
                    >
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    About Us
                  </li>
                </ol>
              </nav>

              <!-- Text -->
              <h1 class="pb-2 pb-md-3">
                We understand. We care. We never stop thinking.
              </h1>
              <p
                class="fs-xl pb-4 mb-1 mb-md-2 mb-lg-3"
                style="max-width: 526px"
              >
                A decade ago, Jaspa embarked as a mobile app agency fueled by
                insatiable curiosity and an unwavering commitment to innovation.
                In 2013, a strategic pivot propelled us into the thriving realm
                of enterprise solutions. With clear vision and foresight, we
                harnessed technology's potential to address intricate business
                challenges, diving headfirst into the world of digital
                transformation
              </p>
              <p>
                Our purpose is clear: to ignite transformative change for
                enterprises in manufacturing, healthcare, and fintech. With
                expertise in AI, ML, IoT, and real-time data analytics, we lead
                the way toward a smarter, more interconnected, and sustainable
                future.​
              </p>

              <div class="row row-cols-3 pt-4 pt-md-5 mt-2 mt-xl-4">
                <div class="col">
                  <h3 class="h2 mb-2">50+</h3>
                  <p class="mb-0"><strong>Combined</strong> Team Experience</p>
                </div>
                <div class="col">
                  <h3 class="h2 mb-2">100+</h3>
                  <p class="mb-0"><strong>Completed</strong> projects</p>
                </div>
                <div class="col">
                  <h3 class="h2 mb-2">3</h3>
                  <p class="mb-0"><strong>International</strong> clients</p>
                </div>
              </div>
            </div>

            <!-- Images -->
            <div class="col-lg-6 mt-xl-3 pt-5 pt-lg-4">
              <div class="row row-cols-2 gx-3 gx-lg-4">
                <div class="col pt-lg-5 mt-lg-1">
                  <img
                    src="assets/img/about/hero/01.jpg"
                    class="d-block rounded-3 mb-3 mb-lg-4"
                    alt="Image"
                  />
                  <img
                    src="assets/img/about/hero/02.jpg"
                    class="d-block rounded-3"
                    alt="Image"
                  />
                </div>
                <div class="col">
                  <img
                    src="assets/img/about/hero/03.jpg"
                    class="d-block rounded-3 mb-3 mb-lg-4"
                    alt="Image"
                  />
                  <img
                    src="assets/img/about/hero/04.jpg"
                    class="d-block rounded-3"
                    alt="Image"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Benefits (features) -->
      <section class="container mt-3 mb-5 pt-lg-5" id="benefits">
        <div
          class="swiper pt-3"
          data-swiper-options='{
          "slidesPerView": 1,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "500": {
              "slidesPerView": 2
            },
            "991": {
              "slidesPerView": 3
            }
          }
        }'
        >
          <div class="swiper-wrapper pt-4">
            <!-- Item -->
            <div class="swiper-slide border-end-lg px-2">
              <div class="text-center">
                <img
                  src="assets/img/landing/digital-agency/icons/idea.svg"
                  width="48"
                  alt="Bulb icon"
                  class="d-block mb-4 mx-auto"
                />
                <h4 class="mb-2 pb-1">Innovation</h4>
                <p class="mx-auto" style="max-width: 336px">
                  We strive to create innovative solutions that solve real-wolrd
                  problems and drive growth.
                </p>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide border-end-lg px-2">
              <div class="text-center">
                <img
                  src="assets/img/landing/digital-agency/icons/award.svg"
                  width="48"
                  alt="Award icon"
                  class="d-block mb-4 mx-auto"
                />
                <h4 class="mb-2 pb-1">Excellence</h4>
                <p class="mx-auto" style="max-width: 336px">
                  We are committed to delivering excellence in everything we do,
                  from solution design to project delivery and support.
                </p>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide px-2">
              <div class="text-center">
                <img
                  src="assets/img/landing/digital-agency/icons/team.svg"
                  width="48"
                  alt="Team icon"
                  class="d-block mb-4 mx-auto"
                />
                <h4 class="mb-2 pb-1">Partnership</h4>
                <p class="mx-auto" style="max-width: 336px">
                  We believe in building long-term partnerships with our clients
                  and working collaboratively to achieve their goals.
                </p>
              </div>
            </div>
          </div>

          <!-- Pagination (bullets) -->
          <div
            class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4"
          ></div>
        </div>
      </section>

      <!-- Social networks (Carousel on narrow screens) -->
      <section class="container text-center py-5 my-2 my-md-4 my-lg-5">
        <h2 class="h1 mb-4">We Have Social Networks</h2>
        <p class="fs-lg text-muted pb-2 mb-5">
          Follow us and keep up to date with the freshest news!
        </p>
        <div
          class="swiper"
          data-swiper-options='{
          "slidesPerView": 2,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "500": {
              "slidesPerView": 3
            },
            "650": {
              "slidesPerView": 4
            },
            "900": {
              "slidesPerView": 5
            },
            "1100": {
              "slidesPerView": 6
            }
          }
        }'
        >
          <div class="swiper-wrapper">
            <!-- Item -->
            <div class="swiper-slide">
              <div class="position-relative text-center border-end mx-n1">
                <a
                  href="#"
                  class="btn btn-icon btn-secondary btn-facebook btn-lg stretched-link"
                >
                  <i class="bx bxl-facebook"></i>
                </a>
                <div class="pt-4">
                  <h6 class="mb-1">Facebook</h6>
                  <p class="fs-sm text-muted mb-0">silicon</p>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <div class="position-relative text-center border-end mx-n1">
                <a
                  href="#"
                  class="btn btn-icon btn-secondary btn-instagram btn-lg stretched-link"
                >
                  <i class="bx bxl-instagram"></i>
                </a>
                <div class="pt-4">
                  <h6 class="mb-1">Instagram</h6>
                  <p class="fs-sm text-muted mb-0">@silicon</p>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <div class="position-relative text-center border-end mx-n1">
                <a
                  href="#"
                  class="btn btn-icon btn-secondary btn-twitter btn-lg stretched-link"
                >
                  <i class="bx bxl-twitter"></i>
                </a>
                <div class="pt-4">
                  <h6 class="mb-1">Twitter</h6>
                  <p class="fs-sm text-muted mb-0">@silicon</p>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <div class="position-relative text-center border-end mx-n1">
                <a
                  href="#"
                  class="btn btn-icon btn-secondary btn-linkedin btn-lg stretched-link"
                >
                  <i class="bx bxl-linkedin"></i>
                </a>
                <div class="pt-4">
                  <h6 class="mb-1">LinkedIn</h6>
                  <p class="fs-sm text-muted mb-0">Silicon Inc.</p>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <div class="position-relative text-center border-end mx-n1">
                <a
                  href="#"
                  class="btn btn-icon btn-secondary btn-youtube btn-lg stretched-link"
                >
                  <i class="bx bxl-youtube"></i>
                </a>
                <div class="pt-4">
                  <h6 class="mb-1">YouTube</h6>
                  <p class="fs-sm text-muted mb-0">Silicon</p>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <div class="position-relative text-center border-end mx-n1">
                <a
                  href="#"
                  class="btn btn-icon btn-secondary btn-dribbble btn-lg stretched-link"
                >
                  <i class="bx bxl-dribbble"></i>
                </a>
                <div class="pt-4">
                  <h6 class="mb-1">Dribbble</h6>
                  <p class="fs-sm text-muted mb-0">Silicon</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Pagination (bullets) -->
          <div
            class="swiper-pagination position-relative bottom-0 pt-3 mt-4"
          ></div>
        </div>
      </section>
    </main>
    <?php include('inc/footer.php');