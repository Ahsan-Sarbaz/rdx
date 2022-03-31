<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>RDX</title>

        <script src="https://kit.fontawesome.com/c2605b0aa5.js" crossorigin="anonymous"></script>
        <!-- =============== VENDOR STYLES ===============-->
        <!-- FONT AWESOME-->
        <link rel="stylesheet" href="https://rdx.indel.co/asset/vendor/fontawesome/css/font-awesome.min.css">
        <!-- SIMPLE LINE ICONS-->
        <link rel="stylesheet" href="/css/simple-icons.css">
        <!-- ANIMATE.CSS-->
        <link rel="stylesheet" href="https://rdx.indel.co/asset/vendor/animate.css/animate.min.css">
        <!-- WHIRL (spinners)-->
        <link rel="stylesheet" href="https://rdx.indel.co/asset/vendor/whirl/dist/whirl.css">
        <!-- MORRIS-->
        <link rel="stylesheet" href="https://rdx.indel.co/asset/vendor/morris.js/morris.css">
        <!-- =============== PAGE VENDOR STYLES ===============-->
        <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars-->
        <link rel="stylesheet" href="https://rdx.indel.co/asset/vendor/blueimp-file-upload/css/jquery.fileupload.css">
        <!-- WEATHER ICONS-->
        <link rel="stylesheet" href="/css/weather-icons.css">
        <!-- DATATABLES-->



        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <link rel="stylesheet" href="/css/dataTables.colvis.css">
        <link rel="stylesheet" href="/css/dataTables.bootstrap.css">
        <link rel="stylesheet" href="/css/index.css">
        <link rel="stylesheet" href="/css/sweetalert.css">
        <!-- =============== BOOTSTRAP STYLES ===============-->
        <link rel="stylesheet" href="https://rdx.indel.co/asset/app/css/bootstrap.css" id="bscss">
        <!-- DATETIMEPICKER-->
        <link rel="stylesheet"
            href="https://rdx.indel.co/asset/vendor/bootstrap-datepicker-1.6.4-dist/css/bootstrap-datepicker.min.css">

        <link rel="stylesheet"
            href="https://rdx.indel.co/asset/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
        <!-- =============== APP STYLES ===============-->
        <link rel="stylesheet" href="https://rdx.indel.co/asset/app/css/app.css" id="maincss">
        <link rel="stylesheet" href="https://rdx.indel.co/asset/vendor/select2/dist/css/select2.css">
        <link rel="stylesheet" href="https://rdx.indel.co/asset/vendor/select2-bootstrap-theme/dist/select2-bootstrap.css">
        <link rel="stylesheet" href="https://rdx.indel.co/asset/vendor/master/master.css">
        <link rel="stylesheet" href="https://rdx.indel.co/asset/vendor/master/roster.css">
        <link rel="stylesheet" href="https://rdx.indel.co/asset/vendor/master/site.css">
        <link rel="icon" href="./images/logo.png" type="image/gif" sizes="10x10">
        <style media="screen">
            .dropdown-custom {
                position: relative;
                display: inline-block;
            }

            .dropdown-content-custom {
                display: none;
                position: absolute;
                background-color: #f1f1f1;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                z-index: 1;
            }

            .dropdown-content-custom a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown-content-custom a:hover {
                background-color: #ddd
            }

            .dropdown-custom:hover .dropdown-content-custom {
                display: block;
            }

            .dropdown-custom:hover .dropbtn {
                background-color: #3e8e41;
            }

            .selectOptionShowing {
                display: none
            }

            @media (max-width: 764px) {
                .hidingThisForMobile {
                    display: none;
                }

                .selectOptionShowing {
                    display: inline-block;
                }
            }

            .dropdown-submenu {
                position: relative;
            }

            .dropdown-submenu .dropdown-menu {
                top: 0;
                left: 50%;
                margin-top: -1px;
            }

            .fas {
                -moz-osx-font-smoothing: grayscale;
                -webkit-font-smoothing: antialiased;
                display: initial !important;
                font-weight: 600 !important;
            }

        </style>

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        {{-- <x-jet-banner /> --}}

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

                <!-- =============== VENDOR SCRIPTS ===============-->
        <!-- MODERNIZR-->
        <script src="https://rdx.indel.co/asset/vendor/modernizr/modernizr.custom.js"></script>
        <!-- MATCHMEDIA POLYFILL-->
        <script src="https://rdx.indel.co/asset/vendor/matchMedia/matchMedia.js"></script>
        <!-- JQUERY-->
        <script src="https://rdx.indel.co/asset/vendor/jquery/dist/jquery.js"></script>
        <script src="https://rdx.indel.co/asset/vendor/jquery-ui/jquery-ui.js"></script>
        <!-- BOOTSTRAP-->
        <script src="https://rdx.indel.co/asset/vendor/bootstrap/dist/js/bootstrap.js"></script>
        <!-- STORAGE API-->
        <script src="https://rdx.indel.co/asset/vendor/jQuery-Storage-API/jquery.storageapi.js"></script>
        <!-- JQUERY EASING-->
        <script src="https://rdx.indel.co/asset/vendor/jquery.easing/js/jquery.easing.js"></script>
        <!-- ANIMO-->
        <script src="https://rdx.indel.co/asset/vendor/animo.js/animo.js"></script>
        <!-- SLIMSCROLL-->
        <script src="https://rdx.indel.co/asset/vendor/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- SCREENFULL-->
        <script src="https://rdx.indel.co/asset/vendor/screenfull/dist/screenfull.js"></script>
        <!-- LOCALIZE-->

        <!-- RTL demo-->
        <script src="https://rdx.indel.co/asset/app/js/demo/demo-rtl.js"></script>
        <!-- =============== PAGE VENDOR SCRIPTS ===============-->
        <!-- SPARKLINE-->
        <script src="https://rdx.indel.co/asset/vendor/sparkline/index.js"></script>
        <!-- FLOT CHART-->
        <script src="https://rdx.indel.co/asset/vendor/Flot/jquery.flot.js"></script>
        <script src="https://rdx.indel.co/asset/vendor/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
        <script src="https://rdx.indel.co/asset/vendor/Flot/jquery.flot.resize.js"></script>
        <script src="https://rdx.indel.co/asset/vendor/Flot/jquery.flot.pie.js"></script>
        <script src="https://rdx.indel.co/asset/vendor/Flot/jquery.flot.time.js"></script>
        <script src="https://rdx.indel.co/asset/vendor/Flot/jquery.flot.categories.js"></script>
        <script src="https://rdx.indel.co/asset/vendor/flot-spline/js/jquery.flot.spline.min.js"></script>
        <!-- CLASSY LOADER-->
        <script src="https://rdx.indel.co/asset/vendor/jquery-classyloader/js/jquery.classyloader.min.js"></script>
        <!-- MOMENT JS-->
        <script src="https://rdx.indel.co/asset/vendor/moment/min/moment-with-locales.min.js"></script>
        <!-- DEMO-->
        <script src="https://rdx.indel.co/asset/app/js/demo/demo-flot.js"></script>
        <!-- DATATABLES-->
        <script src="https://rdx.indel.co/asset/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
        <script src="https://rdx.indel.co/asset/vendor/datatables-colvis/js/dataTables.colVis.js"></script>
        <script src="https://rdx.indel.co/asset/vendor/datatables/media/js/dataTables.bootstrap.js"></script>
        <script src="https://rdx.indel.co/asset/vendor/datatables-buttons/js/dataTables.buttons.js"></script>
        <script src="https://rdx.indel.co/asset/vendor/datatables-buttons/js/buttons.bootstrap.js"></script>
        <script src="https://rdx.indel.co/asset/vendor/datatables-buttons/js/buttons.colVis.js"></script>
        <script src="https://rdx.indel.co/asset/vendor/datatables-buttons/js/buttons.flash.js"></script>
        <script src="https://rdx.indel.co/asset/vendor/datatables-buttons/js/buttons.html5.js"></script>
        <script src="https://rdx.indel.co/asset/vendor/datatables-buttons/js/buttons.print.js"></script>
        <script src="https://rdx.indel.co/asset/vendor/datatables-responsive/js/dataTables.responsive.js"></script>
        <script src="https://rdx.indel.co/asset/vendor/datatables-responsive/js/responsive.bootstrap.js"></script>
        <script src="https://rdx.indel.co/asset/app/js/demo/demo-datatable.js"></script>
        <script src="https://rdx.indel.co/asset/vendor/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript"
                src="https://rdx.indel.co/asset/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js">
        </script>
        <!-- The basic File Upload plugin-->

        <!-- The File Upload processing plugin-->

        <!-- The File Upload image preview & resize plugin-->

        <!-- DATETIMEPICKER-->
        <script type="text/javascript"
                src="https://rdx.indel.co/asset/vendor/bootstrap-datepicker-1.6.4-dist/js/bootstrap-datepicker.min.js"></script>
        <!-- CLASSY LOADER-->



        @livewireScripts
    </body>
</html>
