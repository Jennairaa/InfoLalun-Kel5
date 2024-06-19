<!DOCTYPE html>
<html>
<head>
    <title>Informasi Kecelakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @include('include.link')
    <link rel="stylesheet" href="/css/content.css">
</head>
<body>
    @include('include.navigasi')
  
<div class="container">
    @yield('content')
</div>
   
</body>
</html>