<?php
session_start();  // セッション継続の定型文
$errors = array();
$username = '';
$email = '';
if(!empty($_POST['register-submit'])) {
    // && $_POST['register-submit'] === "Register"
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $confirm_password = htmlspecialchars($_POST['confirm_password']);

    if ($username === '') {
        $errors['username'] = 'Please enter your username';
    }
    if ($email === '') {
        $errors['email'] = 'Please enter your email';
    }
    if ($password === '') {
        $errors['password'] = 'please enter your password';
    }
    if ($confirm_password === '') {
        $errors['confirm_password'] = 'Please enter your confirm_password';
    }
    if ($password !== $confirm_password) {
        $errors['wrong_password'] = 'password doesnt match confirm_password';
    }
    if ($username !== '' && $email !== '' && $password !== '' && $confirm_password !== '' && $password === $confirm_password) {
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $url = 'http://localhost/self_intro/bolt/theme/confirm.php';
        header("Location: {$url}");
        exit;
    }
    // echo '<pre>';
    // echo var_dump($errors);
    // echo '</pre>';
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>login</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/avicii_favicon.ico" />

    <!-- start common.css -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- end common.css -->

    <link href="assets/css/login/main.css" rel="stylesheet">

    <!-- start common.js -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="assets/js/chart.js"></script>
    <script type="text/javascript" src="assets/js/page_load.js"></script>
    <!-- end common.js -->

    <script type="text/javascript" src="assets/js/login/login_and_register_tabbed_form.js"></script>
  </head>
  <body>
    <!-- Page Loading -->
    <div class="pageloader gray-bg">
      <div class="loader">
        <div class="sp-hydrogen"></div>
      </div>
    </div>

    <!-- 動画 -->
<!--     <div class="pattern"></div>
    <video src="assets/img/browsing.mp4" autoplay loop>
      <img src="assets/img/browsing.jpg" alt="Placeholder">
    </video> -->

    <!-- login -->
    <div class="container overray_movie">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="panel panel-login">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-6">
                  <a href="" class="active" id="login-form-link">Login</a>
                </div>
                <div class="col-xs-6">
                  <a href="" id="register-form-link">Register</a>
                </div>
              </div>
              <hr>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <!-- ログイン フォーム -->
                  <form id="login-form" action="mypage.php" method="post" role="form" style="display: block;">
                    <div class="form-group">
                      <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group text-center">
                      <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                      <label for="remember"> Remember Me</label>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                          <!-- input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In"> -->
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="text-center">
                            <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                          </div>
                          <div>
                            <a href="index.html" tabindex="5" class="forgot-password">←back</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                  <!-- 新規登録フォーム -->
                  <form id="register-form" action="login.php" method="post" role="form" style="display: none;">
                    <div class="form-group">
                      <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value= <?php echo $username; ?>>
                        <!-- <?php echo $errors['username']; ?> -->
                    </div>
                    <div class="form-group">
                      <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value= <?php echo $email; ?>>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <input type="password" name="confirm_password" id="confirm_password" tabindex="2" class="form-control" placeholder="Confirm Password">
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                          <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>