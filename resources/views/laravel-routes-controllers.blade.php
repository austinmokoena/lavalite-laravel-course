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
          <h3 class="mb-0 h4 font-weight-bolder">Laravel setup</h3>
          <p class="mb-4">
            Laravel development environment setup!
          </p>
        </div>
        <!-- Course starts here -->

            <h3>Module 2: Basics of Routing and Controllers</h3>

        <p>In this module, we will cover the basics of routing and controllers in Laravel, which are essential for handling HTTP requests and structuring your application.</p>

        <h4>1. Introduction to Routing in Laravel</h4>
        <p>Routing in Laravel allows you to define the paths your application should respond to. When a user visits a URL, the route determines what action to take.</p>
        <p>Let's take a look again at how the default homepage(welcome.blade.php) is defined:</p>

        <h4>routes/web.php:</h4>    
        @php
                $phpCode1 = "use Illuminate\Support\Facades\Route;
 
 Route::get('/', function () {
     return view('welcome');
 });";
            @endphp
            <x-code-snippet language="php" :code="$phpCode1" />

          <p>To define the Route at the URL, you do <b>Route::get()</b>.

<p>The first argument is the URL: in this example, it is <b>/</b></p>
<p>The second argument is a callback function that <b>returns</b> a <b>View</b>.</p>
<p>View is a template file written in a Laravel-specific language called Blade. You can think of a Blade file as an HTML file with variables inside.</p>



<p>The <b>welcome</b> part in the code means the file is in a <b>resources/views</b> folder with the extension <b>.blade.php</b>. This extension is crucial.</p>

<p><b>Now, let's create our own page and add a second Route leading to the page.</b></p>

<h4>routes/web.php:</h4>
  
@php
                $phpCode1 = "Route::get('/', function () {
    return view('welcome');
});
 
//new route to our new page
Route::get('/hello', function () {return view('hello');})->name('hello');";
            @endphp
            <x-code-snippet language="php" :code="$phpCode1" />

            <p>this new route creates a link to a file called <b>hello</b> which is found in the <b>resources/views/</b> directory</p>
            <p>we can then access the new page using the link:</p>
            <p>{{ route('hello') }}</p>

        <h4>2. Web Routes vs. API Routes</h4>
        <ul>
            <li><strong>Web Routes:</strong> These routes are used for your typical web application requests. They are defined in the <code>routes/web.php</code> file and are typically stateful, meaning they maintain session data.</li>
            <li><strong>API Routes:</strong> These routes are designed for API interactions and are defined in <code>routes/api.php</code>. They are stateless and return JSON responses.</li>
        </ul>

        <h4>3. Creating and Using Controllers</h4>
        <p>Controllers in Laravel help to keep your code organized by grouping related request handling logic. They are typically located in the <code>app/Http/Controllers</code> directory.</p>
        <p>To create a controller, you can use the Artisan command:</p>
        @php
            $phpCode1 = "php artisan make:controller MyController";
        @endphp
        <x-code-snippet language="php" :code="$phpCode1" /><br>

        <h4>4. Single-action Controllers</h4>
        <p>Sometimes you need a controller that only handles one action. Laravel allows you to create single-action controllers by using the <code>--invokable</code> option:</p>
        
        @php
            $phpCode1 = "php artisan make:controller MyActionController --invokable";
        @endphp
        <x-code-snippet language="php" :code="$phpCode1" /><br>

        <h4>5. Controller Methods and Route Mapping</h4>
        <p>In Laravel, controllers map actions to specific routes. For example, the following code maps a GET request to a controller method:</p>
        
        @php
            $phpCode1 = "Route::get('/example', [MyController::class, 'exampleMethod']);";
        @endphp
        <x-code-snippet language="php" :code="$phpCode1" /><br>

        <h4>6. Middleware Basics</h4>
        <p>Middleware acts as a filter for HTTP requests entering your application. It can be used for tasks like authentication, logging, or modifying requests.</p>

        <h4>7. Applying Middleware to Routes and Controllers</h4>
        <p>Middleware can be applied to routes or controllers using the <code>middleware</code> method. Here’s how to apply middleware to a route:</p>
        
        @php
            $phpCode1 = "Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');";
        @endphp
        <x-code-snippet language="php" :code="$phpCode1" /><br>

        

        <div style="display: flex; justify-content: center; align-items: center; width: 100%;">
            <a href="{{ route('laravel-blade') }}" class="btn" style="border:solid 1px black; padding: 10px 20px;">
                Blade Templating 
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                    <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"/>
                </svg>
            </a>
        </div>






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