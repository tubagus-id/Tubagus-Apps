<!DOCTYPE html>
<html lang="en" data-bs-theme="blue-theme">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Slip Gaji | Tubagus.NET</title>
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"></script>
    <!--plugins-->
    <link
      href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/plugins/metismenu/metisMenu.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/plugins/metismenu/mm-vertical.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/plugins/simplebar/css/simplebar.css"
    />
    <!--bootstrap css-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined"
      rel="stylesheet"
    />
    <!--main css-->
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="sass/main.css" rel="stylesheet" />
    <link href="sass/dark-theme.css" rel="stylesheet" />
    <link href="sass/blue-theme.css" rel="stylesheet" />
    <link href="sass/semi-dark.css" rel="stylesheet" />
    <link href="sass/bordered-theme.css" rel="stylesheet" />
    <link href="sass/responsive.css" rel="stylesheet" />
  </head>
  <body>   
    <x-topbar></x-topbar>
    <x-sidebar></x-sidebar>

    {{-- Start main content --}}
    <main class="main-wrapper">
      {{ $slot }}
    </main>
    {{-- End main content --}}

    <x-overlay></x-overlay>
    <x-startcart></x-startcart>
    <x-switcher></x-switcher>

    {{-- bootstrap js --}}
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    {{-- plugins --}}
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    {{-- plugins --}}
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="assets/plugins/metismenu/metisMenu.min.js"></script>
    <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/peity/jquery.peity.min.js"></script>
    <script>
      $(".data-attributes span").peity("donut");
    </script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/dashboard1.js"></script>
    <script>
      new PerfectScrollbar(".user-list");
    </script>
  </body>
</html>
