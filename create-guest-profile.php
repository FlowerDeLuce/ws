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
        <li class="breadcrumb-item b-breadcrumb__item active">
         Create Guest Profile
        </li>
      </ol>
    </div>
  </div>
  <div class="b-main__page">
    <div class="container">
      <div class="b-main__content">
        <ul class="nav nav-tabs b-tab__nav mb-4" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" href="">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="visits-and-activities.php" >Visits</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="files.php" >Files</a>
          </li>
        </ul>

            <div class="row mb-4">
              <div class="col-sm-12 d-block d-sm-flex justify-content-between align-items-center b-flexHeader">
                <h1 class="b-main__title">Guest Profile:</h1>
                <div class="d-flex align-items-center justify-content-end">
                  <a href="#" class="b-helper__btn -paper"></a>
                  <a href="#" class="b-helper__btn -copy"></a>
                </div>
             </div>
            </div>
            <div class="b-panel -pr30 mb-4 -twoCol">
              <div class="row d-flex align-items-center">
                <label for="" class="col-md-2 col-form-label b-input__label text-md-right pr15">Guest Since:</label>
                <div class="col-md-4 col-xl-3 pr-lg-30 pl-lg-30 mb-3 mb-md-0">
                  <input type="text" class="form-control b-input js-datepicker -datepicker" placeholder="MM/DD/YYYY">
                </div>
                <label for="" class="col-md-2 col-form-label b-input__label text-md-right pr15 ">Guest Rating:</label>
                <div class="col-md-4 col-xl-3">
                  <select class="custom-select b-select js-selectSingle -hidden"">
                    <option value="1">Standart (default)</option>
                    <option value="2">Blacklisted</option>
                    <option value="3">Corporate </option>
                    <option value="4">Extra Care </option>
                    <option value="5">VIP</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-xl-6 mb-4 mb-xl-0">
                <div class="b-panel -pr30 h-100 ">
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-md-2 col-xl-4 col-form-label b-input__label text-md-right">Prefix:</label>
                    <div class="col-md-10 col-xl-8">
                      <input type="text" class="form-control b-input">
                    </div>
                  </div>
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-md-2 col-xl-4 col-form-label b-input__label text-md-right">First Name:</label>
                    <div class="col-md-10 col-xl-8">
                      <input type="text" class="form-control b-input">
                    </div>
                  </div>
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-md-2 col-xl-4 col-form-label b-input__label text-md-right">Middle Name:</label>
                    <div class="col-md-10 col-xl-8">
                      <input type="text" class="form-control b-input">
                    </div>
                  </div>
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-md-2 col-xl-4 col-form-label b-input__label text-md-right">Last Name:</label>
                    <div class="col-md-10 col-xl-8">
                      <input type="text" class="form-control b-input">
                    </div>
                  </div>
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-md-2 col-xl-4 col-form-label b-input__label text-md-right">Preffered Name:</label>
                    <div class="col-md-10 col-xl-8">
                      <input type="text" class="form-control b-input">
                    </div>
                  </div>
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-md-2 col-xl-4 col-form-label b-input__label text-md-right">Gender:</label>
                    <div class="col-md-10 col-xl-8">
                      <select class="custom-select b-select js-selectSingle -hidden"">
                        <option value="1">--Select One--</option>
                        <option value="2">M</option>
                        <option value="3">F</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-md-2 col-xl-4 col-form-label b-input__label text-md-right">DoB:</label>
                    <div class="col-md-10 col-xl-8">
                      <div class="row">
                        <div class="col-sm-6 pr-md-0 mb-3 mb-md-0">
                          <input type="text" class="form-control b-input js-datepicker -datepicker" placeholder="MM/DD/YYYY">
                        </div>
                        <div class="col-sm-6">
                          <div class="row d-flex align-items-center">
                            <label for="" class="col-sm-6 col-form-label b-input__label text-sm-right">Age:</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control b-input">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row d-flex align-items-center mb-0">
                    <label for="" class="col-md-2 col-xl-4 col-form-label b-input__label text-md-right">Weight:</label>
                    <div class="col-md-10 col-xl-8">
                      <div class="row">
                        <div class="col-sm-6 -poundsWrapper pr-md-0 mb-3 mb-md-0">
                          <input type="number" class="form-control b-input -pounds" >
                        </div>
                        <div class="col-sm-6">
                          <div class="row d-flex align-items-center">
                            <label for="" class="col-sm-6 col-form-label b-input__label text-sm-right">Height:</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control b-input">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6">
                <div class="b-panel -pr30 h-100 ">
                  <div class="row">
                    <div class="col-12">
                      <div class="b-main__subtitle mb-4 mt-1 pl-md-3">
                        Primary Address
                      </div>
                    </div>
                  </div>
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-md-2 col-xl-4 col-form-label b-input__label text-md-right">Country:</label>
                    <div class="col-md-10 col-xl-8">
                      <input type="text" class="form-control b-input">
                    </div>
                  </div>
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-md-2 col-xl-4 col-form-label b-input__label text-md-right">Address 1:</label>
                    <div class="col-md-10 col-xl-8">
                      <input type="text" class="form-control b-input">
                    </div>
                  </div>
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-md-2 col-xl-4 col-form-label b-input__label text-md-right">City:</label>
                    <div class="col-md-10 col-xl-8">
                      <input type="text" class="form-control b-input">
                    </div>
                  </div>
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-md-2 col-xl-4 col-form-label b-input__label text-md-right">State / Province:</label>
                    <div class="col-md-10 col-xl-8">
                      <input type="text" class="form-control b-input">
                    </div>
                  </div>
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-md-2 col-xl-4 col-form-label b-input__label text-md-right">Zip / Postal Code:</label>
                    <div class="col-md-10 col-xl-8">
                      <input type="text" class="form-control b-input">
                    </div>
                  </div>
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-md-2 col-xl-4 col-form-label b-input__label text-md-right">Home Phone:</label>
                    <div class="col-md-10 col-xl-8">
                      <input type="text" class="form-control b-input">
                    </div>
                  </div>
                  <a href="" class="b-main__subtitle mb-3 mt-1 pl-md-3 -red -bold js-addAddress">
                    <span></span> Secondary Address
                  </a>
                  <div class="js-additionalAddress hidden mt-4">
                    <div class="form-group row d-flex align-items-center ">
                      <label for="" class="col-md-2 col-xl-4 col-form-label b-input__label text-md-right">Address 2:</label>
                      <div class="col-md-10 col-xl-8">
                        <input type="text" class="form-control b-input">
                      </div>
                    </div>
                    <div class="form-group row d-flex align-items-center">
                      <label for="" class="col-md-2 col-xl-4 col-form-label b-input__label text-md-right">City:</label>
                      <div class="col-md-10 col-xl-8">
                        <input type="text" class="form-control b-input">
                      </div>
                    </div>
                    <div class="form-group row d-flex align-items-center">
                      <label for="" class="col-md-2 col-xl-4 col-form-label b-input__label text-md-right">State / Province:</label>
                      <div class="col-md-10 col-xl-8">
                        <input type="text" class="form-control b-input">
                      </div>
                    </div>
                    <div class="form-group row d-flex align-items-center">
                      <label for="" class="col-md-2 col-xl-4 col-form-label b-input__label text-md-right">Zip / Postal Code:</label>
                      <div class="col-md-10 col-xl-8">
                        <input type="text" class="form-control b-input">
                      </div>
                    </div>
                    <div class="form-group row d-flex align-items-center">
                      <label for="" class="col-md-2 col-xl-4 col-form-label b-input__label text-md-right">Home Phone:</label>
                      <div class="col-md-10 col-xl-8">
                        <input type="text" class="form-control b-input">
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-xl-6 mb-4 mb-xl-0">
                <div class="b-panel -pr30 mb-4">
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-md-2 col-xl-4 col-form-label b-input__label text-md-right">How did you<br> hear about us?</label>
                    <div class="col-md-10 col-xl-8">
                      <select class="custom-select b-select js-selectSingle -hidden"">
                      <option value="1">--Select One--</option>
                      <option value="2">1</option>
                      <option value="3">2</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row d-flex align-items-center mb-0">
                    <label for="" class="col-md-2 col-xl-4 col-form-label b-input__label text-md-right">Referred By:</label>
                    <div class="col-md-10 col-xl-8">
                      <input type="text" class="form-control b-input">
                    </div>
                  </div>
                </div>
                <div class="b-panel -pr30">
                  <div class="form-group row d-flex align-items-center mb-0">
                    <label for="" class="col-md-2 col-xl-4 col-form-label b-input__label text-md-right">Visits to the Lodge:</label>
                    <div class="col-md-10 col-xl-8">
                      <div class="row d-flex align-items-center">
                        <div class="col-sm-12 col-md-4 col-lg-3 mb-3 mb-md-0">
                          <input type="text" class="form-control b-input">
                        </div>
                        <label for="" class="col-sm-12 col-md-4 col-lg-6 col-form-label b-input__label text-md-right">Number of Cancellations:</label>
                        <div class="col-sm-12 col-md-4 col-lg-3">
                          <input type="text" class="form-control b-input">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6">
                <div class="b-panel -pr30 h-100">
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-md-2 col-xl-4 col-form-label b-input__label text-md-right">Cell Phone:</label>
                    <div class="col-md-10 col-xl-8">
                      <input type="text" class="form-control b-input js-maskedPhone">
                    </div>
                  </div>
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-md-2 col-xl-4 col-form-label b-input__label text-md-right">Alternate Phone:</label>
                    <div class="col-md-10 col-xl-8">
                      <input type="text" class="form-control b-input">
                    </div>
                  </div>
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-md-2 col-xl-4 col-form-label b-input__label text-md-right">Email:</label>
                    <div class="col-md-10 col-xl-8">
                      <input type="text" class="form-control b-input">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-10 offset-md-2 col-xl-8 offset-xl-4 d-sm-flex align-items-center justify-content-xl-between pt-2">
                      <div class="b-checkbox">
                        <input type="checkbox" name="r1" id="l1">
                        <label for="l1" class="b-checkbox__label">
                          Exclude from mailing list
                        </label>
                      </div>
                      <div class="b-checkbox pl-sm-4 pl-xl-0">
                        <input type="checkbox" name="r1" id="l2">
                        <label for="l2" class="b-checkbox__label">
                          Veteran
                        </label>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="b-panel -pr30">
              <div class="form-group row">

                <label for="" class="col-md-2 col-form-label b-input__label text-md-right pr15 pt-2">Allergies:</label>
                <div class="col-md-10 pl5">
                  <textarea type="text" class="form-control b-textarea -h70"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="" class="col-md-2 col-form-label b-input__label text-md-right pr15 pt-2">Special Requests:</label>
                <div class="col-md-10 pl5">
                  <textarea type="text" class="form-control b-textarea -h70"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="" class="col-md-2 col-form-label b-input__label text-md-right pr15 pt-2">Customer Notes:</label>
                <div class="col-md-10 pl5">
                  <textarea type="text" class="form-control b-textarea -h70">05/24/2018 1:07 pm: Third note
05/24/2018 1:06 pm: Second note
05/24/2018 1:05 pm: First note</textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 pt-4 pb-2 b-main__btnsRow">
                <button class="btn text-center b-btn -red -w-240">Save Guest Profile</button>
                <button class="btn btn-outline-primary b-btn -w-240">Archive</button>
              </div>
            </div>

      </div>
    </div>
  </div>
</div>
</div>
<?php require('inc/footer.php'); ?>