<?php
  if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') {
      $protocol = 'http://';
  } else {
      $protocol = 'https://';
  }
  $BASE_URL = $protocol . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']);

  $isHomepage = (basename($_SERVER['PHP_SELF']) == 'index.php');
  //$title = ($isHomepage) ? $siteName : $pageName.' : '.$siteName;
  $title = ''
?>
<!doctype html>
<html class="l-html " lang="">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title><?php if (isset($title) && !empty($title)){echo $title;} else {echo 'Wild Strawberry Lodge';}?></title>
  <meta name="description" content="" />

  <!-- <meta property="og:image" content="<?php echo $BASE_URL; ?>/img/userfiles/og-image.png" /> -->

  <meta name="viewport" content="width=device-width" />
  <style>
    @-ms-viewport {
      width: device-width;
    }
    }
    @viewport {
      width: device-width;
    }
  </style>

  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <!--<meta name="theme-color" content="#ed1c24" />-->
  <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/main.min.css?<?php echo filemtime('assets/css/main.min.css'); ?>" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
 <script>window.Modernizr || document.write('<script src="assets/js/vendor/modernizr-2.8.3.min.js"><\/script>')</script>
 <script src="js_vendor/tether.min.js"></script>
 <script src="js_vendor/bootstrap.min.js"></script>


</head>
<body class="l-body -page_<?php echo $uri; ?><?php echo (!$isHomepage) ? ' -page_inner' : ''; ?>">
  <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <div class="l-wrapper">
    <div class="l-content">
      <header class="navbar-toggleable-md b-header">
        <div class="container">
          <div class="b-header__container d-flex align-items-center justify-content-between">
            <a class="navbar-brand b-header__logo" href="#">
              <img src="assets/img/blocks/logo/Logo.png" alt="#" class="b-header__logoImg">
            </a>
            <button class="navbar-toggler navbar-toggler-right nav-burger"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbar"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
              <span></span>
              <span></span>
              <span></span>
            </button>
            <div class="b-header__navbarWrap d-flex align-items-center">

              <div class="collapse navbar-collapse navbar-collapse-custom" id="navbar">
                <ul class="navbar-nav b-header__navbar">
                  <li class="nav-item b-header__navbarItem">
                    <a class="nav-link b-header__navbarLink <?php if ($uri == "parties") {echo '-active';}?>" href="search-view-list.php">Parties</a>
                  </li>
                  <li class="nav-item b-header__navbarItem">
                    <a class="nav-link b-header__navbarLink <?php if ($uri == "guests") {echo '-active';}?>" href="guests-search-view-list.php
">Guests</a>
                  </li>
                  <li class="nav-item b-header__navbarItem">
                    <a class="nav-link b-header__navbarLink <?php if ($uri == "master") {echo '-active';}?>" href="master-settings.php">Master settings</a>
                  </li>
                </ul>
              </div>
              <a href="#" class="b-header__logOut">
                <i class="fa fa-power-off" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </header>

