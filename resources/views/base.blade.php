<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/main.css">
  <title>Laravel-gallery</title>
</head>
<body>
  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="header__menu">
            <ul>
              <li><a href="/">Главная</a></li>
              <li><a href="/add-img">Добавить</a></li>
              <li><a href="/about">О нас</a></li>
            </ul>
          </div>
          <!-- /.header__menu -->
        </div>
        <!-- /.col-12 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </header>
  <!-- /.header -->

  @yield('content')

  <script src="main.js"></script>
</body>
</html>