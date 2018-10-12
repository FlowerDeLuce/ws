<?php
$pageName = 'Login';
$siteName = 'Wild Strawberry Lodge';
$title = 'Wild Strawberry Lodge';
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

    <link rel="stylesheet" href="/assets/css/main.min.css?<?php echo filemtime('../res/administration/assets/css/main.min.css'); ?>" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script>window.Modernizr || document.write('<script src="assets/js/vendor/modernizr-2.8.3.min.js"><\/script>')</script>
  </head>
  <body class="l-body ">
    <div class="l-wrapper">
      <div class="l-content">
        <div class="b-login">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <div class="b-login__form">
                  <form action="">
                    <img src="" alt="" class="b-login__formLogo">
                    <p class="b-login__formHead">Sitka, Alaska</p>
                    <div class="b-login__formBody">
                      <div class="b-login__formTitle">Wild Strawberry Lodge Admin Panel</div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>