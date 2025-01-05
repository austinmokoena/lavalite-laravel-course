<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2  bg-white my-2" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand px-4 py-3 m-0" href=" https://demos.Lavalite Tech-.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img" width="26" height="26" alt="main_logo">
        <span class="ms-1 text-sm text-dark">Lavalite Dashboard</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link bg-gradient-dark text-white" href="">
            <i class="material-symbols-rounded opacity-5">dashboard</i>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{ route('laravel-intro') }}">
            <i class="material-symbols-rounded opacity-5">table_view</i>
            <span class="nav-link-text ms-1">Laravel Intro</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{ route('laravel-setup') }}">
            <i class="material-symbols-rounded opacity-5">assignment</i>
            <span class="nav-link-text ms-1">Laravel Setup</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{ route('laravel-folders') }}">
            <i class="material-symbols-rounded opacity-5">receipt_long</i>
            <span class="nav-link-text ms-1">Laravel folders</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-dark" href="{{ route('laravel-routes-controllers') }}">
            <i class="material-symbols-rounded opacity-5">view_in_ar</i>
            <span class="nav-link-text ms-1">Routes and Controllers</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link  text-dark" href="{{ route('laravel-blade') }}">
            <i class="material-symbols-rounded opacity-5">view_in_ar</i>
            <span class="nav-link-text ms-1">Blade Templating</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-dark" href="{{ route('laravel-database') }}">
            <i class="material-symbols-rounded opacity-5">view_in_ar</i>
            <span class="nav-link-text ms-1">Database Integration</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-dark" href="{{ route('laravel-auth') }}">
            <i class="material-symbols-rounded opacity-5">view_in_ar</i>
            <span class="nav-link-text ms-1">Authentication</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-dark" href="{{ route('laravel-forms') }}">
            <i class="material-symbols-rounded opacity-5">view_in_ar</i>
            <span class="nav-link-text ms-1">Laravel Forms</span>
          </a>
        </li>
        
        <li class="nav-item">
          
          <form method="POST" action="{{ route('logout') }}">
              @csrf

              <a class="nav-link text-dark" :href="route('logout')"
                      onclick="event.preventDefault();
                                  this.closest('form').submit();">
                                  <i class="material-symbols-rounded opacity-5">logout</i>
                                  <span class="nav-link-text ms-1">Logout</span>
              </a>
          </form>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <!-- <div class="mx-3">
        <a class="btn btn-outline-dark mt-4 w-100" href="https://www.Lavalite Tech-.com/learning-lab/bootstrap/overview/material-dashboard?ref=sidebarfree" type="button">Documentation</a>
        <a class="btn bg-gradient-dark w-100" href="https://www.Lavalite Tech-.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
      </div> -->
    </div>
  </aside>