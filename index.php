<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>SiMAR - Login</title>

    <!-- Custom fonts for this template-->
    <link
      href="main_pages/vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template-->
    <link href="main_pages/css/sb-admin-2.min.css" rel="stylesheet" />
  </head>

  <body class="bg-gradient-info">
    <div class="container">
      <!-- Outer Row -->
      <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
            <div class="card-body bg-dark">
              <h1 class="card-text text-light">GenTing IOT</h1>
            </div>
              <!-- Nested Row within Card Body -->
              <div class="row justify-content-center">
                <div class="col-lg-6">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Login Bang</h1>
                    </div>
                    <form class="user" method="post" action="login-process.php">
                      <div class="form-group">
                        <input
                          type="username"
                          name="username"
                          class="form-control form-control-user"
                          id="exampleInputEmail"
                          aria-describedby="emailHelp"
                          placeholder="Enter Username..."
                        />
                      </div>
                      <div class="form-group">
                        <input
                          type="password"
                          name="password"
                          class="form-control form-control-user"
                          id="exampleInputPassword"
                          placeholder="Password"
                        />
                      </div>
                      <!--<div class="form-group">
                        <div class="custom-control custom-checkbox small">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="customCheck"
                          />
                          <label class="custom-control-label" for="customCheck"
                            >Remember Me</label
                          >
                        </div>
                      </div>-->
                      <button
                        name="login"
                        type="submit"
                        class="btn btn-primary btn-user btn-block"
                      >
                        Login
                      </button>
                      <hr />
                      <!--<a
                        href="index.html"
                        class="btn btn-google btn-user btn-block"
                      >
                        <i class="fab fa-google fa-fw"></i> Login with Google
                      </a>
                      <a
                        href="index.html"
                        class="btn btn-facebook btn-user btn-block"
                      >
                        <i class="fab fa-facebook-f fa-fw"></i> Login with
                        Facebook
                      </a>-->
                    </form>
                    <hr />
                    <!--<div class="text-center">
                      <a class="small" href="forgot-password.html"
                        >Forgot Password?</a
                      >
                    </div>
                    <div class="text-center">
                      <a class="small" href="register.html"
                        >Create an Account!</a
                      >
                    </div>-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="main_pages/vendor/jquery/jquery.min.js"></script>
    <script src="main_pages/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="main_pages/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="main_pages/js/sb-admin-2.min.js"></script>
  </body>
</html>
