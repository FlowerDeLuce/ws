<?php
$pageName = 'Login';
$siteName = 'Wild Strawberry Lodge';
$title = 'Wild Strawberry Lodge';
$uri = 'login';
?>
  <!doctype html>
  <html class="l-html " lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <title><?php echo $title; ?></title>
    <meta name="description" content="" />

    <!-- <meta property="og:image" content="<?php echo $BASE_URL; ?>/img/userfiles/og-image.png" /> -->

    <meta name="viewport" content="width=device-width" />
    <style>
      @-ms-viewport {
        width: device-width;
      }
      @viewport {
        width: device-width;
      }
    </style>

    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
    <!--<meta name="theme-color" content="#ed1c24" />-->

    <link rel="stylesheet" href="assets/css/main.min.css?<?php echo filemtime('../res/administration/assets/css/main.min.css'); ?>" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script>window.Modernizr || document.write('<script src="assets/js/vendor/modernizr-2.8.3.min.js"><\/script>')</script>
  </head>
  <body class="l-body ">
    <div class="l-wrapper">
      <div class="l-content">
        <div class="b-login">
          <div class="b-login__content">
            <div class="container b-login__container">
              <div class="row">
                <div class="col-sm-12 offset-sm-0 col-xl-6 offset-xl-6">
                  <div class="b-login__form">
                    <form action="">
                      <img src="assets/img/blocks/logo/Logo.png" alt="" class="b-login__formLogo">
                      <div class="b-login__formBody">
                        <div class="b-login__formHeader">
                          <div class="b-login__formTitle"><span>Wild Strawberry Lodge <br>Admin Panel</span>
                          </div>
                        </div>

                        <div class="b-login__inputGroup">
                          <input type="text" class="form-control b-input b-login__input " required="required" placeholder="Username">
                        </div>
                        <div class="b-login__inputGroup">
                          <input type="password" class="form-control b-input b-login__input " required="required" placeholder="Password">
                        </div>
                        <button class="btn text-center text-uppercase b-btn -red -tall b-login__submitBtn w-100">Submit</button>
                        <a href="" class="b-login__forgotLink">Forgot Password?</a>
                      </div>
                      <div class="row b-login__checkboxRow">
                        <div class="col-md-7 b-radiobtn">
                          <input type="radio" name="r1" id="l1" checked>
                          <label for="l1" class="b-radiobtn__label">
                            Use the Local Connection
                            <span class="b-radiobtn__labelNote">
                            (note: This is a hard coded path to the local server)
                          </span>
                          </label>
                        </div>
                        <div class="col-md-5 b-radiobtn">
                          <input type="radio" name="r1" id="l2">
                          <label for="l2" class="b-radiobtn__label">
                            Use the Internet
                          </label>
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
    </div>
  </body>
</html>