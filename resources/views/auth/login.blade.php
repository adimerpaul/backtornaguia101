<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Administrador de Tornaguias - Cooperativa Minera Poopo</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="assets/images/login.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="img/logo_largo.png" alt="Cooperativa Minera Poopo" class="logo">
              </div>
              <p class="login-card-description">Ingrese al Sistema con su Contraseña</p>
              <form method="post" action="{{ url('/login') }}">
                @csrf

                  <div class="form-group">
                    <label for="email" class="sr-only">Correo Electronico</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Correo Electronico">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                  </div>
                  <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit">
                </form>
                <a href="{{ url('/password/reset') }}" class="forgot-password-link">Olvido su Contraseña?</a>
                <p class="login-card-footer-text">No tiene una cuenta? <a href="{{ url('/register') }}" class="text-reset">Regístrese aquí</a></p>
                <nav class="login-card-footer-nav">
                  <a href="#!">Con el apoyo de Empresa Minera San Lucas.</a>
                  
                </nav>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
