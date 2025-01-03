


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Material Dashboard 3 by Lavalite Tech
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.2.0" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body class="bg-gray-200">
  <div class="container position-sticky z-index-sticky top-0">
  <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid px-0">
            <a class="navbar-brand font-weight-bolder ms-sm-3 d-none d-md-block" href="{{ route('welcome') }}" rel="tooltip" title="Designed and Coded Thapelo" data-placement="bottom" target="_blank">
              Laravel Course
            </a>
            
            <a href="https://www.lavalite.co.za/product/material-dashboard#pricingCard" class="btn btn-sm  bg-gradient-dark  mb-0 ms-auto d-lg-none d-block">Buy Now</a>
            <button class="navbar-toggler shadow-none ms-2 ms-md-0" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
              <ul class="navbar-nav navbar-nav-hover ms-auto">
                <!-- <li class="nav-item d-flex align-items-center mx-2">
                  <a href="#components" role="button" class="nav-link ps-2 d-flex cursor-pointer align-items-center">
                    Components
                  </a>
                </li> -->
                
                
                
                <!-- <li class="nav-item d-flex align-items-center">
                  <a href="https://github.com/creativetimofficial/material-dashboard" target="_blank" role="button" class="nav-link ps-2 d-flex cursor-pointer align-items-center" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Star us on GitHub!" data-container="body" data-animation="true">
                    <svg class="me-2" width="56" height="19" viewBox="0 0 56 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_31_708)">
                        <rect width="56" height="19" rx="4" fill="#344767" />
                        <path d="M27.916 5.87598V13H26.5098V7.49707L24.8203 8.03418V6.92578L27.7646 5.87598H27.916ZM35.0156 8.82031V10.0508C35.0156 10.5846 34.9587 11.0452 34.8447 11.4326C34.7308 11.8167 34.5664 12.1325 34.3516 12.3799C34.14 12.624 33.8877 12.8047 33.5947 12.9219C33.3018 13.0391 32.9762 13.0977 32.6182 13.0977C32.3317 13.0977 32.0648 13.0618 31.8174 12.9902C31.57 12.9154 31.347 12.7998 31.1484 12.6436C30.9531 12.4873 30.7839 12.2904 30.6406 12.0527C30.5007 11.8118 30.3932 11.5254 30.3184 11.1934C30.2435 10.8613 30.2061 10.4805 30.2061 10.0508V8.82031C30.2061 8.28646 30.263 7.8291 30.377 7.44824C30.4941 7.06413 30.6585 6.75 30.8701 6.50586C31.085 6.26172 31.3389 6.08268 31.6318 5.96875C31.9248 5.85156 32.2503 5.79297 32.6084 5.79297C32.8949 5.79297 33.1602 5.8304 33.4043 5.90527C33.6517 5.97689 33.8747 6.08919 34.0732 6.24219C34.2718 6.39518 34.4411 6.59212 34.5811 6.83301C34.721 7.07064 34.8285 7.35547 34.9033 7.6875C34.9782 8.01628 35.0156 8.39388 35.0156 8.82031ZM33.6045 10.2363V8.62988C33.6045 8.37272 33.5898 8.14811 33.5605 7.95605C33.5345 7.764 33.4938 7.60124 33.4385 7.46777C33.3831 7.33105 33.3148 7.22038 33.2334 7.13574C33.152 7.05111 33.0592 6.98926 32.9551 6.9502C32.8509 6.91113 32.7354 6.8916 32.6084 6.8916C32.4489 6.8916 32.3073 6.92253 32.1836 6.98438C32.0632 7.04622 31.9606 7.14551 31.876 7.28223C31.7913 7.41569 31.7262 7.59473 31.6807 7.81934C31.6383 8.04069 31.6172 8.31087 31.6172 8.62988V10.2363C31.6172 10.4935 31.6302 10.7197 31.6562 10.915C31.6855 11.1104 31.7279 11.278 31.7832 11.418C31.8418 11.5547 31.9102 11.667 31.9883 11.7549C32.0697 11.8395 32.1624 11.9014 32.2666 11.9404C32.374 11.9795 32.4912 11.999 32.6182 11.999C32.7744 11.999 32.9128 11.9681 33.0332 11.9062C33.1569 11.8411 33.2611 11.7402 33.3457 11.6035C33.4336 11.4635 33.4987 11.2812 33.541 11.0566C33.5833 10.832 33.6045 10.5586 33.6045 10.2363ZM37.4375 5.49512V13H36.0312V5.49512H37.4375ZM40.7676 7.7168L38.4727 10.334L37.2422 11.5791L36.7295 10.5635L37.7061 9.32324L39.0781 7.7168H40.7676ZM39.3076 13L37.7451 10.5586L38.7168 9.70898L40.9287 13H39.3076ZM45.9727 9.04004V10.2656H41.0996V9.04004H45.9727ZM44.2051 7.11133V12.2871H42.8721V7.11133H44.2051Z" fill="white" />
                        <path d="M20.2857 8.03906C20.2857 8.12091 20.2374 8.21019 20.1406 8.30692L18.115 10.2824L18.5949 13.0725C18.5986 13.0986 18.6004 13.1358 18.6004 13.1842C18.6004 13.2623 18.58 13.3274 18.5391 13.3795C18.5019 13.4353 18.4461 13.4632 18.3717 13.4632C18.301 13.4632 18.2266 13.4408 18.1484 13.3962L15.6429 12.0792L13.1373 13.3962C13.0554 13.4408 12.981 13.4632 12.9141 13.4632C12.8359 13.4632 12.7764 13.4353 12.7355 13.3795C12.6983 13.3274 12.6797 13.2623 12.6797 13.1842C12.6797 13.1618 12.6834 13.1246 12.6908 13.0725L13.1708 10.2824L11.1395 8.30692C11.0465 8.20647 11 8.11719 11 8.03906C11 7.90141 11.1042 7.81585 11.3125 7.78237L14.1138 7.375L15.3694 4.83594C15.4401 4.68341 15.5313 4.60714 15.6429 4.60714C15.7545 4.60714 15.8456 4.68341 15.9163 4.83594L17.1719 7.375L19.9732 7.78237C20.1815 7.81585 20.2857 7.90141 20.2857 8.03906Z" fill="white" />
                      </g>
                      <defs>
                        <clipPath id="clip0_31_708">
                          <rect width="56" height="19" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                    <svg width="16" height="16" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.496275" d="M5.83594 14.207C5.83594 14.207 5.80078 14.1719 5.76562 14.1367C5.73047 14.1367 5.69531 14.1016 5.625 14.1016C5.48438 14.1016 5.44922 14.1719 5.44922 14.2422C5.44922 14.3477 5.48438 14.3828 5.625 14.3828C5.76562 14.3828 5.83594 14.3125 5.83594 14.207ZM4.74609 14.0664C4.74609 13.9961 4.81641 13.9609 4.95703 13.9961C5.0625 14.0312 5.09766 14.0664 5.09766 14.1367C5.09766 14.207 5.0625 14.2422 5.02734 14.2422C4.95703 14.2773 4.92188 14.2773 4.88672 14.2422C4.81641 14.2422 4.78125 14.207 4.74609 14.1719C4.71094 14.1367 4.71094 14.1016 4.74609 14.0664ZM6.29297 13.9961C6.39844 13.9961 6.46875 14.0312 6.46875 14.1016C6.46875 14.1719 6.43359 14.2422 6.32812 14.2773C6.25781 14.2773 6.22266 14.2773 6.1875 14.2773C6.15234 14.2773 6.11719 14.207 6.11719 14.1367C6.11719 14.0664 6.15234 14.0312 6.29297 13.9961ZM8.61328 0.53125C10.1953 0.53125 11.6719 0.917969 13.043 1.65625C14.3789 2.42969 15.4688 3.44922 16.2422 4.71484C17.0156 6.05078 17.4375 7.52734 17.4375 9.10938C17.4375 11.0781 16.875 12.8008 15.7852 14.3477C14.6953 15.8945 13.2891 16.9492 11.5312 17.5117C11.3203 17.582 11.1797 17.5469 11.0742 17.4414C10.9688 17.3711 10.9336 17.2305 10.9336 17.0898V14.1367C10.9336 13.3984 10.7227 12.8711 10.3359 12.5195C11.1797 12.4492 11.8477 12.3086 12.2695 12.168C12.9023 11.957 13.4297 11.6055 13.7812 11.1133C14.168 10.5156 14.3789 9.67188 14.3789 8.61719C14.3789 8.19531 14.2734 7.80859 14.1328 7.45703C13.9922 7.24609 13.7812 6.92969 13.4648 6.57812C13.5352 6.36719 13.6055 6.08594 13.6406 5.73438C13.6406 5.24219 13.5703 4.71484 13.3945 4.1875C13.1484 4.11719 12.832 4.1875 12.4102 4.32812C12.1289 4.46875 11.7773 4.60938 11.4258 4.82031L10.9688 5.13672C10.2305 4.92578 9.49219 4.82031 8.71875 4.82031C7.94531 4.82031 7.24219 4.92578 6.53906 5.13672L6.08203 4.82031C5.69531 4.60938 5.34375 4.46875 5.0625 4.32812C4.64062 4.1875 4.32422 4.11719 4.11328 4.1875C3.90234 4.71484 3.79688 5.24219 3.86719 5.73438C3.86719 6.08594 3.90234 6.33203 4.00781 6.54297C3.72656 6.89453 3.51562 7.24609 3.375 7.52734C3.23438 7.80859 3.19922 8.19531 3.19922 8.61719C3.19922 9.67188 3.375 10.5156 3.76172 11.0781C4.07812 11.5703 4.57031 11.957 5.23828 12.168C5.66016 12.3086 6.29297 12.4492 7.13672 12.5195C6.82031 12.8008 6.64453 13.2227 6.57422 13.7148C6.15234 13.9258 5.76562 13.9961 5.41406 13.9258C4.78125 13.8906 4.32422 13.5742 4.00781 12.9766C3.86719 12.7305 3.65625 12.5195 3.44531 12.3438C3.26953 12.2734 3.09375 12.168 2.91797 12.0977L2.67188 12.0625C2.39062 12.0625 2.25 12.1328 2.25 12.2031C2.25 12.2734 2.28516 12.3789 2.42578 12.4492L2.60156 12.5898C2.74219 12.6953 2.91797 12.8359 3.09375 13.0469C3.23438 13.2227 3.33984 13.3984 3.44531 13.6094L3.58594 13.8906C3.69141 14.2422 3.90234 14.5234 4.25391 14.6992C4.53516 14.875 4.85156 14.9805 5.27344 15.0156C5.55469 15.0508 5.83594 15.0508 6.15234 14.9805L6.53906 14.9453L6.57422 17.0898C6.57422 17.2305 6.50391 17.3711 6.39844 17.4414C6.29297 17.5469 6.15234 17.582 5.97656 17.5117C4.18359 16.9492 2.74219 15.8945 1.65234 14.3477C0.527344 12.8008 0 11.0781 0 9.10938C0 7.52734 0.351562 6.08594 1.125 4.75C1.86328 3.44922 2.88281 2.42969 4.21875 1.65625C5.51953 0.917969 6.99609 0.53125 8.61328 0.53125ZM3.41016 12.6602C3.44531 12.625 3.51562 12.625 3.58594 12.6953C3.65625 12.7656 3.65625 12.8359 3.62109 12.8711C3.55078 12.9414 3.51562 12.9062 3.44531 12.8359C3.375 12.7656 3.33984 12.7305 3.41016 12.6602ZM3.02344 12.3789C3.05859 12.3438 3.12891 12.3438 3.19922 12.3789C3.26953 12.4141 3.26953 12.4492 3.26953 12.5195C3.23438 12.5898 3.16406 12.5898 3.09375 12.5195C3.02344 12.4844 2.98828 12.4492 3.02344 12.3789ZM4.18359 13.6094C4.18359 13.6094 4.21875 13.6094 4.28906 13.6094C4.32422 13.6094 4.35938 13.6445 4.39453 13.6797C4.42969 13.7148 4.46484 13.75 4.46484 13.7852C4.46484 13.8555 4.46484 13.8906 4.46484 13.8906C4.39453 13.9609 4.28906 13.9609 4.21875 13.8555C4.14844 13.8203 4.14844 13.7852 4.14844 13.7148C4.14844 13.6797 4.14844 13.6445 4.18359 13.6094ZM3.76172 13.1172C3.79688 13.1172 3.83203 13.1172 3.86719 13.1172C3.90234 13.1172 3.9375 13.1523 3.97266 13.1875C4.04297 13.293 4.04297 13.3633 3.97266 13.3984C3.9375 13.4336 3.90234 13.4336 3.86719 13.3984C3.83203 13.3984 3.79688 13.3633 3.76172 13.3281C3.69141 13.2227 3.69141 13.1523 3.76172 13.1172Z" fill="#344767" />
                    </svg>
                  </a>
                </li> -->
                <li class="nav-item d-flex align-items-center">
                @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
                  <div class="row mt-3">
                    <div class="col-2 text-center ms-auto">
                      <a class="btn btn-link px-3" href="javascript:;">
                        <i class="fa fa-facebook text-white text-lg"></i>
                      </a>
                    </div>
                    <div class="col-2 text-center px-1">
                      <a class="btn btn-link px-3" href="javascript:;">
                        <i class="fa fa-github text-white text-lg"></i>
                      </a>
                    </div>
                    <div class="col-2 text-center me-auto">
                      <a class="btn btn-link px-3" href="javascript:;">
                        <i class="fa fa-google text-white text-lg"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <form role="form" class="text-start" method="POST" action="{{ route('login') }}">
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required :value="old('email')" required autofocus autocomplete="username">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required autocomplete="current-password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                  </div>
                  <div class="form-check form-switch d-flex align-items-center mb-3">
                    <input class="form-check-input" type="checkbox" id="rememberMe" checked>
                    <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
                  </div>
                  <div class="text-center">
                    <button type="button" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign in</button>
                  </div>
                  <p class="mt-4 text-sm text-center">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="text-primary text-gradient font-weight-bold">Sign up</a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer position-absolute bottom-2 py-2 w-100">
        <div class="container">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-12 col-md-6 my-auto">
              <div class="copyright text-center text-sm text-white text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart" aria-hidden="true"></i> by
                <a href="https://www.lavalite.co.za" class="font-weight-bold text-white" target="_blank">Lavalite Tech</a>
                for a better web.
              </div>
            </div>
            <div class="col-12 col-md-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.lavalite.co.za" class="nav-link text-white" target="_blank">Lavalite Tech</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.lavalite.co.za/presentation" class="nav-link text-white" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.lavalite.co.za/blog" class="nav-link text-white" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.lavalite.co.za/license" class="nav-link pe-0 text-white" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.2.0"></script>
</body>

</html>