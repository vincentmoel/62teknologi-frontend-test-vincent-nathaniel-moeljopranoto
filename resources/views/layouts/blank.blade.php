<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>{{ isset($title) ? "$title | " : "" }} {{ env("BRAND_NAME") }}</title>
    <link rel="icon" type="image/x-icon" href="/src/assets/img/favicon.ico"/>
    
    <!-- ENABLE LOADERS -->
    <link href="/layouts/modern-light-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="/layouts/modern-light-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="/layouts/modern-light-menu/loader.js"></script>
    <!-- /ENABLE LOADERS -->

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    {{-- BEGIN SweetAlert2 --}}
    <link rel="stylesheet" href="/src/plugins/src/sweetalerts2/sweetalerts2.css">
    <link href="/src/plugins/css/light/sweetalerts2/custom-sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="/src/plugins/css/dark/sweetalerts2/custom-sweetalert.css" rel="stylesheet" type="text/css" />

    {{-- END SweetAlert2 --}}

    {{-- BEGIN Snackbar --}}
    <link href="/src/plugins/src/notification/snackbar/snackbar.min.css" rel="stylesheet" type="text/css" />
    <link href="/src/plugins/css/light/notification/snackbar/custom-snackbar.css" rel="stylesheet" type="text/css" />
    <link href="/src/plugins/css/dark/notification/snackbar/custom-snackbar.css" rel="stylesheet" type="text/css" />
    {{-- END Snackbar --}}
    <!-- END GLOBAL MANDATORY STYLES -->
    @yield('css')
    
</head>
<body>

    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->


    @yield('content')


    @yield('script')

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->

    <script src="/src/plugins/src/global/vendors.min.js"></script>
    <script src="/src/plugins/src/sweetalerts2/sweetalerts2.min.js"></script>
    <script src="/src/plugins/src/notification/snackbar/snackbar.min.js"></script>
    
    <script>

        $(document).ready(function() {
            @if(Session::has('success'))
                Snackbar.show({ 
                    text: '{{ Session::get('success') }}',
                    actionTextColor: '#fff',
                    backgroundColor: '#00ab55'
                });
            @endif

            @if(Session::has('error'))
                Swal.fire({
                    icon: 'error',
                    title: "Error Code: {{ Session::get('error.code') }}",
                    text: "{{ Session::get('error.message') }}"
                })
            @endif
        });
    </script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

</body>
</html>