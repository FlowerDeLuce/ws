<?php
$pageName = '';
$siteName = '';
$uri = 'guests';
require('inc/header.php');
?>

<div class="b-mainContainer">
  <div class="b-breadcrumb hidden-xs-down">
    <div class="container">
      <ol class="breadcrumb b-breadcrumb__list p-0 m-0 d-flex align-items-center">
        <li class="breadcrumb-item b-breadcrumb__item">
          <a href="#" class="b-breadcrumb__link">Guests</a>
        </li>
        <li class="breadcrumb-item b-breadcrumb__item">
          <a href="#" class="b-breadcrumb__link">Reynolds Party</a>
        </li>
        <li class="breadcrumb-item b-breadcrumb__item">
          <a href="#" class="b-breadcrumb__link">Dan Reynolds </a>
        </li>
        <li class="breadcrumb-item b-breadcrumb__item active">
          Files
        </li>
      </ol>
    </div>
  </div>
  <div class="b-main__page">
    <div class="container">
      <div class="b-main__content">
        <ul class="nav nav-tabs b-tab__nav mb-4" role="tablist">
          <li class="nav-item">
            <a class="nav-link" href="create-guest-profile.php">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="visits-and-activities.php">Visits</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="">Files</a>
          </li>
        </ul>

            <div class="row mb-4 pt-2">
              <div class="col-sm-12">
                <h1 class="b-main__title">Guests: Dan Reynolds</h1>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="b-main__subtitle mb-4 mt-1">
                  File Upload
                </div>
              </div>
            </div>
            <div class="b-panel">
              <div class="row">
                <div class="col-lg-6 col-xl-5 mb-3 mb-xl-0">
                  <div class="row d-flex align-items-center">
                    <label for="" class="col-sm-3 col-lg-4 col-form-label b-input__label text-sm-right">File Description:</label>
                    <div class="col-sm-9 col-lg-8">
                      <input type="text" class="form-control b-input">
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 col-lg-8 col-xl-7">
                  <div class="row d-flex align-items-center b-uploaderBlock">
                    <label for="" class="col-sm-3 col-lg-2 col-form-label b-input__label text-sm-right">File Name:</label>
                    <div class="col-sm-9 col-lg-4 col-xl-5">
                      <input type="text" class="form-control b-input js-fileInput" readonly>
                    </div>
                    <div class="col-sm-9 offset-sm-3 col-lg-6 col-xl-5 offset-lg-0 mt-3 mt-lg-0">
                      <div class="row ">
                        <div class="col-sm-12 ">
                          <div class="row d-flex align-items-center">
                            <div class="col-6">
                              <label class="btn btn-outline-primary b-btn b-form__filesFormBtn w-100 m-0">
                                Browse
                                <input class="js-fileInput" type="file">
                              </label>
                            </div>
                            <div class="col-6">
                              <button class="btn btn-primary b-btn b-form__filesFormBtn w-100" name="" type="submit" >
                                + Upload
                            </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="b-panel -transparent">
              <div class="table-responsive ">
              <table class="table b-table -noBorder -hoverAll  -aroundBordered mb-3 pl-20">
                <thead>
                <tr>
                  <th>File Name </th>
                  <th>Description</th>
                  <th>Upload Date</th>
                  <th class="text-center">Delete</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Document 3</td>
                  <td>Description</td>
                  <td>02/20/18</td>
                  <td class="text-center"><a href="#delete" class="b-table__iconLink js-popupLink"><i class="icon-trash"></i></a></td>
                </tr>
                <tr>
                  <td>Document 2</td>
                  <td>Description</td>
                  <td>04/28/17</td>
                  <td class="text-center"><a href="#delete" class="b-table__iconLink js-popupLink"><i class="icon-trash"></i></a></td>
                </tr>
                <tr>
                  <td>Document 1</td>
                  <td>Description</td>
                  <td>02/26/16</td>
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
  <div class="b-popup" id="delete">
    <div class="b-popup__wrapper">
      <div class="b-popup__window -confirm">
        <div class="b-popup__closeWrapper">
          <a href="" class="b-popup__closeBtn js-popupClose"></a>
        </div>
        <h1 class="b-main__confirmTitle ">Are you sure <br>you want to delete this item?</h1>
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