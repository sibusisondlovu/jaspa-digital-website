<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Silicon | Contacts v.2</title>

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
      <!-- Links + Contact form -->
      <section class="position-relative bg-secondary pt-5">
        <div class="container position-relative zindex-2 pt-5">
          <!-- Breadcrumb -->
          <nav class="pt-lg-4 pb-3 mb-2 mb-sm-3" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a href="index.html"
                  ><i class="bx bx-home-alt fs-lg me-1"></i>Home</a
                >
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Contacts v.2
              </li>
            </ol>
          </nav>

          <div class="row">
            <!-- Contact links -->
            <div class="col-xl-4 col-lg-5 pb-4 pb-sm-5 mb-2 mb-sm-0">
              <div class="pe-lg-4 pe-xl-0">
                <h1 class="pb-3 pb-md-4 mb-lg-5">Your Goals, Our Expertise</h1>
                <p>
                  Get in touch to unlock digital transformation opportunities
                </p>
                <div class="d-flex align-items-start pb-3 mb-sm-1 mb-md-3">
                  <div
                    class="bg-light text-primary rounded-circle flex-shrink-0 fs-3 lh-1 p-3"
                  >
                    <i class="bx bx-envelope"></i>
                  </div>
                  <div class="ps-3 ps-sm-4">
                    <h2 class="h4 pb-1 mb-2">Email us</h2>
                    <p class="mb-2">
                      Please feel free to drop us a line. We will respond as
                      soon as possible.
                    </p>
                    <div class="btn btn-link btn-lg px-0">
                      Leave a message
                      <i class="bx bx-right-arrow-alt lead ms-2"></i>
                    </div>
                  </div>
                </div>
                <div class="d-flex align-items-start">
                  <div
                    class="bg-light text-primary rounded-circle flex-shrink-0 fs-3 lh-1 p-3"
                  >
                    <i class="bx bx-group"></i>
                  </div>
                  <div class="ps-3 ps-sm-4">
                    <h2 class="h4 pb-1 mb-2">Careers</h2>
                    <p class="mb-2">
                      Sit ac ipsum leo lorem magna nunc mattis maecenas non
                      vestibulum.
                    </p>
                    <div class="btn btn-link btn-lg px-0">
                      Send an application
                      <i class="bx bx-right-arrow-alt lead ms-2"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Contact form -->
            <div class="col-xl-6 col-lg-7 offset-xl-2">
              <div class="card border-light shadow-lg py-3 p-sm-4 p-md-5">
                <div
                  class="bg-dark position-absolute top-0 start-0 w-100 h-100 rounded-3 d-none d-dark-mode-block"
                ></div>
                <div class="card-body position-relative zindex-2">
                  <h2 class="card-title pb-3 mb-4">Get Online Consultation</h2>
                  <form class="row g-4 needs-validation" novalidate>
                    <div class="col-12">
                      <label for="fn" class="form-label fs-base"
                        >Full name</label
                      >
                      <input
                        type="text"
                        class="form-control form-control-lg"
                        id="fn"
                        required
                      />
                      <div class="invalid-feedback">
                        Please enter your full name!
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="email" class="form-label fs-base"
                        >Email address</label
                      >
                      <input
                        type="email"
                        class="form-control form-control-lg"
                        id="email"
                        required
                      />
                      <div class="invalid-feedback">
                        Please provid a valid email address!
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="specialist" class="form-label fs-base"
                        >Specialist</label
                      >
                      <select
                        class="form-select form-select-lg"
                        id="specialist"
                        required
                      >
                        <option value="" selected disabled>
                          Choose a specialist
                        </option>
                        <option value="Therapist">Therapist</option>
                        <option value="Dentist">Dentist</option>
                        <option value="Cardiologist">Cardiologist</option>
                        <option value="Pediatrician">Pediatrician</option>
                        <option value="Gynecologist">Gynecologist</option>
                        <option value="Surgeon">Surgeon</option>
                      </select>
                      <div class="invalid-feedback">
                        Choose a specialist from the list!
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label for="date" class="form-label fs-base">Date</label>
                      <input
                        type="text"
                        class="form-control form-control-lg"
                        id="date"
                        data-format='{"date": true, "datePattern": ["m", "d"]}'
                        placeholder="mm/dd"
                        required
                      />
                      <div class="invalid-feedback">Enter a date!</div>
                    </div>
                    <div class="col-sm-6">
                      <label for="time" class="form-label fs-base">Time</label>
                      <input
                        type="text"
                        class="form-control form-control-lg"
                        id="time"
                        data-format='{"time": true, "timePattern": ["h", "m"]}'
                        placeholder="hh:mm"
                        required
                      />
                      <div class="invalid-feedback">Enter a time!</div>
                    </div>
                    <div class="col-12 pt-2 pt-sm-3">
                      <button
                        type="submit"
                        class="btn btn-lg btn-primary w-100 w-sm-auto"
                      >
                        Make an appointment
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="position-absolute bottom-0 start-0 w-100 bg-light"
          style="height: 8rem"
        ></div>
      </section>

      <!-- Branches -->
      <section class="container py-2 py-lg-4 py-xl-5 mb-2 mb-md-3">
        <div class="row py-5">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div
              class="d-flex flex-column h-100 shadow-sm rounded-3 overflow-hidden"
            >
              <iframe
                class="d-block h-100"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5020.057277316842!2d-122.40737351959179!3d37.73986147046842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd5ce6be90058bc85!2sOur%20Planet%20Recycling%20S.F.!5e0!3m2!1sen!2sua!4v1653946944869!5m2!1sen!2sua"
                style="border: 0; min-height: 300px"
                allowfullscreen=""
                loading="lazy"
              ></iframe>
            </div>
          </div>
          <div class="col-lg-5 offset-lg-1">
            <h2 class="h4 mb-4">Medical Center 1</h2>
            <ul class="list-unstyled pb-2 pb-lg-0 mb-4 mb-lg-5">
              <li class="d-flex pb-1 mb-2">
                <i
                  class="bx bx-map text-primary fs-xl me-2"
                  style="margin-top: 0.125rem"
                ></i>
                445 Bayshor Blvd, San Francisco, CA 94124
              </li>
              <li class="d-flex pb-1 mb-2">
                <i
                  class="bx bx-phone-call text-primary fs-xl me-2"
                  style="margin-top: 0.125rem"
                ></i>
                (406) 555-0120
              </li>
              <li class="d-flex">
                <i
                  class="bx bx-time-five text-primary fs-xl me-2"
                  style="margin-top: 0.125rem"
                ></i>
                <div>
                  <strong class="text-nav">Mon - Fri</strong>: 9:00 am - 22:00
                  am
                  <br />
                  <strong class="text-nav">Sat - Sun:</strong>: 9:00 am - 20:00
                  am
                </div>
              </li>
            </ul>
            <h2 class="h4 mb-4">Medical Center 2</h2>
            <ul class="list-unstyled pb-2 pb-lg-0 mb-4 mb-lg-5">
              <li class="d-flex pb-1 mb-2">
                <i
                  class="bx bx-map text-primary fs-xl me-2"
                  style="margin-top: 0.125rem"
                ></i>
                2464 Royal Ln. Mesa, New Jersey 45463
              </li>
              <li class="d-flex pb-1 mb-2">
                <i
                  class="bx bx-phone-call text-primary fs-xl me-2"
                  style="margin-top: 0.125rem"
                ></i>
                (406) 544-0123
              </li>
              <li class="d-flex">
                <i
                  class="bx bx-time-five text-primary fs-xl me-2"
                  style="margin-top: 0.125rem"
                ></i>
                <div>
                  <strong class="text-nav">Mon - Fri</strong>: 9:00 am - 22:00
                  am
                  <br />
                  <strong class="text-nav">Sat - Sun:</strong>: 9:00 am - 20:00
                  am
                </div>
              </li>
            </ul>
            <div class="d-flex pt-1 pt-md-3 pt-xl-4">
              <a href="#" class="btn btn-icon btn-secondary btn-facebook me-3">
                <i class="bx bxl-facebook"></i>
              </a>
              <a href="#" class="btn btn-icon btn-secondary btn-instagram me-3">
                <i class="bx bxl-instagram"></i>
              </a>
              <a href="#" class="btn btn-icon btn-secondary btn-twitter me-3">
                <i class="bx bxl-twitter"></i>
              </a>
              <a href="#" class="btn btn-icon btn-secondary btn-youtube">
                <i class="bx bxl-youtube"></i>
              </a>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php include('inc/footer.php');