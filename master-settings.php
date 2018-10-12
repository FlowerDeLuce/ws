<?php
$pageName = '';
$siteName = '';
$uri = 'master';
require('inc/header.php');
?>

<div class="b-mainContainer">
  <div class="b-breadcrumb hidden-xs-down">
    <div class="container">
      <ol class="breadcrumb b-breadcrumb__list p-0 m-0 d-flex align-items-center">
        <li class="breadcrumb-item b-breadcrumb__item active">
          Master Settings
        </li>
      </ol>
    </div>
  </div>
  <div class="b-main__page">
    <div class="container">
      <div class="b-main__content">
        <div class="b-main__header">
          <div class="row mb-3">
            <div class="col-sm-12">
              <h1 class="b-main__title">Master Settings</h1>
            </div>
          </div>
        </div>
        <div class="b-panel">
          <ul class="b-main__chaptersList">
            <li>
              <a href="user-management.php" class="b-main__chaptersLink">User Management</a>
            </li>
            <li>
              <a href="marketing-categories.php" class="b-main__chaptersLink">Marketing Categories
              </a>
            </li>
            <li>
              <a href="marketing-subcategories.php" class="b-main__chaptersLink">Marketing Subcategories
              </a>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</div>

<?php require('inc/footer.php'); ?>