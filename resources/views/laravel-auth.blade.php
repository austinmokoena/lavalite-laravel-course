@include('layouts.header')

<body class="g-sidenav-show  bg-gray-100">
@include('layouts.course-side')

  

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('layouts.top-nav')
    <!-- End Navbar -->
    <div class="container-fluid py-2">
      <div class="row">
        <div class="ms-3">
          <h3 class="mb-0 h4 font-weight-bolder">Register and Login</h3>
          <p class="mb-4">
            Create register and login feature!
          </p>
        </div>
        <!-- Course starts here -->

        <h4>1. Laravel Breeze</h4>
        <p>Laravel Breeze is a minimal, simple implementation of all of Laravel's authentication features, including <b>login, registration, password reset, email verification, and password confirmation</b>. In addition, Breeze includes a simple "profile" page where the user may <b>update their name, email address, and password</b>.
            
            Laravel Breeze's default view layer is made up of simple Blade templates styled with Tailwind CSS. Additionally, Breeze provides scaffolding options based on Livewire or Inertia, with the choice of using Vue or React for the Inertia-based scaffolding. </p>
            

        <h4>Procedure</h4>
        

        <p>If you have already created a new Laravel application without a starter kit, 
            you may manually install Laravel Breeze using Composer:</p>
          
          @php
    $phpCode1 = <<<CODE
composer require laravel/breeze --dev
CODE;
@endphp

<x-code-snippet language="php" :code="$phpCode1" />

            <p>
                After Composer has installed the Laravel Breeze package, you should run the <span style="color: rgb(255, 0, 128);">breeze:install</span> Artisan command. This command publishes the authentication views, routes, controllers, and other resources to your application. 
                Laravel Breeze publishes all of its code to your application so that you have full control and visibility over its features and implementation.

The <span style="color: rgb(255, 0, 128);">breeze:install</span> command will prompt you for your preferred frontend stack and testing framework:

                
            </p>
            @php
    $phpCode1 = <<<CODE
php artisan breeze:install
 
php artisan migrate
npm install
npm run dev
CODE;
@endphp

<x-code-snippet language="php" :code="$phpCode1" />
<p>That's it. Next, you may navigate to your application's /login or /register URLs in your web browser. All of Breeze's routes are defined within the routes/auth.php file. <br>
The only problem now is that we only have the user dashboard, so we must code in the admin dashboard so that the admin can login 
to a different dashboard. <b>This is where we start coding 🙂</b>
</p>


        <h4>2. Creating Admin</h4>

        <ul style="list-style: none; padding-left: 20px;">
            <li style="position: relative; padding-left: 15px;">
                <span style="color: red; font-weight: bold; position: absolute; left: 0; font-size: 1.2em;">*</span>
                <b>Go to database/migrations/users_table</b><br>
                Add a <span style="color: rgb(255, 0, 128);">role</span> column which will be used to distinguish users and admin. <br>
                -> within the <b>up</b> function, under email, add the <span style="color: rgb(255, 0, 128);">role</span> column like so:
    @php
    $phpCode1 = <<<CODE
\$table->string('role')->default('user');
CODE;
@endphp

<x-code-snippet language="php" :code="$phpCode1" />

                What this does is, it will create a column under the users table called <span style="color: rgb(255, 0, 128);">role</span>.
                The default value is set to <span style="color: rgb(31, 0, 209);">user</span>, this means that whenever someone registers on the app, they will be assigned the default role of <span style="color: rgb(31, 0, 209);">user</span>.
                Now we must run the migrate so the <span style="color: rgb(255, 0, 128);">role</span> column can be migrate to the database:
                @php
    $phpCode1 = <<<CODE
php artisan migrate
CODE;
@endphp

<x-code-snippet language="php" :code="$phpCode1" />
            </li>
            <li style="position: relative; padding-left: 15px;">
                <span style="color: red; font-weight: bold; position: absolute; left: 0; font-size: 1.2em;">*</span>
                <b>Register 2 users</b> <br>
                Go to the app on your browser and register 2 users, give one user a name of <b>Admin</b> then go to the database and change the <span style="color: rgb(255, 0, 128);">role</span> of the user you named <b>Admin</b> to <span style="color: rgb(0, 255, 115);">admin</span>
                
            </li>
            <li style="position: relative; padding-left: 15px;">
                <span style="color: red; font-weight: bold; position: absolute; left: 0; font-size: 1.2em;">*</span>
                <b>Create a Controller</b> <br>
                run the following command to create a controller called AdminController. <b>Note:</b> Admin begins with capital letter <b>A</b> and Controller capital letter <b>C</b> but joined to one word.
                @php
    $phpCode1 = <<<CODE
php artisan make:controller AdminController
CODE;
@endphp

<x-code-snippet language="php" :code="$phpCode1" />
                This will create a file named <b>AdminController.php</b> in the <b>app/Http/Controllers/</b> directory. <br>
                Within this controller we must create function with a method that will send the admin to the admin dashboard. 
                @php
    $phpCode1 = <<<CODE
public function index()
    {
        return view('admin.dashboard');
    }
CODE;
@endphp

<x-code-snippet language="php" :code="$phpCode1" />
                In the code, we created a public function and called it <span style="color: rgb(0, 255, 115);">index</span>. We then told this index method to redirect the user calling this function to the view <b>admin.dashboard</b>
                
            </li>

            <li style="position: relative; padding-left: 15px;">
                <span style="color: red; font-weight: bold; position: absolute; left: 0; font-size: 1.2em;">*</span>
                <b>Add routes</b> <br>
                in the <b>routes/</b> directory, open the <b>web.php</b> file and add this code after the last route at the bottom:
                @php
    $phpCode1 = <<<CODE
Route::get('admin/dashboard',[AdminController::class,'index']);
CODE;
@endphp

<x-code-snippet language="php" :code="$phpCode1" />
                Let us break down what the code does: <br>
                <span style="color: rgb(255, 0, 128);">Route::get()</span> A GET request is typically used to fetch or display data (e.g., viewing a page). <br>
                <span style="color: rgb(255, 0, 128);">'admin/dashboard'</span> This is the URL path that the route is associated with. When a user navigates to <b>http://your-website.com/admin/dashboard</b>, this route is triggered. <br>
                <span style="color: rgb(255, 0, 128);">[AdminController::class, 'index']</span> This specifies the controller and method that will handle the request, with <b>AdminController</b> being the controller we created earlier and <b>index</b> beign the method that will be put into action when this route is triggered.
            </li>

            <li style="position: relative; padding-left: 15px;">
                <span style="color: red; font-weight: bold; position: absolute; left: 0; font-size: 1.2em;">*</span>
                <b>Create Admin Dashboard View</b> <br>
                Within the <b>resources/views/</b> directory, create a new folder and name it <b>admin</b>. Then within that admin folder, create a blade view file called <b>dashboard.blade.php</b> <br>
                This will be the admins' dashboard that the <span style="color: rgb(0, 255, 115);">index</span> method will redirect to. Within this view you can add a simple HTML structure
                @php
    $phpCode1 = <<<CODE
 <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Admin Dashboard</title>
    </head>
    <body>
      <h3>Admin Dashboard</h3>
    </body>
    </html>
CODE;
@endphp

<x-code-snippet language="php" :code="$phpCode1" />
               
            </li>

            <li style="position: relative; padding-left: 15px;">
                <span style="color: red; font-weight: bold; position: absolute; left: 0; font-size: 1.2em;">*</span>
                <b>Create Admin Dashboard View</b> <br>
                The last but not least step to make this admin auth functional is to enable the <b>admin/dashboard</b> route to be triggered so it can call the index method from the <b>AdminController</b> which will redirect the Admin to the admin dashboard. <br>
                Go to <b>app/Http/Controllers/Auth/AuthenticatedSessionController.php</b> and inside the regenerate code or after line 29 if you are using Laravel 11, add this code:
                @php
    $phpCode1 = <<<CODE
 if(\$request->user()->role === 'admin')
    {
        return redirect('admin/dashboard')
    }
CODE;
@endphp

<x-code-snippet language="php" :code="$phpCode1" />
                Let me explain this code:
                <ul>
                <li>It says if within the <span style="color: rgb(255, 0, 128);">user</span> table, under the <span style="color: rgb(255, 0, 128);">role</span> column, the role 
                is equal to <b>admin</b>, redirect the user to the admin dashboard which is <b>admin/dashboard</b>🙂</li>
               </ul>

               Right now the admin Auth works and you can test it by logging in as the normal user, logout and login as the admin and see what happens.
            </li>
        </ul>
        






        <!-- Course ends here -->
      </div>

      @include('layouts.footer')

    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-symbols-rounded py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-symbols-rounded">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>

        <script>
    document.addEventListener('DOMContentLoaded', () => {
        Prism.highlightAll();
    });
</script>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark active" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2  active ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-info w-100" href="https://www.Lavalite Tech-.com/product/material-dashboard-pro">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.Lavalite Tech-.com/learning-lab/bootstrap/overview/material-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.Lavalite Tech-.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.Lavalite Tech-.com/product/material-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script>

document.addEventListener('DOMContentLoaded', () => {
    Prism.highlightAll();
});

    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["M", "T", "W", "T", "F", "S", "S"],
        datasets: [{
          label: "Views",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "#43A047",
          data: [50, 45, 22, 28, 50, 60, 76],
          barThickness: 'flex'
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: '#e5e5e5'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                lineHeight: 2
              },
              color: "#737373"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#737373',
              padding: 10,
              font: {
                size: 14,
                lineHeight: 2
              },
            }
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["J", "F", "M", "A", "M", "J", "J", "A", "S", "O", "N", "D"],
        datasets: [{
          label: "Sales",
          tension: 0,
          borderWidth: 2,
          pointRadius: 3,
          pointBackgroundColor: "#43A047",
          pointBorderColor: "transparent",
          borderColor: "#43A047",
          backgroundColor: "transparent",
          fill: true,
          data: [120, 230, 130, 440, 250, 360, 270, 180, 90, 300, 310, 220],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          },
          tooltip: {
            callbacks: {
              title: function(context) {
                const fullMonths = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                return fullMonths[context[0].dataIndex];
              }
            }
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [4, 4],
              color: '#e5e5e5'
            },
            ticks: {
              display: true,
              color: '#737373',
              padding: 10,
              font: {
                size: 12,
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#737373',
              padding: 10,
              font: {
                size: 12,
                lineHeight: 2
              },
            }
          },
        },
      },
    });

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Tasks",
          tension: 0,
          borderWidth: 2,
          pointRadius: 3,
          pointBackgroundColor: "#43A047",
          pointBorderColor: "transparent",
          borderColor: "#43A047",
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [4, 4],
              color: '#e5e5e5'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#737373',
              font: {
                size: 14,
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [4, 4]
            },
            ticks: {
              display: true,
              color: '#737373',
              padding: 10,
              font: {
                size: 14,
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
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