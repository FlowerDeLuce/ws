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
          User Management
        </li>
      </ol>
    </div>
  </div>
  <div class="b-main__page">
    <div class="container">
      <div class="b-main__content">
        <div class="b-main__header">
          <div class="row mb-3">
            <div class="col-md-6 col-xl-8 d-flex align-items-center justify-content-between">
              <h1 class="b-main__title mb-md-0">User Management</h1>
            </div>
            <div class="col-md-6 col-xl-4">
              <div class="row">
                <div class="col-md-8 offset-md-4" >

                  <a href="#edit" class="btn btn-outline-primary b-btn w-100 js-popupLink">Add New User</a>
                </div>
              </div>
            </div>
          </div>
          <div class="b-panel">
            <div class="table-responsive ">
              <table class="table b-table -noBorder -hoverAll  -aroundBordered mb-3 pl-20">
                <thead>
                <tr>
                  <th>First Name </th>
                  <th>Last Name</th>
                  <th>User Type</th>
                  <th>Edit </th>
                  <th class="text-center">Delete </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Johnathan </td>
                  <td>Allen</td>
                  <td>Admin</td>
                  <td><a href="#edit" class="b-table__iconLink js-popupLink"><i class="icon-pencil"></i></a></td>
                  <td class="text-center"><a href="#delete" class="b-table__iconLink js-popupLink"><i class="icon-trash"></i></a></td>
                </tr>
                <tr>
                  <td>Britt  </td>
                  <td>Daniels</td>
                  <td>Admin</td>
                  <td><a href="#edit" class="b-table__iconLink js-popupLink"><i class="icon-pencil"></i></a></td>
                  <td class="text-center"><a href="#delete" class="b-table__iconLink js-popupLink"><i class="icon-trash"></i></a></td>
                </tr>
                <tr>
                  <td>Nicole </td>
                  <td>Miller</td>
                  <td>Standard</td>
                  <td><a href="#edit" class="b-table__iconLink js-popupLink"><i class="icon-pencil"></i></a></td>
                  <td class="text-center"><a href="#delete" class="b-table__iconLink js-popupLink"><i class="icon-trash"></i></a></td>
                </tr>
                <tr>
                  <td>Daniel  </td>
                  <td>Peterson</td>
                  <td>Standard</td>
                  <td><a href="#edit" class="b-table__iconLink js-popupLink"><i class="icon-pencil"></i></a></td>
                  <td class="text-center"><a href="#delete" class="b-table__iconLink js-popupLink"><i class="icon-trash"></i></a></td>
                </tr>
                <tr>
                  <td>Dan </td>
                  <td>Reynolds</td>
                  <td>Admin</td>
                  <td><a href="#edit" class="b-table__iconLink js-popupLink"><i class="icon-pencil"></i></a></td>
                  <td class="text-center"><a href="#delete" class="b-table__iconLink js-popupLink"><i class="icon-trash"></i></a></td>
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
          <h1 class="b-main__title ">Add / Edit User</h1>
          <a href="" class="b-popup__closeBtn js-popupClose"></a>
        </div>
        <div class="b-form">
          <form action="">
            <div class="b-panel -popup mb-4">
              <div class="form-group row d-flex align-items-center">
                <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">First Name:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control b-input">
                </div>
              </div>
              <div class="form-group row d-flex align-items-center">
                <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Last Name:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control b-input">
                </div>
              </div>
              <div class="form-group row d-flex align-items-center">
                <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Username:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control b-input">
                </div>
              </div>
              <div class="form-group row d-flex align-items-center">
                <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Password:</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control b-input">
                </div>
              </div>
              <div class="form-group row d-flex align-items-center">
                <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Email:</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control b-input">
                </div>
              </div>
              <div class="form-group row d-flex ">
                <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right pt-2">User Type:</label>
                <div class="col-sm-8">
                  <div class="row b-popup__radiobtnRow">
                    <div class="col-md-6 b-radiobtn mb-2 mb-md-0">
                      <input type="radio" name="r1" id="l1" checked="">
                      <label for="l1" class="b-radiobtn__label">
                        Admin
                      </label>
                      <span class="b-radiobtn__note">
                            Can archive Guests, add new Users, access to Master Settings
                      </span>
                    </div>
                    <div class="col-md-6 b-radiobtn">
                      <input type="radio" name="r1" id="l2">
                      <label for="l2" class="b-radiobtn__label">Standart</label>
                      <span class="b-radiobtn__note">Can add, edit and search Guests (no archiving and no access to Master Settings)</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <button class="btn text-center b-btn -red w-100">Save User</button>
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