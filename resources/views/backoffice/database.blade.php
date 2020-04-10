<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body class="bg-dark">
  <h1 class="text-center">Database</h1>
    <nav class="nav justify-content-center bg-secondary">
      <a class="nav-link active" href="/Intros">Intro</a>
      <a class="nav-link" href="/Services">Service</a>
      <a class="nav-link " href="/Portfolios">Portfpolio</a>
      <a class="nav-link" href="/Testimonials">Testimonials</a>
      <a class="nav-link" href="/Teams">Team</a>
      <a class="nav-link" href="/Emails">Emails</a>
      <a class="nav-link" href="/">back to site</a>
    </nav>

    @yield('content')
    
</body>
</html>