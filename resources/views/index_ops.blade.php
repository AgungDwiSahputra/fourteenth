<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard for Ops | Khalid Fadlillah</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

        <style>
            body:not(.lyteboxed) #viz-client-container {
                width: 100vw !important;
                margin: 0 auto !important;
            }
        </style>
    </head>
    <body class="mx-auto" style="max-width: 1900px;">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background: url('/assets/image/background/navbar.png') center/cover no-repeat, #1466D1;">
            <div class="container-fluid justify-content-start">
                <div class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="31" viewBox="0 0 42 31" fill="none">
                        <path d="M7.84432 2.53114L23.5252 13.4237L7.86931 14.9584L0.0122261 9.51374L7.84432 2.53114Z" fill="#FFD000"/>
                        <path d="M8.00705 16.904L23.6628 15.3697L8.03199 29.3014L0.175005 23.8583L8.00705 16.904Z" fill="url(#paint0_linear_12_1369)"/>
                        <path d="M26.156 2.53114L41.8369 13.4237L26.181 14.9584L18.3239 9.51374L26.156 2.53114Z" fill="#FFD000"/>
                        <path d="M26.3186 16.9039L41.9743 15.3696L26.3435 29.3013L18.4865 23.8582L26.3186 16.9039Z" fill="url(#paint1_linear_12_1369)"/>
                        <defs>
                          <linearGradient id="paint0_linear_12_1369" x1="0.175031" y1="23.8714" x2="23.6798" y2="23.8242" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FFD000"/>
                            <stop offset="1" stop-color="#FFD000" stop-opacity="0"/>
                          </linearGradient>
                          <linearGradient id="paint1_linear_12_1369" x1="18.4866" y1="23.8714" x2="41.9913" y2="23.8241" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FFD000"/>
                            <stop offset="1" stop-color="#FFD000" stop-opacity="0"/>
                          </linearGradient>
                        </defs>
                    </svg>
                    <div class="dropdown ms-4">
                        {{-- <button class="btn btn-secondary dropdown-toggle" >
                        </button> --}}
                        <svg class="text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                        </svg>
                        <ul class="dropdown-menu">
                            <li class="px-3 pt-2">
                                <div class="d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                                    </svg>
                                    <span class="ms-2"><b>{{ $user->name }}</b> ({{ $user->role }})</span>
                                </div>
                            </li>
                            <hr>
                            <li>
                                <a class="dropdown-item d-flex align-items-center justify-content-start" href="{{ route('logout') }}">
                                    <svg class="text-danger" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
                                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                                    </svg>
                                    <span class="ms-2 text-danger">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- LOGO -->
                <div class="mx-auto">
                    <img src="{{ asset('assets/image/logo/humanvue.png') }}" alt="Logo Humanvue" style="width:12vw">
                </div>
            </div>
        </nav>

        <div id="content">
            <center>
            <div class='tableauPlaceholder' id='viz1703421023300' style='position: relative'>
                <noscript>
                    <a href='#'>
                        <img alt=' ' src='https://public.tableau.com/static/images/ac/access_17034201826820/DashboardopsIP/1_rss.png' style='border: none' />
                    </a>
                </noscript>
                <object class='tableauViz'  style='display:none;'>
                    <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> 
                    <param name='embed_code_version' value='3' /> 
                    <param name='site_root' value='' />
                    <param name='name' value='access_17034201826820/DashboardopsIP' />
                    <param name='tabs' value='no' />
                    <param name='toolbar' value='yes' />
                    <param name='static_image' value='https://public.tableau.com/static/images/ac/access_17034201826820/DashboardopsIP/1.png' /> 
                    <param name='animate_transition' value='yes' />
                    <param name='display_static_image' value='yes' />
                    <param name='display_spinner' value='yes' />
                    <param name='display_overlay' value='yes' />
                    <param name='display_count' value='yes' />
                    <param name='language' value='en-US' />
                </object>
            </div>  
            </center>              
        </div>
        
        <!-- JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <!-- Tableu -->
        {{-- <script type='module' src='https://prod-apsoutheast-a.online.tableau.com/javascripts/api/tableau.embedding.3.latest.min.js'></script> --}}
        <!-- SweetAlert 2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script type='text/javascript'>                    
            // var divElement = document.getElementById('viz1703421023300');                    
            // var vizElement = divElement.getElementsByTagName('object')[0];                    
            // if ( divElement.offsetWidth > 800 ) { 
            //     vizElement.style.width='100vw';
            //     vizElement.style.height='1973px';
            // } else if ( divElement.offsetWidth > 500 ) { 
            //     vizElement.style.width='100vw';
            //     vizElement.style.height='1973px';
            // } else { 
            //     vizElement.style.width='100%';
            //     vizElement.style.height='2477px';
            // }                     
            // var scriptElement = document.createElement('script');                    
            // scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    
            // vizElement.parentNode.insertBefore(scriptElement, vizElement);            
            
            $(document).ready(function () {
                var divElement = $('#viz1703421023300');
                var vizElement = divElement.find('object')[0];
                if (divElement.width() > 800) {
                    $(vizElement).css({
                        'width': '100vw',
                        'height': '1973px'
                    });
                } else if (divElement.width() > 500) {
                    $(vizElement).css({
                        'width': '100vw',
                        'height': '1973px'
                    });
                } else {
                    $(vizElement).css({
                        'width': '100vw',
                        'height': '2477px'
                    });
                }

                var scriptElement = $('<script>');
                scriptElement.attr('src', 'https://public.tableau.com/javascripts/api/viz_v1.js');
                divElement.before(scriptElement);
                
                $('#viz-client-container').css('width', '100vw');
            });    
        </script>

        @if(session('success'))
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    Swal.fire({
                        title: 'Success',
                        text: '{{ session('success') }}',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 2000 // 2 detik
                    });
                });
            </script>
        @endif
    </body>
</html>