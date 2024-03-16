<meta name="author" content="Sibusiso Ndlovu" />

<meta name="viewport" content="width=device-width, initial-scale=1" />

<link rel="icon" type="image/png" href="assets/favicon/favicon.png" />

<meta name="msapplication-TileColor" content="#080032" />

<meta name="theme-color" content="#ffffff" />

<link
  rel="stylesheet"
  media="screen"
  href="assets/vendor/boxicons/css/boxicons.min.css"
/>
<link
  rel="stylesheet"
  media="screen"
  href="assets/vendor/swiper/swiper-bundle.min.css"
/>

<link rel="stylesheet" media="screen" href="assets/css/theme.min.css" />

<style>
  .page-loading {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    -webkit-transition: all 0.4s 0.2s ease-in-out;
    transition: all 0.4s 0.2s ease-in-out;
    background-color: #fff;
    opacity: 0;
    visibility: hidden;
    z-index: 9999;
  }
  .dark-mode .page-loading {
    background-color: #0b0f19;
  }
  .page-loading.active {
    opacity: 1;
    visibility: visible;
  }
  .page-loading-inner {
    position: absolute;
    top: 50%;
    left: 0;
    width: 100%;
    text-align: center;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    -webkit-transition: opacity 0.2s ease-in-out;
    transition: opacity 0.2s ease-in-out;
    opacity: 0;
  }
  .page-loading.active > .page-loading-inner {
    opacity: 1;
  }
  .page-loading-inner > span {
    display: block;
    font-size: 1rem;
    font-weight: normal;
    color: #9397ad;
  }
  .dark-mode .page-loading-inner > span {
    color: #fff;
    opacity: 0.6;
  }
  .page-spinner {
    display: inline-block;
    width: 2.75rem;
    height: 2.75rem;
    margin-bottom: 0.75rem;
    vertical-align: text-bottom;
    border: 0.15em solid #b4b7c9;
    border-right-color: transparent;
    border-radius: 50%;
    -webkit-animation: spinner 0.75s linear infinite;
    animation: spinner 0.75s linear infinite;
  }
  .dark-mode .page-spinner {
    border-color: rgba(255, 255, 255, 0.4);
    border-right-color: transparent;
  }
  @-webkit-keyframes spinner {
    100% {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg);
    }
  }
  @keyframes spinner {
    100% {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg);
    }
  }
</style>

<!-- Theme mode -->
<script>
  let mode = window.localStorage.getItem("mode"),
    root = document.getElementsByTagName("html")[0];
  if (mode !== null && mode === "dark") {
    root.classList.add("dark-mode");
  } else {
    root.classList.remove("dark-mode");
  }
</script>

<!-- Page loading scripts -->
<script>
  (function () {
    window.onload = function () {
      const preloader = document.querySelector(".page-loading");
      preloader.classList.remove("active");
      setTimeout(function () {
        preloader.remove();
      }, 1000);
    };
  })();
</script>
</head>

<!-- Body -->
<body>
<!-- Page loading spinner -->
<div class="page-loading active">
  <div class="page-loading-inner">
    <div class="page-spinner"></div>
    <span>Loading...</span>
  </div>
</div>

<main class="page-wrapper">
  <header class="header navbar navbar-expand-lg bg-light navbar-sticky">
    <div class="container px-3">
      <a href="index.php" class="navbar-brand pe-3">
        <img src="assets/img/logo.svg" width="47" alt="Jaspa Digital" />
        Jaspa Digital
      </a>
      <div id="navbarNav" class="offcanvas offcanvas-end">
        <div class="offcanvas-header border-bottom">
          <h5 class="offcanvas-title">Menu</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="offcanvas"
            aria-label="Close"
          ></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a href="app-development.php" class="nav-link">Services</a>
            </li>

            <li class="nav-item">
              <a href="404.php" class="nav-link"
                >Resources & Insights</a
              >
            </li>
            <li class="nav-item">
              <a href="404.php" class="nav-link">The Lab</a>
            </li>
            <li class="nav-item">
              <a href="about-us.php" class="nav-link">About Us</a>
            </li>
          </ul>
        </div>
        <div class="offcanvas-header border-top">
          <a
            href="lets-talk.php"
            class="btn btn-primary w-100"
            target="_blank"
            rel="noopener"
          >
            <i class="bx bx-cart fs-4 lh-1 me-1"></i>
            &nbsp;Let's Talk
          </a>
        </div>
      </div>

      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="offcanvas"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <a
        href=""
        class="btn btn-primary btn-sm fs-sm rounded d-none d-lg-inline-flex"
        target="_blank"
        rel="noopener"
      >
        <i class="bx bx-cart fs-5 lh-1 me-1"></i>
        &nbsp;Let's Talk
      </a>
    </div>
  </header>