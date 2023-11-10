<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Batching Plant | @yield("title")</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body >
    <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample"  >
      >>
      </a>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <div>
            <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="/control">Control Page</a>
                </li>
                @if(Auth::user()->role == 'Supervisor')
                <li class="nav-item">
                  <a class="nav-link" href="/user-settings">User Settings</a>
                </li>
                @endif
                <li class="nav-item">
                  <a class="nav-link" href="/general-settings">General Settings</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="/material-settings">Material Settings</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/data-material">Data Material</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/mix-design">Mix Design</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/data-customer">Data Customer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/data-truck">Data Truck</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/data-driver">Data Driver</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/report">Report</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Exit</a>
                </li> 
              </ul>
          </div>
          
        </div>
      </div>
      <div class='bg-white container-sm col-8 border my-3 rounded py-3 pb-5'>
        @yield('content')
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <script src="http://code.jquery.com/jquery-1.11.1.mimn.js"></script>
    </body>
</html>