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
          <h3 class="mb-0 h4 font-weight-bolder">Laravel Blade Templating</h3>
          <p class="mb-4">
            Laravel development environment setup!
          </p>
        </div>
        <!-- Course starts here -->

        <h3>Module 4: Database Integration</h3>

    <h4>1. Configuring a Database Connection</h4>
    <p>Laravel simplifies database configuration through the <code>.env</code> file. Specify the database type, host, port, database name, username, and password.</p>
    <h4>Example Configuration:</h4>
    <pre>
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=laravel_app
        DB_USERNAME=root
        DB_PASSWORD=your_password
    </pre>
        @php
            $phpCode1 = "php artisan make:controller MyController";
        @endphp
        <x-code-snippet language="php" :code="$phpCode1" /><br>
    <p>After editing the <code>.env</code> file, run:</p>
    <pre>
        php artisan config:cache
    </pre>

    <h2>2. Introduction to Laravel Migrations</h2>
    <p>
        Migrations are version control for your database schema. They allow you to create and modify tables programmatically.
    </p>
    <h4>Creating a Migration:</h4>
    <pre>
        php artisan make:migration create_users_table
    </pre>
    <p>This generates a new file in the <code>database/migrations</code> directory.</p>

    <h2>3. Creating and Running Migrations</h2>
    <p>Edit the migration file to define your table structure:</p>
    <pre>
        public function up()
        {
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('email')->unique();
                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('users');
        }
    </pre>
    <h4>Running the Migration:</h4>
    <pre>
        php artisan migrate
    </pre>
    <p>This creates the <code>users</code> table in the database.</p>

    <h2>4. Adding Columns, Indices, and Relationships</h2>
    <h4>Adding Columns:</h4>
    <pre>
        $table->string('phone')->nullable();
    </pre>
    <h4>Adding Indices:</h4>
    <pre>
        $table->index('email');
    </pre>
    <h4>Defining Relationships:</h4>
    <p>For example, adding a foreign key for a relationship:</p>
    <pre>
        $table->unsignedBigInteger('user_id');
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    </pre>

    <h2>5. Using Eloquent ORM</h2>
    <p>
        Eloquent is Laravel’s powerful Object-Relational Mapper (ORM) that provides an easy way to interact with your database using models.
    </p>

    <h3>a. Defining Models and Relationships</h3>
    <h4>Creating a Model:</h4>
    <pre>
        php artisan make:model User
    </pre>
    <p>This generates a file in the <code>app/Models</code> directory.</p>
    <h4>Defining Relationships:</h4>
    <p>In the <code>User</code> model:</p>
    <pre>
        public function posts()
        {
            return $this->hasMany(Post::class);
        }
    </pre>

    <h3>b. Querying the Database with Eloquent</h3>
    <p>Eloquent provides methods to retrieve data from the database:</p>
    <h4>Fetching All Records:</h4>
    <pre>
        $users = User::all();
    </pre>
    <h4>Fetching a Single Record:</h4>
    <pre>
        $user = User::find(1);
    </pre>
    <h4>Using Where Clauses:</h4>
    <pre>
        $users = User::where('email', 'like', '%@gmail.com%')->get();
    </pre>

    <h2>6. Using the Query Builder</h2>
    <p>Laravel’s Query Builder provides a convenient interface for building SQL queries.</p>
    <h4>Selecting Records:</h4>
    <pre>
        $users = DB::table('users')->get();
    </pre>
    <h4>Adding Where Clauses:</h4>
    <pre>
        $users = DB::table('users')->where('name', 'John')->get();
    </pre>
    <h4>Inserting Data:</h4>
    <pre>
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    </pre>
    <h4>Updating Data:</h4>
    <pre>
        DB::table('users')->where('id', 1)->update(['name' => 'Jane Doe']);
    </pre>
    <h4>Deleting Data:</h4>
    <pre>
        DB::table('users')->where('id', 1)->delete();
    </pre>

    <h2>Summary</h2>
    <ul>
        <li>Configure the database in the <code>.env</code> file.</li>
        <li>Use migrations to create and modify tables.</li>
        <li>Leverage Eloquent ORM for easy database interactions.</li>
        <li>Use the Query Builder for raw SQL queries when needed.</li>
    </ul>
        
    <div style="display: flex; justify-content: center; align-items: center; width: 100%;">
            <a href="{{ route('laravel-forms') }}" class="btn" style="border:solid 1px black; padding: 10px 20px;">
                Forms
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