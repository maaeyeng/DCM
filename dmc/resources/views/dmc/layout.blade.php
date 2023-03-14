<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=@, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

        <div class="row">
            <div class="col-2 p-0 m-0 bg-gra fs-6">
                <!-- As a link -->
                <nav class="navbar bg-primary" data-bs-theme="dark">
    <a class="navbar-brand" href="#">DMC</a>
</nav>
<ul style="list-style-type:none;">
    <li class="p-1 fs-6">DashBoard</li>
    <li class="p-1">Document</li>
</ul>
<ul style="list-style-type:none;">  <b>SAVES VIWE</b>
    <li class="p-1">My Box</li>
    <li class="p-1">Todo List</li>

</ul>
<ul style="list-style-type:none;"> <b>Open Docuement</b>
    <li class="p-1">Identification </li>
    <li class="p-1">Survery </li>
    <li class="p-1">Close All </li>
</ul>
<ul style="list-style-type:none;"> <b>Management</b>
    <li class="p-1">Components</li>
    <li class="p-1">Tags</li>
    <li class="p-1">Docuement Types</li>
    <li class="p-1">Logs</li>
    <li class="p-1">Settings </li>
    <li class="p-1">Admin </li>
</ul>
<ul style="list-style-type:none;"> <b>BlockChain</b>
    <li class="p-1">Block Mangement</li>
    <li class="p-1">View Block</li>
</ul>
<ul style="list-style-type:none;"> <b>MISC</b>
    <li class="p-1">Docments</li>
    <li class="p-1">Github</li>
    <li class="p-1">Log Out</li>
</ul>
</div>
<div class="col">
    <!-- As a link -->
<nav class="navbar bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">DMC</a>
  </div>
</nav>
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>