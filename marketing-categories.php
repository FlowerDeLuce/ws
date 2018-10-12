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
        <li class="breadcrumb-item b-breadcrumb__item">
          <a href="master-settings.php" class="b-breadcrumb__link">Master Settings</a>
        </li>
        <li class="breadcrumb-item b-breadcrumb__item active">
          Marketing Categories
        </li>
      </ol>
    </div>
  </div>
  <div class="b-main__page">
    <div class="container">
      <div class="b-main__content">
        <div class="b-main__header">
          <div class="row mb-3">
            <div class="col-sm-12 d-block d-md-flex align-items-center justify-content-between">
              <h1 class="b-main__title mb-md-0">Marketing Categories</h1>
              <a href="#edit" class="btn btn-outline-primary b-btn js-popupLink">Add New Marketing Category</a>
            </div>
          </div>
          <div class="b-panel">
            <div class="table-responsive ">
              <table class="table b-table -noBorder -hoverAll  -aroundBordered mb-3 pl-20">
                <thead>
                <tr>
                  <th>Category Name </th>
                  <th>Description</th>
                  <th>Edit </th>
                  <th class="text-center">Archive</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Advertising</td>
                  <td>Description of Adversiting efforts</td>
                  <td><a href="#edit" class="b-table__iconLink js-popupLink"><i class="icon-pencil"></i></a></td>
                  <td><a href="" class="b-table__iconLink js-popupLink text-center"><i class="icon-archive"></i></a></td>
                </tr>
                <tr>
                  <td>Marketing Block </td>
                  <td>Description of google campaigns</td>
                  <td><a href="#edit" class="b-table__iconLink js-popupLink"><i class="icon-pencil"></i></a></td>
                  <td><a href="" class="b-table__iconLink js-popupLink text-center"><i class="icon-archive"></i></a></td>
                </tr>
                <tr>
                  <td>Emails </td>
                  <td>Email communication of deals</td>
                  <td><a href="#edit" class="b-table__iconLink js-popupLink"><i class="icon-pencil"></i></a></td>
                  <td><a href="" class="b-table__iconLink js-popupLink text-center"><i class="icon-archive"></i></a></td>
                </tr>
                <tr>
                  <td>Employee Referals</td>
                  <td>Employee referals</td>
                  <td><a href="#edit" class="b-table__iconLink js-popupLink"><i class="icon-pencil"></i></a></td>
                  <td><a href="" class="b-table__iconLink js-popupLink text-center"><i class="icon-archive"></i></a></td>
                </tr>
                <tr>
                  <td>Brochures</td>
                  <td>Paper brochures sent by post</td>
                  <td><a href="#edit" class="b-table__iconLink js-popupLink"><i class="icon-pencil"></i></a></td>
                  <td><a href="" class="b-table__iconLink js-popupLink text-center"><i class="icon-archive"></i></a></td>
                </tr>
                <tr>
                  <td>Raffles</td>
                  <td>Description of raffles</td>
                  <td><a href="#edit" class="b-table__iconLink js-popupLink"><i class="icon-pencil"></i></a></td>
                  <td><a href="" class="b-table__iconLink js-popupLink text-center"><i class="icon-archive"></i></a></td>
                </tr>
                <tr>
                  <td>Other</td>
                  <td>Miscellaneous</td>
                  <td><a href="#edit" class="b-table__iconLink js-popupLink"><i class="icon-pencil"></i></a></td>
                  <td><a href="" class="b-table__iconLink js-popupLink text-center"><i class="icon-archive"></i></a></td>
                </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
</div>
<!---- popup----->
  <div class="b-popup" id="edit">
    <div class="b-popup__wrapper">
      <div class="b-popup__window">
        <div class="b-popup__header d-flex align-items-center justify-content-between mb-3">
          <h1 class="b-main__title ">Add / Edit Marketing Category</h1>
          <a href="" class="b-popup__closeBtn js-popupClose"></a>
        </div>
        <div class="b-form">
          <form action="">
            <div class="b-panel -popup mb-4">
              <div class="form-group row d-flex align-items-center">
                <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Category Name:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control b-input">
                </div>
              </div>
              <div class="form-group row ">
                <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right pt-2">Description:</label>
                <div class="col-sm-8">
                  <textarea name="" id="" class="form-control b-textarea">
                  </textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <button class="btn text-center b-btn -red ">Save Marketing Category</button>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>

  </div>
  <!--- end --->
  <!---- popup----->
  <div class="b-popup" id="delete">
    <div class="b-popup__wrapper">
      <div class="b-popup__window -confirm">
        <div class="b-popup__closeWrapper">
          <a href="" class="b-popup__closeBtn js-popupClose"></a>
        </div>
        <h1 class="b-main__confirmTitle ">Are you sure <br>you want to delete this user?</h1>
        <div class="row d-flex align-items-center justify-content-center">
          <div class="col-sm-12 col-md-10">
            <div class="row">
              <div class="col-sm-6 text-center mb-4 mb-sm-0">
                <a href="" class="btn text-center b-btn -red">Yes</a>
              </div>
              <div class="col-sm-6 text-center">
                <a href="" class="btn btn-outline-primary b-btn js-popupClose">No</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--- end --->
<?php require('inc/footer.php'); ?>