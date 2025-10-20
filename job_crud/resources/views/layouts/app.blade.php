<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Job CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background: linear-gradient(90deg, #ff7e5f, #feb47b);">
  <div class="container">
    <!-- Brand -->
    <a class="navbar-brand fw-bold text-white" href="{{ route('jobs.index') }}">
      💼 Job Portal
    </a>

    <!-- Toggler -->
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Links -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('jobs.index') ? 'active' : '' }} text-white fw-medium" 
             href="{{ route('jobs.index') }}">
            🏠 All Jobs
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('jobs.create') ? 'active' : '' }} text-white fw-medium" 
             href="{{ route('jobs.create') }}">
            ➕ Create Job
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>



  <div class="container mt-4">
    @yield('content')
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>