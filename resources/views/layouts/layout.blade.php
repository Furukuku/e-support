<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>e-Support</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,300,1,0" />

  <link rel="stylesheet" href="{{ asset('css/admin/adminLayout.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin/adminDashboard.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin/adminOfficials.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin/adminResidents.css') }}">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/0541fe1713.js" crossorigin="anonymous"></script>

  <script defer src="{{ asset('js/navigate.js') }}"></script>
  <script defer src="{{ asset('js/sidebar.js') }}"></script>

</head>
<body>
  <div class="main-container">
    <div id="side-bar" class="pb-5 sidebar scrollbar">
      <h2 class="text-center text-white mt-3 mb-4">e-Support<span id="sb-close" class="sidebar-close">&times;</span></h2>
      <hr class="mx-auto text-white border-2 horizontal-line">
      <ul id="sidebar-list" class="navbar-nav">
        <li class="nav-item text-white sidebar-list">
          <a href="#" id="dashboard" data-target="dashboard" class="nav-link p-0 d-flex align-items-center sidebar-navigate nav-list navigate-active ajax-navigate">
            <div class="container-fluid row p-0 ps-2 m-0">
              <span class="material-symbols-outlined col-3 text-center">dashboard</span>
              <p class="col-9 m-0 ps-0">Dashboard</p>
            </div>
          </a>
        </li>
        <li class="nav-item text-white sidebar-list">
          <a id="p-submenu-toggle" class="nav-link p-0 d-flex align-items-center sidebar-navigate">
            <div class="container-fluid row p-0 ps-2 m-0">
              <span class="material-symbols-outlined col-3 text-center">patient_list</span>
              <p class="col-7 m-0 ps-0">Profiles</p>
              <span id="p-submenu-arrow" class="material-symbols-outlined col-2 arrow1">chevron_left</span>
            </div>
          </a>
          <ul id="p-sub-menu" class="navbar-nav text-white p-submenu">
            <li class="nav-item">
              <a href="#" id="officials" data-target="barangay-officials" class="nav-link p-0 d-flex align-items-center sidebar-navigate nav-list ajax-navigate">
                <div class="container-fluid row p-0 ps-2 m-0">
                  <p class="col-12 m-0 ms-3 ps-5">Barangay Officials</p>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" id="residents" data-target="residents" class="nav-link p-0 d-flex align-items-center sidebar-navigate nav-list ajax-navigate">
                <div class="container-fluid row p-0 ps-2 m-0">
                  <p class="col-12 m-0 ms-3 ps-5">Residents</p>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" id="establishments" data-target="business-establishments" class="nav-link p-0 d-flex align-items-center sidebar-navigate nav-list ajax-navigate">
                <div class="container-fluid row p-0 ps-2 m-0">
                  <p class="col-12 m-0 ms-3 ps-5">Business Establishments</p>
                </div>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item text-white sidebar-list">
          <a id="u-submenu-toggle" class="nav-link p-0 d-flex align-items-center sidebar-navigate">
            <div class="container-fluid row p-0 ps-2 m-0">
              <span class="material-symbols-outlined col-3 text-center">groups</span>
              <p class="col-7 m-0 ps-0">Users Management</p>
              <span id="u-submenu-arrow" class="material-symbols-outlined col-2 arrow2">chevron_left</span>
            </div>
          </a>
          <ul id="u-sub-menu" class="navbar-nav text-white u-submenu">
            <li class="nav-item">
              <a href="#" id="staffs" data-target="staffs" class="nav-link p-0 d-flex align-items-center sidebar-navigate nav-list ajax-navigate">
                <div class="container-fluid row p-0 ps-2 m-0">
                  <p class="col-12 m-0 ms-3 ps-5">Officials & Staffs</p>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" id="resident-business" data-target="resident-business" class="nav-link p-0 d-flex align-items-center sidebar-navigate nav-list ajax-navigate">
                <div class="container-fluid row p-0 ps-2 m-0">
                  <p class="col-12 m-0 ms-3 ps-5">Resident & Business</p>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" id="approval" data-target="user-approval" class="nav-link p-0 d-flex align-items-center sidebar-navigate nav-list ajax-navigate">
                <div class="container-fluid row p-0 ps-2 m-0">
                  <p class="col-12 m-0 ms-3 ps-5">User Approval</p>
                </div>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item text-white sidebar-list">
          <a id="d-submenu-toggle" class="nav-link p-0 d-flex align-items-center sidebar-navigate">
            <div class="container-fluid row p-0 ps-2 m-0">
              <span class="material-symbols-outlined col-3 text-center">print</span>
              <p class="col-7 m-0 ps-0">Printing Documents</p>
              <span id="d-submenu-arrow" class="material-symbols-outlined col-2 arrow3">chevron_left</span>
            </div>
          </a>
          <ul id="d-sub-menu" class="navbar-nav text-white d-submenu">
            <li class="nav-item">
              <a href="#" id="clearance" data-target="clearance" class="nav-link p-0 d-flex align-items-center sidebar-navigate nav-list ajax-navigate">
                <div class="container-fluid row p-0 ps-2 m-0">
                  <p class="col-12 m-0 ms-3 ps-5">Clearance</p>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" id="business-permit" data-target="business-permit" class="nav-link p-0 d-flex align-items-center sidebar-navigate nav-list ajax-navigate">
                <div class="container-fluid row p-0 ps-2 m-0">
                  <p class="col-12 m-0 ms-3 ps-5">Business Permit</p>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" id="indigency" data-target="indigency" class="nav-link p-0 d-flex align-items-center sidebar-navigate nav-list ajax-navigate">
                <div class="container-fluid row p-0 ps-2 m-0">
                  <p class="col-12 m-0 ms-3 ps-5">Indigency</p>
                </div>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item text-white sidebar-list">
          <a href="#" id="reports" data-target="reports" class="nav-link p-0 d-flex align-items-center sidebar-navigate nav-list ajax-navigate">
            <div class="container-fluid row p-0 ps-2 m-0">
              <span class="material-symbols-outlined col-3 text-center">report</span>
              <p class="col-9 m-0 ps-0">Reports</p>
            </div>
          </a>
        </li>
        <li class="nav-item text-white sidebar-list">
          <a href="#" id="message" data-target="message" class="nav-link p-0 d-flex align-items-center sidebar-navigate nav-list ajax-navigate">
            <div class="container-fluid row p-0 ps-2 m-0">
              <span class="material-symbols-outlined col-3 text-center">send</span>
              <p class="col-9 m-0 ps-0">Message</p>
            </div>
          </a>
        </li>
        <li class="nav-item text-white sidebar-list">
          <a href="#" id="programs" data-target="programs" class="nav-link p-0 d-flex align-items-center sidebar-navigate nav-list ajax-navigate">
            <div class="container-fluid row p-0 ps-2 m-0">
              <span class="material-symbols-outlined col-3 text-center">event</span>
              <p class="col-9 m-0 ps-0">Programs</p>
            </div>
          </a>
        </li>
        <li class="nav-item text-white sidebar-list">
          <a href="#" id="audits" data-target="audits" class="nav-link p-0 d-flex align-items-center sidebar-navigate nav-list ajax-navigate">
            <div class="container-fluid row p-0 ps-2 m-0">
              <span class="material-symbols-outlined col-3 text-center">analytics</span>
              <p class="col-9 m-0 ps-0">Audit Logs</p>
            </div>
          </a>
        </li>
        <li class="nav-item text-white sidebar-list">
          <a href="#" id="spot" data-target="spot" class="nav-link p-0 d-flex align-items-center sidebar-navigate nav-list ajax-navigate">
            <div class="container-fluid row p-0 ps-2 m-0">
              <span class="material-symbols-outlined col-3 text-center">attractions</span>
              <p class="col-9 m-0 ps-0">Spot</p>
            </div>
          </a>
        </li>
        <li class="nav-item text-white sidebar-list">
          <a href="#" id="account" data-target="account" class="nav-link p-0 d-flex align-items-center sidebar-navigate nav-list ajax-navigate">
            <div class="container-fluid row p-0 ps-2 m-0">
              <span class="material-symbols-outlined col-3 text-center">manage_accounts</span>
              <p class="col-9 m-0 ps-0">Account</p>
            </div>
          </a>
        </li>
      </ul>
    </div>
    <div id="b-sidebar" class="block-sidebar"></div>
    <div class="right-content">
      <nav class="navbar navbar-dark navbar-expand-lg nav-bg">
        <div class="container-fluid">
          <button id="toggle-sidebar" class="navbar-brand bg-transparent border-0">
            <span class="material-symbols-outlined">menu</span>
          </button>
          <button id="toggle-sidebar2" class="navbar-brand bg-transparent border-0">
            <span class="material-symbols-outlined">menu</span>
          </button>
          <div class="btn-group">
            <button type="button" class="btn btn-dark bg-transparent border-0 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="username">{{ auth()->user()->username }}</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li class="dropdown-item p-0">
                <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button type="submit" class="bg-transparent border-0 w-100 logout-btn">Logout</button>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <main>
        <div id="content-loader"></div>
        <div id="content">
          @include('users.admin.dashboard')
        </div>
      </main>
    </div>
  </div>
</body>
</html>