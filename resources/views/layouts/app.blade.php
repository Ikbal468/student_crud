<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Laravel CRUD - Student List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="{{ route('students.index') }}">Student Management</a>
    </div>
  </nav>

  <div class="py-4">
    @yield('content')
  </div>
</body>
</html>
