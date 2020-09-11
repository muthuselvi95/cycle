<!DOCTYPE html>
<html>
<head>
    <title> @yield('title', 'CRUD operation using Laravel') </title>
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}/">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container well" style="background-color:#f0f0f0;padding:10px;border:1px solid #d1d1d1;">
        <h2 class="text-center">
            CRUD Operation on mysql using Laravel:
        </h2>
        <h3 class="text-center">
            Create a master/layout template file
        </h3>
    </div>

    <div class="container" style="padding:20px;">
        @yield('mainContent')
    </div>

    <div style="position:fixed;bottom:10px; right:10px;color:green;">
        <strong>Muthuselvi</strong>
    </div>
    </body>
</html>

