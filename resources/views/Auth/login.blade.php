<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard | Khalid Fadlillah</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    </head>
    <body class="mx-auto bg-primary" style="max-width: 1900px;max-height:900px">
        <div class="container-fluid position-fixed" style="bottom: 50%;left: 50%;transform: translate(-50%,50%);max-width: 1900px;max-height:900px;background: url('/assets/image/background/decoration.png') top/cover no-repeat, #F7FDFF;">
            <div class="row">
                <div class="col-lg-6" class="position-relative">
                    <img class="position-absolute w-50" style="bottom:0;left:0;" src="{{ asset('assets/image/background/image-signin.png') }}" alt="Iamge Signin">
                </div>
                <div class="col-lg-6 d-flex align-items-center justify-content-center flex-column" style="height:100vh;max-height:900px">
                    <img width="342px" src="{{ asset('assets/image/logo/humanvue.png') }}" alt="Logo Humanvue">
                    <span class="mt-5 mb-1">Sign in to your account</span>
                    <form style="width: 60%" method="POST" action="{{ route('login.post') }}">
                        @csrf
                        <div class="input-group has-validation my-2">
                            <span class="input-group-text bg-transparent" style="border-right:none;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M22 6C22 4.9 21.1 4 20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6ZM20 6L12 11L4 6H20ZM20 18H4V8L12 13L20 8V18Z" fill="black"/>
                                </svg>
                            </span>
                            <div class="form-floating">
                              <input type="email" name="email" style="border-left:none;" class="form-control bg-transparent" id="email" placeholder="Email Address" required>
                              <label for="email">Email Address</label>
                            </div>
                        </div>
                        <div class="input-group has-validation my-2">
                            <span class="input-group-text bg-transparent" style="border-right:none;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 22C5.45 22 4.97933 21.8043 4.588 21.413C4.19667 21.0217 4.00067 20.5507 4 20V10C4 9.45 4.196 8.97933 4.588 8.588C4.98 8.19667 5.45067 8.00067 6 8H7V6C7 4.61667 7.48767 3.43767 8.463 2.463C9.43833 1.48833 10.6173 1.00067 12 1C13.3833 1 14.5627 1.48767 15.538 2.463C16.5133 3.43833 17.0007 4.61733 17 6V8H18C18.55 8 19.021 8.196 19.413 8.588C19.805 8.98 20.0007 9.45067 20 10V20C20 20.55 19.8043 21.021 19.413 21.413C19.0217 21.805 18.5507 22.0007 18 22H6ZM6 20H18V10H6V20ZM12 17C12.55 17 13.021 16.8043 13.413 16.413C13.805 16.0217 14.0007 15.5507 14 15C14 14.45 13.8043 13.9793 13.413 13.588C13.0217 13.1967 12.5507 13.0007 12 13C11.45 13 10.9793 13.196 10.588 13.588C10.1967 13.98 10.0007 14.4507 10 15C10 15.55 10.196 16.021 10.588 16.413C10.98 16.805 11.4507 17.0007 12 17ZM9 8H15V6C15 5.16667 14.7083 4.45833 14.125 3.875C13.5417 3.29167 12.8333 3 12 3C11.1667 3 10.4583 3.29167 9.875 3.875C9.29167 4.45833 9 5.16667 9 6V8Z" fill="black"/>
                                </svg>
                            </span>
                            <div class="form-floating position-relative">
                                <input type="password" name="password" style="border-left:none;" class="form-control bg-transparent pe-5" id="password" placeholder="Password" required>
                                <label for="password">Password</label>
                                <div style="cursor:pointer" onclick="showPassword()">
                                    <img src="{{ asset('assets/icon/Eye.png') }}" alt="Eye" id="eye" style="top: 17px;right:15px;" class="position-absolute d-block">
                                    <img src="{{ asset('assets/icon/Blink.png') }}" alt="Blink" id="blink" style="top: 19px;right:15px;" class="position-absolute d-none">
                                </div>  
                            </div>
                        </div>
                        <div class="action text-center mt-4">
                            <button type="submit" class="btn btn-primary btn-lg w-100 py-3 mb-3" style="font-weight: bold">Login</button>
                            <a href="javascript:void(0)" class="text-primary nav-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><b>Forgot your password?</b></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Reset Password -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Forgot Password</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                 <form method="post" action="{{ route('forgot_pass') }}">
                    @csrf
                    <div class="input-group has-validation my-2">
                        <span class="input-group-text bg-transparent" style="border-right:none;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M22 6C22 4.9 21.1 4 20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6ZM20 6L12 11L4 6H20ZM20 18H4V8L12 13L20 8V18Z" fill="black"/>
                            </svg>
                        </span>
                        <div class="form-floating">
                            <input type="email_forgot" name="email_forgot" style="border-left:none;" class="form-control bg-transparent" id="email_forgot" placeholder="Email Address" required>
                            <label for="email_forgot">Email Address</label>
                        </div>
                    </div>
                    <div class="action text-end mt-3">
                        <button type="button" class="btn btn-secondary px-4 py-2" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary px-4 py-2">Reset</button>
                    </div>
                 </form>
                </div>
            </div>
            </div>
        </div>
        
        <!-- JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <!-- SweetAlert 2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            // SHOW HIDE PASSWORD
            function showPassword() {
                var passwordField = $('#password');
                var passwordFieldType = passwordField.attr('type');

                // Toggle the password field's type
                if(passwordFieldType === 'password'){
                    passwordFieldType = 'text';
                    $('#blink').removeClass('d-none')
                    $('#eye').addClass('d-none')
                }else{
                    passwordFieldType = 'password';
                    $('#eye').removeClass('d-none')
                    $('#blink').addClass('d-none')
                }
                passwordField.attr('type', passwordFieldType);
            }
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
        @if(session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    title: 'Error',
                    text: '{{ session('error') }}',
                    icon: 'error',
                    showConfirmButton: false,
                    timer: 2000 // 2 detik
                });
            });
        </script>
    @endif
    </body>
</html>