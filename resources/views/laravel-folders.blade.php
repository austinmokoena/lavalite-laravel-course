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

        <h4>Understanding Laravel's Folder Structure</h4>
    <p>In Laravel, the folder structure is designed to help you organize your application code efficiently. Understanding this structure will make it easier for you to work with Laravel and locate your files when needed.</p>

    <h4>1. Root Folder</h4>
    <ul>
        <li><span class="file"><b>artisan:</b></span> The command-line tool for running Artisan commands. This file allows you to run tasks such as generating controllers, running migrations, and more.</li>
        <li><span class="file"><b>composer.json:</b></span> This file contains the dependencies and packages required for the application to run.</li>
        <li><span class="file"><b>.env:</b></span> This file is used for storing environment variables like database credentials, app key, and other configurations. It is not pushed to version control (e.g., Git).</li>
        <li><span class="file"><b>package.json:</b></span> This file contains the JavaScript dependencies and scripts used in the application.</li>
    </ul>

    <h4>2. app/ Folder</h4>
    <ul>
        <li><span class="folder"><b>Console/:</b></span> Contains custom Artisan commands you create.</li>
        <li><span class="folder"><b>Exceptions/:</b></span> Contains the application’s exception handler. If an error occurs, it is managed here.</li>
        <li><span class="folder"><b>Http/:</b></span>
            <ul>
                <li><span class="folder"><b>Controllers/:</b></span> Where your application's controllers are stored. Controllers are responsible for handling user requests.</li>
                <li><span class="folder"><b>Middleware/:</b></span> Contains middleware classes that filter incoming HTTP requests (e.g., for authentication).</li>
                <li><span class="folder"><b>Requests/:</b></span> Contains form request validation classes.</li>
            </ul>
        </li>
        <li><span class="folder"><b>Models/:</b></span> Stores your Eloquent models, which represent the data structure in your database.</li>
        <li><span class="folder"><b>Providers/:</b></span> Holds service providers that bind components into the service container for dependency injection.</li>
    </ul>

    <h4>3. bootstrap/ Folder</h4>
    <ul>
        <li><span class="file"><b>app.php:</b></span> Initializes the Laravel framework and loads configuration files.</li>
        <li><span class="folder"><b>cache/:</b></span> Used by Laravel to store cached application files. You typically won’t need to interact with this folder directly.</li>
    </ul>

    <h4>4. config/ Folder</h4>
    <ul>
        <li>Contains configuration files for various aspects of your application (database, caching, sessions, mail, etc.). Each file in this folder defines settings that you can modify based on your application's needs.</li>
    </ul>

    <h4>5. database/ Folder</h4>
    <ul>
        <li><span class="folder"><b>migrations/:</b></span> Contains migration files that define how your database tables are created or modified.</li>
        <li><span class="folder"><b>factories/:</b></span> Stores model factories for generating fake data for testing.</li>
        <li><span class="folder"><b>seeds/:</b></span> Contains seed files for populating your database with initial or fake data.</li>
    </ul>

    <h4>6. public/ Folder</h4>
    <ul>
        <li><span class="file"><b>index.php:</b></span> The entry point for all web requests. When you visit your application in a browser, this file is executed first.</li>
        <li><span class="folder"><b>assets/:</b></span> Stores publicly accessible assets like images, JavaScript, CSS, and fonts. All of your assets that need to be accessible over the web should be placed here.</li>
    </ul>

    <h4>7. resources/ Folder</h4>
    <ul>
        <li>Contains all your application's resources such as views, raw assets, and language files:</li>
        <ul>
            <li><span class="folder"><b>views/:</b></span> Holds your Blade view files (HTML templates). For example, home.blade.php contains the layout and design for your homepage.</li>
            <li><span class="folder"><b>lang/:</b></span> Stores language files for localization, allowing you to make your app available in multiple languages.</li>
            <li><span class="folder"><b>sass/:</b></span> Contains your SCSS files (CSS preprocessor).</li>
            <li><span class="folder"><b>js/:</b></span> Contains your JavaScript files.</li>
        </ul>
    </ul>

    <h4>8. routes/ Folder</h4>
    <ul>
        <li><span class="file"><b>web.php:</b></span> Defines the routes for the web application. Routes map URLs to specific controller actions or views.</li>
        <li><span class="file"><b>api.php:</b></span> Defines routes for your API. These routes are stateless and don’t require session state.</li>
        <li><span class="file"><b>console.php:</b></span> Handles Artisan commands' routes.</li>
        <li><span class="file"><b>channels.php:</b></span> Used for broadcasting events.</li>
    </ul>

    <h4>9. storage/ Folder</h4>
    <ul>
        <li>Stores various application files such as logs, compiled templates, file uploads, and more:</li>
        <ul>
            <li><span class="folder"><b>app/:</b></span> Contains application-generated files like uploaded images.</li>
            <li><span class="folder"><b>framework/:</b></span> Contains files for caching, sessions, and views.</li>
            <li><span class="folder"><b>logs/:</b></span> Stores application logs, where errors and debug information are saved.</li>
        </ul>
    </ul>

    <h4>10. tests/ Folder</h4>
    <ul>
        <li>Contains your test files. Laravel includes testing support to help you write automated tests for your application to ensure everything is working correctly:</li>
        <ul>
            <li><span class="folder"><b>Feature/:</b></span> Contains feature tests for the application (testing interactions like form submissions).</li>
            <li><span class="folder"><b>Unit/:</b></span> Contains unit tests (testing individual pieces of functionality).</li>
        </ul>
    </ul>

    <h4>11. vendor/ Folder</h4>
    <ul>
        <li>This folder contains all the third-party libraries and packages that your Laravel application depends on. It’s automatically created when you run <span class="file">composer install</span> and should not be modified manually.</li>
    </ul>

    <h4>Summary of Laravel Folder Structure:</h4>
    <ul>
        <li><span class="folder"><b>app/:</b></span> Core application logic (controllers, models, middleware).</li>
        <li><span class="folder"><b>bootstrap/:</b></span> Bootstrap files to initialize the application.</li>
        <li><span class="folder"><b>config/:</b></span> Configuration settings.</li>
        <li><span class="folder"><b>database/:</b></span> Database-related files (migrations, seeds, factories).</li>
        <li><span class="folder"><b>public/:</b></span> Publicly accessible files (assets, entry point).</li>
        <li><span class="folder"><b>resources/:</b></span> Views, language files, raw assets.</li>
        <li><span class="folder"><b>routes/:</b></span> Route definitions.</li>
        <li><span class="folder"><b>storage/:</b></span> Application files, logs, cache.</li>
        <li><span class="folder"><b>tests/:</b></span> Automated tests.</li>
        <li><span class="folder"><b>vendor/:</b></span> Third-party libraries.</li>
    </ul>

    <p>This structure helps organize your code, making it more maintainable and scalable as your application grows. It follows conventions that are widely accepted in the Laravel community, allowing you to focus on building your application without worrying about the underlying architecture.</p>


        <div style="display: flex; justify-content: center; align-items: center; width: 100%;">
            <a href="{{ route('laravel-routes-controllers') }}" class="btn" style="border:solid 1px black; padding: 10px 20px;">
                Routes and controllers 
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